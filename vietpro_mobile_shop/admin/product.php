<?php
if (!defined('SECURITY')) {
    die('Bạn không thể truy cập vào!');
}

//phân trang
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
//gán số sản phẩm cần hiển thị trên trang
$row_per_page = 5;
//công thức tính toán chỉ số key
$per_row = $page * $row_per_page - $row_per_page;
//truy vấn ra số lượng bản ghi
$total_row = mysqli_num_rows(mysqli_query($connect, "select *from product"));
$total_page = ceil($total_row / $row_per_page); // hàm làm tròn số trong php

//nút prev(nút click cho các trang)
$list_page = '';
$page_prev = $page - 1;
if ($page_prev <= 0) {
    $page_prev = 1;
}
$list_page .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=product&page=' . $page_prev . '">&laquo;</a></li>';
//tính toán số trang
for ($i = 1; $i <= $total_page; $i++) {
    if ($i == $page) {
        $active = 'active';
    } else {
        $active = '';
    }
    $list_page .= ' <li class="page-item ' . $active . '"><a class="page-link" href="index.php?page_layout=product&page=' . $i . '">' . $i . '</a></li>';
}
// nút next
$page_next = $page + 1;
if ($page_next > $total_page) {
    $page_next = $total_page;
}
$list_page .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=product&page= ' . $page_next . '">&raquo;</a></li>';
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="index.php?page_layout=add_product" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                                <th data-field="price" data-sortable="true">Giá</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Danh mục</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = " select * from product inner join category on product.cat_id= category.cat_id order by prd_id asc limit $per_row,$row_per_page ";
                            $query = mysqli_query($connect, $sql);
                            while ($rows = mysqli_fetch_assoc($query)) {
                                # code...
                                // while ($rows=mysqli_fetch_assoc($query)) {
                                //     echo $rows['name'].'<br/>'.$rows['bỉthday'].'<br/>'.$rows['address'].'<br/>'.$rows['phone'].'<br/>'.$rows['code'];
                                //     echo '<hr/>';
                                // }
                                // 

                            ?>
                                <tr>
                                    <td style=""><?php echo $rows['prd_id']; ?> </td>
                                    <td style=""><?php echo $rows['prd_name']; ?></td>
                                    <td style=""><?php echo $rows['prd_price']; ?></td>
                                    <td style="text-align: center"><img width="130" height="180" src="img/products/<?php echo $rows['prd_image']; ?> " /></td>
                                    <td><span class="label label-success"><?php if ($rows['prd_status'] > 0) {
                                                                                echo 'Còn hàng';
                                                                            } else echo 'Hết hàng'; ?></span></td>
                                    <td><?php echo $rows['cat_name']; ?></td>
                                    <td class="form-group">
                                        <a href="product-edit.html" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="product-edit.html" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php echo $list_page; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->