<?php get_header(); ?>
<section id="primary_body">
    <?php if (have_posts()): while (have_posts()): the_post() ; ?>
     <article id="post-<?php the_ID(); ?>" <?php post_class('blog'); ?>>
      <h2>
          <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?> 
          </a> 
      </h2>     
        <p><?php the_content(); ?></p>
      </article>  
    <?php endwhile; else: ?>
    <p>Write Posts</p>
    <?php endif; ?>
</section> <!--end primary_body-->
<?php get_footer(); ?>