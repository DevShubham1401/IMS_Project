<?php
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

    $target_dir = "Uploads/"; // Specify the directory where you want to store the uploaded files
    // $target_dir = "C://xampp/htdocs/PHP_Programs/IMS_Project/Uploads/";    // Make sure this is set to the correct path on your server.
    // $target_dir = "";
    $bank_name = isset($_POST["bank_name"]) ? $_POST["bank_name"] : '';
    $account_number = isset($_POST["account_number"]) ? $_POST["account_number"] : '';
    $ifsc_code = isset($_POST["ifsc_code"]) ? $_POST["ifsc_code"] : '';
    $aadhar_number = isset($_POST["aadhar_number"]) ? $_POST["aadhar_number"] : '';
    $pan_number = isset($_POST["pan_number"]) ? $_POST["pan_number"] : '';

    $bank_document_path = 'Uploads/';
    $aadhar_card_path = 'Uploads/';
    $pan_card_path = 'Uploads/';
    
    // if(isset($_FILES["document1"]) && $_FILES["document1"]["error"] == 0){
    //     $bank_document = $_FILES["document1"]["name"];
    //     $bank_document_path = $target_dir . basename($_FILES["document1"]["name"]);
    //     move_uploaded_file($_FILES["document1"]["tmp_name"], $bank_document_path);
    // }
     if(isset($_FILES["document1"]) && $_FILES["document1"]["error"] == 0){
        $bank_document = $_FILES["document1"]["name"];
        $bank_document_path =basename($_FILES["document1"]["name"]);
        move_uploaded_file($_FILES["document1"]["tmp_name"], $bank_document_path);
    }

    if(isset($_FILES["document2"]) && $_FILES["document2"]["error"] == 0){
        $aadhar_card = $_FILES["document2"]["name"];
        $aadhar_card_path = basename($_FILES["document2"]["name"]);
        move_uploaded_file($_FILES["document2"]["tmp_name"], $aadhar_card_path);
    }

    if(isset($_FILES["document3"]) && $_FILES["document3"]["error"] == 0){
        $pan_card = $_FILES["document3"]["name"];
        $pan_card_path =basename($_FILES["document3"]["name"]);
        move_uploaded_file($_FILES["document3"]["tmp_name"], $pan_card_path);
    }

    // Insert data into database
    $sql = "INSERT INTO document (bank_name, account_number, ifsc_code, bank_document, aadhar_number, aadhar_card, pan_number, pan_card) 
    VALUES ('$bank_name', '$account_number', '$ifsc_code', '$bank_document_path', '$aadhar_number', '$aadhar_card_path', '$pan_number', '$pan_card_path')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Files uploaded successfully."); window.location.href = "http://localhost/PHP_Programs/IMS_Project/ThankYou.php";</script>';
    } else {
        echo '<script>alert("Something went wrong. Please try again."); window.location.href = "http://localhost/PHP_Programs/IMS_Project/docs.php";</script>';
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    // http://localhost/PHP_Programs/IMS_Project/Uploads/Display%20Fingerprint%20-%20Cyber%20security.jpg
    // http://localhost/PHP_Programs/IMS_Project/Uploads/Display%20Fingerprint%20-%20Cyber%20security.jpg
}
?>
