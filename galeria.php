<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Infirmary a Medical Category Flat Bootstrap Responsive Website Template | Gallery :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/swipebox.css">
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- iconos  -->
    <script src="https://use.fontawesome.com/8ac3a90da6.js"></script>

    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/numscroller-1.0.js"></script>
    <!-- //js -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <!-- swipe box js -->
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!-- //swipe box js -->

</head>

<body>
    <!-- header -->
    <div class="header wow zoomIn">
        <div class="container">
            <div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
                <ul>
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(55) 55 45 50 21 </li>
                    <li><a href="mailto: ventas@varfra.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> ventas@varfra.com</a></li>
                </ul>
            </div>
            <div class="header_right">
                <div class="login">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/laboratorio.descargar.musica/"><i class="fa fa-facebook-official" style="font-size:20px;color:white"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/symbolab_gogle"><i class="fa fa-twitter" style="font-size:20px;color:white"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/laboratorio_inc/"><i class="fa fa-instagram" style="font-size:20px;color:white"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCYB_5FtmQj6CQqkUnpOKu_A"><i class="fa fa-youtube" style="font-size:20px;color:white"></i></a></li>
                        <li>
                            <div class="search-bar">
                                <div class="search">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
                                </div>
                                <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                                <div id="small-dialog" class="mfp-hide">
                                    <div class="search-top">
                                        <div class="login_pop">
                                            <form action="#" method="post">
                                                <input type="submit" value="">
                                                <input type="text" name="Busca aqui" value="Busca aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                                            </form>
                                        </div>
                                    </div>
                                    <script>
                                        $(document).ready(function() {
                                            $('.popup-with-zoom-anim').magnificPopup({
                                                type: 'inline',
                                                fixedContentPos: false,
                                                fixedBgPos: true,
                                                overflowY: 'auto',
                                                closeBtnInside: true,
                                                preloader: false,
                                                midClick: true,
                                                removalDelay: 300,
                                                mainClass: 'my-mfp-zoom-in'
                                            });

                                        });
                                    </script>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //header -->
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
                    <div class="logo grid">
                        <div class="grid__item color-3">
                            <h1><a class="link link--nukun" href="index.php"><i></i>Va<span>rf</span>ra</a></h1>
                        </div>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil links" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--horatio">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item "><a href="index.php" class="menu__link">Inicio</a></li>
                            <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
                            <li class="menu__item"><a href="tienda.php" class="menu__link">Tienda</a></li>
                            <li class="menu__item menu__item--current"><a href="galeria.php" class="menu__link">Galería</a></li>
                            <li class="menu__item "><a href="contacto.php" class="menu__link">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>

    <!-- banner -->
    <div class="banner page_head">

    </div>
    <!-- //banner -->
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <h3 class="tittle">Galería</h3>
            <div class="gallery-grids">
                <div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
                    <a href="images/c5.png" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/c5.png" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>COMPRENSOR CON SISTEMA NEBULIZADOR</h4>
                                    <span class="separator"></span>
                                    <p>SKU: D4087</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                    <a href="images/c6.png" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/c6.png" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>COMPRENSOR NEBULIZADOR</h4>
                                    <span class="separator"></span>
                                    <p>SKU: D4089</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
                    <a href="images/c1.png" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/c1.png" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>NEBULIZADOR ECONÓMICO</h4>
                                    <span class="separator"></span>
                                    <p>SKU: D4083</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
                    <a href="images/c2.png" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/c2.png" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>NEBULIZADOR INALÁMBRICO</h4>
                                    <span class="separator"></span>
                                    <p>SKU: D4086</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
                    <a href="images/c3.png" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/c3.png" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>NEBULIZADOR PARA NIÑOS</h4>
                                    <span class="separator"></span>
                                    <p>SKU: D4088</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
                    <a href="images/c4.png" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/c4.png" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>NEBULIZADOR PRÁCTICO</h4>
                                    <span class="separator"></span>
                                    <p>SKU: D4084.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
                    <a href="images/c5.png" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/c5.png" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>COMPRENSOR CON SISTEMA NEBULIZADOR</h4>
                                    <span class="separator"></span>
                                    <p>SKU: D4087</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                    <a href="images/c7.png" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/c7.png" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>NEBULIZADOR DUAL</h4>
                                    <span class="separator"></span>
                                    <p>SKU: D4085</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!-- contact -->
    <div class="contact">
        <div class="container">

            <div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
                <h3>Contáctanos</h3>
                <div class="strip"></div>
                <ul class="con-icons">
                    <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>(55) 55 45 50 21</li>
                    <li><a href="mailto:ventas@varfra.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>ventas@varfra.com</a></li>
                </ul>
                <ul class="fb_icons">
                    <li class="hvr-rectangle-out">
                        <a href="https://www.facebook.com/laboratorio.descargar.musica/"><i class="fa fa-facebook-official" style="font-size:30px;color:white"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                    </li>
                    <li class="hvr-rectangle-out">
                        <a href="https://twitter.com/symbolab_gogle"><i class="fa fa-twitter" style="font-size:30px;color:white"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </li>
                    <li class="hvr-rectangle-out">
                        <a href="https://www.instagram.com/laboratorio_inc/"><i class="fa fa-instagram" style="font-size:30px;color:white"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </li>
                    <li class="hvr-rectangle-out">
                        <a href="https://www.youtube.com/channel/UCYB_5FtmQj6CQqkUnpOKu_A"><i class="fa fa-youtube" style="font-size:30px;color:white"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
                <h2>Visita nuestras paginas</h2>
                <div class="strip"></div>
                <p class="para"><a href="www.varfra.com">www.varfra.com</a> <br><br>
                    <a href="www.todoenequipomedico.com">www.todoenequipomedico.com</a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>