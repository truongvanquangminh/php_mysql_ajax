<?php
session_start();
include "connect.php";

$select = "SELECT * FROM products WHERE id = '" . $_POST['id'] . "';";

$res = $conn->query($select);

if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $check = 1;
    if (isset($_SESSION['product'])) {
        foreach ($_SESSION['product'] as $key => $value) {
            if ($key == $_POST['id']) {
                $_SESSION['product'][$key]['qty']++;
                // var_dump($_SESSION['product']);
                $check = 2;
            }
        }
    }

    if ($check == 1)
        $_SESSION['product'][$_POST['id']] = ['name' => $row['name'], 'price' => $row['price'], 'img' => $row['image'], 'qty' => 1];
    // var_dump($_SESSION['product']);

    if (count($_SESSION['product']) >= 1)
        echo count($_SESSION['product']);
}

// session_destroy();