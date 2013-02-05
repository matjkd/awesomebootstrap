<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
      <meta name="description" content="Awesome Bootstrap is a resource for twitter bootstrap themes and templates. Free and Premium.">
               
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>images/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>images/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>images/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>images/apple-touch-icon-57-precomposed.png"/>
    <title>Awesome Bootstrap themes</title>
    <link href="<?=base_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="<?=base_url()?>css/style.css" type="text/css" rel="stylesheet"/>
    <link href="<?=base_url()?>css/prettyPhoto.css" type="text/css" rel="stylesheet"/>
    <link href="<?=base_url()?>css/font-icomoon.css" type="text/css" rel="stylesheet"/>
    <link href="<?=base_url()?>css/font-awesome.css" type="text/css" rel="stylesheet"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.css"/>
    <![endif]-->
 <?=$this->load->view('template/analyticstracking')?>  
</head>

<body>

<!--top menu-->
<section id="top-menu">
    <div class="container">
        <div class="row">
            <div class="span8 ">
            	 <nav id="menu" class="clearfix pull-left">
                    <ul>
                <?=$this->load->view('template/menu')?>
                      </ul>
                </nav>
            </div>
            <div class="span4">
             &nbsp;
            </div>
        </div>
    </div>
</section>

<!--header-->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="span6 logo ">
                <h1><a class="logo-img site-title" href="./" title="responsive template">Awesome Bootstrap</a></h1>
            </div>
            <div class="span6 pull-right">
            	
               <?=$this->load->view('ads/smallbanner')?>
            </div>
        </div>
    </div>
</header>

<!--page header / breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
        <div class="page-header">
            <div class="row">
                <div class="span8">
                	
                	<?php if(!isset($title)) { $title="Awesome"; $subtitle = ""; }?>
                    <h1><?=$title?> <small><?=$subtitle?></small></h1>
                    <div><a href="<?=base_url()?>">Home</a> &nbsp;&rsaquo;&nbsp;</div>
                </div>
                <div class="span4 hidden-phone">
                    <section class="search clearfix">
                        &nbsp;
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>



<!--container-->
	<section id="container">
	    <div class="container">
	<?=$this->load->view($main_content)?>
		</div>
	</section>
	
	
<!--footer-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="span4">
               &nbsp;
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
                <p>Awesome Bootstrap is a resource for Twitter Bootstrap. </p>
                <p class="heading">Subscribe</p>
                <p>Keep updated with our news. Your email is safe with us!</p>
                <div class="input-append">
                	<form action="http://redstudio.us1.list-manage1.com/subscribe/post?u=07f8348178863dab1d4d377a3&amp;id=c94f86f57f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                   <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                    </form>
                </div>
            </div>
            <div class="span4">
                <p class="heading">Company</p>
                <ul class="footer-navigate">
                     <?=$this->load->view('template/menu')?>
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
                <p class="copyright">&copy; Copyright 2012. Developed by <a href="http://www.redstudio.co.uk/">Redstudio</a>.</p>
                <p><a href="#">Privacy Policy</a></p>
                   
            </div>
            <div class="span8 hidden-phone">
               
            </div>
        </div>
    </div>
</section>

 <script type="text/javascript" src="<?=base_url()?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/superfish.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/hoverIntent.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.tweet.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/ajax-mail.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</body>
</html>