<?php
class ProcessDatabase {
    private $pdo;

    public function __construct() {
        $host = 'localhost';
        $db = 'erp'; 
        $user = 'root';
        $pass = ''; 
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            // Lidar com o erro de conexão
            throw new \PDOException("Erro ao conectar ao DB: " . $e->getMessage(), (int)$e->getCode());
        }
    }
    /**
     
     * @param string 
     * @param array 
     * @return PDOStatement
     */
    public function query($sql, array $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}