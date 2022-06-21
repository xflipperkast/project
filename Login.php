<?php 
if (isset($_POST['submit'])){
    include 'config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO gebruikers (username, password)
    VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('met succes toegevoegt.')</script>";
    } else {
        echo "<script>alert('niet toegevoegt')</script>";
    }
}

?>
<html>
<head>
    <title>User Login And Registration</title>
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <link rel="stylesheet" type="text/css" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
<h2> Login </h2>
<form action="validation.php" method="post">
<div class="form-group">
<label>Gebruikersnaam</label>
<input type="text" name="username" class="form-control" required>
</div>
<div class="form-group">
<label>Wachtwoord</label>
<input type="password" name="pass" class="form-control" required>
</div>
<input name="loginsubmit" type="submit" class="btn btn-primary">
</form>
</div>

<div class="col-md-6 login-right">
<h2> Registreren </h2>
<form method="POST">
<div class="form-group">
<label>Gebruikersnaam</label>
<input type="text" name="username" class="form-control" required>
</div>
<div class="form-group">
<label>Wachtwoord</label>
<input type="password" name="password" class="form-control" required>
</div>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>

</div>

</div>

</div>
</body>
</html>