@extends('layouts.app')
@section('metaTitle', 'Edit Comic!')

@section('content')
    <section>
        <div class="container">
            <h3>Edit Comic:</h3>
        </div>
        <div class="container">
            <form action="{{route('comics.update', $comic)}}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" placeholder="Comic's title" value="{{old('title',$comic->title)}}">
                    @error('title')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="description">Description:</label>
                    <input type="description" name="description" id="description" placeholder="Comic's description" value="{{old('description',$comic->description)}}">
                    @error('description')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="thumb">Thumb:</label>
                    <input type="url" name="thumb" id="thumb" placeholder="Comic's url" value="{{old('thumb',$comic->thumb)}}">
                    @error('thumb')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" placeholder="Comic's price" value="{{old('price',$comic->price)}}">
                    @error('price')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="series">Series:</label>
                    <input type="text" name="series" id="series" placeholder="Comic's series" value="{{old('series',$comic->series)}}">
                    @error('series')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="type">Type:</label>
                    <input type="text" name="type" id="type" placeholder="Comic's type" value="{{old('type',$comic->type)}}">
                    @error('type')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="sale_date">Sale date:</label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Comic's sale date" value="{{old('sale_date',$comic->sale_date)}}">
                    @error('sale_date')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="submit" value="Add">
                </div>
            </form>
        </div>
    </section>
@endsection