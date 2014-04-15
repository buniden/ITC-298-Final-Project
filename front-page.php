
<?php get_header(); ?>

<section id="primary_body">
	<article id="slideshow">
	<!--flexslider-->
		<div class="flexslider">
		  <ul class="slides">
			 
            <?php $slideshowQuery = new WP_Query ('cat=9'); ?>
             
            <?php if($slideshowQuery->have_posts()):
            while ($slideshowQuery->have_posts()) : $slideshowQuery->the_post(); ?>
           <li> <?php the_post_thumbnail('slider'); ?></li>
            <?php endwhile; endif; ?>
	  	 </ul>	
	  	 <!--end flex slider -->
		</div>
	</article>
</section> <!--end primary_body-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>