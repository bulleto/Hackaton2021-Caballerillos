<?php
include_once 'partials/perfil_back.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Convid</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<!--header section start -->
<div class="header_section">
    <div class="container-fluid">
        <div class="main">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            <div class="menu_text">
                <ul>
                    <div class="togle_">
                        <div class="menu_main">
                            <ul>
                                <li><a href="#">Login</a></li>
                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                            <a href="index.html">Home</a>
                            <a href="protect.html">Protect</a>
                            <a href="about.html">About</a>
                            <a href="doctors.html">Doctors</a>
                            <a href="news.html">News</a>
                        </div>
                    </div>
                    <span class="navbar-toggler-icon"></span>
                    <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                    <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
                </ul>
            </div>
        </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <h1 class="banner_taital">Get Medical Care early</h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    <div class="more_bt"><a href="#">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img"><img src="images/banner-img.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <h1 class="banner_taital">Get Medical Care early</h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    <div class="more_bt"><a href="#">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img"><img src="images/banner-img.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <h1 class="banner_taital">Get Medical Care early</h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    <div class="more_bt"><a href="#">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_img"><img src="images/banner-img.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
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
                    <input type="text" class="form-control" id="usuario" aria-describedby="emailHelp" readonly value="<?$db_usuario?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" readonly value="<?echo $db_nombre?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp" readonly value="<?echo $db_apellidos?>">
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea2">Informacion de Emergencia</label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="emergencia" style="height: 100px" readonly value="<?echo $db_urgencias?>"></textarea>
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea2">Historial Clinico</label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="historial" style="height: 100px" readonly value="<?$db_historial  ?>"></textarea>
                </div>
            </form>
        </div>
    </div><?$stmt->close();
    $conn->close(); ?>
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
<script src="js/registro.js" ></script>
</body>
</html>