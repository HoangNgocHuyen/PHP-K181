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
    //phuong thuc get trong php là phương thức gửi dữ lieeujtuwf client lên server thông qua các tham số trên url
    // và từ đó sẽ thực thi hành động các tham số mà get gửi lên sẽ bắt đầu bằng ? và nối với nhau bằng dấu &
    //vd: http://yeulacuoi.index.php?tham_so1=gtri1&tham_so2=gitri2
    //cú pháp: $_GET['tham_so'];
    //ham isset($ten_bien); kiem tra bien co ton tai khong tra ve  1 va 0
    // if(isset($_GET['user'])&& isset($_GET['dia_chi'])&& isset($_GET['phone'])){
    //     $ten= $_GET['user'];
    //     $dc=$_GET['dia_chi'];
    //     $phone=$_GET['phone'];
    //     echo $ten.'</br>'.$dc.'</br>'.$phone;
    // }

    // $_GET= array(
    //     'id'=>'12',
    //     'title'=>'method_get'
    // );
    // $id=$_GET['id'];
    // echo $id;
    // $title= $_GET['title'];
    // echo $title;

    //mang khai bao theo hai cach
    //c1 arr(1,'hai',true,so_thuc,...)
//    $arr =[1,'hai',true,2.3];
    // echo $arr;
    // echo '<pre>';
    // var_dump($arr);//dua ra kieu du liue
    // echo $arr[2];

    // foreach($arr as $key=>$value){
    //     echo $key;//lay ra key
    //     echo $value;//lay ra value
   // }
//    $arr =[1,'hai'=>'hai',true,'sothuc'=>2.3];// co the su dung 
//    echo  $arr['sothuc'];// goi key de in ra value


//json
//phan1: chuyen json sang dang mang de lam viec voi php
        
        //goi file json
        // $data_json= file_get_contents('data.json');
        // //chuyen json sang dang mang
        // $arr_json=json_decode($data_json,true);
        // //lam viec voi mang
        // foreach($arr_json as $key=>$value){
        //     echo $value.'</br>';
        // }

        // //phan2 them du lieu vap json
        // //ghi du lieu vao json(du lieu moi se thay du lieu cu)
        // $data_end_json=json_encode($arr_json,JSON_UNESCAPED_UNICODE);//chuyen nguoi tu dang mang sang json
        // file_put_contents('data.json',$data_end_json);

    ?>
    <!-- <form action="" method="GET"> FORM luôn có method là phương thức bạn làm việc
    <input type="text" name="user" placeholder="Nhập tên tài khoản">
    <input type="text" name="past" value="Nhập mk">
    <input type="submit" name="sbm" value="Đăng nhập">
    </form> -->
    <!-- <a href="lythuyet.php?user=huyen&dia_chi=123&phone=123"></a> -->

</body>
</html>