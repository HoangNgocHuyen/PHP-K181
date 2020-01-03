<?php
//biểu thức điều kiện
$songuyen =0;
//biểu thức if luôn luôn đúng, luôn trả về true
// if($songuyen>0){
//     echo"day la so nguyen duong";

// }
// else if( $songuyen<0){
//     echo"day la so nguyen am";
// }
// else{
//     echo"day la so 0";
// }

// //vòng lặp while
// while(biểu thức){
//     thực thi hành động
// }

//vd: in ra các số chạy từ 5-9 mỗi số một dòng
// echo $a."n";
// $a++;a=5;
// while ( $a<10) {
//     echo $a."<br/>";
// $a++;
// }
//vd2: in ra các số từ 10->1 và có dấu phẩy trước số 1, đâu chấm sau số 1
/*$b=10;
while ($b>0) {

    if($b>1){
    echo $b.", ";}
    else{
        echo $b.".";
    }
    $b--;
}*/

//vòng lặp for
/*for(khởi tạo biểu thức; biểu thức; tăng giảm biểu thức){
    thực thi hành động
}*/
//vd: dùng vòng lặp for để lấy ra các số chẵn từ 10-0
/*for($i=10; $i>=0;$i-=2){
    echo
     $i;
}*/

//tính tổng dãy số từ 0 đến 10 
// $y=0;
// for($i=0; $i<=10;$i++){
// $y+=$i;
// }
// echo $y;

//in ra bảng cửu chương
for($i=2;$i<=9;$i++){
    for($j=0;$j<=10;$j++){
        echo $i.'x'.$j.'='.$i*$j.',';
    }
    echo'<br/>';
}
?>