<!DOCTYPE HTML>
<html>
<head>
<title>vulcaninfotech</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   <!--	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<!-- must have -->
<link href="css/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="js/allinone_carousel.js" type="text/javascript"></script>
<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->

<!-- new bootsrtap links-->

<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

<link rel="shortcut icon" type="image/x-icon" href="images/fevicon.ico" />
    <link rel="icon" type="image/x-icon" href="images/fevicon.ico" />


	<script>
		jQuery(function() {

			jQuery('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 990,
				height: 454,
				responsive:true,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				//easing:'easeOutBounce',
				numberOfVisibleItems:5,
				nextPrevMarginTop:23,
				playMovieMarginTop:0,
				bottomNavMarginBottom:-10
			});		
		});
	</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!-- start circle -->
<script>
(function($){
	$.fn.percentPie = function(options){

		var settings = $.extend({
			width: 100,
			trackColor: "EEEEEE",
			barColor: "E2534B",
			barWeight: 30,
			startPercent: 0,
			endPercent: 1,
			fps: 60
		}, options);

		this.css({
			width: settings.width,
			height: settings.width
		});

		var	that = this,
			hoverPolice = false,
			canvasWidth = settings.width,
			canvasHeight = canvasWidth,
			id = $('canvas').length,
			canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
			canvas = canvasElement.get(0).getContext("2d"),
			centerX = canvasWidth/2,
			centerY = canvasHeight/2,
			radius = settings.width/2 - settings.barWeight/2;
			counterClockwise = false,
			fps = 1000 / settings.fps,
			update = .01;
			this.angle = settings.startPercent;

		this.drawArc = function(startAngle, percentFilled, color){
			var drawingArc = true;
			canvas.beginPath();
			canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
			canvas.strokeStyle = color;
			canvas.lineWidth = settings.barWeight;
			canvas.stroke();
			drawingArc = false;
		}

		this.fillChart = function(stop){
			var loop = setInterval(function(){
				hoverPolice = true;
				canvas.clearRect(0, 0, canvasWidth, canvasHeight);

				that.drawArc(0, 360, settings.trackColor);
				that.angle += update;
				that.drawArc(settings.startPercent, that.angle, settings.barColor);

				if(that.angle > stop){
					clearInterval(loop);
					hoverPolice = false;
				}
			}, fps);
		}

		this.mouseover(function(){
			if(hoverPolice == false){
				that.angle = settings.startPercent;
				that.fillChart(settings.endPercent);
			}
		});

		this.fillChart(settings.endPercent);
		this.append(canvasElement);
		return this;
	}
}(jQuery));

$(document).ready(function() {

	$('.google').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .9,
		fps: 60
	});
  
  $('.moz').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .75,
		fps: 60
	});
  
  $('.safari').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "#76C7C0",
		barWeight: 20,
		endPercent: .5,
		fps: 60
	});
    
});
</script>

<style>

.page1_header {
  font-weight: 300;
  font-size: 30px;
  line-height: 100px;
  padding-top: 13px;
  z-index:999;
}
.page1_header .banner {
  background-color: #f51818;
  color: #ffffff;
  display: block;
  width: 33.5%;
  text-align: center;
  float: left;
  font-size: 18px;
  padding: 59px 0 14px;
}
.page1_header .banner .fa {
  margin-bottom: 10px;
  display: block;
  font-size: 72px;
  line-height: 5px;
}
.page1_header .banner:first-child + .banner {
  background-color: #1eabe7;
}
.page1_header .banner:first-child + .banner + .banner {
  background-color: #1eabe7;
}
.page1_header .banner + .banner + .banner {
  padding-top: 50px;
  padding-bottom: 13px;
}
.page1_header .banner.maxheight1 .fa {
  margin-bottom: 2px;
}
.page1_header .banner:hover {
  background-color: #000000 !important;
}

