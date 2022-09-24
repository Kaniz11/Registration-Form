<?php
	$name = $_POST['name'];
	$id = $_POST['email'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','student');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into semester_reg(name, email) values(?, ?)");
		$stmt->bind_param("si", $name, $email);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
echo "<h2>View Operation:</h2>";
      echo "Name:$name";
      echo "Email:$email";

?>