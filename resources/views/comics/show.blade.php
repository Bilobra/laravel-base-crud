@extends('layouts.app')
@section('metaTitle',$comic->title)

@section('content')
    <section>
        <div class="container">
            <div>
                <div>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
                
                <h3>Title: {{$comic['title']}}</h3>
                
                <p>{{$comic['description']}}</p>
                <div>
                    <p>Price: {{$comic['price']}} euro</p>
                    <p>Series: {{$comic['series']}}</p>
                    <p>Type: {{$comic['type']}}</p>
                    <p>Sale Date: {{$comic['sale_date']}}</p>
                </div>
            </div>
        </div>
        <div class="container">
            <a  class="button" href="{{route('comics.edit', $comic)}}">Edit!</a>
        </div>
    </section>
@endsection
