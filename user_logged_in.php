<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$phone = $_POST["phone"];
	$pwd = $_POST["password"];
	$sql = "SELECT * from user_login";
	if ($result=mysqli_query($conn,$sql))
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		
