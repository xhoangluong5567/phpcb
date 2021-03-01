<?php
require 'include/database.php';
require 'include/masterpage.php';
myheader();

?>
<div class="text-center">
    <h1>Quản lý giỏ hàng</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr style="background:DodgerBlue;">
                <th class="text-center">STT</th>
                <th class="text-center">Tên sản phẩm</th>
                <th class="text-center">Hình</th>
                <th class="text-center">Giá</th>
                <th class="text-center">Số lượng</th>
                <th class="text-center">Thao tác</th>
            </tr>
            </thead>
        </table>
        <?php
            $id = $_GET['id'];
            echo getSingleProduct($id) ?>
            <div class="orderInfo container">
    <h1 class="text-center">Thông tin giao hàng</h1><br>
    <form class="form-horizontal" name="frmTaoThongTinKhachHang" action="index.php?c=103" method="post">
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="txtHoTen">Họ và Tên</label>  
        <div class="col-md-3">
        <input id="txtHoTen" name="txtHoTen" type="text" placeholder="Họ và Tên" class="form-control input-md" required="">
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="txtSoDienThoai">Số điện thoại</label>  
        <div class="col-md-3">
        <input id="txtSoDienThoai" name="txtSoDienThoai" type="number" placeholder="Số điện thoại" class="form-control input-md" required="">
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="txtDiaChi">Địa chỉ</label>  
        <div class="col-md-3">
        <input id="txtDiaChi" name="txtDiaChi" type="text" placeholder="Địa chỉ" class="form-control input-md" required="">
        </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-3">
            <button type="submit" class="btn btn-success"> Đặt hàng</button>
        </div>
        </div>

        </fieldset>
</div>