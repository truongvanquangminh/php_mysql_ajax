<?php

session_start();
if (isset($_SESSION['product'])) {
    foreach ($_SESSION['product'] as $key => $value) {
        if ($key == $_POST['id']) {
            $qty = $_SESSION['product'][$key]['qty'] += 1;
            echo $qty;
        }
    }
}
