<?php
session_start();
if (isset($_SESSION['currentUser'])) {
    // echo '_SESSION is set <br>';
    // echo json_encode($_COOKIE);
    include "pages/home.php";
} else {
    include "pages/signin.php";
}
