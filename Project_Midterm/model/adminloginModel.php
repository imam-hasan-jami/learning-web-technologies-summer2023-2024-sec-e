<?php

    require_once('db.php');
    function login($username, $password)
    {
        $con = getConnection();
        $sql = "select * from adminInfo where userName='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        
        if($count > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>