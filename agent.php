<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Agent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .btn {
            display: block;
            width: 120px;
            margin: 20px auto 0;
            padding: 10px 20px;
            text-align: center;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
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
    <div class="container">
        <h1>Welcome Agent</h1>
        <p>This is your dashboard. You can manage your policies and documents here.</p>
        <a href="#" class="btn" id="logoutBtn">Log Out</a>
    </div>
    <script>
        // Logout functionality
        document.getElementById("logoutBtn").addEventListener("click", function () {
            // Perform logout actions here (e.g., clearing session, redirecting to login page)
            alert("Logged out successfully");
            window.location.href = "http://localhost/PHP_Programs/IMS_Project/index.php"; // Redirect to login page
        });
    </script>
</body>

</html>