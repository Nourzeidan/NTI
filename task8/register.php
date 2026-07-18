<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        // store the registered user credentials in session variables
        $_SESSION['registered_user'] = $username;
        $_SESSION['registered_pass'] = $password; 
        
        // go to login page after successful registration
        header("location: login.php");
        exit();
    } else {
        $error = "fill in all fields!";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>Register</title>
</head>
<body class="bg-light">
    <?php include 'navbar.php'; ?>

    <div class="container mt-5" style="max-width: 400px;">
        <div class="card p-4 shadow-sm">
            <h3 class="mb-4 text-center">Create New Account</h3>
            <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
            
            <form method="POST" action="">
                <div class="mb-3">
                    <label class="form-label">username:</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>
</body>
</html>