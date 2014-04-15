<?php get_header(); ?>

<header id="page-title">
	<h2><?php the_title(); ?></h2>
</header>

<section id="primary_body">
    <?php if (have_posts()): while (have_posts()): the_post() ; ?>
     <article id="post-<?php the_ID(); ?>" <?php post_class("news"); ?>>
      <?php the_content(); ?>
      </article>
    <?php endwhile; else: ?>
    <p>Write Posts</p>
    <?php endif; ?>
</section> <!--end primary_body-->
<?php get_footer(); ?>