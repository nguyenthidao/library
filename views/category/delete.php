<?php
    require_once $_SERVER["DOCUMENT_ROOT"] ."/library/controllers/CategoryController.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["delete"])){
            $delete_request = $_POST["delete"];
            if($delete_request == "yes"){
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    $categoryController = new CategoryController();
                    $categoryController->delete($id);
                }
            }
        }
    }
?>
<form method="post">
    <p>You are ready delete?</p>
    <button type="submit" name="delete" value="yes">Yes</button><br>
    <button type="submit" name="delete" value="no">No</button>
</form>