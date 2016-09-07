jQuery(document).ready(function($) {

	// Init card flip function
	$(".card").flip({
		trigger: "hover"
	});

	// Stop YouTube video playing when modal is switched or closed
	$("#modal-one").on('hidden.bs.modal', function (e) {
	    $("#modal-one iframe").attr("src", $("#modal-one iframe").attr("src"));
	});

	$("#modal-two").on('hidden.bs.modal', function (e) {
			$("#modal-two iframe").attr("src", $("#modal-two iframe").attr("src"));
	});

	$("#modal-three").on('hidden.bs.modal', function (e) {
			$("#modal-three iframe").attr("src", $("#modal-three iframe").attr("src"));
	});

	$("#modal-four").on('hidden.bs.modal', function (e) {
			$("#modal-four iframe").attr("src", $("#modal-four iframe").attr("src"));
	});

	$("#modal-five").on('hidden.bs.modal', function (e) {
			$("#modal-five iframe").attr("src", $("#modal-five iframe").attr("src"));
	});

	$("#modal-six").on('hidden.bs.modal', function (e) {
			$("#modal-six iframe").attr("src", $("#modal-six iframe").attr("src"));
	});

});
