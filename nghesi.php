<?php require_once("includes/connection.php"); ?>
<link rel="stylesheet" type="text/css" href="css/nghesi.css">

<div id="nghesi">
                    <br>
                    
                    <b style="font-size:18pt" > 
                        <a href="#">Nghệ sĩ nổi bật</a>
                     </b>
                     <br>
                     <br>
                     <?php $sql = "SELECT * FROM nghesi";
                         $nghesi = $conn->query($sql); 
                        ?>
                        <?php while($row = $nghesi->fetch_assoc()) {
                        ?><img src= "<?php echo $row['anh']?>"width="24.3%" height="32%" title="<?php echo $row['tennghesi']?>"> 
                        <?php }?>  
                     <!-- <img src= "images/huonggiang.jpg"width="15%" height="30%" title="Hương Giang"> 
                     <img src= "images/bichphuong.jpg"width="33%" height="30%" title="Bích Phương">     
                     <img src= "images/khoimy.jpg"width="20%" height="30%" title="Khởi My" >   
                     <img src= "images/hoa.jpg"width="29.5%" height="30%" title="Hòa Minzy">
                
                     <br>   
                     <img src= "images/sontung.jpg"width="17%" height="33%" title="Sơn Tùng MTP" >   
                     <img src= "images/issac.jpg"width="35%" height="33%" title="Issac">   
                     <img src= "images/erik.jpg"width="25.1%" height="33%" title="Erik">   
                     <img src= "images/ducphuc.jpg"width="20.5%" height="33%" title="Đức Phúc">  -->
                </div>