<?php
$page = $_REQUEST['page'];

// Determine which page to show
if ($page == 'about') {
    about();
}

// Load the about page
function about() {
    include 'page-about-view.php';
}
?>