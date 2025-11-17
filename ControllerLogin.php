<?php
require_once 'ProcessDatabase.php';
function redirect_to_login($message) {
    $encoded_message = urlencode($message);
    header("Location: PageLogin.php?alert=" . $encoded_message);
    exit();
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['email'], $_POST['password'])) {
    redirect_to_login("Acesso inválido. Por favor, utilize o formulário de login.");
}

$email = $_POST['email'];
$password = $_POST['password'];
try {
    $db = new ProcessDatabase();
} catch (Exception $e) {
    redirect_to_login("Erro interno do servidor. Tente novamente mais tarde.");
}

$sql = "SELECT id, password_hash, company_id, is_active FROM users WHERE email = ?";
$params = [$email];
$user_data = $db->query($sql, $params)->fetch(PDO::FETCH_ASSOC);

if (!$user_data || $user_data['is_active'] == 0) {
    redirect_to_login("Email ou senha incorretos, ou conta inativa.");
}

$password_hash = $user_data['password_hash'];
if (!password_verify($password, $password_hash)) {
    redirect_to_login("Email ou senha incorretos, ou conta inativa.");
}

session_start();

$_SESSION['user_id'] = $user_data['id'];
$_SESSION['email'] = $email;

$company_id = $user_data['company_id'];
if ($company_id !== null) {
    header("Location: ViewHome.php");
    exit();
} else {
    header("Location: PageChoose.php");
    exit();
}

?>