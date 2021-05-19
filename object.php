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

// set the object variables based on the id value from the URL
// if id is 1
if ($id == 1) {
    $object = array(
        'title' => 'newsarchive',
        'headline' => 'head1',
        'deck' => 'deck1',
        'byline' => 'author1',
        'date' => 'May 18, 2021',
        'dateline' => 'CLEVELAND',
        'body' => 'Blah blah blah',
        'url' => 'www.jirik.com',
        'loaded' =>'210518',
        'iso_three' => 'USA',
    );
    
}
 // if id is 2
elseif ($id == 2) {
    $object = array(
        'title' => 'newsarchive',
        'headline' => 'head2',
        'deck' => 'deck2',
        'byline' => 'jj',
        'date' => 'May 19, 2021',
        'dateline' => 'LAKEWOOD, Ohio',
        'body' => 'More blah',
        'url' => 'www.johnjirik.com',
        'loaded' =>'210519',
        'iso_three' => 'CLE',
    );
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