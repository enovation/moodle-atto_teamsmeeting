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
 * Atto text editor integration result file.
 *
 * @package    atto_teamsmeeting
 * @copyright  2020 Enovation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../../../../config.php');

require_login();

$link = optional_param('link', null, PARAM_URL);
$title = optional_param('title', null, PARAM_TEXT);

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_pagelayout('standard');
$PAGE->set_url(new moodle_url('/lib/editor/atto/plugins/teamsmeeting/result.php', ['link' => $link, 'title' => $title]));
echo '<div style="display: flex; flex-direction: column; margin-top: 4.3rem;padding: 2rem;">
    <svg class="meetingsuccess" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" style="width:100px; align-self: center;
        display: flex; margin-bottom: 1.5rem;">
        <path d="M24 0c2.2 0 4.3.3 6.4.9 2 .6 3.9 1.4 5.7 2.4 1.8 1 3.4 2.3 4.9 3.8 1.5 1.5 2.7 3.1 3.8 4.9 1 1.8 1.8 3.7
        2.4 5.7.6 2 .9 4.2.9 6.4s-.3 4.3-.9 6.3c-.6 2-1.4 3.9-2.4 5.7-1 1.8-2.3 3.4-3.8 4.9-1.5 1.5-3.1 2.7-4.9 3.8-1.8 1-3.7
        1.9-5.7 2.4-2 .6-4.1.9-6.4.9-2.2
        0-4.3-.3-6.3-.9-2-.6-3.9-1.4-5.7-2.4-1.8-1-3.4-2.3-4.9-3.8-1.5-1.5-2.7-3.1-3.8-4.9-1-1.8-1.9-3.7-2.4-5.7C.3 28.3
        0 26.2 0 24s.3-4.3.9-6.4c.6-2 1.4-3.9 2.4-5.7 1-1.8 2.3-3.4 3.8-4.9 1.5-1.5 3.1-2.7 4.9-3.8 1.8-1 3.7-1.9 5.7-2.4S21.8
        0 24 0zm7.9 17.1c-.6 0-1.2.2-1.6.7l-8.5 8.5-3-3c-.4-.4-1-.7-1.6-.7-.3 0-.6.1-.8.2-.3.1-.5.3-.7.5s-.4.4-.5.7c-.2.3-.2.5-.2.8
        0 .6.2 1.2.7 1.6l4.6 4.6c.4.4 1 .7 1.6.7.6 0 1.2-.2 1.6-.7l10.1-10.1c.4-.5.7-1
        .7-1.6 0-.3-.1-.6-.2-.8-.1-.3-.3-.5-.5-.7s-.4-.4-.7-.5c-.4-.2-.7-.2-1-.2z" fill="#599c00"></path></svg>
        <span class="meetingcreatedheader" style="font-size: 20px; font-weight: 600; display: block; text-align: center;">'.
            get_string('meetingcreatedsuccess', 'atto_teamsmeeting',  $title).
       '</span>
    </div>';

exit;
