<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
    
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "34@Dcoonjpoyeb", "3896292_subscribe");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		
		$n1 = $_REQUEST['n1'];
        $e1 = $_REQUEST['e1'];
        $p1 = $_REQUEST['p1'];
        $p2 = $_REQUEST['p2'];
		
		
		$sql = "INSERT INTO sub_head VALUES ('$n1','$e1','$p1','$p2')";

        if($n1==''|| $e1==''|| $p1==''|| $p2=='' || $e1 != 'pulkit@gmail.com'|| $e1 != 'pulkitdhiman1@gmail.com' || $p1 != $p2){
            echo "ENTER VALID DETAILS !!";
            echo '<a href="register-head.php">GO BACK TO REGISTERATION PAGE ?</a>'

				. mysqli_error($conn);
        }

		else if(mysqli_query($conn, $sql)){
			echo "<h3>Your are Registered !!</h3>";
            echo '<a href="index.php">SEARCH MORE GAMES !!</a>';

        } 
        // else{
		// 	echo "ERROR: Hush! Sorry $sql. "
		// 		. mysqli_error($conn);
		// }
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
