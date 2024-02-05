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
            <div class="container">
                <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
                    <div class="w-75">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="index.php?page=listado">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="index.php?page=autores">Listado de autores<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="index.php?page=login">Log in<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="index.php?page=new">Register<span class="sr-only"></span></a>
                        </li>
                        </ul>
                    </div>  
                    <div class="w-25">
                        <ul class="navbar-nav mr-auto">
                        <div class="nav-item d-flex flex-row">
                            <?php
                                session_start();
                                echo "<a class='nav-link text-dark'>". $_SESSION['nombre'] ."</a>";
                                
                            ?>
                            <a class="nav-link" href="index.php?page=close">Cerrar Sesion</a>
                        </div>
                        </ul>    
                    </div>
                </div>
            </div>
        </nav>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html>