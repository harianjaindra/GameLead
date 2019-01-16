@extends('layouts.body')

@section('content')
	<!-- banner -->
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
							<a href="#about" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/dota.jpg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">

							<h4>DOTA 2</h4>
							<p>Protect The Ancient Now!!</p>
							<a href="#about" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>
				</ul>

			</div>
			<div class="clearfix"></div>
		</div>
		<!--//Slider-->
	</div>
	<!-- //banner -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Contracts</h4>
					<img src="images/ab.jpg" alt=" " class="img-responsive">
					<h5>Donec lobortis pharetra dolor</h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->

	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md-4 agileits_about_left">
				<h3 class="w3l_head">About Us</h3>
				<p class="w3ls_head_para">who we are</p>
			</div>
			<div class="agileits_banner_bottom_grids">
				<div class="col-md-6 agileits_banner_bottom_grid_l">
					<h4>GameLead</h4>
					<p><i>Tempat di mana kita dapat mengasah skill kita dan meningkatkan permainan kita. Serta mencari teman untuk bermain bersama di dalam game untuk sebuah turnamen.</p>
				</div>
				<div class="col-md-6 agileits_banner_bottom_grid_r">
					<div class="agileits_banner_btm_grid_r">
						<img src="images/about_ml.jpg" alt=" " class="img-responsive">
						<div class="agileits_banner_btm_grid_r_pos">
							<img src="images/about_dota8.jpg" alt=" " class="img-responsive">
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-bottom -->
	<!-- services -->
	<div class="services" id="services">
		<h3 class="w3l_head w3l_head1">Services</h3>
		<p class="w3ls_head_para w3ls_head_para1">View Our Services</p>
		<div class="services-agile-w3l">
			<div class="col-md-3 services-gd text-center">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#" class="hi-icon"><img src="images/s1.png" alt=" " /></a>
				</div>
				<h4>Tutorial</h4>
				<p>Asah skill mu dengan tutorial interaktif</p>
			</div>

			<div class="col-md-3 services-gd text-center">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#" class="hi-icon"><img src="images/s2.png" alt=" " /></a>
				</div>
				<h4>Find Team</h4>
				<p>Cari team yang sesuai dengan skill mu</p>
			</div>
			<div class="col-md-3 services-gd text-center">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#" class="hi-icon"><img src="images/s3.png" alt=" " /></a>
				</div>
				<h4>Online Tournament</h4>
				<p>Praktekan skill mu dalam tournament</p>
			</div>
			<div class="col-md-3 services-gd text-center">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#" class="hi-icon"><img src="images/s4.png" alt=" " /></a>
				</div>
				<h4>Learn from Pros</h4>
				<p>belajar dari pengalaman pemain profesional</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //services -->

	<!-- gallery -->
	<div class="team-bottom" id="work">
		<div class="container">
			<h3 class="w3l_head w3l_head1">Latest Gallery</h3>
			<p class="w3ls_head_para w3ls_head_para1">Mobile Legends and Dota 2</p>
			<div class="w3layouts_gallery_grids">
				<ul class="w3l_gallery_grid" id="lightGallery">
					<li data-title="Hero Agility" data-desc="Hero agility adalah tipe hero dota 2 yang mengutamakan kecepatan attack dan burst damage yang tinggi." data-src="images/galeri_dota1.jpg" data-responsive-src="images/8.jpg">
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/galeri_dota1.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Dota 2</h4>

								</div>
							</a>
						</div>
					</li>
					<li data-title="Hero Intelligence" data-desc="Hero intelligence adalah tipe hero dota 2 yang mengutamakan damage magic yang besar dana mana point yang besar. " data-src="images/galeri_dota2.jpg" data-responsive-src="images/9.jpg">
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/galeri_dota2.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Dota 2</h4>

								</div>
							</a>
						</div>
					</li>
					<li data-title="Hero Strength " data-desc="Hero Strength adalah tipe hero dota 2 yang mengutamakan pertahanan tubuh yang baik dan health point yang besar." data-src="images/galeri_dota3.jpg" data-responsive-src="images/10.jpg">
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/galeri_dota3.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Dota 2</h4>

								</div>
							</a>
						</div>
					</li>
					<li data-title="Hero Mage" data-desc="Hero Mage adalah tipe hero mobile legends yang mengutamakan damage magic yang besar. " data-src="images/galeri_ml1.jpg" data-responsive-src="images/11.jpg">
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/galeri_ml1.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Mobile Legends</h4>

								</div>
							</a>
						</div>
					</li>
					<li data-title="Hero Fighter" data-desc="Hero Fighter adalah tipe hero mobile legends yang memiliki pertahanan dan damage yang tinggi" data-src="images/galeri_ml2.jpg" data-responsive-src="images/12.jpg">
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/galeri_ml2.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Mobile Legends</h4>

								</div>
							</a>
						</div>
					</li>
					<li data-title="Marksman" data-desc="Hero Marksman adalah tipe hero mobile legends yang memiliki damage yang tinggi dan jangkawan serang yang luas" data-src="images/galeri_ml3.jpg" data-responsive-src="images/13.jpg">
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/galeri_ml3.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Mobile Legends</h4>

								</div>
							</a>
						</div>
					</li>
					<li data-title="Event" data-desc="The International Dota 2 Championships" data-src="images/galeri_event1.jpg" data-responsive-src="images/14.jpg">
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/galeri_event1.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Event</h4>

								</div>
							</a>
						</div>
					</li>
					<li data-title="Event" data-desc="Mobile Legends : Bang Bang Professional League (MPL) adalah liga utama dari Mobile Legends" data-src="images/galeri_event2.jpg" data-responsive-src="images/15.jpg">
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/galeri_event2.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Event</h4>

								</div>
							</a>
						</div>
					</li>
					<li data-title="Games" data-desc="Mobile Legends: Bang Bang South East Asia Cup (MSC)" data-src="images/galeri_event3.jpg" data-responsive-src="images/16.jpg">
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/galeri_event3.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Event</h4>

								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //gallery -->
	<!-- projects -->
	<div class="projects" id="projects">
		<div class="container">
			<div class="port-head">
				<h3 class="w3l_head w3l_head1">Latest News</h3>
				<p class="w3ls_head_para w3ls_head_para1">Informasi terkini tentang DOta dan Mobile Legends</p>
			</div>
		</div>
		<div class="projects-grids">
			<div class="sreen-gallery-cursual">

				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/news_2.jpg" alt="" />
							<div class="projects-grid-caption">

								<h4>MPL 2018</h4>
								<p>NXL menjuarai MPL seasson 1</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/news_3.jpg" alt="" />
							<div class="projects-grid-caption">

								<h4>MSC 2018</h4>
								<p>AETHER MAIN menjuarai MSC 2018</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/news_4.jpg" alt="" />
							<div class="projects-grid-caption">

								<h4>The International Dota 2 Championships</h4>
								<p>Team OG menjuarai The International Dota 2 2018</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/news_5.jpg" alt="" />
							<div class="projects-grid-caption">

								<h4>Player</h4>
								<p>InYourdream harus berpisah dengan team TIGERS di Dota 2</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/news_6.jpg" alt="" />
							<div class="projects-grid-caption">

								<h4>Bucharest Minor</h4>
								<p>Kompetisi Dota 2 Bucharest Minor Dota 2 telah di buka pada Januari</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/news_7.jpg" alt="" />
							<div class="projects-grid-caption">

								<h4>MPL Seasson 2</h4>
								<p>Team Rex Regum Qeon menjuarai MPL Seasson 2 Mobile Legends</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/news_8.jpg" alt="" />
							<div class="projects-grid-caption">

								<h4>Update Hero</h4>
								<p>Khufra, Hero Tank Dambaan yang Kaya Efek Crowd Control</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/news_2.jpg" alt="" />
							<div class="projects-grid-caption">

								<h4>MPL 2018</h4>
								<p>NXL menjuarai MPL seasson 1</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //projects -->
	</div>
@endsection

<!--banner Slider starts Here-->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager:false,
            nav:true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- js -->
<!-- start-smoth-scrolling -->
<script src="js/lightGallery.js"></script>
<script>
    $(document).ready(function() {
        $("#lightGallery").lightGallery({
            mode:"fade",
            speed:800,
            caption:true,
            desc:true,
            mobileSrc:true
        });
    });
</script>

<script src="js/owl.carousel.js"></script>
<link href="css/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay : true,
            navigation :true,

            items : 4,
            itemsDesktop : [640,5],
            itemsDesktopSmall : [414,4]

        });

    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //js -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>