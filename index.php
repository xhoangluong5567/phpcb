<?php

// session_start();
// if(isset($_SESSION['cart']))
// {
//     echo "<pre/>";
//     var_dump($_SESSION['cart']);
// }
    require 'include/database.php';
    require 'include/masterpage.php';
    myheader();
    mySlide();
    mybaner();
    
    //content
    $s = "select * from category";
    if(isset($_GET['id'])){
        $_SESSION['id']=$_GET['id'];
    }
    if(isset($_SESSION['id']) && $_SESSION['id']!=0)
        $s .= " where category_id='".$_SESSION['id']."'";
    echo getData1($s);

    myfooter();
    
?>
