
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
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
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>

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
            <li><a href="#">COnditions d'accès</a></li>
            <li><a href="#">Equipe pédagogique</a></li>
            <li class="divider"></li>
            <li><a href="#">La VAE</a></li>
          </ul>
        </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Formation travailleur <b class="caret"></b> </a>
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
<div class="container"> <br/>
  <div class="row">
    <div class="span9">
      <div id="myCarousel" class="carousel">
        <div class="carousel-inner thumbnail">
        <div class="item active"> <img alt="" src="image/DSC_0042.JPG"/>
          <div class="carousel-caption">
            <p>Une présentation</p>
          </div>
        </div>
        <div class="item"> <img alt="" src="image/DSC_0044.JPG"/>
          <div class="carousel-caption">
            <p>Un autre présentation</p>
          </div>
        </div>
        <div class="item"> <img alt="" src="image/DSC_0047.JPG"/>
          <div class="carousel-caption">
            <p>Et encore une autre !</p>
         </div>
          </div>
        </div>
        <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a> </div>
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
        <h1>Le centre de formation des Enseignants de la musique</h1>
        <p>Le Centre de Formation des Enseignants de la Musique Rhône-Alpes a été créé en 1990 à l'initiative du Ministère de la Culture. C’est l’un des deux premiers centres à ouvrir ses portes dans le cadre d’une politique à long terme de l’Etat visant à promouvoir des études supérieures centrées sur la formation des professeurs de l’enseignement spécialisé.<br> 
          Dans son action, le CEFEDEM s’attache particulièrement à mener une réflexion sur les défis complexes auxquels l’enseignement spécialisé de la musique est confronté aujourd’hui et essaie de proposer des solutions pour y répondre (pratiques collectives, culture musicale, didactique de la musique…). Une part importante de son action porte sur les pratiques des amateurs et sur la diversité des genres musicaux dans l’enseignement.</p>
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
   <li>Tigre de Bali</li>
   <li>Tigre de d'Indochine</li>
   <li>Tigre de Malaisie</li>
   <li>Tigre de Java</li>
   <li>Tigre de Sumatra</li>
   <li>Tigre du Bengale</li>
   <li>Tigre de la Caspienne</li>
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
    <div class="span3">
   <form>
  <fieldset>
    <legend>Si vous voulez me laisser un message</legend>
    <h4>Comment m'avez-vous trouvé ?</h4>
    <br/>
    <label for="ami" class="radio">
      <input type="radio" name="origine" value="ami" id="ami" />
      Par un ami </label>
    <label for="web" class="radio">
      <input type="radio" name="origine" value="web" id="web" />
      Sur le web </label>
    <label for="hasard" class="radio">
      <input type="radio" name="origine" value="hasard" id="hasard" />
      Par hasard </label>
    <label for="autre" class="radio">
      <input type="radio" name="origine" value="autre" id="autre" />
      Autre... </label>
    <label for="textarea">Votre message :</label>
    <textarea id="textarea" rows="3"></textarea>
    <p>Vous pouvez aggrandir la fenêtre</p>
    <button type="submit">Envoyer</button>
  </fieldset>
</form>
</div>
  </div>
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
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>

  </body>
</html>
