<?php
    require_once '../models/db_connection.php';
?>
<?php
    function getDepts(){
        $query="SELECT * FROM departments";
        return doQuery($query);
    }
?>