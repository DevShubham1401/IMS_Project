<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "ims";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input data from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $userType = $_POST["userType"];
    $password = $_POST["password"];

    // Check if the user type is agent and get additional fields
    if ($userType == "Agent") {
        $branchName = $_POST["branchName"];
        $agencyCode = $_POST["agencyCode"];
        // Perform the signup query for agent
        $sql = "INSERT INTO user (name, email, user_type, password, branch_name, agency_code) VALUES ('$name', '$email', '$userType', '$password', '$branchName', '$agencyCode')";
    } else {
        // Perform the signup query for customer
        $sql = "INSERT INTO user (name, email, user_type, password) VALUES ('$name', '$email', '$userType', '$password')";
    }

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Records saved successfully
        echo '<script>alert("Signup successful.");</script>';
        echo '<script>window.location.replace("http://localhost/PHP_Programs/IMS_Project/index.php");</script>';
    } else {
        // Something went wrong
        echo '<script>alert("Something went wrong. Please try again.");</script>';
        echo '<script>window.location.replace("http://localhost/PHP_Programs/IMS_Project/signup.php");</script>';
    }
}

// Close the database connection
mysqli_close($conn);
?>
