<!DOCTYPE html>
<html>

<head>
 <title>Login Admin</title>
</head>

<body>
 <h2>Login Admin</h2>

 <!-- Pesan error jika login gagal -->
 <?php if(!empty($error)) : ?>
 <p style="color:red;"><?php echo $error; ?></p>
 <?php endif; ?>

 <!-- Form login -->
 <form method="post" action="">
  <label>Username</label><br>
  <input type="text" name="username" required><br><br>

  <label>Password</label><br>
  <input type="password" name="password" required><br><br>

  <button type="submit">Login</button>
 </form>

</body>

</html>