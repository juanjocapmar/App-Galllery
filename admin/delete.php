<?php 
    include "../common/utils.php";
    include "../common/config.php";
    include "../common/mysql.php";


    $page = $_GET['page'];

    $connection = Connect($config['database']);

    if ($page == 'listado') {

        $sql = "delete from images where id='". $_GET['id']."'";

        $return = execute($sql , $connection);

        Close($connection);

        header ("location: home.php?page=listado");

    } else {

        $sql = "delete from autors where id='". $_GET['id']."'";

        $return = execute($sql , $connection);

        Close($connection);

        header ("location: home.php?page=autores");

    }

   
?>