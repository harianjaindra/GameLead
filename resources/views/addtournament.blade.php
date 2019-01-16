@extends('layouts.body')

@section('content')
<div class="text-center">
    <div class="col-md-12 text-center">
        <h1>Insert Tournament</h1>
    </div>
    <div class="col-md-8 col-sm-offset-2">
        <form action="{{url('/doinserttour')}}" method="POST"  enctype="multipart/form-data" >
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputName">Title</label>
                <input type="text" class="form-control" id="title"  name="title" placeholder="Input title here">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Caption</label>
                <input type="text" class="form-control" id="caption" name="caption" placeholder="Input caption here">
            </div>
            <div class="form-group">
            <label for="exampleInputCategory">Category</label>
            <select name="category" id="category" class="form-control">
                                    <option value="-1">Game Category</option>
                                    @foreach ($categories as $category)
                                        @if (old('category') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPrize">Grand Prize</label>
                <input type="text" class="form-control" id="prize" name="prize" placeholder="Input prize here">
            </div>
            <div class="form-group">
                <label for="Picture">Photo</label>
                <input type="file" class="form-control" id="Picture" name="Picture">
            </div>
            <div class="form-group">
                <label for="exampleInputPrice">Price to Registration | RP </label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Input price here">
            </div>
            <div class="form-group">
                <label for="exampleInputLocation">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Input location here">
            </div>
            <div class="form-group">
                <label for="exampleInputContact">Contact to</label>
                <input type="text" class="form-control" id="contactto" name="contactto" placeholder="Input contact here">
            </div>
            <div class="form-group">
                <label for="exampleInputDesc">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Input description here">
            </div>
            <div class="btnadd">
                <button type="submit" class="btn btn-default">Add</button>
            </div>

        </form>
    </div>
</div>


@endsection