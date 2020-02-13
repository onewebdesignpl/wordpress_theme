<?php get_header(); ?>

<div class="container">

<h1 class="blog-title">WELCOME TO OUR BLOG</h1>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
<div class="blog-post">
  <h2 class="blog-post-title">
    <a href="<?php the_permalink(); ?>">
      <?php the_title() ?>  
    </a>
  </h2>
  <p class="blog-post-meta">
    <?php the_time('F j, Y g:i a'); ?>
  </p>
  <?php if(has_post_thumbnail()) : ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>  
  <?php the_excerpt() ?>
  <a href="<?php the_permalink(); ?>">
      <span>more</span> 
    </a>
  <hr class="featurette-divider">
</div>
<?php endwhile; ?>
<?php else : ?>
  <p><?php __('No Posts Found'); ?></p>
<?php endif; ?>
</div>

  <?php get_footer(); ?> 



  