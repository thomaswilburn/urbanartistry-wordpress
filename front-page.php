<?php get_header() ?>

  <?php
    the_post();
  ?>

  <div class="content clearfix front-page">

    <!--<h2><?php the_title(); ?></h2>-->
    <?php $mainWidth = is_active_sidebar("ua_home") ? "grid-8" : "grid-12" ?>
    <div class="page-content <?php echo $mainWidth ?> mobile-12">
      <?php the_content(); ?>
    </div>

    <?php if (is_active_sidebar("ua_home")) : ?>
    <div class="sidebar grid-3 space-1 mobile-hidden">
      <?php dynamic_sidebar("ua_home"); ?>
    </div>
    <?php endif; ?>

    <div class="social-bar clearing">
      follow us on: 
      <a href="http://youtube.com/urbanartistry">youtube</a> 
      &bull; 
      <a href="https://www.facebook.com/urban.artistry">facebook</a> 
      &bull;
      <a href="http://twitter.com/urbanartistry">twitter</a>
      <div class="social-sidebar">
      <?php dynamic_sidebar("ua_home_bottom"); ?>
      </div>
    </div>


  </div>

<?php get_footer() ?>