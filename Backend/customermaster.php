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
    $full_name = $_POST["full_name"];
    $mobile_number = $_POST["mobile_number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $annual_income = $_POST["annual_income"];
    $policy_name = $_POST["policy_name"];
    $total_policy_amount = $_POST["total_policy_amount"];
    $plan_term = $_POST["plan_term"];
    $premium_paying_frequency = $_POST["premium_paying_frequency"];

    // Prepare and bind the SQL query
    $stmt = $conn->prepare("INSERT INTO customer (full_name, mobile_number, email, address, annual_income, policy_name, total_policy_amount, plan_term, premium_paying_frequency) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssdssii", $full_name, $mobile_number, $email, $address, $annual_income, $policy_name, $total_policy_amount, $plan_term, $premium_paying_frequency);

    // Execute the query
    if ($stmt->execute()) {
        // Records saved successfully
        echo '<script>alert("Records saved successfully.");</script>';
        echo '<script>window.location.replace("http://localhost/PHP_Programs/IMS_Project/docs.php");</script>';
    } else {
        // Something went wrong
        echo '<script>alert("Something went wrong. Please try again.");</script>';
        echo '<script>window.location.replace("http://localhost/PHP_Programs/IMS_Project/Customer_details.php");</script>';
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
mysqli_close($conn);
?>
