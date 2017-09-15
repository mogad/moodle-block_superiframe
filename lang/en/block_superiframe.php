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
 * Strings for component 'block_superiframe', language 'en'
 *
 * @package   block_superiframe
 * @copyright Daniel Neis <danielneis@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['blockstring'] = 'Block string';
$string['descconfig'] = 'This is a block where you can do super things.'; //commented out by Mohamed 'Description of the config section';
$string['descfoo'] = 'Config description';
$string['headerconfig'] = 'SuperIFrame Configuration menu';
$string['labelfoo'] = 'Config label';
$string['superiframe:addinstance'] = 'Add a superiframe block';
$string['superiframe:myaddinstance'] = 'Add a superiframe block to my moodle';
$string['pluginname'] = 'superiframe';
$string['welcomeuser'] = 'Welcome to superiframe, {$a->firstname} {$a->lastname}';
$string['tango'] = '<form action="' . $CFG->wwwroot . '/blocks/superiframe/view.php"><input type="submit" value="click me"></form></a>';

// Set URL textfield
$string['urlname'] = 'IFrame URL Setting';
$string['urldescription'] = 'This is the place where you set the url for the iFrame that you want to embed';
$string['urldefault'] = 'https://quizlet.com/132695231/scatter/embed';


// Set Width
$string['IframeWidthName'] = 'Width';
$string['IframeWidthDescription'] = '';
$string['IframeWidthDefault'] = 600;


// Set Height
$string['IframeHeightName'] = 'Height';
$string['IframeHeightDescription'] = '';
$string['IframeHeightDefault'] = 400;


// Set Layout
$string['IframeLayoutName'] = 'Page Layout';
$string['IframeLayoutDescription'] = '';
$string['IframeLayoutDefault'] = 0; // default is 0 which maps to popup


$string['popuplayout']='popup';
$string['courselayout']='course';