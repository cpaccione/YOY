<div class="col-sm-3 text-left gallery-case">
	<p class="gallery text-left">PHOTO GALLERY</p>
	<?php
	$f = new phpFlickr(yoy_get_option('flickr_api_key'));

	$recent = $f->people_getPhotos(yoy_get_option('flickr_user_id'), array('per_page'=> yoy_get_option('flickr_image_count'), 'page'=>1));
	foreach ($recent['photos']['photo'] as $photo) {
		echo "<a href='http://www.flickr.com/photos/" . $photo['owner'] . "/" . $photo['id'] . "/'>";
		echo "<img src='". $f->buildPhotoURL($photo, "square"). "' class='col-sm-4'>";
		echo "</a>";}

	?>
</div>
