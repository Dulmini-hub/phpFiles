<?php
// Database connection details
$servername = "localhost";
$username = "root";  // Replace with your database username
$password = "";  // Replace with your database password
$dbname = "loginform";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $username = htmlspecialchars($username);
    $password = $_POST['password'];

    //to prevent from mysql innjection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "SELECT * FROM udetails WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1) {
     echo "Welcome, user!";
    } else {
     echo "Incorrect username/password";
 
    }
   
    // Prepare and bind
   /* $stmt = $conn->prepare("INSERT INTO udetails(username,password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    // Execute the statement
    if ($stmt->execute()) {
            echo "New record created successfully";
        
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close(); */
}
?>