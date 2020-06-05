<?php require_once("includes/connection.php"); ?>
<link rel="stylesheet" type="text/css" href="css/album.css">


<div id="album">
                    <b style="font-size:18pt" > 
                        <a href="#">Album</a> &ensp;
                        </b>
                        <b style="font-size:12pt">
                            <u>
                                <a href="#">Nghe nhiều</a> 
                            </u>
                            &nbsp;
                            <a href="#">Mới nhất</a> 
                        </b>
                    <br>
                    <br>
                    <?php $sql = "SELECT duongdan FROM album";
                    $albums = $conn->query($sql); 
                    ?>
                    <?php while($row = $albums->fetch_assoc()) {
                        ?><img src="<?php echo $row['duongdan']?>"width="32.5%" height="69%" >
                        <?php }?>  
                    <br>
                        <b style="font-size: 16px;color: white; ">
                            <a href="#">Áo Hoa</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&ensp;&nbsp;
                            <a href="#">Bao Nhiêu Cách Để Quên</a> &emsp;&emsp;
                            <a href="#">Bay Cùng Thời Gian</a></b> 
                        <br>
                        <a style="color: rgba(245, 241, 241, 0.856);" href="#">Trung Quang</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&nbsp;
                        <a style="color: rgba(245, 241, 241, 0.856);" href="#">Nguyễn Phi Hùng</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        <a style="color: rgba(245, 241, 241, 0.856);" href="#">Khương Hùng</a>
                  
                </div>