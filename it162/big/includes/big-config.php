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
        $page = "index.php";
        $title = "Web Development by Cong Ho";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
        break;

    case 'flexbox.php':
        $page = "flexbox.php";
        $title = "Flexbox Research";
        $logo = 'fa-archive'; // change this fontawsome icon!
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Flexbox Research';
        break;

    case 'galleries.php':
        $page = "galleries.php";
        $title = "Galleries and Slider";
        $logo = "fa-camera"; // change this fontawsome icon!
        $logo_color = ' style="color:#00f"';
        $PageID = 'Galleries and Slider';
        break;

    case 'map.php':
        $page = "map.php";
        $title = "Google Map";
        $logo = "fa-map"; // change this fontawsome icon!
        $logo_color = ' style="color:#00f"';
        $PageID = 'Google Map';
        break;

    case 'calendar.php':
        $page = "calendar.php";
        $title = "Google Calendar";
        $logo = "fa-calendar"; // change this fontawsome icon!
        $logo_color = ' style="color:#00f"';
        $PageID = 'Google Calendar';
        break;

    case 'youtube.php':
        $page = "youtube.php";
        $title = "Google Youtube";
        $logo = "fa-youtube"; // change this fontawsome icon!
        $logo_color = ' style="color:#00f"';
        $PageID = 'Google Youtube';
        break;
        
    case 'shoppingcarts.php':
        $page = "shoppingcarts.php";
        $title = "Shopping Cart Research";
        $logo = "fa-shopping-cart"; // change this fontawsome icon!
        $logo_color = ' style="color:#00f"';
        $PageID = 'Shopping Cart Research';
        break;

    case 'siteapp.php':
        $page = "siteapp.php";
        $title = "Responsive Webiste v.s. Native App.";
        $logo = "fa-html5"; // change this fontawsome icon!
        $logo_color = ' style="color:#00f"';
        $PageID = 'Responsive Webiste v.s. Native App.';
        break;

    case 'webcam.php':
        $page = "webcam.php";
        $title = "Live Web Camera";
        $logo = "fa-eye"; // change this fontawsome icon!
        $logo_color = ' style="color:#00f"';
        $PageID = 'Live Web Camera';
        break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-pencil-square-o';
        $logo = ''; //no icon by default
        $PageID = 'Welcome to';
}

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');
