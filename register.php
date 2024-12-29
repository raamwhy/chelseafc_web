<?php
session_start();
$error = "";
$username = "";
$users = [
    ['username' => 'admin', 'password' => '12345'],
    ['username' => 'user1', 'password' => 'password1'],
    ['username' => 'user2', 'password' => 'password2']
];

// Proses registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password_1 = $_POST["password_1"];
    $password_2 = $_POST["password_2"];

    // Validasi input
    if (empty($username) || empty($password_1) || empty($password_2)) {
        $error = "Semua field harus diisi!";
    } elseif ($password_1 !== $password_2) {
        $error = "Password tidak cocok!";
    } else {
        // Cek apakah username sudah ada
        foreach ($users as $user) {
            if ($user['username'] === $username) {
                $error = "Username sudah terdaftar!";
                break;
            }
        }

        // Jika tidak ada error, tambahkan pengguna baru ke array
        if (empty($error)) {
            $users[] = ['username' => $username, 'password' => $password_1];
            $_SESSION['username'] = $username; // Simpan username di session
            header("Location: dashboard.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="container d-flex align-items-center justify-content-center min-vh-100 bg-light">
  <div class="card p-4" style="width: 100%; max-width: 400px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
    <div class="card-body">
      <h2 class="text-center mb-4">Register</h2>
      <form method="post" action="register.php">
        <!-- Tampilkan pesan error jika ada -->
        <?php if (!empty($error)): ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <!-- Input username -->
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
        </div>
        
        <!-- Input password -->
        <div class="form-group">
          <label for="password_1">Password</label>
          <input type="password" class="form-control" id="password_1" name="password_1" required>
        </div>
        
        <!-- Konfirmasi password -->
        <div class="form-group">
          <label for="password_2">Confirm Password</label>
          <input type="password" class="form-control" id="password_2" name="password_2" required>
        </div>
        
        <!-- Tombol register -->
        <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>
        
        <!-- Tautan login -->
        <p class="text-center mt-3">
          You have an account? <a href="login.php">Login here</a>
        </p>
        <p class="text-center mt-3">
          <a href="index.php"><--Back</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
