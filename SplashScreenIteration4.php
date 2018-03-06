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

//$database = new mysqli(DB_HOST, DB_USER, DB_PSWD, DB_NAME); //This connects the PHP to the database. Need these 4 fields from Luke.

//if ($database->connect_error) {
	//die( "Connection Error: " . $database->connect_errno . ": " . $database->connect_error);
//}

// define variables and set to empty values
$emailErr = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { //This makes sure the server is using POST instead of GET.

  if (empty($_POST["email"])) {
    $emailErr = "Email is required"; //This just makes sure that they didn't force a POST with no value
  } 
  
  else {
    $email = test_input($_POST["email"]);    // check if e-mail address is well-formed & sets the variable
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); //Double sanitize the email, nice and thorough like me with the ladies
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //Check if email is valid (in case they forced POST without email)
      $emailErr = "Email is not valid"; 
	}
	
  }   
  
  //Insert our now valid email
  $sql = *INSERT INTO table (email) VALUES ($email);
  $insert = $database->query($sql);		//This submits the data in its entirety
  
  // Check if the insert was successful
  if ($insert) {
	  echo "Successfully submitted to Row ID: {$database->insert_id}";
  }
  else {
	  die("Error: {$database->errno} : {$database->error}");
  }
  
  
}

function test_input($data) { 	//Just leaving this as a function incase we want to store stuff like names or whatever.
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//$database->close(); 		//End connection with database
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
	<!--Made it simple, could of done PHP or Javascript, but this is just a html form validation.-->
								<!--Owen-->
		<form method="post" name="myForm" action="Email_input.html" onsubmit="return validate()" >		<!-- action=Email_input is redirect to second page, on submit checks validation to then redirect-->
			<div> Enter your e-mail below to start browsing:
			<br></br>
				<input id="email" type="email" placeholder="Email Address" required/>		<!-- id emailAddress is the name of the input, ID and name share namespcace and is used for getElementById, placeholder is to set the grey text that is there before input,type is the type of thing in the form so name, date, email. etc. Required is to say it needs to be filled in.-->
				<div style="font-size:11px">
			<br></br>
			<input id="TnC" type="checkbox" value="Agree" style="vertical-align: middle; margin-top: -1px" required/> I agree	to the Terms and Conditions below.		<!-- checkbox makes the box to click and unclick, name is TnC, value has to be agree, Style is the size and placing, Required is to say it needs to be done, needs to have value agree-->
			<br></br>
			<div>
			<input type="submit" value="Continue" >		<!--Submit button, Makes it a submission of the form, submit gets called from beginning of form.-->
		</form>
		

			<div class="scrollBoxExt" style="text-align: left"> Terms and Conditions:<br>
			  <div class="scrollBoxInt">
			    1.Your access to and use of this service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.<br>
			    2. By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.<br>
				3. When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service <br>
				4. Cloud Wifi has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Cloud Wifi shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.<br>
				5.You agree to the connection of your device to this network, which is used for a research project designed by students from Coventry University.
				Wherein your connection is secure and private, but provides no connection to the Internet.
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
</div>
</body>
</html


