<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Documents</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

<style>
        * {
            margin: 0;
            padding: 0;
        }

        .main {
            width: 100%;
            background-position: center;
            background-size: cover;
            /* background-color: #00b2ce; */
        }

        .navbar {
            width: 95%;
            /* background-color: #f2f2f2; */
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .icon {
            display: flex;
            align-items: center;
        }

        .logo {
            color: orange;
            font-size: 35px;
            font-family: 'Times New Roman', Times, serif;
            margin-right: auto;
            /* Pushes the logo to the left */
        }

        .menu {
            display: flex;
            align-items: center;
        }

        ul {
            display: flex;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        ul li {
            margin-left: 20px;
        }

        ul li:first-child {
            margin-left: 0;
        }

        ul li a {
            text-decoration: none;
            color: #00b2ce;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            transition: 0.4s ease-in-out;
        }

        ul li a:hover {
            color: #ff7200;
        }

        /* footer {
            background-color: #00b2ce;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        } */
    </style>
</head>

<body>
    <div class="navbar">
        <div class="icon">
            <h1 class="logo">Welcome to life insurance</h1>
        </div>
        <div class="menu">
            <ul>
            <li><a href="agent.php">HOME</a></li>
                <li><a href="Customer_List.php">Customer_List</a></li>
                <li><a href="DocList.php">Document_List</a></li>
                <li><a href="Policy_status.php">Status</a></li>
            </ul>
        </div>
    </div>

    <center>
        <h2>Uploaded Documents</h2>
    </center>

    <table>
        <tr>
            <th>ID</th>
            <th>Bank Name</th>
            <th>Account Number</th>
            <th>IFSC Code</th>
            <th>Aadhar Number</th>
            <th>PAN Number</th>
            <th>Bank Passbook/Cheque</th>
            <th>Aadhar Card</th>
            <th>PAN Card</th>
            <th>Status</th>
        </tr>
        <?php
        $target_dir = "Backend/";

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

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"]) && isset($_POST["status"])) {
            // Update the policy status
            $id = $_POST["id"];
            $status = $_POST["status"];
            $updateSql = "UPDATE document SET status='$status' WHERE id='$id'";
            mysqli_query($conn, $updateSql);
        }

        // SQL query to fetch all document details
        $sql = "SELECT * FROM document";
        $result = mysqli_query($conn, $sql);

        // Check if there are any results
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["bank_name"] . "</td>";
                echo "<td>" . $row["account_number"] . "</td>";
                echo "<td>" . $row["ifsc_code"] . "</td>";
                echo "<td>" . $row["aadhar_number"] . "</td>";
                echo "<td>" . $row["pan_number"] . "</td>";

                echo "<td><a href='" . $target_dir . $row["bank_document"] . "'>Bank Document</a></td>";
                echo "<td><a href='" . $target_dir . $row["aadhar_card"] . "'>Aadhar Card</a></td>";
                echo "<td><a href='" . $target_dir . $row["pan_card"] . "'>PAN Card</a></td>";

                echo "<td>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<button type='submit' name='status' value='approved' onclick='alert(\"Policy approved successfully :)\")'>Approve</button>";
                echo "<button type='submit' name='status' value='rejected' onclick='alert(\"Policy rejected successfully :(\")'>Reject</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>0 results</td></tr>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>

    </table>

</body>

</html>