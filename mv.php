<?php require_once("includes/connection.php"); ?>
<link rel="stylesheet" type="text/css" href="css/mv.css">
<link rel="stylesheet" type="text/css" href="css/trangchu.css">



<div id="music">
                    <br>
                    <b style="font-size:18pt" > 
                        <a href="#">Music Video</a> &ensp;
                        </b>
                        <b style="font-size:12pt">
                            <u>
                                <a href="#">Nghe nhiều</a> 
                            </u>
                            &nbsp;
                            <a href="">Mới nhất</a> 
                        </b>
                    <br>                   
                    <br>
                    <?php $sql = "SELECT * FROM musicvideo";
                    $video = $conn->query($sql); 
                    ?>
                    <?php while($row = $video->fetch_assoc()) {
                        ?><video id='video1' width="49.5%" height="40%" controls= "controls">
                            <source src = "<?php echo $row['duongdan']?>" type="video/mp4"/>
                        </video>
                        <?php }?>  
                    <!-- <video id='video1' width="49.5%" height="40%" title="Nothing Gonna Change My Love For You"  controls= "controls">
                        <source src = "videos/Nothing.mp4" type="video/mp4"/>
                    </video>
                    <video width="49.5%" height="40%" title="OnlyLove" controls= "controls">
                        <source src = "videos/OnlyLove2.mp4" type="video/mp4"/>
                    </video>
                    <video width="49.5%" height="40%" title="Until You"  controls= "controls">
                        <source src = "videos/UntilYou.mp4" type="video/mp4"/>
                    </video>
                    <video width="49.5%" height="40%" title="Love To Be Loved By You"  controls= "controls">
                        <source src = "videos/LoveToBeLovedByYou.mp4" type="video/mp4"/>
                    </video> -->
                    <br>
                </div>
                <script>
                    var thisVideo = getbyID('')
                </script>