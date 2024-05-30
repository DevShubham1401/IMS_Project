<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Bank Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            background: url("Images/LifeInsuranceProblemsBlogImage.jpeg");
            background-position: center;
            background-size: cover;
            height: 109vh;
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
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .note {
            font-size: 14px;
            color: #888;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1>Customer Bank Details</h1>
        <form action="Backend/documentmaster.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="bank_name">Bank Name:</label>
                <input type="text" id="bank_name" name="bank_name" required>
            </div>
            <div class="form-group">
                <label for="account_number">Account Number:</label>
                <input type="text" id="account_number" name="account_number" required>
            </div>
            <div class="form-group">
                <label for="ifsc_code">Bank IFSC Code:</label>
                <input type="text" id="ifsc_code" name="ifsc_code" required>
            </div>
            <div class="form-group">
                <label for="bank_document">Upload Bank Passbook/Cancel Cheque:</label>
                <input type="file" id="bank_document" name="document1" accept="image/jpeg, image/png, application/pdf"
                    required>
            </div>
            <div class="form-group">
                <label for="aadhar_number">Aadhar Number:</label>
                <input type="text" id="aadhar_number" name="aadhar_number" required>
            </div>
            <div class="form-group">
                <label for="aadhar_card">Upload Aadhar Card:</label>
                <input type="file" id="aadhar_card" name="document2" accept="image/jpeg, image/png, application/pdf"
                    required>
            </div>
            <div class="form-group">
                <label for="pan_number">PAN Number:</label>
                <input type="text" id="pan_number" name="pan_number" required>
            </div>
            <div class="form-group">
                <label for="pan_card">Upload PAN Card:</label>
                <input type="file" id="pan_card" name="document3" accept="image/jpeg, image/png, application/pdf"
                    required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
                <button type="reset">Clear</button>
            </div>
            <div class="note">Note: GST will be included after approval of the policy.</div>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>