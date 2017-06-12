<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/library/views/layout/header.php"; ?>
<?php
    require_once $_SERVER["DOCUMENT_ROOT"] ."/library/controllers/CategoryController.php";

    $categoryController = new CategoryController();

    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        $category = $categoryController->findCategory($id);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $description = $_POST["description"];
        $categoryController->update($id,$name,$description);
    }

?>
    <div class="container">
        <form class="nav-form" method="post">
            <div class="form-group">
                Name <input type="text" class="form-control" name="name" value="<?php echo $category->getName(); ?>">
                Description <input type="text" class="form-control" name="description" value="<?php echo $category->getDescription(); ?>">
            </div>
            <button type="submit" class="btn btn-primary" value="update">Update</button>
        </form>
    </div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/library/views/layout/footer.php"; ?>