<?php

define('SECURITY',true);
session_start();
$prd_id= $_GET['prd_id'];
include_once('../config/connect.php');
if(isset($_SESSION['mail'])&&isset($_SESSION['pass'])){
    $sql="delete from product where prd_id= $prd_id";
    $query= mysqli_query($connect, $sql);
    header('location: index.php?page_layout=product');

}else{
    header('location: index.php');
}

?>