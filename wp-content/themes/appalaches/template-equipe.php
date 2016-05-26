<?php
/**
 *Template Name: equipe
 */
?>
<?php $url_template = get_template_directory_uri(); ?>

  <?php get_header(); ?>

  <section id="equipe" class="content">
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
          <a href="#avatar" title="scrolldown" id="pictodown" class="page-scroll center-block"></a>
        </div>
      </div>
    </div>

<?php if( have_rows('equipe') ): ?>

	<div class="container" id="avatar">
      <div class="row">
        <ul class="center-block text-center">

	<?php while( have_rows('equipe') ): the_row(); 

		// vars
		$photo = get_sub_field('photo');
		$prenom = get_sub_field('prenom');
		$titre = get_sub_field('titre');

		?>

		<li class="col-sm-6 col-md-3">

				<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt'] ?>"class="center-block text-center img-responsive" />

			<div>
              <h2><?php echo $prenom ?></h2>
           <p><?php echo $titre; ?></p>
            </div>
				
			

		    

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

          
            
            
          
      </div>
    </div>


    <div class="container fleurapp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/fleure-appalaches.png" alt="Fleure Appalaches" class=" fleureappalaches center-block text-center img-responsive">
    </div>

    <div class="container-fluid no-gutter" id="projet">
      <div class="container">
        <div class="col-sm-12">
          <h2 class="text-center"><?php the_field('titre_rejoindre'); ?></h2>
          <p class="text-center"><?php the_field('texte_rejoindre'); ?></p>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
          <a href="<?php echo esc_url( get_permalink(19) ); ?>" class="btn btn-lg btn-sample">Contactez-nous <i class="fa fa-angle-right fa-1x"></i></a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>