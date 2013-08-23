moodle_hideabox
===============

TinyMCE plugin for hiding content behind a javascript link

About
==============================
This Moodle-specific TinyMCE plugin was developed for Mid Michigan Community College.

Basically, a user can add a "hideabox" anywhere that HTML input is allowed. These hideaboxes hide content behind a link until the end user clicks, at which point the content is revealed. This is frequently used by faculty to shorten long pages by hiding blocks of content until run-time.

This plugin is a continuation of the work done by Brandon Kish.

Compatibility
==============================
Requires Moodle 2.4 (due to changes made to allow Moodle-specific TinyMCE plugins)

Installation instructions
==============================
	Install the TinyMCE plugin:
		1)	copy the entire folder in to your moodle TinyMCE plugins directory (moodle/lib/editor/tinymce/plugins)
		2)	rename the directory from "moodle_hideabox" to "hideabox"
				e.g. mv moodle_hideabox hideabox
		3)	visit Moodle's notifications page to install
		4)	add the hideabox button to the toolbar (Site Administration->Plugins->Text editors->TinyMCE HTML editor->General settings)

	This will get you the TinyMCE button; to make the hideabox work, you will have to integrate the JS somewhere.
	The easiest way I found was to modify the theme we are using (Essential Moodle theme, https://github.com/moodleman/moodle-theme_essential)
		
	To modify the Essential Moodle theme to cooperate with the hideabox plugin:
		1)	copy the hideabox javascript
				e.g. cp hideabox.js moodle/theme/essential/jquery/
		2)	edit jquery/plugins.php
				e.g. Add the following line to $plugins = array (
				'hideabox' => array('files' => array('hideaboxy.js'))
		3)	edit lib.php
				e.g. Add the following line to function theme_essential_page_init
				$page->requires->jquery_plugin('hideabox', 'theme_essential');
				
