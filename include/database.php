<?php
session_start();
class category
{
    public $id;
    public $name;
    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
function getArr()
{
    $con = new mysqli("localhost", "root", "", "db_banhang1");
    $cr = $con->query("select * from category");
    while ($r = $cr->fetch_array()) {
        $arr[] = new category($r["category_id"], $r["category_name"]);
    }
    mysqli_close($con);
    return $arr;
}

function getData1($s)
{
    $con = new mysqli('localhost', 'root', '', 'db_banhang1');
    $q = $con->query($s);
    $xau = '';
    while ($r = $q->fetch_array()) {
        $xau .= '
            <div class="container bg-primary text-white" 
            style=text-align: center;">
            <h3 class="tieude">' . '*' . $r['category_name'] . '*' . '</h3></div>
            ';
        $xau .= '<div class="container">';
        $q1 = $con->query("select * from products where 
            category_id='" . $r['category_id'] . "'");
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $total_records = mysqli_num_rows($q1);

        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 8;

        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);

        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page) {
            $current_page = $total_page;
        } else if ($current_page < 1) {
            $current_page = 1;
        }

        // Tìm Start
        $start = ($current_page - 1) * $limit;

        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $q1 = $con->query("select * from products where 
            category_id='" . $r['category_id'] . "' LIMIT $start, $limit");


        $xau .= '<div class="row" style="text-align: center;">';
        while ($r1 = $q1->fetch_array()) {
            $xau .= '
                <div class="col-sm-3" style="margin-bottom: 50px;">
                <a style="font-weight: bold;" href="sanphamItem.php?id=' . $r1['product_id'] . '">' . '<img src="images/' .
                $r1["product_image"] . '" width="230px" height="220px" >' .
                $r1['product_name'].'</a><br>'. $r1['product_price'].'VND'.'<br>'.$r1['product_mota'].'<br>'.
                '<a style="background:#ff9000;" class="btn btn-warning" href=sanphamItem.php?id=' . $r1['product_id'].'  ">Xem Chi Tiết</a>
                <a style="background:#16ce38;" class="btn btn-warning" href=cart.php?id=' . $r1['product_id'].'  ">Mua Hàng</a></div>
                ';
        }
        $xau .= '</a>';
        $xau .= '</div>';
        $xau .= ' <ul class="pagination" >';
        // PHẦN HIỂN THỊ PHÂN TRANG
        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1) {
            $xau .= '<a href="index.php?page=' . ($current_page - 1) . '">Prev</a> | ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++) {
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page) {
                $xau .= '<span>' . $i . '</span> | ';
            } else {
                $xau .= '<a href="index.php?page=' . $i . '">' . $i . '</a> | ';
            }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1) {
            $xau .= '<a href="index.php?page=' . ($current_page + 1) . '">Next</a> | ';
        }
        $xau .= '</div>';
        $xau .= '</div>';
    }

    $con->close();
    return $xau;
}

function getSingleProduct($id)
{
    $con = new mysqli('localhost', 'root', '', 'db_banhang1');
    $query = mysqli_query($con, "select * from products where product_id=" . $id);
    $r =  $query->fetch_array();
    $product = '';
    $product .= '<div class="col-4 img">';
    if (empty($r['product_image'])) {
        $product .= '<img width="230px" src="https://via.placeholder.com/400x400.png?text=dien%20thoai%20HL" alt="">';
    } else {
        $product .= '<img width="260px" src="images/' . $r['product_image'] . '" alt="">';
    }
    $product .= '</div>';
    $product .= '<div class="col-8 body">';
    $product .= '<form action="" method="POST">';
    $product .= '<input type="hidden" name="product_id" value="' . $r['product_id'] . '">';
    $product .= '<h3>TÊN SP:</h3><h3 style="margin: 8;font-weight: bold;">'  . $r['product_name'] . '</h3>';
    $product .= '<h3>GIÁ SP:</h3><h5 style="margin: 8;color: red;">' . $r['product_price'] . 'VND</h5>';
    $product .= '</from>';
    $product .= '</div>';
    return $product;
}

function getMota($id)
{
    $con = new mysqli('localhost', 'root', '', 'db_banhang1');
    $query = mysqli_query($con, "select * from products where product_id=" . $id);
    $r =  $query->fetch_array();
    $product = '';
    $product .= '<form action="" method="POST">';
    $product .= '<input type="hidden" name="product_id" value="' . $r['product_id'] . '">';
    $product .= '<a>'  . $r['product_gioithieu'] . '</a>';
    $product .= '</from>';
    $product .= '</div>';
    return $product;
    


}
