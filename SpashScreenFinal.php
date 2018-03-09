<!DOCTYPE html>
<head>
  <title>Coventry Cloud Wi-Fi</title>
  <style>
  
 .opacityBox{
	font-family:Arial, Helvetica, sans serif;
	margin: 25px;
	padding:1px;
	background-color: #ffffff;
	text-align: center;
	border: 1px #9f9f9f;
	border-radius: 25px;
	box-shadow: 5px 5px 2.5px #ffffff;
	opacity: 0.88;
	filter: alpha(opacity=88);
	margin:5%;}
	
.column {
    float: left;}
.oBoxText{
	margin:5%;
	font-weight: bold;
	color:#000000;
	padding:2px;}
body{
	background-color: #E0E0E0;
	font-size: 16px;}
.scrollBoxExt{
	border-bottom-style:none;
	border-left-style:none;
	border-right-style:none;
	border-top-color: #9F9F9F;
	border-top-style: solid;
	border-top-width: 2px;
	margin: 1%;
	padding: 1.15px;}
@media (min-width: 720px) {
.column.middle {
    width: 33%;
	background-color: #E0E0E0;
	background-image: url("CovCityCentre1.jpg");
	height: 100%;
	background-repeat: no-repeat;
	background-size: 100%;
	padding:5px;
	margin:5px;}
	
	.column.side {
    width:33%;
	color: #E0E0E0}
	
	
.scrollBoxInt{
	height:120px;
	width:100%;
	font-size:70%;
	overflow:auto;
	text-align:center;}
	
.t1{font-family:Arial, Helvetica, sans serif;
	font-size: 150%;
	background-color: #E0E0E0;}
}
@media (min-width: 1080px) {
.column.middle {
    width: 40%;
	background-color: #E0E0E0;
	background-image: url("CoventryCath2.jpg");
	height: 100%;
	background-repeat: no-repeat;
	background-size: 100%;
	padding:5%;
	margin:1px;}
	
	.column.side {
    width:25%;
	color: #E0E0E0}
	
	
.scrollBoxInt{
	height:155px;
	width:100%;
	font-size:70%;
	overflow:auto;
	text-align:center;}
.t1{
	font-family:Arial, Helvetica, sans serif;
	font-size: 125%;
	background-color: #E0E0E0;}
}
@media (max-width: 721px){
.column.middle {
    width: 40%;
	background-color: #E0E0E0;
	background-image: url("CovCityCathedral.jpg");
	height: 100%;
	font-size: 110%;
	background-repeat: no-repeat;
	background-size: 100%;
	padding:5%;
	margin:1px;}
	
	.column.side {
    width:25%;
	color: #E0E0E0}
	
	
.t1{
	font-family:Arial, Helvetica, sans serif;
	font-size: 110%;
	background-color: #E0E0E0;}
	
.scrollBoxInt{
	height:145px;
	width:100%;
	font-size:70%;
	overflow:auto;
	text-align:center;}
}	
/*@media (max-width: 800px) {
    .column.side, .column.middle {
        width: 100%;
    }
}*/
  </style>
  

		
	</script>
  </head>
<body>

<?php
    //IP and MAC address Capture
    $ip = $_SERVER['REMOTE_ADDR']; //Captures user IP
	
	//Executes Mac Address Capture Script
	$mac = shell_exec("/var/www/MacGrab");
	
	
	//If MAC could not be capture, no webpage will be shown.
	if ($mac=NULL){
	echo "Access Denied"
	exit;
	}
?>


  <main>
  <div class="t1">
  <h1><center>Coventry City Cloud Wi-fi</center></h1>
  </main>
  </div>
  <div class="column side">
	<p> side</p>
  </div>
  
  
 <div class="column middle">
	<div class="opacityBox">

		<form method="post" name="myForm" action="OpenPage.php" onsubmit="return validate()" >		<!-- action=Email_input is redirect to second page, on submit checks validation to then redirect-->
			<div> Enter your E-mail below to start browsing:
			<br></br>
				<input id="email" type="email" placeholder="Email Address" required/>		<!-- id emailAddress is the name of the input, ID and name share namespcace and is used for getElementById, placeholder is to set the grey text that is there before input,type is the type of thing in the form so name, date, email. etc. Required is to say it needs to be filled in.-->
				<div style="font-size:11px">
			<br></br>
			<input id="TnC" type="checkbox" value="Agree" style="vertical-align: middle; margin-top: -1px" required/> I agree to the Terms and Conditions below:		<!-- checkbox makes the box to click and unclick, name is TnC, value has to be agree, Style is the size and placing, Required is to say it needs to be done, needs to have value agree-->
			<br></br>
			<div>
			<input type="submit" value="Begin Browsing" >		<!--Submit button, Makes it a submission of the form, submit gets called from beginning of form.-->
		</form>
		

			<div class="scrollBoxExt" style="text-align: left"> Terms and Conditions:<br>
			  <div class="scrollBoxInt">
			    1. Your access to and use of this service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.<br>
			    2. By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.<br>
				3. When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service <br>
				4. Cloud Wi-Fi has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Cloud Wifi shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.<br>
				5. You agree to the connection of your device to this network, which is used for a research project designed by students from Coventry University. Wherein your connection is secure and private and traffic will not be recorded beyond the scope of the research project.<br>
				6. By clicking "Begin Browsing" you consent to part of your MAC address and a hashed version of your Email to be saved in our database for research purposes only. Once it's use has been depleted, it will be removed from our database in compliance with the Data Protection Act 1998.<br>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>