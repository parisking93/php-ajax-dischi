
<?php 

require __DIR__ . '/db/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phplix</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <header>
        <div class="box-logo">
            <h1>PhPlix</h1>
        </div>
    </header>
    <main>
        <div class="box-songs">
            <?php foreach($db as $key => $album) { ?>
                <div class="box-album">
                    <img src="<?php echo $album['poster'] ?>" alt="">
                    <div class="box-text">
                        <h3><?= $album['title'] ?></h3>
                        <h3><?= $album['year'] ?></h3>
                        <span><?= $album['author'] ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <script src="js/script.js"></script>
    </main>
</body>
</html>