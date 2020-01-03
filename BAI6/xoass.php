<?php
//ss và cooki đều lưu ở trên trình duyệt, nên vì chạy cùng một trinhd duyệt nên xóa được dù hai file khác nhau
session_start();
// session_unset();
// unset($_SESSION['ho_ten']);
session_destroy();// thường xử dụng log out
?>