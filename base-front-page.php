<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
   <div class="slider"> 
        <input type="radio" id="control1" name="controls" checked="checked"/>
        <label for="control1"></label>
        <input type="radio" id="control2" name="controls"/>
        <label for="control2"></label>
        <input type="radio" id="control3" name="controls"/>
        <label for="control3"></label>
        <input type="radio" id="control4" name="controls"/>
        <label for="control4"></label>
        <input type="radio" id="control5" name="controls"/>
        <label for="control5"></label>
        <div class="sliderinner">
            <ul>
                <li>
                    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/branch.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 1</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/eraser-moss.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 2</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/siren.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 3</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/watercolor.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 4</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/flowers.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 5</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div><!-- /.slider-->
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
