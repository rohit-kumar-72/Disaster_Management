<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $amount = $_POST['amount'];
  $currency = $_POST['currency'];
  $message = $_POST['message'];
  
  // Connect to MySQL database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "donations";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Prepare SQL statement
  $stmt = $conn->prepare("INSERT INTO donations (name, email, amount, currency, message) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("ssdss", $name, $email, $amount, $currency, $message);
  
  // Execute SQL statement
  if ($stmt->execute() === TRUE) {
    echo "Thank you for your donation!";
  } else {
    echo "Error: " . $stmt->error;
  }
  
  // Close database connection
  $stmt->close();
  $conn->close();
?>
