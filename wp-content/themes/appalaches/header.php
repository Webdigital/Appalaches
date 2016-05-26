<!DOCTYPE html>
<html lang="FR">
  <head>
    <meta charset="utf-8">
    <title>Agence - Appalaches</title>
    <meta name="description" content="Appalaches" />
    <meta name="keywords" content="Appalaches" />
    <link rel="canonical" href="http://www.appalaches.fr/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="<img src="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<img src="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<img src="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<img src="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<img src="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<img src="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<img src="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<img src="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<img src="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<img src="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<img src="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<img src="<?php echo get_template_directory_uri(); ?>/img/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<img src="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png" sizes="16x16">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magic.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/video.css">
    <?php wp_head(); ?>  
    
        
	<!--[if lt IE 9]>
	<script>
	document.createElement('video');
	</script>
	<![endif]-->
     
    
  </head>

   <body>
    <div class="container-fluid no-gutter">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="accueil" title="Appalaches"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-s-appalaches.svg" alt="Appalaches" class="center-block"></a>
          </div>

          <div class="addcont text-right hidden-xs">tel: +33 (1) 46 94 66 30 <strong>//</strong> contact@appalaches.fr</div>
          <div id="navbar" class="navbar-collapse collapse">
            <?php 
            wp_nav_menu( array(
              'menu' => 'top_menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'nav navbar-nav navbar-right',
              //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker())
            );
            ?>
          </div>
        </div>
      </nav>
    </div> 