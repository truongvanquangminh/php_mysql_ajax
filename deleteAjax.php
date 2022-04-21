<?php

session_start();
if (isset($_SESSION['product'][$_POST['id']]))
    unset($_SESSION['product'][$_POST['id']]);