</style>
</head>
<body style="font-family:Segoeui;">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1625276917695542";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--<div class="g-follow" data-annotation="vertical-bubble" annotation="vertical-bubble" data-height="20" data-href="//plus.google.com/u/0/104491286559844272356" data-rel="publisher"></div>-->

<!-- Place this tag after the last widget tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<div class="header_bg fixed" >
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/vitlogo.png" alt=""/></a>
		</div>
		<div class="" align="right" height="20px" width="20px" >
		<a id="touch-menu" class="mobile-menu" href="#" style="background-color:; width:50px; margin-top:-2px;"><img align="middle" height="20px" width="25px" src="images/menu.png" /></a>
		<nav >
		
		
		<ul class="menu list-unstyled">
			<li class="activate"><a href="index.php">HOME</a></li>
			<li ><a href="about.php">ABOUT</a></li>
			<li ><a href="service.php">services</a></li>
			<li><a href="portfolio.php">PORTFOLIO</a>
			
			</li>
			<!--li><a href="blog.html">BLOG</a></li>
			<li><a href="feature.html">feature</a></li-->
			<li><a href="contactus.php">CONTACT</a></li>
		</ul>
		</nav>
		
		<script src="js/menu.js" type="text/javascript"></script>
		
		<!--<script>
						$(document).ready(function() {
							 var navoffeset=$(".header_bg").offset().top;
							 $(window).scroll(function(){
								var scrollpos=$(window).scrollTop(); 
								if(scrollpos >=navoffeset){
									$(".header_bg").addClass("fixed");
								}else{
									$(".header_bg").removeClass("fixed");
								}
							 });
							 
						});
		</script>-->

		
		
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</div>
    <div id="fwslider" style="margin-top:100px;"><!-- start slider -->
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="images/webapp.jpg">
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content" style="margin-top:65px;" >
                    <div class="slide_content_wrap" >
                        
						<!--<section class="page1_header">
    <div class="container">
      <div class="row">
        <div class="grid_4">
          <a href="#" class="banner "style="height:250px; " ><div class="maxheight">
            <div class="fa fa-globe"></div>Global Research</div>
          </a>
          <a href="#" class="banner "style="height:250px;"><div class="maxheight">
            <div class="fa fa-lightbulb-o"></div>Creative Ideas</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-cog"></div>New Services</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-briefcase"></div>Pro Management</div>
          </a>
        </div>
       
      </div>
    </div>
  </section>-->
                        <h4 class="title" style="font-size:35px;"  >We build beautiful apps</h4>
                       <!-- <p class="description">Pellentesque non neque egestas libero. Nam sed porta est. Vestibulum id massa eu odio rhoncus eleifend.</p>-->
                
						
						
						
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="images/4slider-tranporting.jpg">
                <div class="slide_content" style="margin-top:65px; ">
                    <div class="slide_content_wrap" >
                        <h4 class="title" style="font-size:35px;">Your satisfaction is our reward</h4>
                       <!-- <p class="description">Pellentesque non neque egestas libero. Nam sed porta est. Vestibulum id massa eu odio rhoncus eleifend.</p>-->
                    </div>
                </div>
            </div>
		 <div class="slide">
                <img src="images/ourbusiness.jpg">
                <div class="slide_content" style="margin-top:65px;">
                    <div class="slide_content_wrap">
                       <h4 class="title" style="font-size:35px;">Smart solutions for smart businesses</h4>-->
                       <!-- <p class="description">Pellentesque non neque egestas libero. Nam sed porta est. Vestibulum id massa eu odio rhoncus eleifend.</p>-->
                    </div>
                </div>
            </div>
			
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->
<div class="main_bg" style="background-image:url(images/bk.jpg)" ><!-- start main -->
<div class="container">
	<div class="main_grid ">
		<div class="top_grid  "><!-- start top_grid -->
				<div class="col-md-10 span1_of_1">
						<h3> our services</h3>
						
				</div>
				<!--<div class="col-md-2 span1_of_2">
					<a class="btn" href="single-page.html">view more</a>
				</div>-->
				<div class="clearfix"></div>
		</div>
		<div class="span_of_4 "><!-- start span_of_4 -->
			<div class="col-md-3 span1_of_4 ">
				<div class="span4_of_list   ">
					<span class="active  " ><i class="  fa fa-cloud " ></i></span>
					<h3>Web development</h3>
					<p>Delivering advanced web application is exactly what we do </p>
					<div class="read_more">
						<a class="btn btn-2 active" href="web.php">view more</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<span><i class="fa fa-desktop"></i></span>
					<h3 style="font-size:18px;">Custom development</h3>
					<p>Based on technology and Domain expertise</p>
					<div class="read_more">
						<a class="btn  btn-2b" href="custom.php">view more</a>
					</div>	
				</div>	
			</div>
			<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<span><i class="fa fa-mobile"></i></span>
					<h3 style="font-size:18px;">Mobile development</h3>
					<p>We design advanced mobile solutions for business</p>
					<div class="read_more">
						<a class="btn btn-2b" href="mob.php">view more</a>
					</div>		
				</div>
			</div>
			<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<span><i class="fa fa-paint-brush"></i></span>
					<h3 style="font-size:18px;">Logo Designing</h3>
					<p>Crafting,visually,stunning Logos for you business.</p>
					<div class="read_more">
						<a class="btn btn-2b" href="logo.php">view more</a>
					</div>						
				</div>
			</div>
			<div class="clearfix"></div>
		</div><!-- end span_of_4 -->
	</div>
