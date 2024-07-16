<main>
    @include('pages.products')
    @yield('main-content')
    {{-- <section class="container">
        <article>
            <h1>Current Series</h1>
            <div class="comics">
                @foreach($singleComics as $singleComic)
                    <article>
                            <img src="{{$singleComic['thumb']}}" alt="{{$singleComic['series']}}">
                            <h4>{{$singleComic['series']}}</h4>  
                    </article>
                @endforeach
            </div>
            <button>Load More</button>
        </article>
    </section> --}}

    <section class="comics">
        <ul>
            @foreach($comics as $comic)
             <li>
                <img src="{{ Vite::asset($comic['immagine']) }}" alt="{{ $comic['titolo']}}">
                <p>{{ $comic['titolo']}}</p>
            </li>   
            @endforeach
            
        </ul>
    </section>
</main>