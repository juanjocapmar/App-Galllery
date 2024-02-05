<?php

    include "../../common/utils.php";
    include "../../common/config.php";
    include "../../common/mysql.php";

    echo var_dump($_POST);
    echo var_dump($_FILES);

    $author_id = $_POST['autor'];
    $name = $_POST['photoName'];
    $text = $_POST['textPhoto'];

    if (isset($_POST['photoEnabled'])){
        $enabled = 1;
    } else {
        $enabled = 0;
    }


    $connection = Connect($config['database']);


    if ($_FILES['formFile']['name'] != "") {

        move_uploaded_file($_FILES['formFile']['tmp_name'] , 
        "../../images/" . $_FILES["formFile"]["name"]);

        $size = $_FILES['formFile']['size'];
        $name_Image = $_FILES['formFile']['name'];

        $sql_update = "update images set file='". $name_Image ."' , author_id=". $author_id ." ,  name='". $name ."' , text='". $text ."' , enabled='". $enabled ."' ,  size='". $size ."' where author_id=".$author_id."";
        
        $rows = execute($sql_update , $connection);

    } else {

        $sql_update = "update images set author_id=". $author_id ." , name='". $name ."' , text='". $text ."' , enabled='". $enabled ."'  where author_id=".$author_id."";

        $rows = execute($sql_update , $connection);

    }


    Close($connection);

    header("location: ../home.php?page=listado");



    


?>