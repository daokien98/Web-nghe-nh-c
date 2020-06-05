<?php require_once("includes/connection.php"); ?>
<?php
    if (isset($_POST["btn_submit"])) {
        //lấy thông tin từ các form bằng phương thức POST
        $username = $_POST["username"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
        if ($username == "" || $password == "" || $name == "" || $email == "") {
            echo "Bạn vui lòng nhập đầy đủ thông tin";
        }else{
            $sql = "INSERT INTO customers (username, password, fullname, email, createdate ) VALUES ('$username', '$password', '$name', '$email', now())";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            mysqli_query($conn,$sql);
            echo "Chúc mừng bạn đã đăng ký thành công";
        }
    }

?>


<html>
	<title>Đăng ký</title>
	<link rel="stylesheet" type="text/css" href="css/dangky.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Play">
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
	margin-right:30px;
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
	<div class="dangky">
		<form action="dangky.php" method="post">
			<h2 style="color:#fff">Đăng ký</h2>
			<!-- <input type="text" placeholder="Họ và tên" name="name" required>
                <input type="text" placeholder="Email" name="email" required> -->
                <input type="text" placeholder="Tài khoản" name="username" required>
                <input type="password" placeholder="Mật khẩu" name="password" required>
                <input type="text" placeholder="Họ và tên" name="name" required>
                <input type="text" placeholder="Email" name="email" required>
                <!-- <input type="password" placeholder="Nhập lại mật khẩu" name="password" required> -->
                <!-- <input type="submit" name="btn_submit" value="Đăng ký"></input> -->
                <input type="submit" name="btn_submit" value="Đăng ký" onclick="myFunction()"><br><br>
                <div id="msg">Chúc mừng bạn đã đăng ký thành công</div>
		</form>
		<script>
			function myFunction() {
    		var x = document.getElementById("msg");
    		x.className = "show";
    		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
			}
		</script> 
        	Đã có tài khoản?<a href="dangnhap.php" style="text-decoration: none; font-family: 'Play', sans-serif; color: yellow;">&nbsp;Đăng nhập</a>
    </form>
	</div>
</body>
</html>