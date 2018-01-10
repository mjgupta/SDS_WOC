<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<title>Travel Companion By SDSLabs</title>
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
	<a href="form.php">Offer Companionship</a>
	<a href="acc.php">My Account</a>
</div>
<div class="main">
	<h1>Find a Companion</h1>
</div>
<div class="search_bar">
	<form name="search_bar" onsubmit="return Validate()" method="POST">
		<fieldset>
			<legend>
				<span class="text_over_bar">Journey Details:</span>
			</legend>
			<input class="search_bar" list="source" autofocus placeholder="From" name="source" id="i1">
		&#8644;
		<input class="search_bar" list="destination" placeholder="To" name="destination" id="i2">
		<input type="date" name="dated" class="search_bar" placeholder="Departure Date" id="i3">
		<button type="button" class="search_bar"><span>Find myCompanion</span></button>
		<!--<input type="submit" value="Find myCompanion">
		Alt code if this doesn't works
		-->
	</fieldset>

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
	

	</table>
<!--Credits and sources
	1.LOGO - https://studio.tailorbrands.com/
-->
<?php
if(isset($_POST['submit'])){
	//Comment_here
}
else
	{echo "Please fill the form";}
$sourceq=$_POST['source'];
$destinationq=$_POST['destination'];
$datedq=$_POST['dated'];

$db=mysqli_connect("localhost","root","") or die ('Cannot connect to the Database due to '.mysql_error());
$mydb=mysql_select_db("woc");
$sql="SELECT name, enroll_no,phone_no,consent, source,destination,dated,PNR,no_people,comments FROM datawoc WHERE source LIKE '%".$sourceq."%' AND destination LIKE '%".$destinationq."%' ";
$result =mysql_query($sql);
 {while($row=mysql_fetch_array($result)){ 
$enr  =$row['enroll_no']; 
$nam=$row['name']; 
$dat=$row['dated'];
$pho=$row['phone_no'];
$pnr=$row['PNR'];
$nop=$row['no_people'];
$com=$row['comments'];
echo "<table class="modal"><caption>List Of people matching your journey preferences</caption>
		<tr><th>Enrollment No.</th><th>Name</th><th>Date of Journey</th><th>Phone no.</th><th>PNR No. (For Train)</th><th>No. of people</th><th>Additional comments</th></tr>
<tr><td>";.$enr."</td><td>".$nam."</td><td>".$dat."</td><td>".$pho."</td><td>".$pnr."</td><td>".$nop."</td><td>".$com"</td></tr>";
}
echo "</table>";
else
echo "<p>Please enter a valid query .</p>";
?></body>
</html>