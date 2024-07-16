{{-- @extends('Index.blade.php') --}}
@section('page-title', 'products')


@section('main-content')
    <section class="container">
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
    </section>
@endsection

