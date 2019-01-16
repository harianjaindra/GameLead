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
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="/css/font-awesome.css" rel="stylesheet">

<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Jura:300,400,500,600" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

@include('layouts.nav')

<div class="lol">
    @yield('content')
    <div class="text-center rapi">
    <img src="{{url('/Aset/'.$tour->picture)}}" width="200" class="card-img-top" alt="Card image cap">
    <p>Title : {{$tour->title}}
    <p>Caption : {{$tour->caption}}</p>
    <p>Category :  {{$tour->category}}</p>
    <p>Prize :  {{$tour->prize}}</p>
    <p>Price :  {{$tour->price}}</p>
    <p>Location : {{$tour->location}}</p>
    <p>Contact : {{$tour->contactto}}</p>
    <p>Owner : {{$tour->owner}}</p>
    </div>
    <div class="col-md-12 text-center">
        <a href="{{url('/edittour/'.$tour->id)}}" type="button" class="btn btn-warning">Edit</a>
        <a href="{{url('/deletetour/'.$tour->id)}}" type="button" class="btn btn-warning">Delete</a>

    </div>
</div>
@include('layouts.footer')