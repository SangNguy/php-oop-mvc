<?php
namespace App\Models;
use App\Models\BaseModel;
use PDOException;


class CategoryModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->getConnect();
    }

    public function getCategories() : array
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM category");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $exception) {
            dd($exception);
        }
    }
}