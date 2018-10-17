<?php
/**
*Template Name: Launching
*/

get_header();

$page_id = get_the_ID();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">



      <div class="" id="main-front">
        <img src="<?php echo wp_upload_dir()['baseurl'].'/2018/10/6903094-winter-scenery.jpg' ?>" alt="">
        <div class="front-content">
          <h1><?php	echo get_post_meta($page_id, 'title', true);	?></h1>
          <div>
						<?php get_template_part('template-parts/content', 'countdown') ?>
          </div>
          <div>
            <p>Codi- High quality Bootstrap HTML5Coming Soon Landing Page Template</p>
            <p>Comes with fully responsive layout, Cool features, and Clean design.</p>
          </div>
          <div class="bttn">
              <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Launch demo modal
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
              Launch demo modal
            </button>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Yop
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    YEP
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Button trigger modal -->
          <p>Template Handcrafted By Codi'n Camp</p>

        </div>
        <!-- front-content -->
      </div>
      <!-- main-front -->


		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
