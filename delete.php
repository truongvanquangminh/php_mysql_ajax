<?php
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM `products` WHERE id = '". $id ."';";

if($res = $conn->query($sql)) {
    header('location:my-product.php');
}