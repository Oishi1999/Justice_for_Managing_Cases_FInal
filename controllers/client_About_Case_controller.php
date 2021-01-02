<?php
require_once '..\models\db_conn.php';

 function casesrinfo()
    {
        $query="SELECT * FROM `cases`";
        $result=doQuery($query);
        return $result;
    
    }




?>