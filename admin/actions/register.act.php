<?php
    // Add register to dababase
    include_once "../../common/utils.php";
    include_once "../../common/config.php";
    include_once "../../common/mysql.php";
    
    //debug($_POST);

    echo var_dump($_POST);

    $nameUser = $_POST['name'];
    $email = $_POST['email'];
    // encripted password with md5
    $password = md5($_POST['password']);
    
    if (isset($_POST['enabled'])) {
        $enabled = '1';
    } else {
        $enabled = '0';
    }
    // Return 
    $connection = Connect($config['database']);

    $sql = "insert into autors ( name , email , password , enabled) values('"
    . $nameUser . "','" . $email . "','" . $password . "','" . $enabled ."')"; 

    $return = execute($sql , $connection);

    $sql_select = "select * from autors where email = '". $email ." '
    and password = '" . $password . "'";

    $resultLogin = ExecuteQuery($connection , $sql_select);

    Close($connection);

    // session of new user
    session_start();
        
    $_SESSION['id'] = $resultLogin[0]['id'];
    $_SESSION['email'] = $resultLogin[0]['email'];
    $_SESSION['nombre'] = $resultLogin[0]['name'];
    $_SESSION['session_id'] = session_id();

    
    header ("location: ../home.php?page=listado");


?>