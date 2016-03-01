<?php get_header(); ?>
<div class="container content">

	<div class="row">
<?php $templateURL = get_bloginfo('template_directory'); ?>

		<div class="col-sm-8 page-padding">
			<?php if (is_front_page() || is_home() || is_archive()):?>
			<h1><?php _e('IN THE NEWS', 'yoy'); ?></h1>
			<?php endif; ?>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<div class="post">
				<?php the_post_thumbnail('yoy-post-thumb', array("class"=>"img-responsive")); ?>
				<h2>
					<a href="<?php the_permalink(); ?>" class="post-title">
						<?php the_title(); ?>
					</a>
				</h2>
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif; ?>
		</div>

		<?php get_sidebar(); ?>

<?php get_footer(); ?>