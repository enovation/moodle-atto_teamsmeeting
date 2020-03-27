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
 * Gets data from DB about the meeting
 *
 * @package    atto_teamsmeeting
 * @copyright  2020 Enovation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('AJAX_SCRIPT', true);

require_once(__DIR__ . '/../../../../../config.php');


require_login();

$url = required_param('url', PARAM_URL);
$result = '';
if (!empty($url)) {
    $record = $DB->get_record_sql('SELECT * FROM {atto_teamsmeeting} WHERE ' . $DB->sql_compare_text('link') . ' = ' . $DB->sql_compare_text(':url'),
            array('url' => $url), IGNORE_MISSING);
    $result = json_encode([$CFG->wwwroot.'/lib/editor/atto/plugins/teamsmeeting/result.php', $record->title, $record->link, $record->options]);
}
echo $result;
die();

