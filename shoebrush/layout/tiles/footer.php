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
 * Shoebrush theme.
 *
 * @package    theme
 * @subpackage shoebrush
 * @copyright  &copy; 2015-onwards G J Barnard in respect to modifications of the Bootstrap theme.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @author     Based on code originally written by Bas Brands, David Scotson and many other contributors.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$knownregionfooterpre = $PAGE->blocks->is_known_region('footer-pre');
$knownregionfooterpost = $PAGE->blocks->is_known_region('footer-post');
require_once(\theme_shoehorn\toolbox::get_tile_file('social'));
if ($haveicons) {
    $footershadowmargin = ' sociallinks';
} else {
    $footershadowmargin = '';
}
?>
<!-- Shoebrush footer -->
<div id="footer-shadow" class="row<?php echo $footershadowmargin; ?>"></div>
<footer id="page-footer" class="row">
    <div class="row">
    <?php $cols = \theme_shoehorn\toolbox::social_footer($PAGE->theme->settings); ?>
    <div class="<?php echo $cols['side']; ?>">
    <?php
    if ($knownregionfooterpre) {
        echo $OUTPUT->blocks('footer-pre');
    }?>
    </div>
    <div class="<?php echo $cols['centre']; ?>">
    <?php
    if ($haveicons) {
        echo $icons;
    }
    ?>
    </div>
    <div class="<?php echo $cols['side']; ?>">
    <?php
    if ($knownregionfooterpost) {
        echo $OUTPUT->blocks('footer-post');
    }?>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <?php echo $OUTPUT->footer_menu(); ?>
    </div>
    </div>
    <?php echo $OUTPUT->standard_end_of_body_html() ?>
</footer>
<?php echo $OUTPUT->anti_gravity();
