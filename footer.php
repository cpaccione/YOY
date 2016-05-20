</div>
</div>
<?php $templateURL = get_bloginfo('template_directory'); ?>

<section class="footer">

<div class="container bottom">
	<footer>
		<div class="row">
			<?php dynamic_sidebar('footer-1'); ?>

<!--			<?php get_template_part('partials/footer-gallery'); ?> -->
			<div class="col-sm-3 text-right gallery-case">
				<a href="http://bgca.org/Pages/index.aspx" target="_blank"><img src="<?php echo $templateURL; ?>/images/bgca.png" class="img-responsive"></a>
				<ul class="social-media-footer">
					<a href="https://www.facebook.com/bgca.clubs" target="_blank"><li><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></li></a>
					<a href="https://www.youtube.com/playlist?list=PL8O6tdwpXwZaOkhyQVvxiNDd6RAB_2KfU" target="_blank"><li><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></li></a>
					<a href="http://twitter.com/bgca_clubs" target="_blank"><li><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></li></a>
					<a href="http://www.instagram.com/bgca_clubs" target="_blank"><li><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></li></a>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 support0">
				<p>Sponsored by</p>
				<a href="#"><img src="<?php echo $templateURL; ?>/images/disney.png"></a>
			</div>
			<div class="col-sm-6 col-xs-12 support">
				<p>With additional support provided by:</p>
				<img src="<?php echo $templateURL; ?>/images/uop.png">
				<img src="<?php echo $templateURL; ?>/images/toyota.png">
				<img src="<?php echo $templateURL; ?>/images/tbf.png">
			</div>
			<!-- <div class="col-sm-4 text-right support2">
				<a href="http://bgca.org/Pages/index.aspx" target="_blank"><img src="<?php echo $templateURL; ?>/images/bgca.png"></a>
			</div> -->
		</div>
		<div class="row copyright">
			<div class="col-lg-12">
				<p>&copy; 2015 Boys &amp; Girls Clubs of America. All Rights Reserved. BGCA is a 501(c)3 (nonprofit) organization and donations are tax deductible.</p>
				<p>
					<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'container' => '',
						'container_class' => '',
						'container_id' => '',
						'menu_class' => 'footer-menu'
						) );
					?>
				</p>
			</div>
		</div>
	</footer>
</div>

</section>

<?php wp_footer(); ?>
<script src="<?php echo $templateURL; ?>/js/main.js"></script>
</body>

</html>
