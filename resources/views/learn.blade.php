@extends('layouts.body')
@section('content')
    <link href ="https://maxcdn.bootstrapcdn.com/bootstrapa/3.3.7/css/bootstrap.min.css"
          rel ="stylesheet"/>
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.0.9/dist/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="bower_components/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>



    <div class="banner">
        <!--Slider-->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="slider-img">
                            <img src="images/ML.jpg" class="img-responsive" alt="Fantasy World">
                        </div>
                        <div class="slider-info">

                            <h4>MOBILE LEGENDS </h4>
                            <p>World building is component of fantasy </p>
                            <a href="/learnml" class="hvr-shutter-in-horizontal scroll">Read More</a>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img">
                            <img src="images/dota.jpg" class="img-responsive" alt="Fantasy World">
                        </div>
                        <div class="slider-info">

                            <h4>DOTA 2</h4>
                            <p>Protect The Ancient Now!!</p>
                            <a href="/learndota" class="hvr-shutter-in-horizontal scroll">Read More</a>
                        </div>
                    </li>
                </ul>

            </div>
        <audio src="{{Url('audio')}}/Yellow_Claw_Shotgun.mp3" autoplay controls></audio>

    </div>

@endsection