<?php
	if(isset($_POST['submit']))
	{
       $username = $_POST['username'];
	   $password = $_POST['password'];

	   $host = "localhost";
	   $dbusername ="root";
	   $dbpassword="";
	   $dbname="login";

	   $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
	   if($conn->connect_error){
		die("connection failed : ". $conn->connect_error);

	   }
	   $query ="SELECT *from log where  username ='$username' and password='$password'";
	   $result =$conn->query($query);
	   if($result->num_rows == 1){
         header("location: success.html");
		 exit();
	   }
       else
       {
         header("location: error.html");
		 exit();
	   }
	   $conn->close();

	}


     ?>