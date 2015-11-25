<!DOCTYPE HTML>
<html>
<head>
<title> vulcaninfotech</title>
<!-- Bootstrap -->
<style>
.error {color: #FF0000;}
</style>

<link rel="canonical" href="http://www.example.com" />
    <script src="https://apis.google.com/js/platform.js" async defer>
    </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/menu.js" type="text/javascript"></script>


<link rel="shortcut icon" type="image/x-icon" href="images/fevicon.ico" />
    <link rel="icon" type="image/x-icon" href="images/fevicon.ico" />
<script>
 function fn(){
	 //alert('hi');
	 $('#txtEmail').on('keypress', function() {
    var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
    if(!re) {
        $('#error1').show();
    } else {
        $('#error1').hide();
    }
})
 }
 function checkName(){
	 //alert('hi');
	 $('#txtName').on('keypress', function() {
	//document.getElementById('txtName').value=null;
    var re = /^[a-zA-Z ]*$/.test(this.value);
    if(!re) {
        document.getElementById('txtName').value=null;
		$('#error2').show();
		
    } else {
        $('#error2').hide();
    }
})
 }
 function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
 
 function checkSubject(){
	 //alert('hi');
	 $('#txtSubject').on('keypress', function() {
    var re = /^[a-zA-Z ]*$/.test(this.value);
    if(!re) {
        $('#error3').show();
    } else {
        $('#error3').hide();
    }
})
 }
 
 function checkEmpty(){
	
	 var name=document.getElementById('txtName').value;
	 var email=document.getElementById('txtEmail').value;
	 var subject=document.getElementById('txtSubject').value;
	 var message=document.getElementById('txtMessage').value;
	 if(!name){
		 
		 alert("Name empty");
		 //document.getElementById("error2").innerHTML="Name should not be empty";
	 }
	 
 }
 
 function domainCheck(dom) {
    // convert input to lowercase.
    dom = dom.toLowerCase();
    // find the first occurance of '.'
    pos = dom.indexOf(".");
    // Using the first occurance of '.'
    // find the extension submitted.
    tld = dom.substring(pos);
    switch(tld) {
        // TLD's to accept.
        case '.com': return true; break;
        case '.co.uk': return true; break;
        case '.eu': return true; break;
        case '.io': return true; break;
        case '.co': return true; break;
        case '.net': return true; break;
        default: return false;
    }
}

function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
document.getElementById('error1').innerHTML="<span style='color:red; font-weight:bold; font-size:14;'>Invalid Email-Id</span>";


            emailField.value="";
emailField.focus();
            return false;
        }

        return true;

}
var name=document.getElementById('txtName').value;
alert(name);	
</script>
</head>
<body style="font-family:Segoeui;">
<?php
// the message
$to = "prajaktakhatu@gmail.com";
if(isset($_POST['txtSubject']) or isset($_POST['txtEmail']) or isset($_POST['txtName']) or isset($_POST['txtMessage']) or isset($_POST['btnSubmit'])){
$subject=$_POST['txtSubject'];
$name=$_POST['txtName'];
$message=$_POST['txtMessage'];
$email=$_POST['txtEmail'];
$msg="
<html>
<body>
<table>
<tr>
<td><?php $name?></td>
</tr>
<tr>
<td><?php $subject?></td>
</tr>
<tr>
<td><?php $email?></td>
</tr>
<tr>
<td><?php $message?></td>
</tr>
</table>
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail("prajaktakhatu@gmail.com",$subject,$msg);
}



?>
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
			<li><a href="portfolio.php">PORTFOLIO</a>
			
			</li>
			<!--li><a href="blog.html">BLOG</a></li>
			<li><a href="feature.html">feature</a></li-->
			<li class="activate"><a href="contactus.php">CONTACT</a></li>
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
		<h3 class="style pull-left">Contact us</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">contact</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1" style="background-image:url(images/bk.jpg)"><!-- start main_btm -->
<div class="container" >
	<div class="contact" >
		
		
		<div class="contact_main">
			    <div class="col-md-4 company_ad">
				   
<img src="images/call_center.png" class="img-responsive" style="margin-top:50px;" >
				</div>

				<div class="col-md-8">
				  <div class="contact-form">
<!--img src="images/ea.png" class="img-responsive" style="width:250px;height:90px;" -->
				  	<h3 style="color:#f51818; align:center;" >Contact Us</h3>
				<?php 
						/*$name=$email=$subject=$message=$nameErr=$emailErr=$subjectErr=$messageErr="";
						if($_SERVER["REQUEST_METHOD"] == "POST"){
							if(empty($_POST["txtName"])){
								$nameErr = "Name is required";
							}
							else{
								$name = test_input($_POST["txtName"]);
								// check if name only contains letters and whitespace
								if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
									$nameErr = "Only letters and white space allowed"; 
								}
							}
							if(empty($_POST["txtEmail"])){
								$emailErr = "Email is required";
							}
							else{
								$email = test_input($_POST["txtEmail"]);
								// check if e-mail address is well-formed
								if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
								$emailErr = "Invalid email format"; 
								}
							}
							if(empty($_POST["txtSubject"])){
								$subjectErr = "Subject is required";
							}
							else{
								$subject = test_input($_POST["txtSubject"]);
								// check if name only contains letters and whitespace
								if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
									$subjectErr = "Only letters and white space allowed"; 
								}
							}
							if(empty($_POST["txtMessage"])){
								$messageErr = "Message is required";
							}
							else{
								$message = test_input($_POST["txtMessage"]);
								// check if name only contains letters and whitespace
								if (!preg_match("/^[a-zA-Z ]*$/",$message)) {
									$messageErr = "Only letters and white space allowed"; 
								}
							}
							if(isset($nameErr) && isset($emailErr) && isset($subjectErr) && isset($messageErr)) {
								//echo "<script> alert('Name'+'$name'); </script>";
								//echo "<script> alert('hi'); </script>";
							}
							else{
								echo "<script>alert('values not set');</script>";
							}
													
											
						}
						function test_input($data) {
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;
						}*/
						
						
						
					?>
					 
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


							<input type="text" name="txtName" id="txtName" placeholder="Name" required onkeypress="return ValidateAlpha(event);" class="form-control" style="box-shadow:1px 1px 1px 1px gray;">
							<span id="error2" style="display:none;color:red;">Wrong name</span>
							<input type="text" name="txtEmail" id="txtEmail" placeholder="Email"  class="form-control" required onblur="validateEmail(this);"  style="box-shadow:1px 1px 1px 1px gray;">
							<div id="error1"></div>
							<input type="text" name="txtSubject" id="txtSubject" class="form-control" style="box-shadow:1px 1px 1px 1px gray;" placeholder="Subject" required value="<?php /*echo $subject;*/ ?>" onkeypress="return ValidateAlpha(event);">
							<span id="error3" style="display:none;color:red;">Wrong subject</span>
							<textarea name="txtMessage" class="form-control" style="box-shadow:1px 1px 1px 1px gray;" value="<?php /*echo $message;*/ ?>" placeholder="Message" required onkeypress="checkMessage()"/></textarea>
							<!--<span class="error">* <?php /*echo $messageErr;*/ ?></span>-->
							<span ><input type="submit" style="background-color:#f51818;" value="SUBMIT" id="btn"></span>
						</form>
						<?php 
						
					?>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
		</div>
	</div>
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