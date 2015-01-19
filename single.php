<?php get_header(); ?>
<div class="container">
 <div class="content">
  <div class="row">
   <div class="col-lg-12">
    <div class="col-lg-9">
    <div class="post-body" <?php post_class() ?>>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h1 class="entry-title"><?php the_title(); ?> </h1>
		 <div class="entry-content">
			<?php the_content(); ?>
		</div>
	    <?php endwhile; endif; ?>
       </div>
	   
	   <div class="date">Post on <?php the_date(); ?> by <?php the_author_link(); ?></div>
    </div>
  <?php get_sidebar(); ?>