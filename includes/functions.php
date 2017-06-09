<?php
	function connect()
	{
		$con = mysqli_connect("localhost","root","Cecilia2002#","Blog");
		if($con >= 1){
			echo("connection successful");
			return $con;
		}else{
			echo("error connecting to root");
		}
        
	}
	
?>