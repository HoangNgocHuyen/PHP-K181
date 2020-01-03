<?php
$file_upload= $_GET['file_upload'];//dùng get để hứng tham số

//bước 1: mở file
$file_path='upload/'.$file_upload;
//b2: thông tải file cho trình duyệt
// header("Content-Disposition: attachment; filename = $file_upload"); //tải xuống, nếu để dòng này thì sẽ k cho xem trước mà bắt tải xuống
//b3: thông báo định dạng file trả về
header("Content-Type: application/pdf");
//b4: đọc file
readfile($file_path);

?>