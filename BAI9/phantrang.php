<?php
//thuật toán phân trang
//limit
select *FROM product limit 5;
//trang 1: 1-5, key 0-4|  select *from product limit 0,5
//trang 2: key 5-9 | select *from product limit 5,5
trang n ($page)
//ví dụ 
1.sản phẩm 0
2.sản phẩm 1
3.sản phẩm 2
4. sản phẩm 3
5. sản phẩm 4
6. sản phẩm 5
7.sản phẩm6 
8.sản phẩm 7

select *from product limit ? ---> limit $per_row, $row_per_page
$row_per_page =3;
$per_row = $page*$row_per_page-$row_per_page;
//$page =$_GET['page'];
// trang1: 1*3-3 
//trang 2: 2*3-3


//trang1 limit 0,3
//trang2 limit 3,3
//trang3 limit 6,3

?>