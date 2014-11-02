<?php get_header() ?>

<div class="column fluid grid-9 medium-100">

  <img class="small-hidden header-image" src="<?php header_image() ?>">

  <div class="family-members">

  <?php
    $pageposts = get_posts(array(
      //"category" => $wp_query->query_vars["cat"],
      "post_type" => "ua-family",
      "numberposts" => 1000
    ));
    if ($pageposts):

      //custom sort for family pages
      //sorts first by "rank", then by "sort name"
      usort($pageposts, create_function("$a, $b",
        "$rankA = get_post_meta($a->ID, "rank", true) * 1;
        $rankB = get_post_meta($b->ID, "rank", true) * 1;
        $rankA = $rankA == 0 ? 100000 : $rankA;
        $rankB = $rankB == 0 ? 100000 : $rankB;
        if ($rankA < $rankB) return -1;
        if ($rankA > $rankB) return 1;
        $nameA = get_post_meta($a->ID, "sort name", true);
        $nameB = get_post_meta($b->ID, "sort name", true);
        return strcasecmp($nameA, $nameB);"));

      global $post;
      $currentRank = 1;
      foreach ($pageposts as $post) :
        setup_postdata($post);
        $postRank = get_post_meta(get_the_ID(), "rank", true);

        $categories = get_the_category();
        $cat = $categories[0];
        get_template_part( "content", "family"); //$cat->slug );

      endforeach;
    endif;
  ?>

  </div>

</div>

<script>
  $(".has-video")
  .on("click", function() {
    var $this = $(this);
    var mug = $this.find(".mugshot");
    var w = mug.width();
    var h = mug.height();
    var src = "<iframe width="{{w}}" height="{{h}}" src="https://www.youtube-nocookie.com/embed/{{url}}?rel=0&autoplay=1&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>";
    var url = $this.data("video");
    src = src.replace("{{w}}", w).replace("{{h}}", h).replace("{{url}}", url);
    $this.html(src);
  })//.append("<a class="video-chiron">Watch bio video</a>");

  $(".video-chiron").hide();
</script>

  <?php /*get_sidebar()*/ ?>

<?php get_footer() ?>