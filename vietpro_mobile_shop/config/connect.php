<?php
if(!defined('SECURITY')){
	die('Bạn không thể truy cập vào!');
}
$connect=mysqli_connect('localhost','root', '','phpk181');
if ($connect) {
    mysqli_query($connect, "SET NAMES 'utf8' ");
    // print_r('Kết nối thành công');
}
else{
    echo 'kết nối thất bại';
}

?>