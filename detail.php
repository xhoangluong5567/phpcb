<?php 
 $q1 = $con->query("select * from products");

 $xau .= '<div class="row" style="text-align: center;">';
            
 while($r1= $q1->fetch_array()){
     $id = 1;
     if(isset($_GET["id"])){
         $id = $_GET["id"];
     }
     $xau .= '
     
     <div class="col-sm-3" style="margin-bottom: 50px; border:3px">'.'<img src="images/'.
     $r1["product_image"].'" width="200px" height="180px"><h3 style="font-weight: bold;">'.
     $r1['product_name'].'</h3>'.
     $r1['product_mota'].
     '<h3><a  class="btn btn-warning" href="chitietsp.php?id=?">Mua Hàng</a></h3></div>

     
     ';
     
 }
?>
