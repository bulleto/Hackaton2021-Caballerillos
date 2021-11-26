<?php
 include 'headers.php'
?>
   <!-- header section end -->
   <!-- protect section start -->
   <div class="protect_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="protect_taital">How to Protect Yourself</h1>
               <p class="protect_text">English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</p>
            </div>
         </div>
         <div class="protect_section_2 layout_padding">
            <div class="row d-flex justify-content-center">
               <div class="col-md-6">
                  <form class="" method="post" id="codeForm" onsubmit="return false">
                     <div class="form-group ">
                        <label class="control-label">Información : </label>
                        <input class="form-control col-xs-1" id="content" type="text" required="required">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Tamaño : </label>
                        <input type="number" min="1" max="10" step="1" class="form-control col-xs-10" id="size" value="5">
                     </div>
                     <label class="control-label">Nivel del código (ECC) : </label>
                     <div class="form-group d-flex">
                        <select class="form-select form-select-sm" id="ecc" aria-label=".form-select-sm example">
                           <option value="H">H - Mejor</option>
                           <option value="M">M</option>
                           <option value="Q">Q</option>
                           <option value="L">L - Peor</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label class="control-label"></label>
                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Generar código QR">
                     </div>
                  </form>
                  <div class="showQRCode"></div>
               </div>
               
            </div>
         </div>
         <div class="insert-post-ads1" style="margin-top:20px;">
      </div>
   </div>
   </div>
   <!-- protect section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding margin_top90">
      <div class="container">
         <div class="footer_section_2">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Resources</h2>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="#">What we do</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Travel Advice</a></li>
                        <li><a href="#">Protection</a></li>
                        <li><a href="#">Care</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">About</h2>
                  <p class="footer_text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Contact Us</h2>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                              <span class="padding_15">Location</span></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                              <span class="padding_15">Call +01 1234567890</span></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                              <span class="padding_15">demo@gmail.com</span></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">countrys</h2>
                  <div class="map_image"><img src="images/map-bg.png"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free html Templates</a></p>
            </div>
         </div>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function() {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function() {

            $(this).addClass('transition');
         }, function() {

            $(this).removeClass('transition');
         });
      });
   </script>
   <script>
      function openNav() {
         document.getElementById("myNav").style.width = "100%";
      }

      function closeNav() {
         document.getElementById("myNav").style.width = "0%";
      }
   </script>
</body>

</html>