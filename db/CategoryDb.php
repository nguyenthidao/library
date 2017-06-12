<?php
include $_SERVER["DOCUMENT_ROOT"] ."/library/db/Connection.php";
include $_SERVER["DOCUMENT_ROOT"] ."/library/models/Category.php";

class CategoryDb{
    protected $connection;

    function __construct(){
        $this->connection = new Connection();
    }

    function getCategoryList(){
        $query = "select * from categories";
        $db = $this->connection->getDb();
        $categories = $db->query($query);
        $list = [];

        foreach ($categories as $category){
            $list[] = new Category($category['id'], $category['name'], $category['description']);
        }

        return $list;
    }

    function add($category){
        $name = $category->getName();
        $description = $category->getDescription();
        $query = "INSERT INTO categories(name, description) VALUES('$name', '$description')";
        $db = $this->connection->getDb();
        $row_count = $db->exec($query);

        return $row_count > 0;
    }

    function update($category){
        $id = $category->getId();
        $name = $category->getName();
        $description = $category->getDescription();

        $query = "UPDATE categories SET name = '$name', description = '$description' WHERE id = '$id'";
        $db = $this->connection->getDb();
        $row_count = $db->exec($query);

        return $row_count > 0 ;
    }

    function delete($category){
        $id = $category->getId();
        $query = "DELETE FROM categories WHERE id = '$id'";
        $db = $this->connection->getDb();
        $row_count = $db->exec($query);

        return $row_count > 0;
    }

    function findCategory($id){
        $query = "select * from categories WHERE id = '$id'";
        $db = $this->connection->getDb();
        $category = $db->query($query);
        $category = $category->fetch();
        $category = new Category($category["id"], $category["name"], $category['description']);

        return $category;
    }
}