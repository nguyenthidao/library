<section>
    <h3>Categories List</h3>
    <div class="table-responsive">
    <table class="table">
        <tr>
            <th>Code</th>
            <th>Category Name</th>
            <th>Description</th>
        </tr>
        <?php
            foreach ($categories as $category){
                echo'<tr>';
                echo '<td>'.$category->getId().'</td>';
                echo '<td>'.$category->getName().'</td>';
                echo '<td>'.$category->getDescription().'</td>';
                echo '<td><a class="glyphicon glyphicon-remove" href="views/category/delete.php?id='.$category->getId().'"></a></td>';
                echo '<td><a class="glyphicon glyphicon-pencil" href="views/category/update.php?id='.$category->getId().'"></a></td>';
                echo '</tr>';
            }
        ?>
    </table>
    </div>
    <a href="views/category/add.php">Add a category</a>
</section>

