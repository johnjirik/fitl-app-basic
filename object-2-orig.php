<?php
$title = 'Jirik | Work';
$name = 'Academic';
$blog = 'Click through to blog';
$worktop = '&lt;ul&gt;
    Teaching
    Writing
    &lt;/ul&gt;';
$code = 'alert(This is a message)';
$date = 'May 18, 2020';
?>

<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $name; ?></h1>
        <p><?php echo $blog; ?></p>
        <p><?php echo $worktop; ?></p>
        <pre>
            <?php echo $code; ?> 
        </pre>
        <p>Post date: <?php echo $date; ?></p>
    </body>
</html>
