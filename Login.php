<?php 

session_start();
if(isset($_POST['submit'])){

require("dbconnect.php");

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "INSERT INTO gebruikers (username, `password`, permission) VALUES (".$name.", ".$pass.", 1)";

if($result = $conn->query($s) ){
    echo "gelukt";
}else{
    echo "fail";
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
<button type="submit" class="btn btn-primary"> Login </button>
</form>
</div>

<div class="col-md-6 login-right">
<h2> Registreren </h2>
<form method="POST">
<div class="form-group">
<label>Gebruikersnaam</label>
<input type="text" name="user" class="form-control" required>
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