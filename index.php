
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Phplix</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="box-logo">
                <h1>PhPlix</h1>
            </div>
        </header>
        <main>
            <div class="box-songs">
                <div class="box-album" v-for="album in albumArray">
                    <img :src="album.poster" :alt="album.title">
                    <div class="box-text">
                        <h3> {{album.title}} </h3>
                        <h3>{{album.year}}</h3>
                        <span>{{album.author}}</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>

</body>
</html>