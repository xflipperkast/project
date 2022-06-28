<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post reactie Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$reactie = $_POST['reactie']; // Get reactie from form
	$eventnaam = $_POST['eventnaam']; // Get reactie from form


	$sql = "INSERT INTO comments (name, email, reactie, eventnaam)
			VALUES ('$name', '$email', '$reactie', '$eventnaam')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('reactie met succes toegevoegt.')</script>";
	} else {
		echo "<script>alert('reactie niet toegevoegt')</script>";
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
<div class="row justify-content-center">
    <?php
    $sql = "SELECT * FROM locaties" ;
    if($result = $conn-> query($sql)){
        while($row = $result->fetch_assoc()) {
            ?>
                <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <p class="card-text"><?php echo $row['plaatsnaam']; ?></p>
        </div>
        <img src="img/ev3.jpg" alt="Card image">
        <div class="card-body">
            <p class="card-text"><?php echo $row['gebouw']; ?></p>
            <p class="card-text"><?php echo $row['max_bezoekers']; ?></p>
        </div>
        <br>
    </div>
    <br>
</div>

    <?php
        }
    }

    ?>
</div>

<br><br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4"</div>
                <h1>Recenties</h1>
    			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div id="items" class="comment mt-4 text-justify float-left">
				<h4><?php echo $row['name']; ?></h4>
				<a><?php echo $row['email']; ?></a>
				<p><?php echo $row['reactie']; ?></p>
				<a><?php echo $row['eventnaam']; ?></a>

			</div>
			<?php

				}
			}
			
			?>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action="" method="POST" class="form">
                    <div class="form-group">
                        <h4>Geef je reactie</h4>
                        <label for="message">Bericht</label>
                        <textarea name="reactie" id="reactie" msg cols="30" rows="5" class="form-control" style="background-color: black;" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">naam</label>
                        <input type="text" name="name" id="name" placeholder="Naam "class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">titel</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
					<div class="form-group">
                        <label for="eventnaam">evenement naam</label>
                        <input type="text" name="eventnaam" id="eventnaam" placeholder="evenement naam "class="form-control" required>
                    </div>
					<div class="form-inline">
                        <input type="checkbox" name="check" id="checkbx" class="mr-1">
                        <label for="subscribe">Ik wil promotie emails</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" id="post" class="btn">plaats reactie</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>