function setImagePreview(imageUploaderId, src) {
	var image = "<img width=\"200px\" height=\"200px\" src=\"" + src + "\">";
	$("#" + imageUploaderId).html(image);
}

function selectFileAndUpload(tag) {
	$('#image-uploader .input-file-tag').val(tag);
	$('#image-uploader .input-file').val("");
	$('#image-uploader .input-file').click();
}

function doneLoading(fileId, tag) {
	$("#profile-info-" + tag).val(fileId);
	setImagePreview(tag, linkToPage('images/' + fileId));
}


function applyChanges() {
	var formData = $('#profile-info').serialize();
	
	$.ajax({
		type: "POST",
		url: ajaxBase + "applyProfileChangesAjax",
		data: formData,
		success: function (data) {
			alert(data);
		},
		failure: function () {
			alert("The was an error submitting your results. Please try again!");
		},
	});
}


$(document).ready(function() {
	$('#image-uploader .form .input-file').change(function() {
	  $('#image-uploader .form').submit();
	});
});

