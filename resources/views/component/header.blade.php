<header>
    <div class="container">
        <section class="image">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
        </section>
        <section class="list-title">

            <ul>
            @foreach($headerLinks as $headerLink)
                <li>{{ $headerLink['title'] }}</li>
            @endforeach
            </ul>

        </section>
    </div>
    <div class="jumbotron"></div>
</header>