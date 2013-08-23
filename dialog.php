<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Displays the TinyMCE popup window to insert a Moodle emoticon
 *
 * @package   tinymce_moodleemoticon
 * @copyright 2010 David Mudrak <david@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('NO_MOODLE_COOKIES', true); // Session not used here.

require(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . '/config.php');

$PAGE->set_context(context_system::instance());
$PAGE->set_url('/lib/editor/tinymce/plugins/hideabox/dialog.php');

$editor = get_texteditor('tinymce');
$plugin = $editor->get_plugin('hideabox');

$htmllang = get_html_lang();
header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
?>
<!DOCTYPE html>
<html <?php echo $htmllang ?>
<head>
    <title><?php print_string('hideabox:desc', 'tinymce_hideabox'); ?></title>
    <script type="text/javascript" src="<?php echo $editor->get_tinymce_base_url(); ?>/tiny_mce_popup.js"></script>
    <script type="text/javascript" src="<?php echo $plugin->get_tinymce_file_url('js/dialog.js'); ?>"></script>
</head>
<body>
<form onsubmit="HideaboxDialog.insert();return false;" action="#">
	<p>This will insert hidden content that can be revealed by clicking on a link.<br />
            <em>You can't edit an existing hideabox, only insert new ones!</em>
        </p>
	<p>Hidden text:<br /><textarea id="theSecret" name="theSecret" class="text" style="width: 275px; height: 50px" ></textarea></p>
	<p>Reveal link text:<br /><input id="revealText" name="revealText" type="text" class="text" style="width: 275px" /></p>

	<div class="mceActionPanel">
		<input type="button" id="insert" name="insert" value="{#insert}" onclick="HideaboxDialog.insert();" />
		<input type="button" id="cancel" name="cancel" value="{#cancel}" onclick="tinyMCEPopup.close();" />
	</div>
</form>

</body>
</html>
