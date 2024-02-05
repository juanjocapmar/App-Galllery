<?php 

    function debug($var) {
        $debug = debug_backtrace();
        echo "<prep>";
        echo $debug[0]['file']." ".$debug[0]['line']."<br><br>";
        echo "<prep>";
        echo "<br>";
    }

?>