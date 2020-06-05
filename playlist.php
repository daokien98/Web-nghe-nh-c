<?php require_once("includes/connection.php"); ?>
<link rel="stylesheet" type="text/css" href="css/playlist.css">
<link rel="stylesheet" type="text/css" href="css/trangchu.css">

<div id="playlist">
                    
                    <h2 style="font-size: 20px;"><a href="#">Playlist cho hôm nay </a> </h2> 
                    <?php $sql = "SELECT * FROM playlist ";
                    $playlists = $conn->query($sql); 
                    ?> 
                    <?php while($row = $playlists->fetch_assoc()) {
                        ?>
                        <video title="Beautiful In White" width="33%" height="75%" controls= "controls"> 
                            <source src="<?php echo $row['duongdan']?>"type="video/mp4"/>
                        </video>   
                        <?php }?>         
                    <!-- <video width="33%" height="75%" title="Beautiful In White"  controls= "controls">
                        <source src = "videos/BeautifulInWhite.mp4" type="video/mp4"/>
                    </video>
                    <video width="33%" height="75%" title="Because You Live"  controls= "controls">
                        <source src = "videos/BecauseYouLive.mp4" type="video/mp4"/>
                    </video>
                    <video width="33%" height="75%" title="I Will Show You" controls= "controls">
                        <source src = "videos/IWillShowYou.mp4" type="video/mp4"/>
                    </video> -->
                    <br>
                </div>