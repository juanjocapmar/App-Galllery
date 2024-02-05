<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        error_reporting(0);

        include_once "../common/utils.php";
        include_once "../common/config.php";
        include_once "../common/mysql.php";

        if (!session_start() === true) {
            session_start();
        } 
       

        $connection = Connect($config['database']);

        $sql = "select * from autors order by name asc";

        $rows = ExecuteQuery($connection , $sql);

        // obtains the information of the images with the id of the author
        $sql_photos = "select * from images where author_id=". $_SESSION['id']; 

        $rows_f = ExecuteQuery($connection , $sql_photos);

        $rows_photos = $rows_f[0];
        // if enabled of array rows_photos isn't equals to 0 then $enabled is active
        if ($rows_photos['enabled'] == 0) {
            $enabled = '';
        } else {
            $enabled = 'checked';
        }
    ?>

    
            <section class="vh-100" style="background-color: #eee;">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center py-5 h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <h1>Editar imagen</h1>
                            <form class="my-4" method=post action="actions/edit_foto.act.php" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="autor">
                                        <?php 
                                            foreach ($rows as $row) {
                                                if ($rows_photos['author_id'] == $row[0]){
                                                echo "<option value=" . $row[0] . " selected>". $row[1] . "</option>";
                                                } else {
                                                    echo "<option value=" . $row[0] . ">". $row[1] . "</option>";
                                                }
                                            }
                                        ?>
                            
                                    </select>
                                    <label for="autor">Autor</label>
                                </div>
                                
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control"  name="photoName" value=<?php echo $rows_photos['name'] ?>>
                                            <label for="photoName">Nombre</label>
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Fichero</label>
                                            <input class="form-control" type="file"  name="formFile">
                                            <?php  echo $rows_photos['file'] ?>
                                            
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control" style="height:100px;" name="textPhoto"><?php echo $rows_photos['text'] ?></textarea>
                                            <label for="textPhoto">Descripcion</label>
                                        </div> 
                                        
                                        <div class="form-check py-3">
                                            <input class="form-check-input" type="checkbox"  name="photoEnabled" id="flexCheckDefault" <?php echo $enabled ?>>
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
    
</body>
</html>


