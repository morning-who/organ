<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "organ_donation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $age = $_POST['age'];
    $bloodType = $_POST['bloodType'];
    $contact = $_POST['contact'];
    $organType = $_POST['organType'];

    $sql = "INSERT INTO donors (fullName, age, bloodType, contact, organType)
            VALUES ('$fullName', '$age', '$bloodType', '$contact', '$organType')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>