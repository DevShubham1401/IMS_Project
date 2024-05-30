<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
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

    <div>


      <center><h2 >Customer List</h2></center>

        <table>
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

            // SQL query to fetch all customer details
            $sql = "SELECT * FROM customer";
            $result = mysqli_query($conn, $sql);

            // Check if there are any results
            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile Number</th>
    <th>Address</th>
    <th>Annual Income</th>
    <th>Policy Name</th>
    <th>Total Policy Amount</th>
    <th>Plan Term</th>
    <th>Premium Paying Frequency</th>
    </tr>";

                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["full_name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["mobile_number"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["annual_income"] . "</td>";
                    echo "<td>" . $row["policy_name"] . "</td>";
                    echo "<td>" . $row["total_policy_amount"] . "</td>";
                    echo "<td>" . $row["plan_term"] . "</td>";
                    echo "<td>" . $row["premium_paying_frequency"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>

        </table>
    </div>
</body>

</html>