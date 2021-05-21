<?php
$id = $_REQUEST['id'];

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
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $object ['title']; ?></title>
    </head>
    <body>
        <h1><?php echo $object ['headline']; ?></h1>
        <h3><?php echo $object ['deck']; ?></h3>
        <p>By <?php echo $object ['byline']; ?></p>
        <p><?php echo $object ['date']; ?></p>
        <p><?php echo $object ['dateline']; ?></p>
        <br>
        <p><?php echo $object ['body']; ?></p>
        <br>
        <p><?php echo $object ['url']; ?></p>
        <p>Loaded <?php echo $object ['date']; ?></p>
        <p><?php echo $object ['iso_three']; ?></p>
    </body>
</html>