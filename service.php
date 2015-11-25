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
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->

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

<link rel="shortcut icon" type="image/x-icon" href="images/fevicon.ico" />
    <link rel="icon" type="image/x-icon" href="images/fevicon.ico" />
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





</style>
</head>
<body style="font-family:Segoeui;">
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
		  <li><a href="index.html">Home</a></li>
		  <li class="active">about us</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1" ><!-- start main_btm -->
<!--div class="container"-->
	
	
	<div class="team" id="team" style="background-image:url(images/theme2.jpg)">
		<div class="container">
			<div class="team-top">
				<h3> OUR SERVICES</h3>
				
			</div>
			<div class="team-bottom">
				<div class="col-md-3 team-left">
<h3 style="color:#1eabe7;">Web Service</h3>
					<img src="images/webservice1.png" alt="Portfolio item"  class="img-responsive"  style="height:210px" /><br>
					<p >
                       Delivering advanced web application is exactly what we do
                    </p>
					<a class="btn   " href="web.php" style="background-color:#f51818;">View More</a>
					
					
				</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" style="background-image:url(images/bk.jpg)">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title"style=color:#f51818;" >Web Development</h3>
      </div>
      <div class="modal-body" >
        			<div class="row">
				<div class="col-md-4 content-about-grid-left">
					<img src="images/home-cms.png" class="img-responsive" style="height:150px; width:200px;">
				</div>
				<div class="col-md-8 content-about-grid-right">					
						<h5 style="color: #666666;font-size: 15px;font-weight: 400;line-height: 1.5em;width: 84%; margin-top:40px;">
							A CMS or a 'Content Management System' quite literally allows you to control and manage the content within your web site - without technical training. Using this uncomplicated
							system you can very easily add, delete images and edit text in your web site on the fly.


						</h5>
										
				</div>
				 <div class= "clearfix" > </div>
				 
			
			<div class="row">
				<div class="col-md-4 content-about-grid-left">
					<img src="images/php3.png" class="img-responsive" style="height:150px; width:200px;">
				</div>
				<div class="col-md-8 content-about-grid-right">					
						<h5 style="color: #666666;font-size: 15px;font-weight: 400;line-height: 1.5em;width: 84%; margin-top:40px;">
							PHP is a widely-used open source general-purpose scripting language that is especially suited for 
							web development and can be embedded into HTML. PHP is a server-side scripting language designed for 
							web development but also used as a general-purpose programming language.


						</h5>
											
				</div>
				 <div class= "clearfix" > </div>
				 
			</div>
			<div class="row">
				<div class="col-md-4 content-about-grid-left">
					<img src="images/asp_dot_net.png" class="img-responsive" style="height:150px; width:200px;">
				</div>
				<div class="col-md-8 content-about-grid-right">					
						<h5 style="color: #666666;font-size: 15px;font-weight: 400;line-height: 1.5em;width: 84%; margin-top:40px;">
							ASP.NET is a web development platform, which provides a programming model, a comprehensive software infrastructure
							and various services required 
							to build up robust web applications for PC, as well as mobile devices.


						</h5>
											
				</div>
				 <div class= "clearfix" > </div>
				 
			</div>
		</div>
      </div>
      
    </div>

  </div>
</div>
				<div class="col-md-3 team-left">
<h3 style="color:#1eabe7;">Custom Service</h3>
					<img src="images/custom-service3.png" class="img-responsive"  alt="Portfolio item"  style="height:210px; " /><br>
					<p >
                       custom development services help clients build sophisticated business websites  
                    </p>
					<a class="btn   " href="custom.php"  style="background-color:#f51818;">View More</a>
					
					
				</div>
				<div class="col-md-3 team-left">
<h3 style="color:#1eabe7;">Mobile Service</h3>
					<img src="images/mobservices1.png" alt="Portfolio item" class="img-responsive"style="height:210px; " /><br>
					<p >
                        We design advanced mobile solutions for business
                    </p>
					<a class="btn   " href="mob.php" style="background-color:#f51818;">View More</a>
					
				</div>
				<div class="col-md-3 team-left">
<h3 style="color:#1eabe7;" >Logo Design</h3>
					<img src="images/logo6.png"  class="img-responsive"  alt="Portfolio item" style="height:210px; "/><br>
					<p >
                       Crafting,visually,stunning Logos for you business.
                    </p>
					<a class="btn" href="logo.php" style="background-color:#f51818;">View More</a>
					
				</div>
				<div class="clearfix"></div>
			</div>
		<!--/div-->
	</div>
	<!--end-team-->
	
	
	
	<!--start-skill-->
	
	<!--end-skill-->
	
	
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