tinyMCEPopup.requireLangPack();

var HideaboxDialog = {
	init : function() {
		var f = document.forms[0];

		// Get the selected contents as text and place it in the input
		f.theSecret.value = tinyMCEPopup.editor.selection.getContent({format : 'text'});
		f.revealText.value = "Show the answer...";
	},

	insert : function() {
		// Insert the contents from the input into the document
		theSecret = document.forms[0].theSecret.value;
		revealText = document.forms[0].revealText.value;
		returnHTML = '<div class="hideabox"><a href="#" class="toggle">' + revealText + '</a><div class="boxhidden">' + theSecret + '</div></div>';
		tinyMCEPopup.editor.execCommand('mceInsertContent', false, returnHTML);
		tinyMCEPopup.close();
	}
};

tinyMCEPopup.onInit.add(HideaboxDialog.init, HideaboxDialog);
