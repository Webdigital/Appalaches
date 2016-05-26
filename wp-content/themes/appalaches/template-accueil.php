<?php
/**
 *Template Name: pageaccueil
 */
?>
<?php $url_template = get_template_directory_uri(); ?>

  <?php get_header(); ?>

  <section id="accueil" class="content">
    <div class="container-fluid no-gutter slider">
      <div class="video-container">
	      <video autoplay loop="true" width="1280" height="720">
    <source type="video/mp4" src="http://appalaches.jonusbaum.com/wp-content/uploads/2016/05/birds.mp4?dl=1">
    <source type="video/webm" src="http://appalaches.jonusbaum.com/wp-content/uploads/2016/05/birds.webm?dl=1">
    <source type="video/ogg" src="https://www.dropbox.com/s/y46oqipirl4gnt1/beepl-pink-vynil.ogv?dl=1">
  </video>
  
        <div class="col">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-b-appalaches.svg" alt="Appalaches" class="center-block hidden-xs" id="logob">
           <div class="overlay">
        <div class="col">
          <p class="text-center">Conjuguez votre stratégie<br> à la bonne personne</p>
        </div>

        <div class="col">
          <a href="#lagence" title="scrolldown" id="pictodown" class="page-scroll center-block"></a>
        </div>
  </div> <ul>
            <li><a href="https://www.facebook.com/agenceappalaches" title="Facebook Appalaches" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li><a href="https://twitter.com/Appalaches_fr" title="Twitter Appalaches" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li><a href="https://plus.google.com/u/0/100386235286197107299" title="Google Appalaches" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
            <li><a href="https://www.linkedin.com/company/appalaches" title="Linkedin Appalaches" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container-fluid no-gutter cadrerose" id="lagence">
      <div class="container">
        <div class="col">
          <h2 class="text-center"><?php the_field('lagence'); ?></h2>
          <p class="text-center" data-sr="enter left and move 50px over 1.33s"><?php the_field('texte_agence'); ?></p>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter confiance">
      <div class="container">
        <div class="col">
          <h2 class="text-center"><?php the_field('confiance'); ?></h2>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter client">
      <div class="container">
        <div class="row" >
          <div class="span12">
            <div id="owl23" class="owl-carousel">
	            
<?php $images = get_field('slider');
 foreach ($images as $image):?>
 
              <div class="item">
 		    	<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"class="center-block text-center img-responsive" />
              </div>
 		<?php endforeach;?>
            </div>
          </div>
        </div>

      </div>
    </div>
    

    <div class="container fleurapp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/fleure-appalaches.png" alt="Fleure Appalaches" class=" fleureappalaches center-block text-center img-responsive">
    </div>

    <div class="container-fluid no-gutter" id="projet">
      <div class="container">
        <div class="col-sm-12">
          <h2 class="text-center reveltitre"><?php the_field('un_projet'); ?></h2>
          <p class="text-center"><?php the_field('texte_projet'); ?></p>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
          <a href="<?php echo esc_url( get_permalink(19) ); ?>" class="btn btn-lg btn-sample">Contactez-nous <i class="fa fa-angle-right fa-1x"></i></a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>