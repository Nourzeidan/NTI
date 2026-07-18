<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // check if the user is registered and the credentials match
    if (isset($_SESSION['registered_user']) && $username === $_SESSION['registered_user'] && $password === $_SESSION['registered_pass']) {
        $_SESSION['username'] = $username; 
        header("location: profile.php");
        exit();
    } else {
        $error = "username or password is incorrect!";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>Login</title>
</head>
<body class="bg-light">
    <?php include 'navbar.php'; ?>

    <div class="container mt-5" style="max-width: 400px;">
        <div class="card p-4 shadow-sm">
            <h3 class="mb-4 text-center">Login</h3>
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
                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>
        </div>
    </div>
</body>
</html>