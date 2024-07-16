<footer>
    <section class="container-link d-flex">

        <article class="link d-flex">
            <nav>
                <h2>dc comics</h2>
                <ul>
                @foreach($dcComicsLinks as $dcComicsLink)
                    <li>
                        <a href="#">{{ $dcComicsLink['title'] }}</a>
                    </li>
                @endforeach
                    
                </ul>
                <h2>shop</h2>
                <ul>
                    @foreach($shops as $shop)
                    <li>
                        <a href="#">{{ $shop['title'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>

            <nav>
                <h2>dc</h2>
                <ul>
                    @foreach($dcs as $dc)
                    <li>
                        <a href="#">{{ $dc['title'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>

            <nav>
                <h2>sites</h2>
                <ul>
                    @foreach($sites as $site)
                    <li>
                        <a href="{{ $site['link'] }}">{{ $site['title'] }}</a>
                    </li>
                    @endforeach
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
            @foreach($socials as $social)
                <img src="{{ Vite::asset($social['url']) }}" alt="{{ $social['social'] }}">   
            @endforeach
            
        </article>

    </section>
</footer>