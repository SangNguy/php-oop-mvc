<?php
namespace App\Models;
use PDO;
use PDOException;

class BaseModel
{
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;
    protected $conn;

    public function __construct()
    {
        $this->dbHost = getenv('DB_HOST');
        $this->dbUser = getenv('DB_USER');
        $this->dbPass = getenv('DB_PASS');
        $this->dbName = getenv('DB_NAME');
    }

    public function getConnect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            dd($exception);
        }
    }
}