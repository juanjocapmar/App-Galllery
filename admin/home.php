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

       include "includes/menu.php";

       $page = $_GET['page'];

       switch ($page) {
        case 'listado':
            include "includes/listado.inc.php";    
            include "actions/listado.act.php";
            break;
        case 'autores';
            include "includes/listado_autores.inc.php";
            break;
        case 'new':
            include "includes/new_foto.inc.php";
            break;
        case 'edit':
            include "includes/edit_foto.inc.php";
            break;
       }

    ?>
   
    <script src="../assets/bootstrap.min.js"></script>
</body>
</html>