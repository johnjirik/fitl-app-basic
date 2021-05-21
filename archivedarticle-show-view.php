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
