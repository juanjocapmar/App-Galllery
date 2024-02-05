<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
    <?php

        include "../common/utils.php";
        include "../common/config.php";
        include "../common/mysql.php";

        $connection = Connect($config['database']);

        $sql = "select * from autors order by name asc";

        $rows = ExecuteQuery($connection , $sql);

    ?>


    <section class="vh-100" style="background-color: #eee;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center py-5 h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                        <h1>Añadir imagen</h1>
                        <form class="my-4" method=post action="actions/new_foto.act.php" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="autor">
                                    <?php
                                        foreach ($rows as $row) {
                                            echo "<option value=" . $row[0] . ">". $row[1] . "</option>";
                                        }
                                    ?>
                                </select>
                                <label for="autor">Autor</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="photoName">
                                <label for="photoName">Nombre</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Fichero</label>
                                <input class="form-control" type="file"  name="formFile">
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" style="height:100px;" name="textPhoto"></textarea>
                                <label for="textPhoto">Descripcion de la foto</label>
                            </div> 
                            <div class="form-check py-3">
                                <input class="form-check-input" type="checkbox" value="" name="photoEnabled" id="flexCheckDefault">
                                <label class="form-check-label" for="photoEnabled">
                                    Activado
                                </label>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Enviar">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </section>
    <script src="../assets/bootstrap.min.js"></script>
   
</body>
</html>