<?php
    function myheader(){
        $xau = '
        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="css/banner.css">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    //  <link rel="stylesheet" href="css/bootstrap/css/bootstrap-grid.css">



     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Bán hàng online</title>
  </head>
  <body>
    <div class="mynav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="index.php?id=0"><img src="images/logo2.png" width="230px" height="60px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="
    padding-left: 205px;
">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?id=0">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                    role="button" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="false">
                    Category
                    </a>                  
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="
    background: aliceblue;
">';
                    
                        $arr = getArr();
                        for($i=0;$i<count($arr); $i++){
                            $xau .= '<a class="dropdown-item" href="index.php?id='.
                            $arr[$i]->id.'">'.$arr[$i]->name.'</a>';
                        }
                    
                
                    
                $xau .= '</div>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Đăng kí</a>
                </li>
                

                
                </ul>
                <form class="form-inline my-2 my-lg-0" style="margin-right: 95px;">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <li style="list-style-type: none">
                <a href="cart.php" style="padding-right: 25px;"><img src="images/shopping-cart.png">Giỏ Hàng</a>
                </li>
            </div>
        </nav>
        ';
        echo $xau;
    }
    function mySlide(){
      $xau = '

        <div class="slideshow-container" style="padding-top: 70px;">

        <div class="mySlides fade">
          <img src="banners/banner2.png" style="width:1000px; height:375px;">
        </div>

        <div class="mySlides fade">
          <img src="banners/bannern.png" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <img src="banners/bannern1.png" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <img src="banners/bannern2.png" style="width:1000px; height:375px;">
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        



        </div>
        </div>
        </div>
        <div>
        ';
        echo $xau;
    }
    function mybaner(){
      $xau = '

        <img style="cursor:pointer; margin-left: 382px; margin-bottom: 9px;" src="banners/banner1.png" width="1140" height="185">

        ';
        echo $xau;
    }


    
    function myfooter(){
        $xau = '
        <img style="cursor:pointer; margin-left: 382px; margin-bottom: 9px;" src="banners/banner2.png" width="1140" height="285">

            <div class="plc">
                    <ul class="flexContain">
                        <li>Giao hàng hỏa tốc trong 1 giờ</li>
                        <li>Thanh toán linh hoạt: tiền mặt, visa / master, trả góp</li>
                        <li>Trải nghiệm sản phẩm tại nhà</li>
                        <li>Lỗi đổi tại nhà trong 1 ngày</li>
                        <li>Hỗ trợ suốt thời gian sử dụng</li>
                        <li>Uy tín - chất lượng</li>
                        <li>
                            <br>Hotline:
                            <a href="tel:12345678" style="color: #288ad6;">1234.5678</a>
                        </li>
                    </ul>
            </div>
            <div class="copy-right">
        <p style="
    background: black;
    color: white;
    text-align: center;">
            All rights reserved ©2020 - Designed by
            <span style="color: #eee; font-weight: bold">Hueic</span>
        </p>
    </div>

    </div>
  </body>
</html>
        ';
        echo $xau;
    }
