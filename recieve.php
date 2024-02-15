<?php

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $description=$_POST['description'];
}

$conn=mysqli_connect("localhost","root","anugraha@2005","review");

$query="insert into contacts values('$name', '$email','$message', '$description')";

if ($conn->query($query) === TRUE) 
  {
    echo "<script type='text/jscript'>alert('Connected. New record created successfully')</script>";
  } 
  else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
  
  $conn->close();

?>

<html>
    <head>
        <title>Travel Diary</title>
        <link rel="stylesheet" href="style.css">
	   <link rel="stylesheet href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>
	<center>
	<h1>Your email is sent successfully</h1>
	</center>
<style>
h1{
color:#fff;
}
</style>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="footer.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Footer</title>
</head>

<body>
<footer>
<div class="footerContainer">
<div class="socialIcons">

	<a href=""><i class="fa-brands fa-facebook"></i></a>
	<a href="https://instagram.com/varun.aditya?igshid=MTI1ZDU5ODQ3Yw==" class="icon"><i class="fa-brands fa-instagram"></i></a>
	<a href=""><i class="fa-brands fa-twitter"></i></a>
	<a href=""><i class="fa-brands fa-google-plus"></i></a>
	<a href="https://youtu.be/B05zc_xvNBA"><i class="fa-brands fa-youtube"></i></a>


</div>

<div class="footerNav">
	<ul>
	<li><a href="travel diary.html">Home</a></li>
	<li><a href="box.html">Blog</a></li>
	<li><a href="">Destination</a></li>
	<li><a href="contact.html">Contact</a></li>
	</ul>


</div>

<div class="footerBottom">
	<p>Copyright &copy;2023; Designed by Anugraha</p>


</div>


</footer>
</div>

</body>
</html>