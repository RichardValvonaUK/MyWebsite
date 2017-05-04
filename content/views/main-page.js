
var postsPerPage = 3;
var postsPageNumber = 0;
var allPosts = new Array();

var oldImagesIds = new Array();

function switchToSubPage(subpageId) {
	$(".subpage").addClass("hidden");
	$("#" + subpageId).removeClass("hidden");
}

function clickedAddButton() {
	addPost();
}

function showPostsOnPage(pageNumber) {
	if (pageNumber < 0 || (pageNumber * postsPerPage >= allPosts.length)) {
		return;
	}
	
	postsPageNumber = pageNumber;
	
	var firstPost = pageNumber * postsPerPage;
	var lastPost = ((pageNumber + 1) * postsPerPage) - 1;
	
	if (lastPost >= allPosts.length) lastPost = allPosts.length - 1;
	
	
	clearPostsFromDisplay();
	
	for (var i=firstPost; i<=lastPost; i++) {
		var row = allPosts[i];
		addPostToDisplay(row["id"], row["subject"], row["content"], row["expiry_timestamp"], row["main_image_pending"]);
	}
}


function getPosts() {
	$.ajax({
		type: "POST",
		url: ajaxBase + "getPostsAjax",
		success: function (data) {
			
			if (data === "FALSE") return;
			
			allPosts = JSON.parse(data);
			
			showPostsOnPage(0);
			
			/*
			if (data !== "FALSE") {
				addPostToDisplay(subject, content, expiresIn);
				switchToSubPage('subpage-posts');
			}
			else {			
				alert("Could not add to the database");
			}
			*/
		},
		failure: function () {
			alert("The was an error submitting your results. Please try again!");
		},
	});
}


function clearPostsFromDisplay() {
	$("#user-posts").empty();
}


function addPostToDisplay(id, subject, content, expiresIn, imageId) {
	var newPost = $("#user-posts-template .user-post").clone();
	$(newPost).find(".user-post-id").val(id);
	$(newPost).find(".user-post-subject").text(subject);
	$(newPost).find(".user-post-content").text(content);
	$(newPost).find(".user-post-image").html("<img src=\"" + linkToPage('images/' + imageId) + "\" width=\"100%\" height=\"100%\" />");
	
	var tr = document.createElement("tr");
	var td = document.createElement("td");
	
	$(td).append(newPost);
	$(tr).append(td);
	$("#user-posts").append(tr);
	
}

function addPost() {
		
		var subject = $("#subpage-add-post-subject").val();
		var content = $("#subpage-add-post-content").val();
		var expiresIn = $("#subpage-add-post-expires-in").val();
		
		$.ajax({
		type: "POST",
		url: ajaxBase + "addPostAjax",
		data: {
			subject: subject,
			content: content,
			expiresIn: expiresIn
		},
		success: function (data) {
			
			if (data !== "FALSE") {
				//addPostToDisplay(subject, content, expiresIn, null);
				getPosts();
				switchToSubPage('subpage-posts');
			}
			else {			
				alert("Could not add to the database");
			}
		},
		failure: function () {
			alert("The was an error submitting your results. Please try again!");
		},
	});
}

function showFirstPostsPage() {
	showPostsOnPage(0);
}


function showPreviousPostsPage() {
	showPostsOnPage(postsPageNumber - 1);
}


function showNextPostsPage() {
	showPostsOnPage(postsPageNumber + 1);
}


function showLastPostsPage() {
	showPostsOnPage(getLastPageNumber());
}

function getLastPageNumber() {
	
	var remainder = allPosts.length % postsPerPage;
	
	if (remainder === 0) {
		return (allPosts.length / postsPerPage) - 1;
	}
	
	return (allPosts.length - remainder) / postsPerPage;
}


function clickedOnPost(userPost) {
	
	var id = userPost.find('.user-post-id').val();
	createPostMessages(id);
	switchToSubPage('subpage-messages');
}

function createPostMessages(id) {
	
}


$(document).ready(function() {
	getPosts();
});
