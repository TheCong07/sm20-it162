<?php
/*
    portal-config.php

    Used to store all of our IT162 configuration information

*/

// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

$logo_color = ''; //make logo_color an empty string by default

switch (THIS_PAGE) {
    case 'index.php':
        $title = "Cong's IT 162 Portal Page";
        $logo = 'fa-home';
        $PageID = 'Welcome to';
        break;

    case 'contactme.php':
        $title = "Cong's IT 162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Welcome to';
        break;

    case 'aia.php':
        $title = "Cong's IT 162 Final Project AIA (Client work)";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Welcome to';
        break;


    default:
        $title = THIS_PAGE;
        $logo = 'fa-pencil-square-o';
        $logo = ''; //no icon by default
        $PageID = 'Welcome to';
}


/*

here we're creating a function to generate link and
keep the highlight on the current page

<a href="index.php" class="active">Welcome</a>
<a href="big/index.php">Big</a>
<a href="aia.php">AIA</a>
<a href="flowchart.php">Flowchart</a>
<a href="fp/index.php">Final Project</a>
<a href="contactme.php">Contact Cong</a>

*/

$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contactme.php'] = 'Contact Cong';


function makeLinks($nav1)
{
    $myReturn = '';
    foreach ($nav1 as $url => $text) {
        if (THIS_PAGE == $url) {
            $myReturn .= "<a href=" . $url . " class=\"active\">" . $text . "</a>";
        } else {
            $myReturn .= "<a href=" . $url . ">" . $text . "</a>";
        }
    }

    return $myReturn;
}

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');
