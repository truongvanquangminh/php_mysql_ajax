<?php

session_start();
if (isset($_SESSION['product'])) {
    foreach ($_SESSION['product'] as $key => $value) {
        if ($key == $_POST['id']) {
            if ($_SESSION['product'][$key]['qty'] > 1) {
                $qty = $_SESSION['product'][$key]['qty'] -= 1;
                echo $qty;
            } else {
                unset($_SESSION['product'][$_POST['id']]);
            }
        }
    }
}
