<?php require_once("includes/connection.php"); ?>
<link rel="stylesheet" type="text/css" href="css/bxhbaihat.css">



<div id="bxh1">
                    <b style="font-size:18pt" > 
                        <a href="#">  BXH Bài Hát</a>
                     </b>
                     
                     <br>
                    
                     <div id= "danhsach">
                         <ul>
                            
                              <?php $sql = "SELECT * FROM bxhbaihatvn";
                               $tenbh = $conn->query($sql); 
                                ?>

                                <?php while($row = $tenbh->fetch_assoc()) {
                                ?>
                                <li>
                                  <a href="http://localhost/webnghenhac/Trangnghenhac.php?muc=bxhbaihatvn&id=<?php echo $row['id']?>"><b style="color: red;font-size: 26px; "><?php echo $row['id']?></b>&emsp;&ensp;&nbsp;<?php echo $row['tenbaihat']?>
                                  </a>
                                <a style="color: rgb(185, 174, 185)"href="#">&emsp;&emsp;&emsp;&emsp;<?php echo $row['tencasi']?></a>
                                <?php }?> 
                                </li>
                           
                         </ul>
                     </div>
                </div>