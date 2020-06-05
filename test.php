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
    <link rel="stylesheet" type="text/css" href="nghenhac.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <!--Toàn bộ nội dung trang web-->
    <div id="all">
        <!--Phần đầu-->
        <div id="header">
            <div id="hea">
                <div id="he1">
                    <img src= "./src/Anh/icons8.png" width="2%" height="5%"> 
                    <b ><a  href="#">Nghe nhạc trực tuyến</a></b>&emsp;&emsp;   
                    <input type="text" name="search" placeholder="Từ khóa tìm kiếm..." > 
                    &emsp;
                    <a  href="#">Video</a>
                    |
                    <!-- liên kết -->
                    <a  href="https://waka.vn/"> Sách</a> 
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;   &emsp;                   
                    <a  href="../Login/dangnhap.html">Đăng nhập </a> 
                    /
                    <a  href="../Login/dangky.html">Đăng Ký</a>   
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
                                <img src="./src/Anh/vip3.png" width="13%" height="13%"> Vip
                            </b></a>
                       </li>
                </ul>
            </div>
        </div>
        <!--Phần chính-->
        <div id="content">
            <div id = "con">
                <div id ="tua">
                    <b style="font-size: 20px;">
                        I DO - 911
                    </b>
                    <br>
                    Thể loại: Nhạc Nước Ngoài
                </div>
                <div id ="nhac">
                    <audio controls>
                        <img src="nen.jpg"></img>
                        <source src="./src/Nhac/IDo.mp3" type="audio/mpeg">
                      </audio>
                </div>
               
                <div id ="list">
                    <br>
                    <b style="font-size:16pt" > 
                        <a href="#">  DANH SÁCH BÀI HÁT</a>
                    </b>
                    <br>
                   
                    <!--==================================================-->
                    <br>
                   
                    
                    <div id= "danhsach">
                        <ul>
                            <li>
                                <a href="#"><b style="color: red;font-size: 26px; ">01</b>&emsp;&ensp;&nbsp;Mình Chia Tay Đi</a>
                                <a style="color: rgb(185, 174, 185);" href="#">&emsp;&emsp;&emsp;&emsp;Erik</a>
                            </li>
                            <li>
                            <a href="#"><b style="font-size: 20px; ">02</b>&emsp;&emsp;&ensp;Let Me You</a>
                            <a style="color: rgb(185, 174, 185);" href="#">&emsp;&emsp;&emsp;&emsp;Han Sara</a>
                        </li>
                        <li>
                            <a href="#"><b style="font-size: 20px; ">03</b>&emsp;&emsp;&ensp;Hơn Cả Yêu</a>
                            <a style="color: rgb(185, 174, 185);" href="#">&emsp;&emsp;&emsp;&emsp;Đức Phúc</a>
                        </li>
                        <li>
                            <a href="#"><b style="font-size: 20px; ">04</b>&emsp;&emsp;&ensp;Truyền Thái Y</a>
                            <a style="color: rgb(185, 174, 185);" href="#">&emsp;&emsp;&emsp;&emsp;Ngô Kiến Huy</a>
                        </li>
                        <li>
                            <a href="#"><b style="font-size: 20px; ">05</b>&emsp;&emsp;&ensp;Anh Ơi Ở Lại</a>
                            <a style="color: rgb(185, 174, 185);" href="#">&emsp;&emsp;&emsp;&emsp;Chi Pu</a>
                        </li>
                        </ul>

     </div>
</div>
                </div>
            </div>
        </div>
        <!--Phần cuối-->
        <div id=footer>
            <div id="foo">
                <form style="font-size: 16px;">
                    <br>
                    <table width="1200" height="100"> <!-- cellpadding kc đến đường biên -->
                        <tr>    <!-- cellspacing độ dày đường biên -->
                            <td><b><a href="#">Thông tin</a></b></td>
                            <td ><b><a href="#">Bài hát</a></b></td>
                            <td ><b><a href="#">BXH</a></b></td>
                            <td ><b><a href="#">Kết nối với chúng tôi</a></b></td>
                            <td ><b><a href="#">Tới Ứng Dụng</a></b></td>
                            <td ><b><a href="#">Liên kết</a></b></td>
                        </tr>
                        <tr>
                            <td ><a href="#">Giới thiệu</a><br>Điều khoản sử dụng<a href="#"></a><br><a href="#">Quyền riêng tư</a></td>
                            <td ><a href="#">Album</a><br><a href="#">Hotlist</a></td>
                            <td ><a href="#">MV</a><br><a href="#">Nghệ sĩ</a></td>
                            <td ><a href="#"> 
                                <img src="./src/Anh/fb.png" width="20%" height="50%">
                            </a></td>
                            <td ><a href="#">Dịch vụ nhac.vn đã có ứng dụng cho</a><br><a href="#">Mobile, Smart TV
                                <img src="./src/Anh/app.png" width="15%" height="50%">
                                <img src="./src/Anh/ad.png" width="15%" height="50%">
                            </a></td>
                            <td ><a href="#">nghenhac.com</a>
                                <br><a href="#">thanhtoannhanh.com</a>
                                <br><a href="#">tienichnghenhac.com</a>
                                <br><a href="#">blogradio.vn</a></td>
                        </tr> 
                     
                    </table>
                    <br>
                    <br>
                    <div class="lui2">
                        <form style="font-size: 18px;">                          
                           <br>
                            Cơ quan chủ quản Công ty Cổ phần OOE - Địa chỉ: P804, Kênh Dương, Ngô Quyền, Hải Phòng
                            <br>
                            Email: nghenhac@vega.com.vn Tel: 024 30000000 - Người chịu trách nhiệm nội dung: Ông Lê Văn OOE
                            <br>
                            Giấy phép MXH số 311/GP-BTTTT do Bộ Thông Tin và Truyền thông cấp ngày 10/04/2020
                            <br>
                            © 2020 Vega Corporation
            
                        </form>
                        
                        
                    </div>
            </div>

        </div>

    </div>
    
</body>
</html>