<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// //session là một phiên làm việc của người dùng trên website, lưu lại 
// //ss= 1 phiên tài khoản của người dùng
// //cú pháp bắt buộc đầu tiên
// session_start();
// $_SESSION['name']=gia_tri;//cú pháp thực thi
// //để hủy ss
// session_unset();//xóa bỏ tất cả các ss sinh ra trong cùng một phiên với ss bị chọn xóa bỏ
// unset($name);//xóa bỏ từng ss đơn lẻ
// session_destroy();//xóa bỏ các ss, thường dùng làm log out
// session_start();
// if(isset($_POST['sbm'])){
//     $_SESSION['ho_ten'] = $_POST['ho_ten'];//name của ss có thể thay băng tên khác 
// }
// if(isset($_SESSION['sbm'])){
//     echo $_SESSION['ho_ten'];
// }


//hàm chuyển hướng và báo lỗi
// header('location: adin.php');//hàm chuyển hướng đi
// die('bạn không có quyền truy cập file');//hàm báo lỗi, mặc định là báo ra chuỗi

//hằng
define('PI','xin chào');
//echo PI; lấy ra xin chào
if (defined('PI')) {
    echo 'abc';
?>

<!-- <form action=""method="POST">
<input type="text" name="ho_ten">
<input type="submit" name="sbm">
</form> -->
</body>
</html>