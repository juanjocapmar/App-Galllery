
<script type="text/javascript">
    function delete_post(id) {
        var ok = confirm('¿Quieres borrar esta imagen?');
        if (!ok) {
            return false;
        } else {
            location.href = "delete.php?page=listado&id=" + id;
        }
    }
</script>
<?php
                include_once "../common/utils.php";
                include_once "../common/config.php";
                include_once "../common/mysql.php";
                
                $connection = Connect($config['database']);

                $sql = "select a.* , b.name as autor from images as a inner join autors as b On a.author_id = b.id where author_id = ". $_SESSION['id'] ." order by a.id desc";

                $rows = ExecuteQuery($connection , $sql);

                
                // return 1 if variable $rows is empty
                
                echo "<div class='container'>";
                if (empty($rows) != 1) {

                    echo "<div class='d-flex row justify-content-start'>";

                    foreach ($rows as $row) {
                        
                        echo "<div class='card shadow-sm col-3 m-5 py-2 px-2'>"; 
                        echo "<img src='../images/" . $row['file'] ."' width='100%' height='90%'>";
                        echo    "<div class='card-body'>";
                        echo    "<h3 class='card-title'>".  $row['name'] ."</h3>";
                        echo    "<p class='card-text'>".  $row['autor'] . "</p>";
                        echo    "<p class='card-text'>".  $row['text'] . "</p>"; // description of image
                        echo  "<div class='d-flex justify-content-between align-items-center'>";
                        echo        "<div class='btn-group'>";
                        echo        "<a class='btn btn-secondary' href='../admin/home.php?page=edit'>Edit<a>";
                        echo        "<a class='btn btn-danger' onClick='delete_post(". $row['id'] .")'>Delete<a>";
                        echo        "</div>";
                        echo        "<small class='text-muted'>".$row['created']."</small>";
                        echo    "</div>";
                        echo    "</div>";
                        echo    "</div>";
                    
                    }

                    echo "</div>";

                    Close($connection);

                } else {

                    //session_start();

                    echo '<div class="container py-5">
                            <div class="alert alert-danger" role="alert">
                                No hay ningúna foto por el autor '. $_SESSION['nombre'] .'
                            </div>
                    </div>';

                }
                echo "<div";

            ?>

    
</body>
</html>


