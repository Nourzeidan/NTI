<?php
session_start();
// for security, check if the user is logged in before showing the profile page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>Profile</title>
</head>
<body class="bg-light">
    <?php include 'navbar.php'; ?>

    <div class="container mt-5 text-center">
        <div class="card p-5 shadow-sm d-inline-block">
            <h1 class="text-secondary">Profile Page</h1>
            <hr>
            <p class="fs-4">Current username is: <span class="badge bg-info text-dark"><?php 
            echo htmlspecialchars($_SESSION['username']); ?></span></p>
        </div>
    </div>
</body>
</html>