<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fantasy World Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- gallery -->
<link rel="stylesheet" href="/css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="/css/font-awesome.css" rel="stylesheet">

<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Jura:300,400,500,600" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

@include('layouts.nav')

@yield('content')
<div class="text-center">
    <div class="col-md-12 text-center">
        <h1>Insert Tournament</h1>
    </div>
    <div class="col-md-8 col-sm-offset-2">
        <form action="{{url('/savetour')}}" method="POST"  enctype="multipart/form-data" >
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputName">ID</label>
                <input type="text" class="form-control" id="id"  name="id" placeholder="Input title here" value="{{$tour->id}}">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Title</label>
                <input type="text" class="form-control" id="title"  name="title" placeholder="Input title here" value="{{$tour->title}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Caption</label>
                <input type="text" class="form-control" id="caption" name="caption" placeholder="Input caption here" value="{{$tour->caption}}">
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Input category here" value="{{$tour->category}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPrize">Grand Prize</label>
                <input type="text" class="form-control" id="prize" name="prize" placeholder="Input prize here" value="{{$tour->prize}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPrice">Price to Registration | RP </label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Input price here" value="{{$tour->price}}">
            </div>
            <div class="form-group">
                <label for="exampleInputLocation">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Input location here" value="{{$tour->location}}">
            </div>
            <div class="form-group">
                <label for="exampleInputContact">Contact to</label>
                <input type="text" class="form-control" id="contactto" name="contactto" placeholder="Input contact here" value="{{$tour->contactto}}">
            </div>
            <div class="form-group">
                <label for="exampleInputDesc">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Input description here" value="{{$tour->description}}">
            </div>
            <div class="btnadd">
                <button type="submit" class="btn btn-default">Save</button>
            </div>

        </form>
    </div>
</div>


@include('layouts.footer')