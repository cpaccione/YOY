jQuery(document).ready(function($) {

	// Init card flip function
	$(".card").flip({
		trigger: "hover"
	});

	// Stop YouTube video playing when modal is switched or closed
	$("#modal-one, #modal-two").on('hidden.bs.modal', function (e) {
	    $("#modal-one iframe, #modal-two iframe").attr("src", $("#modal-one iframe, #modal-two iframe").attr("src"));
	});

});
