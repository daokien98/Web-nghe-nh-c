<?php require_once("includes/connection.php"); 
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    
     <title> Website Nghe Nhạc Trực Tuyến </title>
     <!--favicon-->
     <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
     <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
     <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
     <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
     <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
     <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
     <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
     <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
     <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
     <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
     <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
     <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
     <link rel="manifest" href="favicon/manifest.json">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
     <meta name="theme-color" content="#ffffff">
    <!--Định dạng css nên chèn ở head-->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/trangchu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <!--Toàn bộ nội dung trang web-->
    <div id="all">
        <!--Phần đầu-->
        <div id="header">
            <div id="hea">
                <div id="he1">
                    <img src= "images/icons8.png" width="2%" height="5%"> 
                    <b ><a  href="#">Nghe nhạc trực tuyến</a></b>&emsp;&emsp;   
                    <input type="text" name="search" placeholder="Từ khóa tìm kiếm..." > 
                    &emsp;
                    <a  href="#">Video</a>
                    |
                    <!-- liên kết -->
                    <a  href="https://waka.vn/"> Sách</a> 
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;    
                    <?php if (!isset($_SESSION["fullname"])) {?> 
                    <a href="dangnhap.php">Đăng nhập </a> 
                    /
                    <a  href="dangky.php">Đăng Ký</a> 
                    <?php }
                    else {?>  
                        Xin chào <?php echo $_SESSION["fullname"]?> <img style="float:right; margin-top:5px; width: 3%;margin-right: -10px;"src="<?php echo 'images/hoa.jpg'?>"><br>
                        <a style="float:right; margin-top: 5px; margin-right: 55px"href="logout.php" id="logout">Đăng xuất </a> 
                    <?php }?>  

                </div>
                <ul>                        
                        <li><a href="#">Chủ đề</a>
                            <ul class="sub-menu">
                                <li><a href="#">Nổi Bật</a></li>
                                <li><a href="#">Nghe Nhiều</a></li>
                                <li><a href="#">Có Thể Bạn Thích</a></li>
                            </ul>
                        </li>
                        <li><a href="#">BXH</a>
                            <ul class="sub-menu">
                                <li><a href="#">Việt Nam</a></li>
                                <li><a href="#">Âu Mỹ</a></li>
                                <li><a href="#">Hàn Quốc</a></li>
                            </ul>
                        </li>
                       
                        <li><a href="#">Album</a>
                            <ul class="sub-menu">
                                <li><a href="#">Việt Nam</a></li>
                                <li><a href="#">Châu Á</a></li>
                                <li><a href="#">Âu Mỹ</a></li>
                                <li><a href="#">Các Thể Loại Khác</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="#">Mucsic Video</a>
                            <ul class="sub-menu">
                                <li><a href="#">Việt Nam</a></li>
                                <li><a href="#">Châu Á</a></li>
                                <li><a href="#">Âu Mỹ</a></li>
                            </ul>
                        </li>
                       
                        <li > <a  href="#">
                            <b > 
                                <img src="images/vip3.png" width="13%" height="13%"> Vip
                            </b></a>
                       </li>
                </ul>
            </div>
        </div>
        <!--Phần chính-->
        <div id="content">
            <div id = "con">
                <!--Phần slideshow-->
                <?php include "banner.php" ?>
                <!--Phần playlist-->
                <?php include "playlist.php" ?>
                <!--Phần album-->
                <?php include "album.php" ?>
                <!--Phần best-->
                <?php include "thebest.php" ?>
                <!--Phần music-->
                <?php include "mv.php" ?>
                 <!--Phần bài hát mới phát hành-->
                <?php include "baihatmoi.php" ?>
                <!--Phần nghệ sĩ-->
                <?php include "nghesi.php" ?>
                <!--Phần BXH Bài hát-->
                <?php include "bxhbaihat.php" ?>
                <!--Phần BXH MV-->
             
                <!--Phần covid-->
                <div id= "covid">
                    <br>
                    <img src= "images/covid.png"width="70%" height="90%" > 
                </div>
                <!--Phần Đối Tác-->
                <div id="doitac">
                    
                    <h2 style="font-size: 20px;"><a href="#">Đối tác </a> </h2>    
                     <img src= "images/logo1.png"width="24%" height="60%" > 
                     <img src= "images/logo2.jpg"width="24%" height="60%" >  
                     <img src= "images/logo3.jpg"width="24%" height="60%" > 
                     <img src= "images/logo4.jfif"width="24%" height="60%" > 
                </div>
            </div>
        </div>
        <!--Phần cuối-->
        <?php include "footer.php" ?>

    </div>
    
</body>
</html>