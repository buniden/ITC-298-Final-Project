<?php get_header(); ?>

<h2><?php the_title(); ?></h2> 

<section id="primary_body">
    <?php if (have_posts()): while (have_posts()): the_post() ; ?>
     <article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
         
      <div class ="news_left">
          <?php the_post_thumbnail(); ?>
      </div>  
      
      <div class ="news_right"> 
	       <?php the_content(); ?>
	       <span class="cat_list">Listed in:</span> <?php the_category() ?>
	        <?php if(get_the_tags()): ?>
	          <?php the_tags(); ?>
	        <?php endif;?> 
	        <p><small>Posted <time datetime="<?php the_time ('Y-m-d'); ?>"><?php the_time('M j'); ?></time> 
	           by <?php the_author(); ?>,<?php comments_number("0 comments", "1 comment", "% comments"); ?>    
	           </small></p>  
	             
	        <?php endwhile; else: ?>
	        <p>There aren't any posts to view</p>
	        <?php endif; ?>  
       </div>
	 </article>      
</section> <!--end primary_body-->
<?php get_footer(); ?>