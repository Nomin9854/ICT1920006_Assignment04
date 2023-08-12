<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cricket";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$Email = $_POST['Email'];
$Feedback = $_POST['Feedback'];

// Prepare the SQL statement
$sql = "INSERT INTO form (Email,Feedback)
        VALUES ('$Email', '$Feedback')";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>

