<?php
require_once '..\models\db_conn.php';

 function lawyerinfo()
    {
        $query="SELECT * FROM `lawyer`";
        $result=doQuery($query);
        return $result;
    
    }




?>