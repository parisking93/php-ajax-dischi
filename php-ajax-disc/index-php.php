
<?php 

include __DIR__ . '/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="box-logo"></div>
    </header>
    <main>
        <div class="box-songs">
            <?php foreach($db as $key => $album) { ?>
                <div class="box-album">
                    <img src="<?php echo $album['poster'] ?>" alt="">
                    <h3><?php echo $album['title'] ?></h3>
                    <h4><?php echo $album['year'] ?></h4>
                    <span><?php echo $album['author'] ?></span>

                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>