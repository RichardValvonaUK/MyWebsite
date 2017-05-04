var dialog;
var form;

function toggleVisibility(selector) {
	var element = $(selector);

	var visibility = element.css("visibility");
	
	if (visibility == "visible") {
		element.css("visibility", "hidden");
	}
	else {
		element.css("visibility", "visible");
	}
}

function toggleMenu() {
	var selector = "#mobile-menu";
	var bodySelector = ".site-wrapper";

	var element = $(selector);
	var bodyElement = $(bodySelector);
	
	if (element.hasClass("hidden-on-mobile")) {
		$("#richard1029384756-menu-bars").addClass("full-height");
		element.removeClass("hidden-on-mobile");
		bodyElement.addClass("non-scrollable-on-mobile");
	}
	else {
		$("#richard1029384756-menu-bars").removeClass("full-height");
		element.addClass("hidden-on-mobile");
		bodyElement.removeClass("non-scrollable-on-mobile");
	}
	
}

function addUser() {
	
}

function showDialog() {
	dialog.dialog( "open" );
}

function clearSelectMenuItem() {
	$("ul.menu li").removeClass("always-selected");
	$("#left-side-menu nav.vertical-menu ul.menu ul").removeClass("always-visible");
}

function selectMenuItem(item, view) {
	clearSelectMenuItem();

	$(item).parent().addClass("always-selected");
	$(item).parentsUntil("ul.menu", "ul").addClass("always-visible");
	
	var popupMenu = $(".edit-menu-options-pop-up");
	popupMenu.detach().appendTo($(item).parent());
	popupMenu.addClass("always-visible");
}


function editView(view) {

	var r = confirm("Are you sure you want to edit this view? Any unsaved changes may be lost.");

	if (r) {
		redirectToPage("edit-pages?view=" + view);
	}
}

/*
a
  bc
    defg
    hijk
lmn
  op    qr
st
      uv
                wxyz
*/
function indentSelection(textArea, direction) {
	var textAreaObj = $(textArea);
	
	var oldVal = textAreaObj.val();
	
	var selectionStart = textAreaObj[0].selectionStart;
	var selectionEnd = textAreaObj[0].selectionEnd;
	
	var toReplace;
	var replacement;
	
	
	var firstPart = oldVal.substring(0, selectionStart);
	var secondPart = oldVal.substring(selectionStart, selectionEnd);
	var thirdPart = oldVal.substring(selectionEnd);
	
	if (selectionStart == selectionEnd && direction != 'left') {
		var newVal = firstPart + '    ' + thirdPart;
	
		var newCaretPos = selectionStart + 4;
	
		textAreaObj.val(newVal);
		textAreaObj[0].setSelectionRange(newCaretPos, newCaretPos);
	}
	else {
		if (direction == 'left') {
			toReplace = '\n    ';
			replacement = '\n';
		}
		else {
			toReplace = '\n';
			replacement = '\n    ';
		}
	
		var firstPartLastIndexOfN = firstPart.lastIndexOf('\n');

		var selectionStartDiff = 0;

		if (direction == 'left') {
			if (firstPart.lastIndexOf('\n    ') == firstPart.lastIndexOf('\n')) {
				selectionStartDiff = -4;
			}
		}
		else {
			selectionStartDiff = 4;
		}

		if (firstPartLastIndexOfN != -1) {
			firstPart = oldVal.substring(0, firstPartLastIndexOfN);
			secondPart = oldVal.substring(firstPartLastIndexOfN, selectionStart) + secondPart;
		}

		if (secondPart.endsWith('\n')) {
			secondPart = secondPart.substring(0, secondPart.length-1);
			thirdPart = '\n' + thirdPart;
		}
	
		secondPart = secondPart.split(toReplace).join(replacement);
	
		var newVal = firstPart + secondPart + thirdPart;
	
		var lengthDiff = newVal.length - oldVal.length;
	
		textAreaObj.val(newVal);
		textAreaObj[0].setSelectionRange(selectionStart + selectionStartDiff, selectionEnd + lengthDiff);
	}
}

var pageScrollY = 0;

$(document).ready(function() {
	
	dialog = $( "#add-post-dialog-form" ).dialog({
		autoOpen: false,
		height: 300,
		width: 350,
		modal: true,
		buttons: {
			"Create an account": addUser,
			Cancel: function() {
			  dialog.dialog( "close" );
			}
		},
		close: function() {
			form[ 0 ].reset();
			//allFields.removeClass( "ui-state-error" );
		}
	});
	 
	form = dialog.find( "form" ).on( "submit", function( event ) {
		event.preventDefault();
		addUser();
	});

	$( "#create-user" ).button().on( "click", function() {
		dialog.dialog( "open" );
	});
	
	$('.site-wrapper').on( "scroll", function(e){
		var newPageScrollY = $(".site-wrapper").scrollTop();
		if (newPageScrollY > pageScrollY || (newPageScrollY == pageScrollY && newPageScrollY > 10) ) {
			$("#richard1029384756-menu-bars").addClass("hidden");
		}
		else {
			$("#richard1029384756-menu-bars").removeClass("hidden");
		}
		
		pageScrollY = newPageScrollY;
	});
	
	$('textarea.code-block').on('keydown', function(e) { 
	  var keyCode = e.keyCode || e.which; 

		if(event.shiftKey && keyCode == 9) {
			e.preventDefault();
			indentSelection('textarea.code-block', "left");
			return true;
		}
		if (keyCode == 9) {
			e.preventDefault();
			indentSelection('textarea.code-block', "right");
			return true;
		}
	});
});
