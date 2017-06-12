<?php
    require_once $_SERVER["DOCUMENT_ROOT"] ."/library/controllers/CategoryController.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $description = $_POST["description"];

        $categoryController = new CategoryController();
        $categoryController->add($name, $description);
    }
?>

<form method="post">
    <fieldset>
        Name<br>
        <input type="text" value="" name="name"><br>
        Description<br>
        <textarea name="description" value=""></textarea><br>
        <button type="submit" value="submit">Submit</button>
    </fieldset>
</form>