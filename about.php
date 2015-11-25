<!DOCTYPE HTML>
<html>
<head>
<title>vulcaninfotech</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css1/about.css" rel="stylesheet" type="text/css" media="all"/>	
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
			<li><a href="index.php">HOME</a></li>
			<li class="activate" ><a href="about.php">ABOUT</a></li>
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
    
<div class="main_bg" style="margin-top:100px;"><!-- start main -->
<div class="container">
	
		
</div>
</div>


<!-- start banner -->
<div id="bannerBg" style="background-image:url(images/bk.jpg)"> 
<!--div class="main slider_text text-center">
		<h3 style="margin-top:30px;">MEET OUR TEAM</h3>
		
</div-->
<!--div id="containingDiv" style="margin-top:-40px;">

            <div id="allinone_carousel_charming">
			
            	<div class="myloader"></div>
				
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
				
				
			
               		<li><img src="images/team.jpg" alt=""  style="width:200px;"class="img-responsive"/></li>
                    <li><img src="images/team1.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="images/team2.jpg" alt="" class="img-responsive"/></li>
                   
                    
                      
                </ul>    
          </div>
</div>
</div-->

 <!-- end banner -->

	<!--start-skill-->
	<div class="skills" style="background-image:url(images/); ">
		<div class="container">
			<div class="skill-top" style="margin-top:60px;">
				<h3>OUR STORY</h3>
			</div>	
				

<div class="row">
				<div class="col-md-6 ">
					<img src="images/software-development2.png" style="height:300px;" class="img-responsive">
				</div>
				<div class="col-md-6 content-about-grid-right span1_of_3 ">					
						<h5> VulcanIinfotech delivers a comprehensive suite of web services ranging from custom logo design to development of complex enterprise web applications. All of our services are tailored to each of our client's unique business requirements with an understanding of their deliverables. We combine our business knowledge with technological prowess and proven methodologies to deliver high-quality, cost effective products that maximize our client's competitive advantage and productivity.</h5>


							
						</div>						
				
				<div class="clearfix"> </div>

					
				
	</div></div></div>


<div class="footer_bg" ><!-- start footer -->
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