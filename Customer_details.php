<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Insurance Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            width: 100%;
            background: url("Images/slider-img.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 175vh;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;

        }

        button:last-child {
            margin-right: 0;
        }

        button:hover {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 20px;
            align-items: center;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }
    </style>
    <!-- Header CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main {
            width: 100%;
            background-position: center;
            background-size: cover;
        }

        .navbar {
            width: 1200px;
            height: 5px;
            margin: auto;
            justify-content: space-between;
        }

        .icon {
            width: 200;
            float: left;
            height: 70px;
        }

        .logo {
            color: orange;
            font-size: 35px;
            font-family: 'Times New Roman', Times, serif;
            padding: 20px;
            float: left;
            padding-top: 10px;
        }

        .menu {
            width: 400px;
            float: left;
            height: 70px;
        }

        ul {
            float: left;
            display: flex;
            justify-content: flex-end !important; /* Align list items to the right */
            align-items: center;
        }

        ul li {
            list-style: none;
            margin-left: 62px;
            margin-top: 27px;
            font-size: 14px;
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
    </style>
</head>

<body>
    <div class="navbar">
        <div class="icon">
            <h1 class="logo">Welcome to life insurance</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="Policy_details.php">POLICIES</a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>Customer Details</h1>
        <form action="Backend/customermaster.php" method="post">
            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="full_name" required>
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile Number:</label>
                <input type="tel" id="mobile_number" name="mobile_number" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="18" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3" cols="80" required></textarea>
            </div>
            <div class="form-group">
                <label for="annual_income">Annual Income:</label>
                <input type="number" id="annual_income" name="annual_income" min="50000" required>
            </div>
            <div class="form-group">
                <label for="policy_name">Policy Name:</label>
                <input type="text" id="policy_name" name="policy_name"
                    value="<?php echo isset($_GET['policy_name']) ? $_GET['policy_name'] : ''; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="total_policy_amount">Total Policy Amount:</label>
                <input type="number" id="total_policy_amount" name="total_policy_amount" min="200000" step="200000"
                    required>
            </div>
            <div class="form-group">
                <label for="plan_term">Plan Term:</label>
                <input type="number" id="plan_term" name="plan_term" min="15" step="5" max="30" required>
            </div>
            <div class="form-group">
                <label for="premium_paying_frequency">Premium Frequency:</label>
                <select id="premium_paying_frequency" name="premium_paying_frequency" required>
                    <option value="2">Monthly</option>
                    <option value="4">Quarterly</option>
                    <option value="6">Half-yearly</option>
                    <option value="1">Yearly</option>
                </select>
            </div>
            <div class="form-group">
                <label for="total_premium_amount">Total Premium Amount:</label>
                <input type="number" id="total_premium_amount" name="total_premium_amount" readonly>
                <small>GST will be included after approval of policy</small>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
                <button type="reset">Clear</button>
            </div>
        </form>
    </div>
    </div>

    <script>
        // Function to calculate Total Premium Amount
        function calculateTotalPremium() {
            var totalPolicyAmount = parseInt(document.getElementById("total_policy_amount").value);
            var planTerm = parseInt(document.getElementById("plan_term").value);
            var premiumFrequency = parseInt(document.getElementById("premium_paying_frequency").value);

            var totalPremiumAmount = totalPolicyAmount / (planTerm * premiumFrequency);
            document.getElementById("total_premium_amount").value = totalPremiumAmount.toFixed(2);
        }

        // Calculate Total Premium Amount on input change
        document.getElementById("total_policy_amount").addEventListener("input", calculateTotalPremium);
        document.getElementById("plan_term").addEventListener("input", calculateTotalPremium);
        document.getElementById("premium_paying_frequency").addEventListener("change", calculateTotalPremium);

        // Initial calculation on page load
        calculateTotalPremium();
    </script>
</body>

</html>