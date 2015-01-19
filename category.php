 <?php get_header(); ?>
 
  <div class="container">
   <div class="content">
    <div class="row">
     <div class="col-lg-12">
	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-md-4">
				<div class="postbox">
					<img src="blog-image.jpg" class="img-responsive" alt="...">
					<div class="caption">
					<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content(); ?>
		</div>
		</div>
      </div>
	  <?php endwhile; endif; ?>
	  
	  </div>
    </div>
   </div>
  </div>
  
     <!-- <div class="col-md-4">
       <div class="postbox">
		<img src="blog-image.jpg" class="img-responsive" alt="...">
		<div class="caption">
        <h3>Überschrift</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
		</div>
		</div>
      </div>
	  <div class="col-md-4">
       <div class="postbox">
		<img src="blog-image.jpg" class="img-responsive" alt="...">
		<div class="caption">
        <h3>Überschrift</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
		</div>
		</div>
      </div>
	  <div class="col-md-4">
       <div class="postbox">
		<img src="blog-image.jpg" class="img-responsive" alt="...">
		<div class="caption">
        <h3>Überschrift</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
		</div>
		</div>
      </div>-->

  <?php get_footer(); ?>