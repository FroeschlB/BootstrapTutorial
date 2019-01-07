<?php /* Template Name: Standard Width */ ?>

<?php get_header(); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_title(); ?>
      <br><br>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>

<?php get_footer(); ?>
