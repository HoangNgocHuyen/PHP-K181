<?php
session_start();//vì index chạy đầu nên chỉ cần ss_st ở index thì các trang khác đều được kế thừa khi gọi file đó vào index
define('SECURITY', true);
include_once('../config/connect.php');
if(isset($_SESSION['mail'])&& isset($_SESSION['pass'])){
    include_once('admin.php');// in_o là gọi file vào thực thi
}else{
    include_once('login.php');
}


?>