<?php
/**
 *Template Name: mookup
 */
?>
<?php $url_template = get_template_directory_uri(); ?>

  <?php get_header(); ?>

  <section id="mookup" class="content">
    <div class="container text-center titre block-center">
      <div class="row">
        <h2><span>Client :</span> Ecosysteme grand compte Le réseau ERDF</h2>
      </div>
    </div>

    <div class="container-fluid no-gutter" id="clientslider">
      <div class="container text-center center-block" >
          <div id="owl-demo2" class="owl-carousel owl-theme">

            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/projet-erdf2.jpg" alt="ERDF" class="img-responsive">
              <span>+</span>
            </div>

            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/projet-erdf2.jpg" alt="ERDF" class="img-responsive">
              <span>+</span>
            </div>

            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/projet-erdf2.jpg" alt="ERDF" class="img-responsive">
              <span>+</span>
            </div>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter cadrerosemini">
      <div class="container">
        <div class="row col-sm-8 col-sm-offset-2">
          <h2 class="text-center">LE PROJET LE RESEAU ERDF</h2>
          <p class="text-center">
            Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<br><br> 
            Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
          </p>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter cadregris ">
      <div class="container">
        <div class="embed-responsive embed-responsive-16by9 col-sm-8 col-sm-offset-2 video">
           <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/pYf5deeiPf4" width="300" height="150" allowfullscreen></iframe>
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
          <a href="#" class="btn btn-lg btn-sample">Contactez-nous <i class="fa fa-angle-right fa-1x"></i></a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>