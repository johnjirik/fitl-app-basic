<?php
$page = $_REQUEST['page'];

// Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check for a connection error
if ($connection->connect_error) {
    echo 'Connection failed: ' , $connection->connect_error;
    exit;
}

// Otherwise, connect successfully!
// echo 'Connected successfully!';

// Connect to the "fitl" database
$connection->select_db('fitl');

// Determine which page to show
if ($page == 'show') {
    $id = $_REQUEST['id'];
    show($id);
    
}
elseif ($page == 'create') {
    create();
}

// Load the show page
function show ($id) {
    global $connection;

    $object = array(
        'title' => '',
        'headline' => '',
        'deck' => '',
        'byline' => '',
        'date' => '',
        'dateline' => '',
        'body' => '',
        'iso_three' => '',
        'url' => '',
        'loaded' =>'',
    );
    
    // Query to select the object
    $sql = 'SELECT * FROM newsarchive WHERE id = ' . $id;
    
    // Execute the query
    $result = $connection->query($sql);
    
    // Check for and retrieve the object
    if ($result->num_rows > 0) {
        $object = $result->fetch_assoc();
        // echo '<pre>';
        // print_r($object);
        // echo '</pre>';
    }
    
    // load the view file
    include 'archivedarticle-show-view.php';
}

// load the create page
function create() {
    include 'archivedarticle-create-view.php';
}
?>