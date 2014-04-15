<?php get_header(); ?>

<header id="page-title">
	<h2><?php
	if( is_day() )
	_e('You are viewing the ' . get_the_date() . ' daily archives' );
	elseif ( is_month() )
	_e('You are viewing the ' . get_the_date('F, Y') .  ' monthly archives' );
	  elseif ( is_year() )
	_e('You are viewing the ' . get_the_date('Y') . ' yearly archives' );
	  elseif ( is_author() )
	_e('You are viewing the author archives' );
	  else
	_e('You are viewing the '. single_cat_title('',false) . ' Archives' );
	?></h2>
</header>

<?php get_search_form(); ?>

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
</section> <!--end primary_body-->
<?php get_footer(); ?>