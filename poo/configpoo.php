
<?php
class Config
{
    private $host = 'localhost';
    private $dbUser = 'root';
    private $dbPassword = 'root';
    private $dbName = 'ski';
    private $conn;

    public function connect()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->dbUser, $this->dbPassword);
            // jsais pas a quoi sa sert
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>
