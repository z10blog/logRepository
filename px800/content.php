<article class="entry home has-thumb" id="post-<?php the_ID();?>">
  <div class="entry-thumb">
    <a href="<?php echo get_permalink(); ?>" title="<?php echo the_title(); ?>">
      <?php the_post_thumbnail('thumbnail');?>
    </a>
  </div>
  <div class="entry-body">
    <h2 class="entry-title">
    <a href="<?php echo get_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a>
    </h2>
    <div class="entry-content">
      <?php the_excerpt();?>
    </div>
  </div>
  <div class="entry-meta">
    <span class="category"><?php the_category();?></span>
  </div>
  <?php
// Author bio.
if (is_single() && get_the_author_meta('description')):
    get_template_part('author-bio');
endif;
?>
</article>
<!-- #post-## -->
