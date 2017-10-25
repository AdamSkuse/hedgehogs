<?php get_header() ?>


<div class="main-column">
<?php if( have_posts() ) : ?>

  <?php $the_query = new WP_Query( 'posts_per_page=6' ); ?>

  <?php $post_position = 1 ?>

  
  <section class="posts-grid">
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>  
    <div class="post-<?php echo $post_position ?>"><h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
      <div class="content">
        <?php the_excerpt() ?>
      </div>
    </div>
    <?php $post_position ++ ?>
  <?php 
  endwhile;
  wp_reset_postdata();
  ?>
  </section>

<?php else : ?>
	<p>Oh No, there are no posts!</p>
<?php endif ?>
<p>See all posts ...</p>
</div>
<div class="widgets-column">
<p>widgets</p>
</div>
<?php get_footer() ?>
