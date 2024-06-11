<!-- server_page.php -->

<?php
// Establishing connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cakes_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieving form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$delivery_date = $_POST['delivery_date'];
$message = $_POST['message'];

// Inserting data into the database
$sql = "INSERT INTO cake_bookings (name, email, phone, address, delivery_date, message)
VALUES ('$name', '$email', '$phone', '$address', '$delivery_date', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Booking successful!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
