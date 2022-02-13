<?php
$conn = new mysqli("localhost", "root", "root", "hrithikbansal");


// Replace this with your own email address
// $siteOwnersEmail = 'connectwithhrithik@gmail.com';

if(isset($_POST['submit_it'])){

	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$sql = "INSERT INTO hrithik (name, email, subject, message) VALUES ('$name', '$email','$subject','$message')";
	// echo $sql;

	if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
$db->close();

?>

