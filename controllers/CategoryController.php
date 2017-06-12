<?php
require_once $_SERVER["DOCUMENT_ROOT"] ."/library/db/CategoryDb.php";
require_once $_SERVER["DOCUMENT_ROOT"] ."/library/models/Category.php";
class CategoryController{
    private $categoryDb;

    function __construct()
    {
        $this->categoryDb = new CategoryDb();
    }

    function listCategory(){
        $categories = $this->categoryDb->getCategoryList();

        include('views/category/list.php');
    }

    function add($name, $description){
        $category = new Category(0, $name, $description);
        $this->categoryDb->add($category);

        header('Location: ../../index.php');
    }

    function delete($id){
        $category = $this->categoryDb->findCategory($id);
        $this->categoryDb->delete($category);

        header('Location: ../../index.php');
    }

    function update($id, $name, $description){
        $category = new Category($id, $name, $description);
        $this->categoryDb->update($category);

        header('Location: ../../index.php');
    }

    function getCategory($id){
        return $this->categoryDb->getCategory($id);
    }
}