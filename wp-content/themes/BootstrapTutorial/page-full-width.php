<?php /* Template Name: Full Width */ ?>

<?php get_header(); ?>

  <div class="container-fluid">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_title(); ?>
      <br><br>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>

<?php get_footer(); ?>
