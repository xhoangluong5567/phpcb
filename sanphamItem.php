<?php
require 'include/database.php';
require 'include/masterpage.php';
myheader();
mySlide();
mybaner();
?>


    <!-- nội dung -->
    <div class="container">
        <div class="row">
            <div class="col-6 item" style="border: 1px solid black;">
            <h1>Thông tin chi tiết sản phẩm: </h1>

            <?php
            $id = $_GET['id'];
            echo getSingleProduct($id) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6 item"  style="
    left: 565px;
    top: -430px;
">
                <div class="area_promo" style="padding-top: 45px; ">
                    <strong style="font-weight: bold">KHUYẾN MÃI</strong>
                    <div class="promo">
                        <i class="fa fa-check-circle"></i>
                        <div id="detailPromo" style="
                         margin-top: -25px;
                         margin-left: 21px;
                         padding-bottom: 20px;">Cơ hội trúng <span style="font-weight: bold">61 xe Wave Alpha</span> khi trả góp Home Credit</div>
                    </div>
                </div>
                <div class="policy" style="border: 2px solid black; background: #f3f9ae; ">
                    <div>
                        <i class="fa fa-archive"></i>
                        <p style="margin-top: -24px;">Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng </p>
                    </div>
                    <div>
                        <i class="fa fa-star"></i>
                        <p style="margin-top: -24px;">Bảo hành chính hãng 12 tháng.</p>
                    </div>
                    <div class="last">
                        <i class="fa fa-retweet"></i>
                        <p style="margin-top: -24px;">1 đổi 1 trong 1 tháng nếu lỗi, đổi sản phẩm tại nhà trong 1 ngày.</p>
                    </div>
                </div>
                <div class="area_order">
                    <!-- nameProduct là biến toàn cục được khởi tạo giá trị trong phanTich_URL_chiTietSanPham -->
                    <a class="buy_now" onclick="themVaoGioHang(maProduct, nameProduct);">
                        <h3><button class="btn btn-primary">Thêm vào giỏ hàng</button></h3>
                    </a>
                </div>
                
            </div> 
        </div>
    </div>
    </div>
    <div class="container" style="
    margin-top: -260px; margin-bottom: 50px;
">
<h1>Thông số kỹ thuật chi tiết</h1>
<?php
            $id = $_GET['id'];
            echo getMota($id) ?>
            
        </div>


     
      

            

</div>
        </div>

      
            
    </div>
</body>
<?php myfooter(); ?>