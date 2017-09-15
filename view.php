<?php
 
require('../../config.php');
require_once('../../lib/moodlelib.php');
 
require_login();
 
//get our config
//$config = get_config("frankenstyle_component_name");

// The following is causing a Call Stack error
$config = get_config("superiframe"); // config is a reference variable that references the settings object of superiframe which contains the property width
$mywidth = $config->width;

$def_config = get_config('block_superiframe');
//$widthanother = $def_config->width; this was causing call stack error
$widthconfig= get_config('superiframe', 'width'); // correct way to fetch 
$heightconfig= get_config('superiframe', 'height'); // correct way to fetch 


$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/superiframe/view.php?id=3');
$PAGE->set_heading($SITE->fullname);

if(get_config('superiframe', 'layout') == 0){ // correct way to fetch 
    $PAGE->set_pagelayout('popup');//$layoutconfig = 'popup';
} else
    $PAGE->set_pagelayout('course');//$layoutconfig = 'course';

    

$PAGE->set_title(get_string('pluginname', 'block_superiframe'));
$PAGE->navbar->add(get_string('pluginname', 'block_superiframe'));
 
 
// start output to browser
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'block_superiframe'),5);
 
// Some content goes here
echo "<table border=1 style=\"background-color:yellow\"><tr><td>I am some dummy content. Get rid of me fast!</td></tr></table>";    
echo '<br>' . fullname($USER) . ' ';
echo $OUTPUT->user_picture($USER) . '<BR><BR>'; // render loggedin user's profile pic

/* testbed below not actually working
// actual definition https://goo.gl/Cu4rd4 : echo $OUTPUT->user_picture($user, array('courseid' => $courseid, 'link' => true));
echo $OUTPUT->user_picture($USER, array('courseid' => $course->id, 'link' => true));
*/
//echo $OUTPUT->render_user_picture($USER) . '<BR><BR>'; this is generating an error

// get settings from the settings page using the object provided -- Changed by Mohamed
// get_config('block_superiframe'); is the same as get_config("frankenstyle_component_name"); 
// this is wrong $config = get_config("superiframe_settings");, instead get_config("block_superiframe")
// $configWidth = get_config("superiframe_width");
// $configLayout = get_config("superiframe_layout");

//echo 'the name is ' . $def_config->name;

// // some troubleshooting to see the content of $def_config
// if(is_array($def_config) == true) {
//     echo 'array'; 
// }else{
//     echo 'not array'; 
// }
// var_dump($def_config); this one is the best
// echo 'The version is ' . $def_config->version;
// echo 'Again the width is '. $def_config->width;
//print_r(array_values($def_config));

// echo '<iframe src="https://quizlet.com/132695231/scatter/embed" 
// height="410" width="100%" style="border:0"></iframe>';


// testing variable contents: echo 'Height is ' . $heightconfig . ' and width is ' . $widthconfig;

//echo '<iframe src="https://quizlet.com/132695231/scatter/embed" height={$heightconfig} width={$widthconfig}" style="border:0"></iframe>';

//<a href="javascript:window.open('http://www.google.com','mywindowtitle','width=500,height=150')">open window</a>


//old implementation trial: echo '<iframe src="https://quizlet.com/132695231/scatter/embed" height='. $heightconfig .' width='. $widthconfig .' style="border:0"></iframe>'; //echo '<iframe src="https://quizlet.com/132695231/scatter/embed" height={$heightconfig} width={$widthconfig} style="border:0"></iframe>';

// old implementation: echo ' window.open("https://www.w3schools.com", "_blank", "toolbar=yes;6,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");';

// old implementation trial
// if($layoutconfig === 'popup')
//     echo 'popup';
//     //echo '<a href="javascript:window.open(\'https://quizlet.com/132695231/scatter/embed\',\'mywindowtitle\',\'width="$widthconfig",height=$heightconfig\')">open window</a>'';
// else
//     echo '<iframe src="https://quizlet.com/132695231/scatter/embed" height="$heightconfig" width="$widthconfig" style="border:0"></iframe>'; //echo '<iframe src="https://quizlet.com/132695231/scatter/embed" height="$heightconfig" width="$widthconfig" style="border:0"></iframe>';

//echo 'Welcome to superiframe, {$a->firstname} {$a->lastname}';

$src = ''; // first initializing as it only works this way apparently
$src = get_config('superiframe','url');
// echo "The src is {$src}"; //'<iframe src>';
echo "<iframe src={$src} height={$heightconfig} width={$widthconfig} style=\"border:0\"></iframe>";


//send footer out to browser
echo $OUTPUT->footer();
return;