<?php 

session_start();

 function check_login(){
 	if(!isset( $_SESSION['fullname'])){
 		redirect("WebTrangChu.php");
 }
}
 function redirect($new_location){
 	header("location: $new_location");
 }
	

?>