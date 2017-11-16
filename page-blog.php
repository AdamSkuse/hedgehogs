<?php get_header() ?>

<section class="columns-grid">
  <div class="main-column">

  <?php 
    //  $temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query('posts_per_page=6' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<article class="search-result">
		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
    <br>
    <hr>
</article>
		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="nav-posts__prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="nav-posts__next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>
    <br>
		<nav id="nav-posts">
			<div class="nav-posts__prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>
    <br>

		<?php } ?>
		<?php wp_reset_postdata(); ?>

  <div class="stripe--bottom"></div>
  </div> <!-- end main-column div -->

  <div class="widgets-column">
    <?php get_sidebar() ?>
  </div> <!--end widgets column -->
</section> <!-- /columns-grid -->
<?php get_footer() ?>
