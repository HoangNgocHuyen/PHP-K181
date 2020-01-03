<?php
//lệnh bổ trợ nang cao cho select
//1.Where(câu lệnh điều kiện)
//vd: lấy ra tất cả các thành viên ở ĐH qgHN
//SELECT * FROM `thanh_vien` WHERE address='ĐH quốc gia HN'
//2,3: OR,AND 
//vd: lấy ra các thành viên ở ĐHQGHN và sinh năm 1999: SELECT * FROM `thanh_vien` WHERE address='ĐH quốc gia HN' AND birthday >='1999-01-01' AND birthday <='1999-12-31'
//vd: lấy ra các thành viên ở ĐHQGHN hoặc sinh năm 1999
// SELECT * FROM `thanh_vien` WHERE address='ĐH quốc gia HN' OR birthday >='1999-01-01' AND birthday <='1999-12-31'
//4.order by (sắp xếp theo thứ tự tăng dần ASC, giảm dần: DESC)
//vd lấy ra các sản phẩm theo thứ tự mới đăng: SELECT * FROM `product` ORDER BY prd_id DESC
//5. GIỚI HẠN SỐ LƯỢNG BẢN GHI HIỂN THỊ: limit
//vd: lấy ra 3 sản phẩm cũ nhất SELECT * FROM `product` ORDER BY prd_id ASC limit 3; 


// kết nối bảng : inner join: SELECT * FROM `product` INNER JOIN 'category' on product.card_id= category.card_id

?>