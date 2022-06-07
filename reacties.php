<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post reactie Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$reactie = $_POST['reactie']; // Get reactie from form

	$sql = "INSERT INTO comments (name, email, reactie)
			VALUES ('$name', '$email', '$reactie')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('reactie met succes toegevoegt.')</script>";
	} else {
		echo "<script>alert('reactie niet toegevoegt')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<title>reacties</title>
</head>
<body>
<section>
      <a href="#" id="inloggen">inloggen</a>
    <nav>
      <img id="logo" src="img/logo.png" alt="logo">
        <article id="nav">
            <a href="#" class="nav" id="curent-page">Home</a>
            <a href="#" class="nav">Producten</a>
            <a href="#" class="nav">Evenementen</a>
            <a href="#" class="nav">Contact</a>
        </article>
    </nav>
  </section>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">naam</label>
					<input type="text" name="name" id="name" placeholder="je naam" required>
				</div>
				<div class="input-group">
					<label for="email">Titel</label>
					<input type="text" name="email" id="email" placeholder="Titel" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="reactie">reactie</label>
				<textarea id="reactie" name="reactie" placeholder="vul je reactie in" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div id="items" class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a <?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['reactie']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
</body>
</html>