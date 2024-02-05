<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Gallery</title>
</head>
<body>

    <?php 

        $login = $_GET['page'];

        switch ($login) {
            case 'login':
                include_once "includes/login.inc.php";
                break;
            case 'new':
                include_once "includes/new.inc.php";
                break;
            case 'listado':
                include_once "home.php";
                break;
            case 'autores';
                include_once "home.php";
                break;
            case 'close';
                include_once "actions/close_session.act.php";
                break;
        }

    ?>
   
    <script src="../assets/bootstrap.min.js"></script>
</body>
</html>