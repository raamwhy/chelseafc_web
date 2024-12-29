<?php
session_start();
$error = "";
//buat data user manual
$users = [
    ['username' => 'admin', 'password' => 'admin'],
    ['username' => 'palmer', 'password' => 'verycold'],
    ['username' => 'theblues', 'password' => 'ktbffh']
];

// form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $is_valid = false;
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $is_valid = true;
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit;
        }
    }

    if (!$is_valid) {
        $error = "Username atau password salah!";
    }
}
?>

<!-- Html code -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="container d-flex align-items-center justify-content-center min-vh-100 bg-light">
  <div class="card p-4" style="width: 100%; max-width: 400px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
    <div class="card-body">
      <h2 class="text-center mb-4">Login</h2>
      <form method="post" action="login.php">
        <!-- Tampilkan pesan error jika ada -->
        <?php if (!empty($error)): ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <!-- Input username -->
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        
        <!-- Input password -->
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <!-- Tombol login -->
        <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
        
        <!-- Tautan registrasi -->
        <p class="text-center mt-3">
          Don't have an account? <a href="register.php">Sign up</a>
        </p>

        <p class="text-center mt-3">
          <a href="index.php"><--Back</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
