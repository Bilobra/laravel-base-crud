@extends('layouts.app')
@section('metaTitle', 'Add Comic!')

@section('content')
    <section>
        <div class="container">
            <h3>New Comic:</h3>
        </div>
        <div class="container">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" placeholder="Comic's title">
                </div>
                <div>
                    <label for="description">Description:</label>
                    <input type="description" name="description" id="description" placeholder="Comic's description">
                </div>
                <div>
                    <label for="thumb">Thumb:</label>
                    <input type="url" name="thumb" id="thumb" placeholder="Comic's url">
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" placeholder="Comic's price">
                </div>
                <div>
                    <label for="series">Series:</label>
                    <input type="text" name="series" id="series" placeholder="Comic's series">
                </div>
                <div>
                    <label for="type">Type:</label>
                    <input type="text" name="type" id="type" placeholder="Comic's type">
                </div>
                <div>
                    <label for="sale_date">Sale date:</label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Comic's sale date">
                </div>
                <div>
                    <input type="submit" value="Add">
                </div>
            </form>
        </div>
    </section>
@endsection