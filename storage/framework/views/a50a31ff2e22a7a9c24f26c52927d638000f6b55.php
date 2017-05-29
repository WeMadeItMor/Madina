<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="transit transport logistique manutention">
    <meta name="author" content="Papa Mor Niane">
    <title>Madina Transit</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css">
    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="asset/css/animate.min.css" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/css/style.css" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="<?php echo e(route('home')); ?>">Madina Transit</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#page-top">Accueil</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">A Propos</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Réalisations</a>
                </li>
                <li>
                    <a class="page-scroll" href="#pricing">Loc</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Section Intro Slider
================================================== -->
<div id="carousel-example-generic" class="carousel intro slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <!-- First slide -->
        <div class="item active" style="background-image:url('asset/img/madina.jpg')">

        </div>
        <!-- /.item -->
        <!-- Second slide -->
        <div class="item" style="background-image:url('asset/img/madina0.jpg')">

        </div>
        <!-- /.item -->
        <!-- Third slide -->
        <div class="item" style="background-image:url('asset/img/madina5.jpg')">

        </div>
        <!-- /.item -->
    </div>
    <!-- /.carousel-inner -->
    <!-- Controls (currently displayed none from style.css)-->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- /.carousel -->




<?php echo $__env->yieldContent('content'); ?>



















<!-- Section Social
================================================== -->
<section id="social" class="parallax parallax-image" style="background-image:url('asset/img/madina4.jpg');">
    <div class="overlay" style="background:#222;opacity:0.5;">
    </div>
    <div class="wrapsection">
        <div class="container">
            <div class="parallax-content">
                <div class="row wow fadeInLeft">
                    <div class="col-md-3">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <h4>Twitter</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <h4>Facebook</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <a href="#"><i class="fa fa-google"></i></a>
                            </div>
                            <h4>Google</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <h4>LinkedIn</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">
</div>

<!-- Section Contact
================================================== -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="section-heading">Contactez <b>Nous</b></h2>
                <hr class="primary">
                <p>
                    Le Transit Rapide sur et Fiable !
                </p>
                <div class="regularform">
                    <div class="done">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Votre message a bien été envoyé. Merci!
                        </div>
                    </div>
                    <form method="post" action="contact.php" id="contactform" class="text-left">
                        <input name="name" type="text" class="col-md-6 norightborder" placeholder="Votre Nom *">
                        <input name="email" type="email" class="col-md-6" placeholder="Votre adresse mail  *">
                        <textarea name="comment" class="col-md-12" placeholder="Message *"></textarea>
                        <input type="submit" id="submit" class="contact submit btn btn-primary btn-xl" value="Envoyer">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Pricing
================================================== -->
<section id="pricing" class="no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><b>Nous Trouver</b></h2>
                <hr class="primary">
                <br/>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row">
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es'></script><div style='overflow:hidden;
            height:450px;width:100%;'><div id='gmap_canvas' style='height:450px;width:100%;'></div><div><small><a
                                href="http://googlemapsgenerator.com/fr/">Incluez une carte Google sur votre site</a></small></div><div><small><a href="https://sitederencontrebelge.be/">meilleurs sites</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(14.6726765,-17.429626999999982),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.6726765,-17.429626999999982)});infowindow = new google.maps.InfoWindow({content:'<strong>Madina Transit Transport Logistique</strong><br>29 Avenue de la Liberation, Dakar, Sénégal<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>        </div>

    </div>
</section>
<div class="clearfix">
</div>
<!-- Section Footer
================================================== -->
<section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="bottombrand wow flipInX">Madina Transit Transport Logistique</h1>
                <p>
                  <a href="<?php echo e(route('adminhome')); ?>" > &copy; 2017 powered by WeMadeItin </a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="asset/js/jquery.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/parallax.js"></script>
<script src="asset/js/contact.js"></script>
<script src="asset/js/countto.js"></script>
<script src="asset/js/jquery.easing.min.js"></script>
<script src="asset/js/wow.min.js"></script>
<script src="asset/js/common.js"></script>
</body>
</html>