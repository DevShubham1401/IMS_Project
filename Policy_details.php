<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Policies</title>
    <link rel="stylesheet" href="Policy.css">
    <style>
        /* Footer Styles */
        footer {
            background-color: #00b2ce;
            color: #fff;
            padding-left: 0px !important;
            vertical-align: bottom;
            margin-top: 770px;
            width: 100rem;
            height: 200px;

        }

        .footer-nav li {
            display: inline-block;
            margin-right: 20px;
        }

        .footer-nav li:last-child {
            margin-right: 0;
        }

        .footer-social li {
            display: inline-block;
            margin-right: 10px;
        }

        .footer-social li:last-child {
            margin-right: 0;
        }

        .footer-social a {
            color: #fff;
            font-size: 18px;
        }

        .footer-social a:hover {
            color: #ccc;
        }

        .footer-nav a,
        .footer-nav a:visited,
        .footer-nav a:hover,
        .footer-nav a:active {
            color: #fff;
            text-decoration: none;
        }

        .footer-nav a:hover {
            color: #ccc;
        }

        .Fcontainer {
            width: 100%;
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .Fcontainer:before,
        .Fcontainer:after {
            content: " ";
            display: table;
        }

        .Fcontainer:after {
            clear: both;
        }

        .row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .col-md-2,
        .col-md-5,
        .col-md-6,
        .col-md-8 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .col-md-2 {
            width: 16.66666667%;
            float: left;
        }

        .col-md-5 {
            width: 41.66666667%;
            float: left;
        }

        .col-md-6 {
            width: 50%;
            float: left;
        }

        .col-md-8 {
            width: 66.66666667%;
            float: left;
        }

        .col-md-offset-2 {
            margin-left: 16.66666667%;
        }

        .col-md-offset-2 {
            margin-left: 16.66666667%;
        }

        .col-md-offset-6 {
            margin-left: 50%;
        }

        .col-md-offset-8 {
            margin-left: 66.66666667%;
        }

        .col-sm-6 {
            width: 50%;
            float: left;
        }

        .col-sm-6:nth-child(2n+1) {
            clear: left;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <br><br>
    <div class="container">
        <div class="policy">
            <div class="policy-info">
                <h2>Jeevan Umang</h2>
                <p>LIC Jeevan Umang is a life assurance plan in which the policy holder will be covered till he/she
                    turns 100 years of age. The key benefit of this plan is that it comes with dual benefits of income
                    and insurance protection to help the family of the insured in his/her absence. The assured benefits
                    act as a strong financial backup in case of any emergency.</p>
                <a
                    href="https://www.youtube.com/watch?v=ebL-MQnuh84&pp=ygUgamVldmFuIHVtYW5nIGluc3VyYW5jZSB0ZWNobmljYWw%3D"><button
                        class="btn-know-more">Know More</button></a>
                <a href="Customer_details.php?policy_name=Jeevan Umang"><button class="btn-apply-now">Apply
                        Now</button></a>
            </div>
            <div class="policy-image">
                <img src="Images/Jeevan_umang.jpeg" alt="Jeevan Umang Image">
            </div>
        </div>
        <br>
        <div class="policy">
            <div class="policy-info">
                <h2>Jeevan Shanti</h2>
                <p>LIC’s New Jeevan Shanti is an Annuity plan which has option of purchasing Deferred annuity and can be
                    purchased only by paying a lump sum amount. The plan provides for annuity payments of a stated
                    amount throughout the life time of the annuitant.</p>
                <a
                    href="https://www.youtube.com/watch?v=oSQUYxcKYNc&pp=ygUhamVldmFuIHNoYW50aSBpbnN1cmFuY2UgdGVjaG5pY2Fs"><button
                        class="btn-know-more">Know More</button></a>
                <a href="Customer_details.php?policy_name=Jeevan Shanti"><button class="btn-apply-now">Apply
                        Now</button></a>
            </div>
            <div class="policy-image">
                <img src="Images/Jeevan_Shanti.jpeg" alt="Jeevan Shanti Image">
            </div>
        </div>
        <br>
        <div class="policy">
            <div class="policy-info">
                <h2>Bima Jyoti</h2>
                <p>LIC's Bima Jyoti is a Non-linked, Non-participating, Individual, Limited Premium Payment, Life
                    Insurance Savings Plan. Under this plan, Guaranteed Additions shall accrue at the rate of Rs.50 per
                    thousand Basic Sum Assured at the end of each policy year throughout the policy term. This plan will
                    also be available through online application process.</p>
                <a
                    href="https://www.youtube.com/watch?v=o2t9wUnbDEY&pp=ygUfYmVlbWEganlvdGkgaW5zdXJhbmNlIHRlY2huaWNhbA%3D%3D"><button
                        class="btn-know-more">Know More</button></a>
                <a href="Customer_details.php?policy_name=Bima Jyoti"><button class="btn-apply-now">Apply
                        Now</button></a>
            </div>
            <div class="policy-image">
                <img src="Images/Bima_Jyoti.jpeg" alt="Bima Jyoti Image">
            </div>
        </div><br>

    </div><br>
    <footer>
        <div class="Fcontainer">
            <div class="row">
                <div class="col-md-5">
                    <h2>Insurance Office</h2>
                    <p>Bagi Complex, Sankeshwar Road, Gadhinglaj, Zip - 416502</p>
                    <ul>
                        <li><i class="fa fa-phone"></i> +91 976 426 0034</li>
                        <li><a href="mailto:info@licindia.com"><i class="ti-email"></i> info@licindia.com</a></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <h2>Agent Detail</h2>
                    <p>Bagi Complex, Sankeshwar Road, Gadhinglaj-416502, Zip - 416502</p>
                    <ul>
                        <li><i class="fa fa-phone"></i> +91 976 426 0034</li>
                        <li><a href="mailto:chavanrajaram99@gmail.com">chavanrajaram99@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>