<?php
     include_once "../../common/utils.php";
     include_once "../../common/config.php";
     include_once "../../common/mysql.php";
     

    // AUTOR ID
    $autor_id = $_POST['autor'];
    // NAME
     $photoName = $_POST['photoName'];
     // DESCRIPTION
     $textPhoto = $_POST['textPhoto'];
     $imageEnabled;
     // IMAGE ENABLED
    if (!isset($_POST['photoEnabled'])) {
        $imageEnabled = '0';
    } else {
        $imageEnabled = '1';
    }

    move_uploaded_file($_FILES['formFile']['tmp_name'] , 
     "../../images/" . $_FILES["formFile"]["name"]);

     

     $fichero = $_FILES["formFile"]["name"];
     $size = $_FILES["formFile"]["size"];

     // Add images to database

     $connection = Connect($config['database']);

     $sql = "insert into images (author_id , name,  file , size , text , enabled ) values('". $autor_id. "','". $photoName ."','". $fichero . " ',' " . $size . "' , '". $textPhoto . " ',' ". $imageEnabled ."')";

    $return = execute($sql , $connection);

    Close($connection);

    header ("location: ../home.php?page=listado");
    



?>