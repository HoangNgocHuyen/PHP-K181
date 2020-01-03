<?php
//vòng lặp switch case
$data= "hello";
switch($data){
    case 10: echo "đay la 10"; break;
    case "ok": echo "day la ok"; break;
    case "hello": echo "day la hello"; break;
    default: echo "day la default"; break;
}
//hàm gọi hàm khác để thực thi
// include('thucthi.php');
// include_once();
// require();
// require_once();
// include và include_once cho dù sai chỉ hiện thông báo và vẫn chạy hết 
// require và require_once dừng lại khi có lỗi 
// nên dùng once để chỉ định đúng file

?>