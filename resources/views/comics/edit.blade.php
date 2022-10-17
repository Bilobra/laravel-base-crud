@extends('layouts.app')
@section('metaTitle', 'Edit Comic!')

@section('content')
    <section>
        <div class="container">
            <h3 class="title_form">Edit Comic:</h3>
        </div>
        <div class="container">
            <form action="{{route('comics.update', $comic)}}" method="POST" class="form_wrapper">
                @csrf
                @method('PUT')
                <div class="input_wrapper">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" placeholder="Comic's title" value="{{old('title',$comic->title)}}" class="input_element">
                    @error('title')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input_wrapper">
                    <label for="description">Description:</label>
                    <input type="description" name="description" id="description" placeholder="Comic's description" value="{{old('description',$comic->description)}}" class="input_element">
                    @error('description')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input_wrapper">
                    <label for="thumb">Thumb:</label>
                    <input type="url" name="thumb" id="thumb" placeholder="Comic's url" value="{{old('thumb',$comic->thumb)}}" class="input_element">
                    @error('thumb')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input_wrapper">
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" placeholder="Comic's price" value="{{old('price',$comic->price)}}" class="input_element">
                    @error('price')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input_wrapper">
                    <label for="series">Series:</label>
                    <input type="text" name="series" id="series" placeholder="Comic's series" value="{{old('series',$comic->series)}}" class="input_element">
                    @error('series')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input_wrapper">
                    <label for="type">Type:</label>
                    <input type="text" name="type" id="type" placeholder="Comic's type" value="{{old('type',$comic->type)}}" class="input_element">
                    @error('type')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input_wrapper">
                    <label for="sale_date">Sale date:</label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Comic's sale date" value="{{old('sale_date',$comic->sale_date)}}" class="input_element">
                    @error('sale_date')
                    <div class="alert alert-danger" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="button_flex">
                    <input type="submit" value="Add" class="button">
                </div>
            </form>
        </div>
    </section>
@endsection