<?php
/**
*Template Name: Launching
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">



      <div class="" id="main-front">
        <img src="<?php echo wp_upload_dir()['baseurl'].'/2018/10/6903094-winter-scenery.jpg' ?>" alt="">
        <div class="front-content">
          <h1>WE ARE LAUNCHING IN</h1>
          <div>
            <h2>5</h2>
            <h2>DAYS</h2>
          </div>
          <div>
            <p>Codi- High quality Bootstrap HTML5Coming Soon Landing Page Template</p>
            <p>Comes with fully responsive layout, Cool features, and Clean design.</p>
          </div>
          <div class="button">
            <button type="button" name="button">toto</button>
            <button type="button" name="button">toto</button>
          </div>
          <p>Template Handcrafted By Codi'n Camp</p>

        </div>
      </div>


		</main><!-- #main -->
	</div><!-- #primary -->

  <?php
  debug(wp_upload_dir())
  ?>

<?php
get_footer();
