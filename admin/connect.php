<?php
 $dns = 'mysql:host=localhost;dbname=shop';
 $user = 'root';
 $pass ='';
//  $option = array(
//      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
//  );
try{
   
    $conn = new PDO($dns , $user , $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
   

}catch(PDOException $e){
    echo 'failed ' . $e->getMessage();
}

?>