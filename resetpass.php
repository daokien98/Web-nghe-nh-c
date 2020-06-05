<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/resetpass.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <style>
#msg {
       visibility: hidden;
    min-width: 250px;
    
    background-color:yellow;
    color: #000;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    right: 30%;
    top: 30px;
    font-size: 17px;
	margin-right:50px;
}

#msg.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {top: 0; opacity: 0;} 
    to {top: 30px; opacity: 1;}
}

@keyframes fadein {
    from {top: 0; opacity: 0;}
    to {top: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {top: 30px; opacity: 1;} 
    to {top: 0; opacity: 0;}
}

@keyframes fadeout {
    from {top: 30px; opacity: 1;}
    to {top: 0; opacity: 0;}
}
</style>
</head>

<body>
<div class="reset">

<form>
<h2 align="center" style="color:#fff;">Đổi mật khẩu</h2>
<input type="password" name="username" placeholder="Mật khẩu cũ" /><br /><br />
<input type="password" name="username" placeholder="Mật khẩu mới" /><br /><br />
<input type="password" name="username" placeholder="Nhập lại mật khẩu" /><br /><br />
<input type="button" value="Lưu lại" onclick="myFunction()"/><br /><br />
<a href="dangnhap.php" style="text-decoration:none;">Trờ về trang đăng nhập</a><br /><br />
<div id="msg">Đổi mật khẩu thành công!!</div>

<script>
function myFunction() {
    var x = document.getElementById("msg");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</form>
</div>
</body>
</html>
