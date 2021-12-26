<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>


	
	<link rel="stylesheet" type="text/css" href="f.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>


<div class="container">



<div class="con">
	
		<img src="img/logo.png" alt="">

		<div class="main">
		<div class="light">LIGHTWEB </div>
		<div class="group">  GROUP</div>
		
		</div>
		<div class="info">
	   IT Solution and Services <br>
	   Gangabu, Kathmandu <br>
	   </div> 
	   <div class="contact"  >
	   9861584767 ,9813272728<br>
	   info@lightwebgroup.com
	   </div>



		<div class="regi" >
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {

				$bin = rand(2580,2590);

			
			echo "Registration Number: ".$bin;			?>
		</div>


</div>


<?php





$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$contact=$_POST['phone'];
$email=$_POST['email'];
$paddress=$_POST['paddress'];
$taddress=$_POST['taddress'];
$gender =$_POST['gender'];
$education=$_POST['education'];
$college=$_POST['college'];
$workingfield=$_POST['workingfield'];
$maritalStatus=$_POST['maritalStatus'];
$admitdate=$_POST['admitdate'];
$image=$_POST['image'];



//To display the contact lists
$contact1 = implode(', ', array_map(function ($entry) {
  return ($entry[key($entry)]);
}, $contact));



  $save = $fname." " . $lname."" .$mname ." " .$contact1 . " " .$email ." " .$paddress ." " .$taddress ." " .$gender." " .$education ." " .$college." " .$workingfield." " .$maritalStatus." " .$admitdate ;
  $fp = fopen('file.txt', 'w');
  fwrite($fp, $save);
  fclose($fp);

}
?>



<div class="A">
	<div class="emp">
<div class="ohoo">
<div>
		<h2>Employee Information</h2>
</div>

	<div class="myimg">
<img src="./img/<?php echo $image;?>" alt ="" width="100px" height="100px">
</div>

</div>


<div class="hero">
<?php echo "<h1>Personal Details</h1>" ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {}
?>




	<?php
echo "Fullname: " .$fname . " " . $mname . " " .$lname;
echo "<br>". "<br>";
?>



	<?php
echo  "Email : " .$email;
echo "<br>" ."<br>";
?>



<?php
echo "Conact Numbers : " .$contact1;
echo "<br>" ."<br>";
?>



<?php
echo "Permanent Address : " .$paddress;
echo "<br>"."<br>";
?>



<?php
echo "Temporary Address : " .$taddress;
echo "<br>"."<br>";
?>



<?php
echo "Gender : " .$gender;
echo "<br>"."<br>";
?>


<?php
echo "Education: " .$education;
echo "<br>"."<br>";
?>



<?php
echo "Colllege: " .$college;
echo "<br>"."<br>";
?>



<?php
echo "Working Field : " .$workingfield;
echo "<br>"."<br>";
?>



<?php
echo "Marital Status : " .$maritalStatus;
echo "<br>"."<br>";
?>


<?php
echo "Admit Date: " .$admitdate;
echo "<br>"."<br>";
?>



</div>
</div>




</div>

</div>
</body>
</html>