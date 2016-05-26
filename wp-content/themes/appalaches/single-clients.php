
<?php $url_template = get_template_directory_uri(); ?>

  <?php get_header(); ?>

<section id="mookup" class="content">

    <div class="container text-center titre block-center">
      <div class="row">
        <h2><span>Client :</span> <?php the_title(); ?></h2>
      </div>
    </div>

    <div class="container-fluid no-gutter" id="clientslider">
      <div class="container text-center center-block" >
          <div id="owl-demo2" class="owl-carousel owl-theme">
<?php $images = get_field('carousel');
 foreach ($images as $image):?>
            <div class="item">
 		    	<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"class="center-block text-center img-responsive" />
              </div>
 		<?php endforeach;?>

        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter cadrerosemini">
      <div class="container">
        <div class="row col-sm-8 col-sm-offset-2">
          <h2 class="text-center"><?php the_field('nom_projet'); ?></h2>
          <p class="text-center"><?php the_field('description_projet'); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter cadregris ">
      <div class="container">
        <div class="embed-responsive embed-responsive-16by9 col-sm-8 col-sm-offset-2 video">
           <?php the_field('image_ou_video'); ?>
        </div>
      </div>
    </div>

    <div class="container fleurapp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/fleure-appalaches.png" alt="Fleure Appalaches" class=" fleureappalaches center-block text-center img-responsive">
    </div>

    <div class="container-fluid no-gutter" id="projet3">
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