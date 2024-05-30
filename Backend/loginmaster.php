<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Get the input data from the form
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // Prepare a SQL query to check the user's credentials and user type
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) == 1) {
        // Get the user's data
        $row = mysqli_fetch_assoc($result);
        $userType = $row["user_type"];

        // Check if user type is Agent
        if ($userType == "Agent") {
            // Redirect to agent.php if user type is Agent
            header("Location: http://localhost/PHP_Programs/IMS_Project/agent.php");
            exit();
        } else {
            // User type is Customer, continue with the default process
            header("Location: http://localhost/PHP_Programs/IMS_Project/Policy_details.php");
            exit();
        }
    } else {
        // Authentication failed, redirect to an error page
        echo '<script>alert("Validation failed. Please try again.");</script>';
        echo '<script>window.location.replace("http://localhost/PHP_Programs/IMS_Project/index.php");</script>';
        exit();
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
