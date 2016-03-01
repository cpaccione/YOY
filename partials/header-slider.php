<?php
global $post;
$slides = get_post_meta($post->ID, '_yoy_homepage_slides', true);
if ($slides):
?>
<header class="business-header">
	<div class="slider flexslider">
		<ul class="slides">
			<?php
			foreach ( (array) $slides as $key => $slide ) :
				$title = $slide['title'];
				$subtitle = $slide['subtitle'];
                $subtitle = wpautop( $subtitle );
				$url = $slide['url'];
				$image = $slide['image_id'];
				$image = wp_get_attachment_image_src( $image, 'yoy-home-slide' );
				$content = $slide['content'];
//				$content = $wp_embed->autoembed( $content );
//				$content = $wp_embed->run_shortcode( $content );
//				$content = do_shortcode( $content );
				$content = wpautop( $content );
			?>
			<li>
				<a href="<?php echo $url; ?>">
					<img src="<?php echo $image[0]; ?>" alt="">
					<div class="container flex-caption">
						<div class="row">
							<div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 pull-right">
								<div class="slider-title col-lg-12 hidden-xs"><?php echo $content; ?></div>
								<div class="slider-title2 col-lg-12"><?php echo $title; ?></div>
								<div class="slider-title3 col-lg-6"><?php echo $subtitle; ?></div>
							</div>
						</div>
					</div>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</header>
<?php endif; ?>