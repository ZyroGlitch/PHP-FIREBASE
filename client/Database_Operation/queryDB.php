<?php
session_start();
include('dbcon.php');

if(isset($_POST['addBtn'])){
    $item = $_POST['itemName'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $subtotal = $price * $qty;
    $email = 'john@gmail.com';
    $phone = '09615607681';

    $postData = [
        'item' => $item,
        'quantity' => $qty,
        'price' => $price,
        'subtotal' => $subtotal,
        'email' => $email,
        'phone #' => $phone,
    ];
    $store = $database->getReference('products')->push($postData);

    if($store){
        $_SESSION['success'] = 'Item Added Succssfully.';
        header('Location: ../dashboard.php');
    }else{
        $_SESSION['error'] = "Item Can't Add.";
        header('Location: ../dashboard.php');
    }
}
?>