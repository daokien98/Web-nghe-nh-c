<?php
session_start();
?>

<?php 
//Gọi file connection.php ở bài trước
require_once("includes/connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý

if (isset($_POST["btn_submit"])) {
	// lấy thông tin người dùng
	$username = $_POST["username"];
	$password = $_POST["password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from customers where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "Tên đăng nhập hoặc mật khẩu không đúng !";
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			header('Location: thongbaodangnhap.php');
		}
	}
}
?>

<!-- saved from url=(0038)http://localhost/demo_web/dangnhap.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="css/dangnhap.css">
<style></style></head>
<body>
	<div class="dangnhap">
		<form method="POST" action="dangnhap.php">
			<h2 style="color:lightgreen">Đăng nhập</h2>
			<input type="text" name="username" placeholder="Tài khoản">
			<input type="password" name="password" placeholder="Mật khẩu">
			<input type="submit" name="btn_submit" value="Đăng Nhập"><!-- <a href="thongbaodangnhap.php"> --><br><br>

			<div id="container">
				<a href="http://localhost/webnghenhac/resetpass.php" style="margin-right: 0px; font-size: 14px; font-family: Tahoma, Geneva, sans-serif">Đổi mật khẩu</a>
				<a href="http://localhost/webnghenhac/quenpass.php" style="margin-right: 0px; font-size: 14px; font-family: Tahoma, Geneva, sans-serif">Quên mật khẩu</a>
			</div><br><br><br><br><br>Chưa có tài khoản?<a href="http://localhost/webnghenhac/dangky.php#">&nbsp;Đăng ký</a>
			
		</form>
	</div>

</body></html>