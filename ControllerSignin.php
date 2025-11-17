<?php
require_once 'ProcessDatabase.php';
session_start();
function hashPassword(string $password): string {
    return password_hash($password, PASSWORD_DEFAULT); 
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: PageSignin.php');
    exit();
}

$name = trim($_POST['name'] ?? '');
$email = trim(strtolower($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

if (empty($name) || empty($email) || empty($password)) {
    $_SESSION['error_message'] = 'Todos os campos são obrigatórios.';
    header('Location: PageSignin.php');
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_message'] = 'Formato de e-mail inválido.';
    header('Location: PageSignin.php');
    exit();
}

try {
    $db = new ProcessDatabase();
    $password_hash = hashPassword($password);
    $sql = "INSERT INTO users (name, email, password_hash, company_id) 
            VALUES (:name, :email, :password_hash, NULL)";
    $db->query($sql, [
        ':name' => $name,
        ':email' => $email,
        ':password_hash' => $password_hash
    ]);
    $_SESSION['success_message'] = 'Conta criada com sucesso! Por favor, faça login.';
    header('Location: PageLogin.php');
    exit();

} catch (PDOException $e) {
    if ($e->getCode() === '23000' || str_contains($e->getMessage(), 'Duplicate entry')) {
        $_SESSION['error_message'] = 'Este e-mail já está em uso. Tente outro.';
    } else {
        // Erro genérico do banco de dados
        error_log("Database Error in Signin: " . $e->getMessage());
        $_SESSION['error_message'] = 'Ocorreu um erro inesperado ao criar a conta.';
    }
    header('Location: PageSignin.php');
    exit();
} catch (\PDOException $e) {
    error_log("Connection Error: " . $e->getMessage());
    $_SESSION['error_message'] = 'Erro fatal na conexão com o sistema. Tente novamente mais tarde.';
    header('Location: PageSignin.php');
    exit();
}
?>