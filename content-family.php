<?php
  if (get_the_content()) {
    $postWidth = "grid-12";
    $photoWidth = "grid-6";
  } else {
    $postWidth = "grid-6";
    $photoWidth = "grid-12";
  }
  $id = get_the_id();
?>

<div class="bio-post <?php echo $postWidth ?> mobile-12 content">
<h2><?php the_title() ?></h2>
<h3 class="artistry ua-red"><?php echo get_post_meta($id, "title", true) ?></h3>

<?php if (has_post_thumbnail()) : ?>
  <?php $video = get_post_meta($id, "bio video", true) ?>
  <div class="mugshot-container <?php if ($video) echo "has-video "; echo $photoWidth; ?> mobile-12" data-video="<?php echo $video?>">

    <img class="mugshot" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $id ) ); ?>">

    <?php if ($video) : ?>
      <div class="play-button"></div>
    <?php endif ?>

  </div>

  <div class="grid-6 mobile-12">
    <?php the_content() ?>
    <?php if (get_post_meta($id, "link", true)) : ?>
    <a href="<?php echo get_post_meta($id, "link", true) ?>" class="bio-link">Read more...</a>
    <?php endif; ?>
  </div>
<?php endif; //has_post_thumbnail()?>

</div>