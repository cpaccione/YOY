<?php

/*

Template name: Home page with slider

*/


?>


<?php get_header(); ?>

<!-- Revolution Slider  -->
<section class="rev-wrap">
	
	<?php putRevSlider("homepage") ?>


</section>


<div class="container content">

	<div class="row">

<?php $templateURL = get_bloginfo('template_directory'); ?>


		<div class="col-sm-8 page-padding">


			<h1><a href="http://www.youthoftheyear.org/?p=33">IN THE NEWS</a></h1>
            
            <!--link to blog-->


			<?php
			$rpqa = array(
				'posts_per_page'=> 2,
				'post-type'=> 'post'
			);


			$rpq = new WP_Query($rpqa);
			if($rpq->have_posts()): while($rpq->have_posts()): $rpq->the_post();
			?>

			<div class="post">
				<?php the_post_thumbnail('yoy-post-thumb', array("class"=>"img-responsive")); ?>
                
				<h2>

					<a href="<?php the_permalink(); ?>" class="post-title">

						<?php the_title(); ?>

					</a>

				</h2>

				<?php the_content(); ?>

				<?php

				if (is_single()): comments_template();

				else:

				?>
				<?php endif; ?>

			</div>

			<?php endwhile; endif; ?>
			<h4 style="float:left;"><a href="http://www.youthoftheyear.org/?p=33">Read More News &raquo;</a></h4>
            
            <!--link to read more news blog-->
		</div>

		<?php get_sidebar(); ?>

<?php get_footer(); ?>


