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
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    <script src="wp-content/themes/Cefedem/js/jquery.js"></script> 
    <script src="wp-content/themes/Cefedem/bootstrap/js/bootstrap.min.js"></script>

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
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Formation initiale<b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li><a href="#">Contenu de la formation</a></li>
            <li><a href="#">Condition d'accès</a></li>
            <li><a href="#">Equipe pédagogique</a></li>
            <li class="divider"></li>
            <li><a href="#">Pré-inscription en ligne</a></li>
          </ul>
        </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Formation travailleur <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li><a href="#">Contenue de le formation</a></li>
            <li><a href="#">Conditions d'accès</a></li>
            <li><a href="#">Equipe pédagogique</a></li>
            <li class="divider"></li>
            <li><a href="#">La VAE</a></li>
          </ul>
        </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Formation professionnelle <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="#">Catalogue de stage</a></li>
              <li><a href="#">Modalités d'inscirption</a></li>
              <li><a href="#">Journées rencontre débat</a></li>
              <li class="divider"></li>
              <li><a href="#">Demande d'information</a></li>
            </ul>
          </li>
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
                <div class="pageHeader"></div>
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
<div class="container"> <br/>
  <div class="row">
    <div class="span9">
      <div id="myCarousel" class="carousel">
        <div class="carousel-inner thumbnail">
        <div class="item active"> <img alt="" src="wp-content/themes/Cefedem/image/312.JPG"/>
          <div class="carousel-caption">
            <p>Une présentation</p>
          </div>
        </div>
        <div class="item"> <img alt="" src="wp-content/themes/Cefedem/image/bulletin13couv2.JPG"/>
          <div class="carousel-caption">
            <p>Un autre présentation</p>
          </div>
        </div>
        <div class="item"> <img alt="" src="wp-content/themes/Cefedem/image/elm11.JPG"/>
          <div class="carousel-caption">
            <p>Et encore une autre !</p>
         </div>
          </div>
        </div>
        <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a> 
		</div>
    </div>
    <div class="span3 btn-group">
      <button id="pause" class="btn btn-warning pull-right" >Pause</button>
      <button id="reprise" class="btn btn-info pull-right" >Reprise</button>
    </div>
  </div>
  <span class="label label-info">Mode cycle</span> </div>
   <div class="page-header">
    <div class="row">
      <div class="span12">
        
      </div>
    </div>
  <div class="row">
    <div class="span12">...</div>
  </div>

  <div class="row">
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
  </div>
  <div class="row">
    <div class="span4">
    <h5>Voici les sous-espèces des tigres :</h5>
<br/>
<ul>
   <li>Tigre de Sibérie</li>
   <li>Tigre de Chine méridionale</li>
</ul>
</div>
    <div class="span8">...</div>
  </div>
  <div class="row">
    <div class="span9">
    <table class="table table-bordered table-striped table-condensed">
   <caption>
      <h4>Les menaces pour les tigres</h4>
   </caption>
   <thead>
      <tr>
            <th>Lieu</th>
            <th>Menace</th>
      </tr>
   </thead>
   <tbody>
          <tr>
            <td>Grand Mekong</td>
            <td>Demande croissante de certaines parties de l’animal pour la médecine chinoise traditionnelle 
et fragmentation des habitats du fait du développement non durable d’infrastructures</td>
          </tr>
          <tr>
            <td>Île de Sumatra</td>
            <td>Production d’huile de palme et de pâtes à papiers</td>
          </tr>
          <tr>
            <td>Indonésie et Malaisie</td>
            <td>Pâte à papier, l’huile de palme et le caoutchouc</td>
          </tr>
          <tr>
            <td>États-Unis</td>
            <td>Les tigres captifs représentent un danger pour les tigres sauvages</td>
          </tr>
          <tr>
            <td>Europe</td>
            <td>Gros appétit pour l’huile de palme</td>
          </tr>
          <tr>
            <td>Népal</td>
            <td>Commerce illégal de produits dérivés de tigres</td>
          </tr>
    </tbody>
</table></div>
  </div>
</div>
<div id="content">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="post_content">
	<?php the_content(); ?>
	</div>
	</div>
	<p class="postmetadata">
		<?php the_time('j F Y') ?> par <?php the_author() ?> | 
		Cat&eacute;gorie: <?php the_category(', ') ?> | 
		<?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> 
		<?php edit_post_link('Editer', ' &#124; ', ''); ?>
	</p>
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

  </body>
</html>
