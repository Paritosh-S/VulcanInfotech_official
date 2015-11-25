<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Vulcaninfotech</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
 <link rel="shortcut icon" type="image/x-icon" href="images/fevicon.ico" />
    <link rel="icon" type="image/x-icon" href="images/fevicon.ico" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/menu.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/fliplightbox.min.js"></script>
		<script type="text/javascript">
			$('body').flipLightBox()
		</script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
<!-- start light_box -->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<!--
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
-->
<script type="text/javascript" src="js/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>

</head>
<body  style="font-family:Segoeui;">
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
			<li ><a href="service.php">services</a></li>
			<li class="activate"><a href="portfolio.php">PORTFOLIO</a>
			
			</li>
			<!--li><a href="blog.html">BLOG</a></li>
			<li><a href="feature.html">feature</a></li-->
			<li><a href="contactus.php">CONTACT</a></li>
		</ul>
		</nav>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">our Portfolios</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Portfolio</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>

<div class="main_btm1" style="background-image:url(images/bk.jpg)" ><!-- start main_btm -->
      <div class="container" ><br><br><br><br><br>


<ul class="nav nav-pills" >
  
 <li class="active"><a data-toggle="tab" href="#menu4" style="font-size:18px;">DazzlingSmiles</a></li>
	
</ul><br><br>

  

  <div class="tab-content" >
    <div id="home" class="tab-pane fade in active">
      <br><br><br>
      <div class="row">
    <div class="col-md-3">
      <a href="" class="thumbnail " data-toggle="modal" data-target="#myModal">
        
         <img src="images/dazzy.jpg" style="height:150px; width:550px;"  >
      </a>
    <div class="modal fade" id="myModal" role="dialog" style="margin-top:-55px;">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top:165px; background-image:url(images/bk.jpg)">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body " >
          <img src="images/dazzy.jpg" class="img-responsive"  >
        </div>
        
      </div>
      
    </div>
  </div>
  </div>
	<div class="col-md-3">
      <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal1">
       
        <img src="images/dazzy1.jpg" style="height:150px; width:550px;" >
      </a>
	  <div class="modal fade" id="myModal1" role="dialog"style="margin-top:-55px;" >
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top:165px; background-image:url(images/bk.jpg)">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body " >
          <img src="images/dazzy1.jpg" class="img-responsive"  >
        </div>
        
      </div>
      
    </div>
  </div>
    </div>
	<div class="col-md-3">
      <a href="" class="thumbnail" data-toggle="modal" data-target="#myModal2">
        
        <img src="images/dazzy2.jpg" style="height:150px; width:550px;" >

      </a>
      
    <div class="modal fade" id="myModal2" role="dialog" style="margin-top:-55px;">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top:165px; background-image:url(images/bk.jpg)">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body " >
          <img src="images/dazzy2.jpg" class="img-responsive"  >
        </div>
        
      </div>
      
    </div>
  </div>
    </div>
	<div class="col-md-3">
      <a href="" class="thumbnail" data-toggle="modal" data-target="#myModal3" >
        
        <img src="images/dazzy3.jpg" style="height:150px; width:550px;">
      </a>
<div class="modal fade" id="myModal3" role="dialog" style="margin-top:-55px;">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top:165px; background-image:url(images/bk.jpg)">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body " >
          <img src="images/dazzy3.jpg" class="img-responsive"  >
        </div>
        
      </div>
      
    </div>
  </div>
    </div>
	</div>
    </div>

   
</div></div><br><br><br><br><br><br><br><br>

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