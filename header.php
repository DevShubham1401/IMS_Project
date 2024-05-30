<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header File</title>
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
                <li><a href="Policy_details.php">HOME</a></li>
                <li><a href="Policy_status.php">Policy_status</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
    <!-- <footer>
        <div class="container">
            <p>&copy; 2024 Pai Insurance. All rights reserved.</p>
        </div>
    </footer> -->
</body>

</html>