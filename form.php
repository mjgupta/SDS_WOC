
<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'csv_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('mysqli connect failed. ' . mysqli_error());
mysqli_select_db($dbConn, $dbName) or die('Cannot select database. ' . mysqli_error());

$sql = mysqli_query($dbConn, "SELECT * FROM tbl_name");
echo '<datalist id="source">';
    while ($row = mysqli_fetch_array($sql)) {
    echo "<option value='". $row['city_id']. "'>" . $row['city_name'] ."</option>";
    }
echo '</datalist>';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Travel Companion By SDSLabs| Offer Companionship</title>
</head>
<body>
<div class="logo_bar">
<a href="www.sdslabs.co">
	<img src="logo.png" class="logo" alt="SDSlogo">
</a>
</div>
<div class="WOC">
	|WOC
</div>
<div class="title">myTravel Companion</div>
<div class="end_bar">
	<a href="index.php">Find a Companion</a>
	<a href="acc.php">My Account</a>
</div>
<div class="main">
	<h1>Offer Companionship:</h1></div>
<div class="form_main"><form method="POST" name="dbdata" onsubmit="return Check_Form()">
	<fieldset><legend>Personal Details</legend>
			Name:<input type="text" name="name" placeholder="Your full name" class="form_main"><br>
			Enrollment number:<input type="number" name="enroll_no" placeholder="Enrollment No.  here" min="130000" max="180000" class="form_main"><br>
			Phone number: <input type="number" name="phone_no" placeholder="Phone no. here" class="form_main"><br>
			<input type="checkbox" name="consent" checked class="form_main"> Share my contact details</fieldset><br>
			<fieldset><legend>Details of the Journey</legend>
			From:<input list="source" autofocus placeholder="From" required class="form_main" id="source"><br>
			Destination:<input type="list" name="destination" required class="form_main" placeholder="To"><br>
			Date:<input type="date" name="dated" class="search_bar" placeholder="Date of Travel" class="form_main"><br></fieldset>
			<fieldset><legend>Additional Details:</legend>
			PNR Number :<input type="number" name="PNR" class="form_main"><br>
			No. of people: <input type="number" name="no_people" class="form_main"><br>
			Major Stoppages/Comments: <textarea>Comments here . . . . . .</textarea>
			</fieldset>
</div>
<button type="button" class="form_main">Submit
	<!--<input type="submit" name="Submit">
	Alternate code if this doesnt work
-->
</button>
</form>
</div>
<div class="footer">
	<p class="address" align="left">
		<b>Reach us at :</b><br>
		SDSlabs,<br>
		Hobbies Club,<br>
		IIT Roorkee , Roorkee<br>
		<img src="mail_logo.png" alt="Mail icon"><a href="contact@sdslabs.co">contact@sdslabs.co</a><br>
		<img src="call_logo.png" alt="Phone icon">01332-246866<br></p>
	</p>
	<p class="right_bottom" align="right">
		<a href="https://www.facebook.com/SDSLabs/"><img src="fb.png"></a>
		<a href="https://github.com/sdslabs"><img src="github.png"></a>
		<a href="https://twitter.com/sdslabs"><img src="twitter.png"></a>
	</p></div>
	<div class="bottom">&#169;SDSlabs 2018 </div>
<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'woc';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('mysqli connect failed. ' . mysqli_error());
mysqli_select_db($dbConn, $dbName) or die('Cannot select database. ' . mysqli_error());
$name = mysqli_real_escape_string($dbConn, $_POST['name']);
$enroll_no = mysqli_real_escape_string($dbConn, $_POST['enroll_no']);
$phone_no = mysqli_real_escape_string($dbConn, $_POST['phone_no']);
$consent = mysqli_real_escape_string($dbConn, $_POST['consent']);
$source = mysqli_real_escape_string($dbConn, $_POST['source']);
$destination = mysqli_real_escape_string($dbConn, $_POST['destination']);
$dated = mysqli_real_escape_string($dbConn, $_POST['dated']);
$PNR = mysqli_real_escape_string($dbConn, $_POST['PNR']);
$no_people = mysqli_real_escape_string($dbConn, $_POST['$no_people']);
$comments = mysqli_real_escape_string($dbConn, $_POST['comments']);
$sql = "INSERT INTO datawoc (name, enroll_no, phone_no, phone_no, source, destination, dated, PNR, no_people, comments) VALUES ('$name', '$enroll_no', '$phone_no', '$consent', '$source', '$destination', '$dated', '$PNR', '$no_people', '$comments')";
    if(mysqli_query($link, $sql)){
        echo "Data added successfully. ";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }


    mysqli_close($link);
?>
</body>
<!--Credits and sources
	1.LOGO - https://studio.tailorbrands.com/
-->
</html>