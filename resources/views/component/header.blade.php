<header>
    <div class="container">
        <section class="image">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
        </section>
        <section class="list-title">

            <ul>
            @for($id = 0; $id < 10; $id++)
                <li>{{ $title }}</li>
            @endfor
            </ul>

        </section>
    </div>
    <div class="jumbotron"></div>
</header>