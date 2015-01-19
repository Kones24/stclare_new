<!DOCTYPE html>
<html lang="de">
 <head>
  <title><?php bloginfo("name"); // Anzeigen des Seitentitels ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <?php wp_head(); ?>
 </head>
 <body>
  <header>
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
     <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> Logo </a>
     </div>
     <div class="navbar-collapse navbar-right collapse" id="navbar" aria-expanded="false">
      <ul class="nav navbar-nav">
       <li class="active"><a href="#home">Startseite</a></li>
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Aktivitäten <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
         <li><a href="#activityblog">Aktivitätenblog</a></li>
         <li><a href="#boardmeeting">Boardmeeting</a></li>
        </ul>
       </li>
       <li><a href="#gallery">Galerie</a></li>
       <li><a href="#team">Team</a></li>
       <li><a href="#aboutus">Über Uns</a></li>
       <li><a <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
      </ul>
     </div>
    </div>
   </nav>
   <div class="container">
    <div class="col-lg-4 pull-right">
     <div class="input-group">
      <input type="text" class="form-control" placeholder="Suchbegriff hier eingeben">
      <span class="input-group-btn">
       <button class="btn btn-default" type="button">Suche</button>
      </span>
     </div>
    </div>
   </div>
  </header>