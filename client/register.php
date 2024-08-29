<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FIREBASE</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- SweetJsAlert2 CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
    body {
        font-family: "Montserrat", sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
        color: white;
    }
    </style>
</head>

<body class="container bg-dark h-auto">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-10 col-md-12">
            <div class="card rounded shadow p-3" style="background-color:#0B60B0;">
                <div class="card-body">
                    <div class="row justify-content-evenly align-items-center">

                        <div class="col-lg-7 col-md-7">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="../assets/login.png" alt="login image" class="object-fit-contain"
                                    style="width:300px;height:300px;">

                                <a href="login.php" class="btn btn-outline-info fw-bold" style="width:300px;">Sign
                                    In</a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-5 text-center">
                            <h2 class="mb-5">CREATE ACCOUNT</h2>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>

                            <div class="d-grid">
                                <input type="submit" value="REGISTER" class="btn fw-bold"
                                    style="background-color:#40A2D8;color:#F0EDCF;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>