<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    protected $categoryModel;
    protected $dirListView = 'category/list.php';

    public function __construct()
    {
        parent::__construct();
        $this->categoryModel = new CategoryModel();
    }

    public function listCategories()
    {
        $categories = $this->categoryModel->getCategories();
        $this->render($this->dirListView, compact('categories'));
    }
}