
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country_Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f7fc;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header Styling */
        .header {
            padding: 15px;
            background: #5c6bc0; /* Soft blue background */
            color: white;
            text-align: center;
            font-size: 26px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        /* Card Styling */
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            margin-bottom: 20px;
            background-color: #ffffff;
            border: none;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #5c6bc0 !important; /* Soft blue color */
            color: white;
            padding: 20px;
            font-size: 22px;
            text-align: center;
            border-radius: 12px 12px 0 0;
        }

        .card-body {
            padding: 30px;
            text-align: center;
        }

        .card-body h3 {
            font-size: 36px;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .card-body a {
            font-size: 18px;
            color: #5c6bc0;
            text-decoration: none;
            font-weight: 500;
            padding: 12px 25px;
            border-radius: 8px;
            background-color: #f1f3f7;
            transition: 0.3s ease;
        }

        .card-body a:hover {
            background-color: #5c6bc0;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                font-size: 22px;
                padding: 10px;
            }

            .card-body h3 {
                font-size: 28px;
            }

            .card-body a {
                font-size: 16px;
                padding: 10px 20px;
            }

            .col-md-4 {
                margin-bottom: 20px;
            }
        }

    </style>
</head>

<body>

    <!-- Main content -->
    <div class="main-content">
        <div class="header">
           Country Admin Panel Dashboard
        </div>

        <div class="container mt-4">
            <div class="row">
                <!-- Card 1: Users -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Register
                        </div>
                        <div class="card-body">
                        <a href="./country_register.php" data-target="hero_banner">Register Form</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Admins -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Update
                        </div>
                        <div class="card-body">
                        <a href="./update_form.php" data-target="hero_banner">Update Form</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Total Users -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            List
                        </div>
                        <div class="card-body">
                        <a href="./listed_form.php" data-target="hero_banner">Listed Country</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
