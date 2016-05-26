<?php
/**
 *Template Name: realisation
 */
?>
<?php $url_template = get_template_directory_uri(); ?>

  <?php get_header(); ?>

  <section id="realisation" class="content">
<?php 
    $args = array(
	    
	'post_type' => 'clients',
	'posts_per_page' => -1, 
	); 

  $query = new WP_Query( $args ); ?>

    <div class="container-fluid" id="clients">
      <div class="row">
<?php while ($query->have_posts()) : $query->the_post(); ?> 

        <ul class="center-block text-center">
<li class="col-sm-6 col-md-4 col-lg-3">
            <a href="<?php the_permalink(); ?>">
              <div class="logoimg" style="background:url(<?php the_post_thumbnail_url(); ?>) center center no-repeat; background-size: contain;height: 50%;">
              </div>
              <h2><?php the_field('detail_projet'); ?></h2>
              <span>+</span>
            </a>
          </li>
        </ul>
        <?php endwhile;?>
      </div>
    </div>

    <div class="container-fluid no-gutter" id="avis">
        <div class="container text-center center-block" >
          <div class="row">
            <h2>Ils nous recommandent</h2>
          </div>
<?php $loop = new WP_Query( array( 'post_type' => 'verbatim', 'posts_per_page' => -1 ) ); ?>
          <div class="row">
	          
   
            <div id="owl-demo" class="owl-carousel owl-theme ">
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="item">
	              <div class="col-sm-2 col-sm-offset-1"><?php the_post_thumbnail(); ?></div>
                <div class="col-sm-8 text-left"><?php the_field('citation'); ?><br>
                <span><?php the_field('signature'); ?></span></div>
              </div>

               <?php endwhile;?>
             
            </div>
          </div>

        </div>
      </div>

    <div class="container fleurapp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/fleure-appalaches.png" alt="Fleure Appalaches" class="fleureappalaches center-block text-center img-responsive">
    </div>

    <div class="container-fluid no-gutter" id="projet2">
      <div class="container">
        <div class="col-sm-12">
          <h2 class="text-center">UN PROJET ?</h2>
          <p class="text-center">Appalaches vous aide à bien identifier votre besoin<br>
afin d'élaborer la stratégie qui vous convient</p>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
          <a href="<?php echo esc_url( get_permalink(19) ); ?>" class="btn btn-lg btn-sample">Contactez-nous <i class="fa fa-angle-right fa-1x"></i></a>
        </div>
      </div>
    </div>
  </section>
  
<?php get_footer(); ?>