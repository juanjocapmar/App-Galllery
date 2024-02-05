<?php
    // Add register to dababase
    include_once "../../common/utils.php";
    include_once "../../common/config.php";
    include_once "../../common/mysql.php";

    $email_Login = $_POST['email-login'];
    $password_Login = md5($_POST['password-login']);
    
    // Return 
    $connection = Connect($config['database']);

    $sql = "select * from autors where email = '". $email_Login ." '
    and password = '" . $password_Login . "'";

    

    $resultLogin = ExecuteQuery($connection , $sql);
    

    if (empty($resultLogin)) {
        //header ( "location: ../error.php?error=1");
        echo "Ususario no encontrado";
    } else {

        session_destroy();

        session_start();
        
        $_SESSION['id'] = $resultLogin[0]['id'];
        $_SESSION['email'] = $resultLogin[0]['email'];
        $_SESSION['nombre'] = $resultLogin[0]['name'];
        $_SESSION['session_id'] = session_id();

        header("location: ../home.php?page=listado");

    }

    Close($connection);
    

    

    

    


?>