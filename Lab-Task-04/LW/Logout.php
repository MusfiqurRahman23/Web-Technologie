<?php
session_start();

if (isset($_SESSION['username'])) {
    session_destroy();
    header("location:LogIn_Form.php");
} else {
    header("location:LogIn_Form.php");
}