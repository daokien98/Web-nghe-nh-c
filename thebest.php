<?php require_once("includes/connection.php"); ?>
<link rel="stylesheet" type="text/css" href="css/thebest.css">
<link rel="stylesheet" type="text/css" href="css/trangchu.css">

<div id="best">
                    <br>
                        <b style="font-size:18pt" > 
                            <a href="#"> The best</a>
                           <br>
                        </b>
                        <br>
                        <?php $sql = "SELECT * FROM thebest";
                            $thebest = $conn->query($sql); 
                        ?>
                        <?php while($row = $thebest->fetch_assoc()) {
                            ?><img src="<?php echo $row['duongdan']?>"width="32.5%" height="69%" >
                        <?php }?>  
                    <br>
                        <b style="font-size: 16px; ">
                            <a href="#">The Best Of All</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <a href="#">The Best Of Cove</a>r &emsp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;
                            <a href="#">The Best Of Vpop</a></b> 
                        <br>
                       
                </div>