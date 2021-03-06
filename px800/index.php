<?php get_header();?>
<section id="content">
  <?php if (have_posts()): ?>
  <?php
// Start the loop.
while (have_posts()): the_post();

    /*
     * Include the Post-Format-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     */
    get_template_part('content', get_post_format());

    // End the loop.
endwhile;

else:
    get_template_part('content', 'none');

endif;
?>
</section>
<?php get_footer();?>
