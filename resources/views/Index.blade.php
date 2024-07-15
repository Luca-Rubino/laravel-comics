<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/scss/app.scss', 'resources/js/app.js')
    <title>laravel-comics-Home</title>
</head>

<body>

    <header>
        <div class="container">
            <section class="image">
                <img src="../assets/img/dc-logo.png" alt="dc-logo">
            </section>
            <section class="list-title">

                <ul>
                    <li v-for="(title,index) in headerLink" :key="title.id">title</li>
                </ul>

            </section>
        </div>
        <div class="jumbotron"></div>
    </header>

    <main>
        <section class="container">
            <article>
                <h1> Current Series</h1>
                <div class="comics">
                    <CardDcComics v-for="(comic, index) in comicSeries" :key="index" :singleComic="comic" />
                </div>
                <button>Load More</button>
            </article>
        </section>
    </main>

    <footer>
        <section class="d-flex">

            <article class="d-flex">
                <button>sing-up now!</button>
            </article>

            <article class="d-flex">
                <h2>follow us</h2>
                <img src="../img/footer-facebook.png">
                <img src="../img/footer-twitter.png">
                <img src="../img/footer-youtube.png">
                <img src="../img/footer-pinterest.png">
                <img src="../img/footer-periscope.png">
            </article>

        </section>
    </footer>

</body>

</html>