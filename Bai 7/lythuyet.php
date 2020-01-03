<?
////sql có cấu trúc: 
//a. SQL SERVER: C#, ASP.net 
//b.MySql: PHP thuần, fwlarrave, CMS(WP, JOOMLA), nodejs, Ruby, Python
// có 3 bộ thư viện
//MySql: PHP cũ 5
//MySqlLi: mới php7
//PDO: chú ý, thường dùng oop, hay dùng cho nước ngoài
//2. NoSQL: k có cấu trúc dùng cho MongoDB
///////MySqlLi
///có 4 tầng
// Tầng 1: Database tham khảo them navication: tạo database nhanh hơn
//Tầng 2: table( bảng dữ liệu)
//Tầng 3: colum( trường thông tin) phải có id: là trường để phân biệt dữ liệu,(khóa chính)
//Tầng4: thêm bản ghi
///// 4 câu lệnh kinh điển
//select: lấy ra dữ liệu, select *from: lấy ra toàn bộ dữ liệu
//2. insert : thêm, chèn INSERT INTO `thanh_vien`(`id`, `name`, `birthday`, `address`, `phone`, `code`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
//3. update: thực thi chức năng sửa UPDATE `thanh_vien` SET `id`=[value-1],`name`=[value-2],`birthday`=[value-3],`address`=[value-4],`phone`=[value-5],`code`=[value-6] WHERE 1
//4. delete: thực thi xóa DELETE FROM `thanh_vien` WHERE id=3

?>