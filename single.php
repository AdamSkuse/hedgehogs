<?php get_header() ?>

<section class="columns-grid post__columns-grid">
  <div class="main-column">
<?php if (have_posts()) :
  while (have_posts()) : the_post(); ?>

  <article class="post">
    <h2><?php the_title(); ?></h2>
   		<p class="post__info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in


			<?php
			
			$categories = get_the_category();
			$separator = ", ";
			$output = '';
			
			if ($categories) {
				
				foreach ($categories as $category) {
				
					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
					
				}
				
				echo trim($output, $separator);
				
			}
			
			?>

  </p>
    <?php the_post_thumbnail('thumbnail', array('class' => 'post__main-image')); ?> 
    <?php the_content(); ?>
    <?php if( wp_get_referer() ) {
      echo '<p class="post__back-link"><a href="'. wp_get_referer() . '">&#60; &#60; Go back</a></p>';
      }
    ?>

 </article>

  <?php endwhile;

  else :
    echo '<p>No content found!</p>';

      endif; ?>

  <div class="stripe--bottom"></div>
  </div> <!-- end main-column div -->

  <div class="widgets-column">
    <?php get_sidebar() ?>
  </div> <!--end widgets column -->
</section> <!-- /columns-grid -->
<?php get_footer() ?>
