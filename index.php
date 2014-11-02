<?php get_header() ?>

  <?php
    while (have_posts()) : the_post();
  ?>

    <?php
    $categories = get_the_category();
    $cat = $categories[0];
    get_template_part( "content", $cat->slug ); ?>

  <?php
    endwhile;
  ?>
  
  <?php /*get_sidebar()*/ ?>

<?php get_footer() ?>