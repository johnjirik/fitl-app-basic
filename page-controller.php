<?php
$page = $_REQUEST['page'];

// Determine which page to show
if ($page == 'about') {
    about();
}

elseif ($page == 'work') {
    work();
}

// Load the about page
function about() {
    include 'page-about-view.php';
}

// Load the work page
function work() {
    include 'page-work-view.php';
}
?>