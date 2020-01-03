<?php
// có 3 bước để lấy ra csdl trong data
//b1 kết nối csdl
$connect=mysqli_connect('localhost','root', '','hocphpk181');
if ($connect) {
    mysqli_query($connect, "SET NAMES 'utf8' ");
    // print_r('Kết nối thành công');
}
else{
    echo 'kết nối thất bại';
}
//b2 viết truy vấn và thực thi
$sql="select* from thanh_vien";
$query= mysqli_query($connect, $sql);
//b3: lấy ra bản ghi
//hàm đếm số bản ghi
// $num_rows= mysqli_num_rows($query);
// echo $num_rows;

//hàm lấy ra số bản ghi trong table
// $rows=mysqli_fetch_assoc($query);
// echo $rows['address'];
//phải sử dụng vòng lặp để lấy ra toàn bộ dữ liệu --while
while ($rows=mysqli_fetch_assoc($query)) {
    echo $rows['name'].'<br/>'.$rows['bỉthday'].'<br/>'.$rows['address'].'<br/>'.$rows['phone'].'<br/>'.$rows['code'];
    echo '<hr/>';
}
?>