<?php
    require_once 'controllers/CategoryController.php';

    include  'views/layout/header.php';

    $categoryController = new CategoryController();
    $categoryController->listCategory();

    include('views/layout/footer.php');
?>