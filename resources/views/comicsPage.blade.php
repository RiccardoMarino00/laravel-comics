@extends ('layout.AppLayout')


@section ('content')
<h1>COMICS</h1>
@foreach ($Fumcomics as $comic)
    <div class="contenitore">
        <p>{{ $comic['title'] }}</p>
        <p>{{$comic['description']}}</p>
        <p>{{$comic['price']}}</p>
        <p>{{$comic['series']}}</p>
        <p>{{$comic['sale_date']}}</p>
        <p>{{$comic['type']}}</p>
        <img src="{{$comic['thumb']}}" alt="">

    </div>
@endforeach
  
    

@endsection

@section('title', 'Comics')
