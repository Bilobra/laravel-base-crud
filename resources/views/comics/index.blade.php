@extends('layouts.app')
@section('metaTitle','Comics')
@section('content')
    <section>
        <div class="button">
            <a href="{{route('comics.create')}}">Add Comic!</a>
        </div>
        <div class="container">
            <div class="wrapper">
                @foreach ($comics as $comic)
                    <div>
                        <div>
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                            <h3>Title: {{$comic['title']}}</h3>
                        </a>
                        <p>{{$comic['description']}}</p>
                        <div>
                            <p>Price: {{$comic['price']}} euro</p>
                            <p>Series: {{$comic['series']}}</p>
                            <p>Type: {{$comic['type']}}</p>
                            <p>Sale Date: {{$comic['sale_date']}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection