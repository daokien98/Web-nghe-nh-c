<?php require_once("includes/connection.php"); ?>
<link rel="stylesheet" type="text/css" href="css/banner.css">
<link rel="stylesheet" type="text/css" href="css/trangchu.css">

              <div id="slideshow">
                    <br>
                    <?php  $sql = "SELECT * FROM banner ";
                    $banners = $conn->query($sql); 
                   ?>
                    <div class="slideshow-container"> 
                    <?php while($row = $banners->fetch_assoc()) {
                        ?>
                        <div class="mySlides fade"> <a href="http://localhost/webnghenhac/Trangnghenhac.php?muc=banner&id=<?php echo $row['id']?>"><img src="<?php echo $row['duongdan']?>"  width="100%" height="100%"></a>  </div>    
                        <?php }?>

                       

                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    <br>
                    <div style="text-align:center">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>  
                    <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);   
                    function plusSlides(n) {
                      showSlides(slideIndex += n);
                    }    
                    function currentSlide(n) {
                      showSlides(slideIndex = n);
                    }    
                    function showSlides(n) {
                      var i;
                      var slides = document.getElementsByClassName("mySlides");
                      var dots = document.getElementsByClassName("dot");
                      if (n > slides.length) {slideIndex = 1}    
                      if (n < 1) {slideIndex = slides.length}
                      for (i = 0; i < slides.length; i++) {
                          slides[i].style.display = "none";  
                      }
                      for (i = 0; i < dots.length; i++) {
                          dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                      dots[slideIndex-1].className += " active";
                    }
                    </script>
                </div>
