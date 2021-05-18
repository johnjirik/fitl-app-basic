<?php
$id = $_REQUEST['id'];

$object = array(
    'title' => '',
    'name' => '',
    'blog' => '',
    'worktop' => '',
    'code' => '',
    'date' => '',
);

// set the object variables based on the id value from the URL
// if id is 1
if ($id == 1) {
    $object = array(
        'title' => 'Jirik',
        'name' => 'John Jirik',
        'blog' => 'Blog',
        'worktop' => 'Work',
        'code' => 'alert(This is a message)',
        'date' => 'May 17, 2021',
    );
    
}
 // if id is 2
elseif ($id == 2) {
    $object = array(
        'title' => 'Jirik | Work',
        'name' => 'Academic',
        'blog' => 'Click through to blog',
        'worktop' => '&lt;ul&gt
            Teaching
            Writing
            &lt;/ul&gt;',
        'code' => 'alert(This is a message)',
        'date' => 'May 16, 2021',
    );
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $object ['title']; ?></title>
    </head>
    <body>
        <h1><?php echo $object ['name']; ?></h1>
        <p><?php echo $object ['blog']; ?></p>
        <p><?php echo $object ['worktop']; ?></p>
        <pre>
            <?php echo $object ['code']; ?> 
        </pre>
        <p>Post date: <?php echo $object ['date']; ?></p>
    </body>
</html>