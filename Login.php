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
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Wachtwoord</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> Login </button>
</form>
</div>

<div class="col-md-6 login-right">
<h2> Registreren </h2>
<form action="registration.php" method="post">
<div class="form-group">
<label>Gebruikersnaam</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Wachtwoord</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> Registreer </button>
</form>
</div>

</div>

</div>

</div>
</body>
</html>