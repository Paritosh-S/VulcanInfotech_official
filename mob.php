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
<link href="css3/web.css" rel='stylesheet' type='text/css' />
<link href="css4/style.css" rel='stylesheet' type='text/css' />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all"/-->
<!--theme-style-->
<link href="css1/about.css" rel="stylesheet" type="text/css" media="all"/>	
<!--//theme-style-->
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->



<script type="text/javascript" src="js1/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js1/move-top.js"></script>
<script type="text/javascript" src="js1/easing.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="images/fevicon.ico" />
    <link rel="icon" type="image/x-icon" href="images/fevicon.ico" />
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

ul.b {
    list-style-type: square;
}


.action_button1   { 
	text-decoration: none;
	color: #fff;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-o-border-radius: 2px;
	padding: 10px 30px;
	font-size: 13px;
	text-transform: uppercase;
	background:#f51818;
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

<div class="header_bg navbar-fixed-top">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/vitlogo.png" alt=""/></a>
		</div>
		<div class="" align="right" height="20px" width="20px" >
		<a id="touch-menu" class="mobile-menu" href="#" style="background-color:; width:50px; margin-top:-2px;"><img align="middle" height="20px" width="25px" src="images/menu.png" /></a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.php">HOME</a></li>
			<li ><a href="about.php">ABOUT</a></li>
			<li class="activate"><a href="service.php">services</a></li>
			<li><a href="portfolio.php">PORTFOLIO</a>
			
			</li>
			<!--li><a href="blog.html">BLOG</a></li>
			<li><a href="feature.html">feature</a></li-->
			<li><a href="contactus.php">CONTACT</a></li>
		</ul>
		</nav>
		<script src="js/menu.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">about us</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">about us</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>

<!--div class="container"-->
<!--div class="services"-->
	   
	   	
	<!--end-team-->
	
	
	
	<!--start-skill-->
	

		<!--- container ---->
		<div class="container" style="margin-top:60px;">
			<div class="content-about-text">
				<span> </span>
<div class="team-top">
				<h3>MOBILE DEVELOPMENT</h3>
				
			</div></br>
			</div>
			<div class="row">
				<div class="col-md-6 content-about-grid-left">
					<img src="images/Desktop-View-and-Mobile-Friendly-View.png">
				</div>
				<div class="col-md-6 content-about-grid-right">					
						<p style="color: #666666;font-size: 15px;font-weight: 400;line-height: 1.5em;width: 84%;">
						Mobile Development in today's world is a critical aspect of business growth and you don't have to take our word for it.
						
						<br>  
							<b>How vulcaninfo Can Help With Mobile App Development Services?</b><br> </p>
<ul class="b"style="color: #666666;font-size: 15px;font-weight: 400;line-height: 1.5em;width: 84%;" >

<li>Our developers will give you the technical options to fit the &nbsp;&nbsp;&nbsp;mobile app that you want.</li> 
<li>Mobile solutions for different platforms: Android, iPad, iPhone &nbsp;&nbsp;&nbsp;and Windows Phone.</li>
<li>Option for cross platform capability.</li> 
<li>Top of the line security options to protect your company.</li> 
<li>Technical expertise that will make your application to work &nbsp;&nbsp;&nbsp;effectively with your customer base.</li>
</ul>
						


						<div class="learn">
<a class="action_button1 popup-with-zoom-anim" href="service.php" >Back To Services</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="action_button1 popup-with-zoom-anim" href="contactus.php" >ContactUs</a>
							


							
						</div>						
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!--end-skill-->
	


	<div class="gallery" id="gallery" style="background-image:url(images/bk.jpg); margin-top:-50px;">
	<div class="container">
		
			<div class="gallery-bottom">
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a class="b-link-stripe b-animate-go  thickbox"><img src="images/windows-10-HD-original_.jpg "alt="" class="img-responsive" style="height:200px;">
								<div class="mask" style="background-color:#f8f8ff;">
									<h4>WINDOWS</h4>
									<p style="color:black;"> Windows Mobile is a powerful platform for running applications on mobile devices. Windows Mobile devices exist in two main formats: devices with touch screens, and devices without touch screens.</p>
									
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
						   <a class="b-link-stripe b-animate-go  thickbox"  ><img src="images/Android.jpg" alt="" class="img-responsive" style="height:200px;">
								<div class="mask" style="background-color:#f8f8ff;" >
									<h4>ANDROID</h4>
									<p  style="color:black;"> Android is an open source and Linux-based operating system for mobile devices such as smartphones and tablet computers. </p>
									
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a class=" b-animate-go  thickbox"  ><img src="images/ios.png" alt="" class="img-responsive" style="height:200px;">
								<div class="mask" style="background-color:#f8f8ff;" >
									<h4>IOS</h4>
									<p style="color:black;" >Most applications in Apple App Store are written in the Objective-C programming language,and developers typically use Xcode to develop their applications.</p>
									
								</div>
							</a>
						</div>
					</div>
					
					
					
					
					
					
					
					<div class="clearfix"> </div>
			</div>
				<!--script src="js/jquery.chocolat.js"></script-->
			
			<!--light-box-files -->
			<script type="text/javascript">
			$(function() {
				$('.gallery a').Chocolat();
			});
			</script>

	</div>
</div>
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