</div>
</div>
<!--div class="main1_bg" style="background-image:url(images/theme2.jpg)" >
<div class="container">
	<div class="main slider_text texxt-center">
		<h2>Our Web Apps</h4>
		
</div>
</div>

<div id="bannerBg" style="background-image:url(images/theme2.jpg)">
<div id="containingDiv"style="margin-top:-47px;">
            <div id="allinone_carousel_charming" >
            	<div class="myloader"></div>
                
                <ul class="allinone_carousel_list">
               		<li><img src="images/Technology-and-Careers.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/images (2).jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/expensegoblin.jpg" alt="" class="img-responsive"/></li>
                     <li><img src="images/dental.jpg" alt="" class="img-responsive"/></li>
                   
                    
                      
                </ul>    
          </div>
</div>
</div>
 
</div>
<div class="main_btm" style="background-image:url(images/theme2.jpg)">
<div class="container">
	<div class="main span_of_3">
			
		<div class="col-md-12 span1_of_3">
			<h5> VulcanIinfotech delivers a comprehensive suite of web services ranging from custom logo design to development of complex enterprise web applications.  All of our services are tailored to each of our client's unique business requirements with an understanding of their deliverables. We combine our business domain knowledge with technological prowess and proven methodologies to deliver high-quality, cost effective products that maximize our client's competitive advantage and productivity. </h5>
				
				
		</div>	
		
		
</div>
</div-->
<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
		<div class="col-md-10 footer1_of_3 ">
			<div class="f_logo ">
				<a href="index.html"><img src="images/vitlogo.png" alt=""/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="">Email:&nbsp;<a href="mailto:info@vulcaninfotech.com">info@vulcaninfotech.com</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span class="">&#169; All rights reserved |  by&nbsp;<a style="color:#f51818;font-size:14px; " href="http://vulcaninfotech.com/">Vulcaninfotech</a></span>
			</div>	

			
			


		</div>

		

<div class="soc_icons pull-right"  >
			<ul class = "list-unstyled text-right" style="margin-top:20px;"  >
				<li ><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.facebook.com/Vulcaninfotech-1674724209410537/"><i class="fa fa-facebook"></i></a></li>
				<li><a href="//plus.google.com/u/0/104491286559844272356"><i class="fa fa-google-plus"></i></a></li>
				
			</ul>
		</div>
</div>
</div>
</div>
</body>
</html>