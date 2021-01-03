<?php
require_once '..\models\db_conn.php';

 function scheduleinfo()
    {
        $query="SELECT * FROM `schedule`";
        $result=doQuery($query);
        return $result;
    
    }




?>