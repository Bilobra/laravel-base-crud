@extends('layouts.app')
@section('metaTitle','Comics')
@section('content')
    <section class="index_section">
        <div class="container">
            <div class="button">
                <a href="{{route('comics.create')}}">Add Comic!</a>
            </div>
            <div class="wrapper">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="info_wrapper">

                            <div class="comic_thumb">
                                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            </div>
                            <div class="base_info">
                                <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                                    <h3 class="title">Title: {{$comic['title']}}</h3>
                                </a>
                                <p>Price: {{$comic['price']}} euro</p>
                                <p>Series: {{$comic['series']}}</p>
                                <p>Type: {{$comic['type']}}</p>
                                <p>Sale Date: {{$comic['sale_date']}}</p>
                                <p class="description">{{$comic['description']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection