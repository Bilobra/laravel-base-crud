@extends('layouts.app')
@section('metaTitle',$comic->title)

@section('content')
    <section>
        <div class="container">
            <div class="button_flex">
                <a  class="button" href="{{route('comics.edit', $comic)}}">Edit!</a>
    
                <form action="{{route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete!" class="button">
                </form>

            </div>
        </div>
        <div class="container">
            <div class="wrapper">

                <div class="card">
                    <div class="info_wrapper">
                        <div class="comic_thumb">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <div class="base_info">
    
                            <h3 class="title">Title: {{$comic['title']}}</h3>
                            <p><span class="info_details">Price:</span> {{$comic['price']}} euro</p>
                            <p><span class="info_details">Series:</span> {{$comic['series']}}</p>
                            <p><span class="info_details">Type:</span> {{$comic['type']}}</p>
                            <p><span class="info_details">Sale Date: </span>{{$comic['sale_date']}}</p>
                            <p class="description">{{$comic['description']}}</p>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
