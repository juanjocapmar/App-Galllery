<?php
    include_once "common/utils.php";
    include_once "common/config.php";
    include_once "common/mysql.php";

    $connection = Connect( $config['database']);

    $sql = "select * from images where enabled = 1 order by id desc";

    $rows = ExecuteQuery($connection , $sql);

    Close($connection);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <title>Gallery</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="admin/index.php?page=login">Admin<span class="sr-only"></span></a>
                </li>
                
                
                
                
                
            </div>
        </nav>

    <div class="container-fluid">
    
    <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Gallery</h1>
    
    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-start">

            <?php 
                
                if (!isset($rows)) {
                    
                    echo '<div class="container py-5">
                            <div class="alert alert-danger" role="alert">
                                No hay ningúna foto por el momento
                            </div>
                    </div>';
                } else {
                    foreach($rows as $row) {
                        echo '
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="images/'. $row['file'].'" alt="">
                            </a>
                        </div>';

                    }

                }

            ?>

            
        </div>

        <hr class="mt-2 mb-3">

        <footer>
            <div class="row ">
                <div class="col-mg-12 my-5">
                    <p>Gallery 2023</p>
                </div>
            </div>
        </footer>

    </div>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html>