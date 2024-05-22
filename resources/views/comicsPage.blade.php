@extends ('layout.AppLayout')


@section ('content')
<h1>COMICS</h1>
<div class="comics-contenitore">
    <div class="comics-riga">
    @foreach ($Fumcomics as $comic)
    
        <div class="comics-col">
            <img class="thumb-comic" src="{{$comic['thumb']}}" alt="">
            <div class="info">
                <p>{{ $comic['title'] }}</p>
                {{-- <p>{{$comic['description']}}</p> --}}
                <p>{{$comic['price']}}</p>
                <p>{{$comic['series']}}</p>
                <p>{{$comic['sale_date']}}</p>
                <p>{{$comic['type']}}</p>
            </div>
        </div>
    @endforeach
    </div>
</div>

    

  
    

@endsection

@section('title', 'Comics')
