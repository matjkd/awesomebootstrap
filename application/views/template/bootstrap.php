<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png"/>
    <title>Awesome Bootstrap themes</title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <link href="css/prettyPhoto.css" type="text/css" rel="stylesheet"/>
    <link href="css/font-icomoon.css" type="text/css" rel="stylesheet"/>
    <link href="css/font-awesome.css" type="text/css" rel="stylesheet"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.css"/>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/ajax-mail.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<!--top menu-->
<section id="top-menu">
    <div class="container">
        <div class="row">
            <div class="span8 ">
                <?=$this->load->view('template/menu')?>
            </div>
            <div class="span4">
                <ul class="top-social">
                    <li><a href="#" rel="tooltip" data-placement="bottom" data-original-title="Facebook"><i class="icon-facebook"></i></a></li>
                    <li><a href="#" rel="tooltip" data-placement="bottom" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                    <li><a href="#" rel="tooltip" data-placement="bottom" data-original-title="LinkedIn"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#" rel="tooltip" data-placement="bottom" data-original-title="Pinterestin"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#" rel="tooltip" data-placement="bottom" data-original-title="Google+"><i class="icon-google-plus last"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--header-->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="span6 logo ">
                <h1><a class="logo-img site-title" href="./" title="responsive template"><i class="icon-bolt "></i> Awesome Bootstrap</a></h1>
            </div>
            <div class="span6">
            	
               
            </div>
        </div>
    </div>
</header>

<?=$this->load->view($main_content)?>

<!--footer-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="span4">
                <p><img src="example/logo-button.png" alt=""></p>
                <address>
                    <p><i class="icon-map-marker"></i> Street Name 432/2, London, 90210</p>
                    <p><i class="icon-phone"></i> (123) 456-7890</p>
                    <p><i class="icon-mobile-2"></i> (123) 456-7890</p>
                    <p><i class="icon-mail-3"></i> <a href="mailto:#">info@email.com</a></p>
                </address>
            </div>
            <div class="span8">
                <div class="row">
                    <div class="span8"></div>
                    <div class="span8">

                    </div>
                </div>
            </div>
            <div class="span4">
                <p class="heading">About Us</p>
                <p>Curabitur suscipit ultricies metus quis scelerisque. Quisque eget enim orci. Cras sagittis volutpat auctor. </p>
                <p class="heading">Subscribe</p>
                <p>Keep updated with our news. Your email is safe with us!</p>
                <div class="input-append">
                    <input type="text" placeholder="Enter Email Address" class="span2"/>
                    <button type="button" class="btn btn-inverse">Subscribe!</button>
                </div>
            </div>
            <div class="span4">
                <p class="heading">Company</p>
                <ul class="footer-navigate">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./about.html">About</a></li>
                    <li><a href="./portfolio4.html">Portfolio</a></li>
                    <li><a href="./blog-sidebar-right.html">Blog</a></li>
                    <li><a href="./services.html">Service</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--footer menu-->
<section id="footer-menu">
    <div class="container">
        <div class="row">
            <div class="span4">
                <p class="copyright">&copy; Copyright 2012. Powered by <a href="http://dxthemes.com/">DX Themes</a>.</p>
            </div>
            <div class="span8 hidden-phone">
                <ul class="pull-right">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

</body>
</html>