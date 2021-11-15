<?php
get_header();

while (have_posts()) {
  the_post(); ?>

  <div class="container" id="index-page-body">
    <div class="row">

      <div class="col-sm-8 offset-md-2">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container-->

<?php
}

get_footer();
?>