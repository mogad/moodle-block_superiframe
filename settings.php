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
 * superiframe block caps.
 *
 * @package    block_superiframe
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
//sampleheader
$settings->add(new admin_setting_heading('superiframe/SettingsM',
                                         get_string('headerconfig', 'block_superiframe'),
                                         get_string('descconfig', 'block_superiframe')));

$settings->add(new admin_setting_configcheckbox('superiframe/foo',
                                                get_string('labelfoo', 'block_superiframe'),
                                                get_string('descfoo', 'block_superiframe'),
                                                '0'));
                                                


                                                

// iFrame URL settings of type: admin_setting_configtext
$settings->add(new admin_setting_configtext('superiframe/url',
                                                get_string('urlname','block_superiframe'),
                                                //get_string('urldescription','block_superiframe')
                                                '',
                                                get_string('urldefault','block_superiframe')));


// iFrame width settings of type: admin_setting_configtext
$settings->add(new admin_setting_configtext('superiframe/width',
                                                get_string('IframeWidthName','block_superiframe'),
                                                get_string('IframeWidthDescription','block_superiframe'),
                                                get_string('IframeWidthDefault','block_superiframe'),PARAM_INT));



// iFrame height settings of type: admin_setting_configtext
$settings->add(new admin_setting_configtext('superiframe/height',
                                                get_string('IframeHeightName','block_superiframe'),
                                                get_string('IframeHeightDescription','block_superiframe'),
                                                get_string('IframeHeightDefault','block_superiframe'),PARAM_INT));



// Allow anonymous entries.
// $options = array(0 => get_string('no'), 1 => get_string('yes'));
// $settings->add(new admin_setting_configselect('dataform_anonymous', 
// new lang_string('anonymousentries', 'dataform'),
// new lang_string('configanonymousentries', 'dataform'), 
// 0, $options));


// Page layout settings of type: admin_setting_configselect
// need to change this one
$options = array(0 => get_string('popuplayout','block_superiframe'), 1 => get_string('courselayout','block_superiframe'));
$settings->add(new admin_setting_configselect('superiframe/layout',
                                                get_string('IframeLayoutName','block_superiframe'),
                                                get_string('IframeLayoutDescription','block_superiframe'),
                                                get_string('IframeLayoutDefault','block_superiframe'),
                                                $options));

