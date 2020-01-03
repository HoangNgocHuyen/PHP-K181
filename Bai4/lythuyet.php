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
    //phuong thuc post
    //cu phap: $_POST['tham so];
    // if(isset($_POST['sbm'])){
    //     $user=$_POST['user'];
    //     $pass=$_POST['pass'];
    //     echo $user.'</br>'.$pass;
    // }

    //upload file
    //cu phap
    // $_FILES['tham_so']['name'];//lay duoc ten file
    // $_FILES['tham_so']['size'];//lay ttheo kich co file
    // $_FILES['tham_so']['type'];//lay theo kieu file
    // $_FILES['tham_so']['error'];//lay ra file loi
    // $_FILES['tham_so']['tmp_name'];//upload len thu muc tam(luu tam thoi)
    // move_uploaded_file($ten_bien_thu_muc_tam,'upload/anhdep.png');//upload duoc anhdep.png len server

    if(isset($_POST['sbm'])){
        $file_name=$_FILES['fileupload']['name'];
        $tmp_name=$_FILES['fileupload']['tmp_name'];
        $file_error=$_FILES['fileupload']['error'];
        if($file_error>0){
            echo 'file upload bi loi';
        }
        else{
            move_uploaded_file($tmp_name,'upload/'.$file_name);
            echo 'file upload thanh cong';
        }
    }
    ?>

    <form action=""method="POST"enctype="multipart/form-data"><!--khi input co type="file" thi phai co dong enctype-->
        <input type="file"name="fileupload">
        <input type="submit"name="sbm">
    </form>
    <!-- <form action=""method="POST"> action chuyen huong xu li sang mot trang khaC
        <input type="text" name="user">
        <input type="text" name="pass">
        <input type="submit"name="sbm">
    </form> -->
</body>
</html>