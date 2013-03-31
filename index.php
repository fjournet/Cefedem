<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy 
* 
* @package WordPress
* @subpackage learningTheme*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta charset="utf-8">
    <title>Cefedem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	
	<link type="text/css" href="wp-content/themes/Cefedem/css/fancymoves.css" media="screen" charset="utf-8" rel="stylesheet"  />
	<link rel="stylesheet" href="wp-content/themes/Cefedem/coin-slider/coin-slider-styles.css" type="text/css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/bootstrap/css/bootstrap-responsive.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>"  />

    <!--<link href="style.css" rel="stylesheet" type="text/css">-->
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
	  .carousel-inner {
    border-radius: 5px 5px 5px 5px;
    border: 5px solid white;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
	}
	.leg {
	position: absolute;
	top: 180px;
	visibility:hidden;
}
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    <script src="wp-content/themes/Cefedem/js/jquery.js"></script>
    <script src="wp-content/themes/Cefedem/coin-slider/coin-slider.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap.js"></script>
	
	

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
<nav class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <ul class="nav">
          <li> <a href="#">Accueil</a> </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Le centre<b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li><a href="#">La vie du centre</a></li>
            <li><a href="#"><i class="icon-user"></i>L'équipe</a></li>
            <li><a href="#">Nous trouver, nous contacter</a></li>
          </ul>
        </li>
		<li> <a href="#">Formation diplomante</a> </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Formation continue<b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li><a href="#">Catalogue des stages</a></li>
            <li><a href="#">Journée rencontre-débat</a></li>
            <li><a href="#">Formation sur site</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="icon-list-alt"></i>Formulaire de demande d'inscription</a></li>
          </ul>
        </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vie étudiante<b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="#">Aides aux étudiants</a></li>
              <li><a href="#">Se loger à Lyon</a></li>
              <li><a href="#">Se soigner</a></li>
              <li><a href="#">Se déplacer</a></li>
            </ul>
          </li>
		  <li> <a href="#">Espace réservé</a> </li> 
        </ul>
        <form class="navbar-search pull-right" action="">
          <input class="search-query" type="text" placeholder="Recherche">
        </form>
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="span12">
      <div id="bannerOuter" class="width">
        <div id="bannerWrapper">
          <div id="bannerBorder"> 
            <div id="banner" role="banner" class="preContent">
              <div id="extraContainer4"></div>
              <div class="ss3">
                <div class="pageHeader">
				<img id="logo" src='wp-content/themes/Cefedem/image/logoneuf3.gif' width="200" /></div>
              </div><!--/ss3-->
              <div class="clear"></div>
              <section id="bannerContentBox">
                <div id="bannerBoxBackground"></div>
                <div id="extraContainer5"></div>
              </section><!--/bannerContentBox-->
              </div><!--/banner-->
            </div><!--/bannerBorder-->
          </div><!--/bannerWrapper-->
        </div><!--/bannerOuter-->
      </div>
    </div>
<div class="caroussel">
<div class="span6">
<div id='coin-slider' >
    <a href="img01_url" target="_blank">
	        <img src='wp-content/themes/Cefedem/image/imagecarouss1.JPG'/>
	        <span>
            Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento.
	        </span>
	    </a>
	<a href="img02_url" target="_blank">
	    <img src='wp-content/themes/Cefedem/image/imagecarouss2.JPG'/>
	     <span>
         Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator.
	 </a
    <a href="img03_url" target="_blank">
	        <img src='wp-content/themes/Cefedem/image/imagecarouss3.JPG'/>
	        <span>
            Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator.
	        </span>
	    </a>	
</div>
</div>
</div>
	
<div class="span6">
<div id="content">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="post_content">
	<?php the_content(); ?>
	</div>
	</div>
	
	<div class="comments-template">
	<?php comments_template(); ?>
	</div>
	<?php endwhile; ?>
	<div class="navigation">
	<?php posts_nav_link(' - ','page suivante','page pr&eacute;c&eacute;dente'); ?>
	</div>
	<?php else : ?>
	<h2>Oooopppsss...</h2>
	<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
</div> 
</div>

 <div class="page-header">
    <div class="row">
      <div class="span12">
        
      </div>
    </div>

  <div class="row" id="images" class="span12">
    <div class="span3"><a href="#"><img alt="" width="200" height="150" src="wp-content/themes/Cefedem/image/intro-formation-continue.JPG"/></a>
	<h5>Aides aux étudiants</h5></div>
    <div class="span3"><a href="#"><img alt="" width="200" height="150" src="wp-content/themes/Cefedem/image/intro-formation-continue.JPG"/></a>
	<h5>Catalogue des stages</h5>
	</div>
    <div class="span3"><a href="#"><img alt="" width="200" height="150" src="wp-content/themes/Cefedem/image/intro-formation-continue.JPG"/></a>
	<h5>Plan de la formation</h5>
	</div>
    <div class="span3"><a href="#"><img alt="" width="200" height="150" src="wp-content/themes/Cefedem/image/intro-formation-continue.JPG"/></a>
	<h5>Formulaire de demande d'inscription</h5></div>
    <div class="span3"><a href="#"><img alt="" width="200" height="150" src="wp-content/themes/Cefedem/image/intro-formation-continue.JPG"/></a>
	<h5>Nous trouver, nous contacter</h5></div>
    <div class="span3"><a href="#"><img alt="" width="200" height="150" src="wp-content/themes/Cefedem/image/intro-formation-continue.JPG"/></a>
	<h5>Espace Reservé</h5></div>
  </div>

 
</div>

<div id="footer">
	<p>
	Copyright &#169; <?php print(date(Y)); ?> <?php bloginfo('name'); ?>
	<br />
	Blog propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="http://www.fran6art.com">Fran6art</a>
	<br />
	<a href="feed:<?php bloginfo('rss2_url'); ?>">Articles (RSS)</a> et <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>.
	<?php echo get_num_queries(); ?> requêtes. <?php timer_stop(1); ?> secondes.
	</p>
</div>

<script>

$(function (){
    $('.carousel').carousel({
    interval: 5000 
    });
    $("#pause").click(function() {
    $('.carousel').carousel('pause');
    $('.label').text('Mode pause').removeClass("label-info").addClass("label-warning");
    });
    $("#reprise").click(function() {
    $('.carousel').carousel('cycle');
    $('.label').text('Mode cycle').removeClass("label-warning").addClass("label-info");
    });
}); 
</script>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-transition.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-alert.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-modal.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-tab.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-popover.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-button.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap-typeahead.js"></script>
<script type="text/javascript">  
$(document).ready(function () {  
$('.dropdown-toggle').dropdown();  
});  
</script> 
<script type="text/javascript">
	    $(document).ready(function() {
	        $('#coin-slider').coinslider( );
	    });
	</script>
  </body>
</html>
