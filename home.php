<!--home.php template is the template for the blog page--> 
<?php get_header(); ?>

<header id="page-title">
<!--get the page title for the blog page set from wordpress settings page-->
	<h2><?php echo get_the_title(get_option('page_for_posts')) ?></h2>
</header>

<section id="primary_body">
    <?php if (have_posts()): while (have_posts()): the_post() ; ?>
     <article id="post-<?php the_ID(); ?>" <?php post_class("news"); ?>>
	    <div class ="news_left">
	        <!--get thumbnail sized image-->
		    <?php the_post_thumbnail('thumbnail'); ?>
	    </div>

	<div class ="news_right">
        <header><h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></header>
        <?php the_content(); ?>
		<footer class="blog_footer"><a href="<?php the_permalink(); ?>">Read More</a></footer>
        
        <p><small>Posted
            <time datetime="<?php the_time ('Y-m-d'); ?>">
		        <?php the_time('M j'); ?>
	        </time> 
		        by <?php the_author(); ?>,
		    <?php comments_number("0 comments", "1 comment", "% comments"); ?>    
		</small></p>    
    </div>		   
      </article>  
      
    <?php endwhile; else: ?>
    <p>Write Posts</p>
    <?php endif; ?>
    <?php
    global $wp_query;  
      
    $total_pages = $wp_query->max_num_pages;  
      
    if ($total_pages > 1){  
      
      $current_page = max(1, get_query_var('paged'));  
        
      echo paginate_links(array(  
          'base' => get_pagenum_link(1) . '%_%',  
          'format' => '/page/%#%',  
          'current' => $current_page,  
          'total' => $total_pages,  
        ));  
    } 
    ?>
</section> <!--end primary_body-->
<?php get_footer(); ?>