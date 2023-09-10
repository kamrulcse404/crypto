<?php

/**
 * The template for displaying all single posts
 *
 * @package metaswiss
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<!-- Start metaswiss News Main Content  -->
<div class="r_news_main_content_area">
	<div class="container">
	    <div class="r_brethcrumbs rb_pod">
              <a href="<?php bloginfo('url'); ?>">Home</a> <span class="rb_indicator">|</span> <a href="<?php bloginfo('url'); ?>/news">BLOG & NEWS</a> <span class="rb_indicator">|</span> <span class="rb_current"><?php the_title(); ?></span>
          </div>
		<h1 class="blog_title"><?php the_title();?></h1>
    <?php
          if ( has_post_thumbnail()) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
            ?>
            <div class="r_pd_img">
            <img src="<?php echo $large_image_url[0]; ?>" alt="" />  
          </div>
            <?php
          }
            ?>

      <?php 
      if (have_posts()) : while (have_posts()) : the_post(); 
        ?>
        <?php the_content(); ?>
        <?php 
      endwhile; 
    else: 
      ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php 
    endif; 
    ?>
	</div>
</div>
<!-- start h_csm_company_profile_contact  -->

<?php
get_footer();
