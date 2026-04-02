<?php

include 'includes/header.php';
include 'config/database.php';

?>


<section>

<h2>Contact Me</h2>


<form method="POST">

Name:

<br>

<input type="text" name="name" required>

<br><br>


Email:

<br>

<input type="email" name="email" required>

<br><br>


Message:

<br>

<textarea name="message" required></textarea>

<br><br>


<button type="submit" name="submit">Send Message</button>


</form>


<?php


if(isset($_POST['submit'])){


$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];


$sql = "INSERT INTO contacts (name, email, message)

VALUES ('$name', '$email', '$message')";


if($conn->query($sql) === TRUE){

echo "Message sent successfully";

}

else{

echo "Error: " . $conn->error;

}


}


?>


</section>


<?php include 'includes/footer.php'; ?>