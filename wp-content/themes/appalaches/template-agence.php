<?php
/**
 *Template Name: agence
 */
?>
<?php $url_template = get_template_directory_uri(); ?>

  <?php get_header(); ?>

  <section id="agence" class="content">
    <div class="container-fluid no-gutter slider">
      <div class="container">
        <div class="col">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-b-appalaches.svg" alt="Appalaches" class="center-block hidden-xs" id="logob">
          <ul>
            <li><a href="https://www.facebook.com/agenceappalaches" title="Facebook Appalaches" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li><a href="https://twitter.com/Appalaches_fr" title="Twitter Appalaches" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li><a href="https://plus.google.com/u/0/100386235286197107299" title="Google Appalaches" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
            <li><a href="https://www.linkedin.com/company/appalaches" title="Linkedin Appalaches" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
          </ul>
        </div>

        <div class="col">
          <p class="text-center"></p>
        </div>

        <div class="col">
          <a href="#expertise" title="scrolldown" id="pictodown" class="page-scroll center-block"></a>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter" id="expertise">
      <div class="container text-center">
        <div class="text-center row">
          <h2 class=""><?php the_field('titre_expertise'); ?></h2>
          <img src="<?php echo get_template_directory_uri(); ?>/img/schema-expertise-appalaches.svg" alt="Expertises Appalaches" class="revelshema">
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter" id="conseils">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h2><?php the_field('titre_texte_agence'); ?></h2>
            <ul><?php the_field('contenu_texte_agence'); ?>
              
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter" id="methodologie">
      <div class="container text-center">
        <div class="text-center row">
          <h2 class=""><?php the_field('titre_methodo'); ?></h2>
          <img src="<?php echo get_template_directory_uri(); ?>/img/methodologie-appalaches.svg" alt="Methodologie Appalaches" class="revelshema">
        </div>
      </div>
    </div>

    <div class="container fleurapp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/fleure-appalaches.png" alt="Fleure Appalaches" class=" fleureappalaches center-block text-center img-responsive">
    </div>

    <div class="container-fluid no-gutter" id="projet2">
      <div class="container">
        <div class="col-sm-12">
          <h2 class="text-center"><?php the_field('titre_projet'); ?></h2>
          <p class="text-center"><?php the_field('texte_projet'); ?></p>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
          <a href="<?php echo esc_url( get_permalink(19) ); ?>" class="btn btn-lg btn-sample">Contactez-nous <i class="fa fa-angle-right fa-1x"></i></a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
