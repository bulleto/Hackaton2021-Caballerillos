<?php
 include 'headers.php'
?>
<!--inicion de formulario-->
<div class="protect_section layout_padding">
    <h1 class="text-center pt-20">Usuario de LifeBand</h1>
    <div class = "row">
        <div class = "col-md-4 mx-auto">
            <form id="register">
                <div class="mb-3">
                    <img src="https://images.assetsdelivery.com/compings_v2/thesomeday123/thesomeday1231709/thesomeday123170900021.jpg">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <?php
                    echo "<textarea class=\"form-control\" placeholder=\"Leave a comment here\" id=\"historial\" style=\"height: 100px\" readonly>\n";
                    echo htmlspecialchars($db_usuario)."\n";
                    echo "</textarea>";
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <?php
                    echo "<textarea class=\"form-control\" placeholder=\"Leave a comment here\" id=\"historial\" style=\"height: 100px\" readonly>\n";
                    echo htmlspecialchars($db_nombre)."\n";
                    echo "</textarea>";
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <?php
                    echo "<textarea class=\"form-control\" placeholder=\"Leave a comment here\" id=\"historial\" style=\"height: 100px\" readonly>\n";
                    echo htmlspecialchars($db_apellidos)."\n";
                    echo "</textarea>";
                    ?>
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea2">Informacion de Emergencia</label>
                    <?php
                    echo "<textarea class=\"form-control\" placeholder=\"Leave a comment here\" id=\"historial\" style=\"height: 100px\" readonly>\n";
                    echo htmlspecialchars($db_urgencias)."\n";
                    echo "</textarea>";
                    ?>
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea2">Historial Clinico</label>
                    <?php
                    echo "<textarea class=\"form-control\" placeholder=\"Leave a comment here\" id=\"historial\" style=\"height: 100px\" readonly>\n";
                    echo htmlspecialchars($db_historial)."\n";
                    echo "</textarea>";
                    ?>
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea2">Identificador QR</label>
                    <?php
                    $url=$_SERVER['PHP_SELF'];
                    echo '<img class="img-thumbnail" src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl='.$_SERVER['REQUEST_URI'].'"/>';
                    ?>
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
<script src="js/perfil.js" ></script>
</body>
</html>