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
    </style>
</head>

<body class="h-auto bg-dark">
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark shadow-lg">

        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand text-light fw-bold" href="index.php">PHP FIREBASE</a>

            <!-- Responsive Navbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <!-- Links -->
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold" href="client/register.php">REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold" href="client/login.php">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container h-auto">
        <div class="row justify-content-center align-items-center" style="height:550px;">
            <div class="col-12">
                <h1 class="text-info text-center">PHP FIREBASE WEB PORTAL</h1>
            </div>
        </div>
    </section>
</body>

</html>