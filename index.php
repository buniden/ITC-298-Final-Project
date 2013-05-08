<?php get_header(); ?>
<section id="primary_body">
    <?php if (have_posts()): while (have_posts()): the_post() ; ?>
     <article id="post-<?php the_ID(); ?>" <?php post_class("news"); ?>>
	    <div class ="news_left">
		    <?php the_post_thumbnail(); ?>
	    </div>

        <header><h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></header>
        <p><?php the_content(); ?></p>
        
        <p><small>Posted
            <time datetime="<?php the_time ('Y-m-d'); ?>">
		        <?php the_time('M j'); ?>
	        </time> 
		        by <?php the_author(); ?>,
		    <?php comments_number("0 comments", "1 comment", "% comments"); ?>    
		</small></p>       
      </article>  
      
    <?php endwhile; else: ?>
    <p>Write Posts</p>
    <?php endif; ?>
</section> <!--end primary_body-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>