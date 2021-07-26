<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
    
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "34@Dcoonjpoyeb", "3896292_subscribe");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		
		$email = $_REQUEST['email'];
		
		
		$sql = "INSERT INTO sub_table VALUES ('$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your Email is Registered !!</h3>";
			
            echo '<a href="index.php">SEARCH MORE GAMES !!</a>';

			echo nl2br("$email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
	
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
