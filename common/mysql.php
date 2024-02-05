<?php
    function Connect($config = array()) {

        $conn = mysqli_connect( $config['hostname'] , 
        $config['username'] , 
        $config['password'] ,
        $config['database']);

        mysqli_set_charset($conn , $config['encoding']);

        return ($conn);



    }
    
    function execute($sql , $conn) {

        $result = mysqli_query($conn , $sql) or die("Invalid query");

        return $result;
    }

    function ExecuteQuery($conn , $sql) {
        $result = mysqli_query($conn , $sql);
        if ($row = mysqli_fetch_array($result , MYSQLI_BOTH)) {
            do {
                $data[] = $row;
            }
            while ($row = mysqli_fetch_array($result , MYSQLI_BOTH));
        } else {
            $data = null;
        }

        //mysql_free_result($result);

        return ($data);
    }

    function Close($conn) {
        mysqli_close($conn);
        unset($conn);
    }
    

?>