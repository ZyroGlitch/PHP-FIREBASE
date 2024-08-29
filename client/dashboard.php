<?php
session_start();
?>

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

<body class="container bg-dark h-auto">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>PHP FIREBASE DATA</h2>
                <a class="btn btn-success fw-bold" data-bs-toggle="modal" data-bs-target="#addData"><i
                        class="bi bi-database-fill-add"></i> ADD DATA</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="table-dark text-light text-center">
                        <tr>
                            <th>ID</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                            <th>Email</th>
                            <th>Phone #</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>Ballpen</td>
                            <td>2</td>
                            <td>10</td>
                            <td>20</td>
                            <td>john@gmail.com</td>
                            <td>09615607681</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- ADD DATA MODAL -->
    <div class="modal fade" id="addData" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                    <h5 class="modal-title">ADD DATA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="Database_Operation/queryDB.php" method="post">

                        <div class="input-group my-3">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Item Name" name="itemName" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Quantity" name="qty" required>
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Price" name="price" required>
                        </div>

                        <div class="row justify-content-evenly align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-secondary fw-bold"
                                        data-bs-dismiss="modal">CANCEL</button>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary fw-bold" name="addBtn"><i
                                            class="bi bi-plus-lg"></i>
                                        ADD</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_SESSION['success'])) {
        echo "<script> document.addEventListener('DOMContentLoaded', function() {
                 Swal.fire({
                    icon: 'success',
                    title: 'Item Added Succssfully.',
                });
            });</script>";

        // Unset the session variable to prevent showing the alert on subsequent page loads
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['error'])) {
        echo "<script> document.addEventListener('DOMContentLoaded', function() {
                 Swal.fire({
                    icon: 'error',
                    title: 'Item Can't Add.',
                });
            });</script>";
            
        // Unset the session variable to prevent showing the alert on subsequent page loads
        unset($_SESSION['error']);
    }
    ?>
</body>

</html>