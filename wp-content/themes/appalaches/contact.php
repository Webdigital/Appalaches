<?php
/**
 *Template Name: contact
 */
?>
<?php $url_template = get_template_directory_uri(); ?>

  <?php get_header(); ?>

  <section id="form" class="content">

    <div class="container-fluid no-gutter cadreroseform" id="adresse">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2>Vous avez un projet ?</h2>
            <p>
              Remplissez le formulaire ou contactez-nous directement à cette adresse :<br><br>
              <i class="fa fa-map-marker fa-lg" ></i>9, rue Notre Dame de Lorette - 75009 Paris<br><br>
               <i class="fa fa-envelope fa-lg"></i>contact@appalaches.fr<br><br>
               <i class="fa fa-phone fa-lg"></i> Tel : 33 (1) 46 94 66 30<br><br>
            </p>
            <img src="img/appalaches-contact.jpg" class="img-responsive text-center hidden-xs imgcontact" alt="Appalaches" style="max-width:220px; height:auto;">
          </div>

          <div class="col-sm-6 formulaire">
<?php echo do_shortcode( '[contact-form-7 id="108" title="Formulaire de contact 1"]' ); ?>

          </div>
        </div>
      </div>
    </div>
    <div class="container fleurapp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/fleure-appalaches.png" alt="Fleure Appalaches" class=" fleureappalaches center-block text-center img-responsive">
    </div>
  </section>
<?php get_footer(); ?>