@extends('layouts.app')
@section('metaTitle','Comics')
@section('content')
    <section class="index_section">
        <div class="container">
            <div class="button_wrapper">
                <div class="button">
                    <a href="{{route('comics.create')}}">Add Comic!</a>
                </div>

            </div>
            <div class="wrapper">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="info_wrapper">

                            <div class="comic_thumb">
                                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            </div>
                            <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                                <div class="base_info">
                                    <h3 class="title">Title: {{$comic['title']}}</h3>
                                    <p><span class="info_details">Price:</span> {{$comic['price']}} euro</p>
                                    <p><span class="info_details">Series:</span> {{$comic['series']}}</p>
                                    <p><span class="info_details">Type:</span> {{$comic['type']}}</p>
                                    <p><span class="info_details">Sale Date:</span>{{$comic['sale_date']}}</p>
                                    <p class="description">{{$comic['description']}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection