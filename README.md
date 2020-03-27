# An Atto plugin to create Microsoft Teams meeting and imports meeting link

## Description
Microsoft Meetings application integrated into Atto editor plugin which allows to create meeting and automatically add meeting link into Atto editor field content.

## Installation
* Download the plugin and extract into lib/editor/atto/plugins/teamsmeeting.
* Install like any other Moodle plugin (ie via visiting as admin <moodle_url>/admin/index.php?cache=1).
* Add an icon to atto editor in <moodle_url>/admin/settings.php?section=editorsettingsatto. Ie update "Toolbar config" line with "links" with "links = link, teamsmeeting".

## Hosting Meetings App (optional)
You can host Microsoft Meetings application yourself. To do this:
* Download Meetings App code prepared to work with Atto plugin from https://github.com/enovation/msteams-app-lms-meetings
* Follow instructions in README file to setup application.
* Change Meetings appllication url in Atto plugin settings to your new URL (<moodle_url>/admin/settings.php?section=atto_teamsmeeting_settings).



