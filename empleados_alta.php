<?php
 include 'headers.php'
?>
      <!--inicion de formulario-->
      <div class="protect_section layout_padding">
         <h1 class="text-center pt-20">¡Registrate ahora!</h1>
         <div class = "row">
            <div class = "col-md-4 mx-auto">
               <form id="register_med">
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Usuario</label>
                     <input type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Nombre</label>
                     <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Password</label>
                     <input type="password" class="form-control" id="pass">
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Tipo</label>
                     <input type="text" value="Medico" class="form-control" id="tipo" aria-describedby="emailHelp" disabled>
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>  
               </form>
            </div>
         </div>
      </div>
      
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
              
         $(".zoom").hover(function(){
              
         $(this).addClass('transition');
         }, function(){
              
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
      <!--mis scripts--> 
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="js/medicos.js" ></script> 
   </body>
</html>