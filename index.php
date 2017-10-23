<?php get_header() ?>

<!-- posts grid 
<section class="posts-grid">
  <div class="post-1">1</div>
  <div class="post-2">2</div>
  <div class="post-3">3</div>
  <div class="post-4">4</div>
  <div class="post-5">5</div>
  <div class="post-6">6</div>
</section>
/posts grid -->

<?php if( have_posts() ) : ?>
  <?php $postcount = 1 ?> 
  <section class="posts-grid">

  <?php while( have_posts() ) : the_post() ?>
    <?php if($postcount <=6) : ?>
      <div class="post-<?php echo $postcount ?>"><h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
      <div class="content">
        <?php the_excerpt() ?>
      </div>
      </div>
      <?php $postcount ++ ?>
    <?php else : ?>
    <?php endif ?>

	<?php endwhile ?>

</section>
<?php else : ?>
	<p>Oh No, there are no posts!</p>
<?php endif ?>

<?php get_footer() ?>
