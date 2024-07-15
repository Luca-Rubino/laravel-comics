<footer>
    <section class="container-link d-flex">

        <article class="link d-flex">
            <nav>
                <h2>dc comics</h2>
                <ul>
                    <li v-for="(title, index) in dcComicsLink">
                        <a :href="title.link">title</a>
                    </li>
                </ul>
                <h2>shop</h2>
                <ul>
                    <li v-for="title in shop">
                        <a :href="title.link">title</a>
                    </li>
                </ul>
            </nav>

            <nav>
                <h2>dc</h2>
                <ul>
                    <li v-for="title in dc">
                        <a :href="title.link">title</a>
                    </li>
                </ul>
            </nav>

            <nav>
                <h2>sites</h2>
                <ul>
                    <li v-for="title in sites">
                        <a :href="title.link">title</a>
                    </li>
                </ul>
            </nav>
            
        </article>
    
        <article class="logo d-flex"></article>

    </section>


    <section class="d-flex">

        <article class="d-flex">
            <button>sing-up now!</button>
        </article>

        <article class="d-flex">
            <h2>follow us</h2>
            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}">
            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}">
            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}">
            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}">
            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}">
        </article>

    </section>
</footer>