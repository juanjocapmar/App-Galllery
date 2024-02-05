<script type="text/javascript">
    function delete_post(id) {
        var ok = confirm('¿Quieres borrar esta imagen?');
        if (!ok) {
            return false;
        } else {
            location.href = "delete.php?page=autor&id=" + id;
        }
    }
</script>

<?php
    
    include_once "../common/utils.php";
    include_once "../common/config.php";
    include_once "../common/mysql.php";

    $connection = Connect($config['database']);

    $sql = $sql = "select * from autors order by name asc";

    $rows = ExecuteQuery($connection , $sql);

    // verify rows isn't empty
    if (isset($rows)) {
        echo '
        <div class="container">
                <table class="table my-4">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Enabled</th>
                            <th scope="col">Created</th>
                        </tr>
                        <tbody>';
                            foreach ($rows as $row) {
                                if ($row['enabled'] == 1) {
                                    $enabled = "<img src='../assets/img/green_icons.png' alt='green_icons' width='10px' height='10px'>";
                                } else {
                                    $enabled = "<img src='../assets/img/red_icon.png' alt='red_icon' width='10px' height='10px'>";

                                }
                                echo '<tr>
                                    <th scope="row">'.$row['id'].'</th>
                                    <td>'. $row['name'] .'</td>
                                    <td>'. $row['email'] .'</td>
                                    <td>'. $enabled .'</td>
                                    <td>'.  date( "d/m/Y H:s:i" ,  strtotime($row['created'])) .'</</td>
                                    <td><a class="btn btn-danger" onClick="delete_post('.$row['id'].')">Delete</a>
                                </tr>';
                            }
        echo             '</tbody>
                </table>
            </div>';
    } else {
        echo '<div class="container py-5">
                <div class="alert alert-danger" role="alert">
                    No hay ningún autor añadido.
                </div>
            </div>';
    }

    Close($connection);
?>