<?php get_header() ?>

  <?php
    the_post();
  ?>

  <div class="content clearfix front-page">

    <h2><?php the_title(); ?></h2>

    <div class="grid-9 mobile-12">
      <?php the_content(); ?>
    </div>
    
    <div class="sidebar grid-3 mobile-hidden">
      <?php dynamic_sidebar("ua_home"); ?>
    </div>

    <div class="social-bar clearing">
      follow us on: 
      <a href="http://youtube.com/urbanartistry">youtube</a> 
      &bull; 
      <a href="https://www.facebook.com/urban.artistry">facebook</a> 
      &bull;
      <a href="http://twitter.com/urbanartistry">twitter</a>
    </div>


  </div>

<?php get_footer() ?>