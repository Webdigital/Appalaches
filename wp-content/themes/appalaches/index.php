<?php
/**
 *Template Name: index
 */
?>
<?php $url_template = get_template_directory_uri(); ?>

  <?php get_header(); ?>

  <section id="accueil" class="content">
    <div class="container-fluid no-gutter slider">
      <div class="container">
        <div class="col">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-b-appalaches.svg" alt="Appalaches" class="center-block hidden-xs" id="logob">
          <ul>
            <li><a href="#" title="Facebook Appalaches"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li><a href="#" title="Twitter Appalaches"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li><a href="#" title="Google Appalaches"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
            <li><a href="https://www.linkedin.com/company/10435695?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10435695%2Cidx%3A1-1-1%2CtarId%3A1463001046398%2Ctas%3Aappalaches" title="Linkedin Appalaches"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
          </ul>
        </div>

        <div class="col">
          <p class="text-center">Conjuguez votre stratégie<br> à la bonne personne</p>
        </div>

        <div class="col">
          <a href="#lagence" title="scrolldown" id="pictodown" class="page-scroll center-block"></a>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter cadrerose" id="lagence">
      <div class="container">
        <div class="col">
          <h2 class="text-center">L’agence</h2>
          <p class="text-center" data-sr="enter left and move 50px over 1.33s">Appalaches vous accompagne dans l'élaboration de votre stratégie marketing,<br>

et dans la réalisation et la mise en place de vos outils de communication.</p>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter confiance">
      <div class="container">
        <div class="col">
          <h2 class="text-center">Ils nous font confiance</h2>
        </div>
      </div>
    </div>

    <div class="container-fluid no-gutter client">
      <div class="container">
        <div class="row" >
          <div class="span12">
            <div id="owl-example" class="owl-carousel">

              <div class="item darkCyan">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="Touch" class="center-block text-center img-responsive">
              </div>
              <div class="item forestGreen">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="Grab" class="center-block text-center img-responsive">
              </div>
              <div class="item orange">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="Responsive" class="center-block text-center img-responsive">
              </div>

              <div class="item yellow">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="CSS3" class="center-block text-center img-responsive">
              </div>

              <div class="item dodgerBlue">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="Multi" class="center-block text-center img-responsive">
              </div>

              <div class="item skyBlue">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="Modern Browsers" class="center-block text-center img-responsive">
              </div>

              <div class="item zombieGreen">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="Zombie Browsers - old ones" class="center-block text-center img-responsive">
              </div>

              <div class="item violet">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="Take Control" class="center-block text-center img-responsive">
              </div>

              <div class="item yellowLight">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="Light" class="center-block text-center img-responsive">
              </div>

              <div class="item steelGray">
                <img src="<?php echo get_template_directory_uri(); ?>/img/erdf-logo-small.jpg" alt="Tons of Opotions" class="center-block text-center img-responsive">
              </div>

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
          <h2 class="text-center reveltitre">UN PROJET ?</h2>
          <p class="text-center">Appalaches vous aide à bien identifier votre besoin<br>
afin d'élaborer la stratégie qui vous convient</p>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
          <a href="contact" class="btn btn-lg btn-sample">Contactez-nous <i class="fa fa-angle-right fa-1x"></i></a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>