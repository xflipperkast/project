<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post reactie Button
	$plaatsnaam = $_POST['plaatsnaam']; // Get plaats from form
	$gebouw = $_POST['gebouw']; // Get gebouw from form
    $img = $_POST['img']; // Get image from form




	$sql = "INSERT INTO locaties (plaatsnaam, gebouw, img)
			VALUES ('$plaatsnaam', '$gebouw', '$img')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert(' met succes toegevoegt.')</script>";
	} else {
		echo "<script>alert(' niet toegevoegt')</script>";
	}
}


if (isset($_POST['submit1'])) { // Check press or not Post reactie Button
	$naam = $_POST['naam']; // Get naam from form
	$achternaam = $_POST['achternaam']; // Get achternaam from form
    $voornaam = $_POST['voornaam']; // Get imagvoornaame from form
    $tussenvoegsel = $_POST['tussenvoegsel']; // Get plaats from form
	$statement = $_POST['statement']; // Get gebouw from form
    $actief = $_POST['actief']; // Get image from form

    $sql = "INSERT INTO artiesten (naam, achternaam, voornaam, tussenvoegsel, statement, actief)
    VALUES ('$naam', '$achternaam', '$voornaam', '$tussenvoegsel', '$statement', '$actief')";
$result = mysqli_query($conn, $sql);
if ($result) {
echo "<script>alert(' met succes toegevoegt.')</script>";
} else {
echo "<script>alert(' niet toegevoegt')</script>";
}
}
?>


<link href="css/comments.css" rel="stylesheet" type="text/css">
<nav class="navbar navbar-expand-sm navbar-dark">
    <img src="img/logo.png" width="200" alt=""> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="end">
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="home.php" data-abc="true">home</a> </li>
                <li class="nav-item"> <a class="nav-link" href="product.php" data-abc="true">producten</a> </li>
                <li class="nav-item active"> <a class="nav-link mt-2" href="reacties.php" data-abc="true" id="clicked">Evenementen<span class="sr-only">(current)</span></a> </li>
               <li class="nav-item"> <a class="nav-link" href="artiesten.php" data-abc="true">Artiesten</a> </li>
                <li class="nav-item"> <a class="nav-link" href="contact.php" data-abc="true">contact</a> </li>
				<li class="nav-item"> <a class="nav-link" href="Login.php" data-abc="true">inloggen</a> </li>
            </ul>        
        </div>
    </div>    
</nav>
<!-- Main Body -->

<br><br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action="" method="POST" class="form">
                    <div class="form-group">
                    <div class="form-group">
                        <label for="plaatsnaam">plaatsnaam</label>
                        <input type="text" name="plaatsnaam" id="plaatsnaam" placeholder="plaatsnaam" class="form-control" required>
                    </div>
					<div class="form-group">
                        <label for="gebouw">gebouw</label>
                        <input type="text" name="gebouw" id="gebouw" placeholder="gebouw naam "class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="img">image link</label>
                        <input type="text" name="img" id="img" placeholder="image link "class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" id="post" class="btn">voeg toe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action="" method="POST" class="form">
                    <div class="form-group">
                    <div class="form-group">
                        <label for="naam">artiesten naam</label>
                        <input type="text" name="naam" id="naam" placeholder="artiesten naam" class="form-control" required>
                    </div>
					<div class="form-group">
                        <label for="achternaam">achternaam</label>
                        <input type="text" name="achternaam" id="achternaam" placeholder="achternaam "class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="voornaam">voornaam</label>
                        <input type="text" name="voornaam" id="voornaam" placeholder="voornaam" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tussenvoegsel">tussenvoegsel</label>
                        <input type="text" name="tussenvoegsel" id="tussenvoegsel" placeholder="tussenvoegsel" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="statement">statement</label>
                        <input type="text" name="statement" id="statement" placeholder="statement" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="actief">actief = 1 inactief = 0</label>
                        <input type="text" name="actief" id="actief" placeholder="statement" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit1" id="post" class="btn">voeg toe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>