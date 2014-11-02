<?php get_header() ?>

<div class="column fluid grid-9 medium-100">

  <img class="small-hidden header-image" src="<?php header_image() ?>">

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

</div>

  <?php /*get_sidebar()*/ ?>

<?php get_footer() ?>