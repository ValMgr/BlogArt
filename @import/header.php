<header>
			<a href="#"><img class="logo" src="img/logo_seul.png"></a>
			<h1>(Sur)vie Étudiante</h1>
			<h2>La guide de l'étudiant bordelais</h2>
		

					<a class="Nav-Link" href="#">Acceuil</a>


					<a class="Nav-Link" href="articles.php">Les articles</a>

					<a class="Nav-Link" href="Articles/add_article.php">Créer un article</a>

			<?php 
					if(isset($_SESSION['Connected'])){
						if($_SESSION['Connected'] == true){
								//Connected so link to Disconnect
							?> <a href="Login/disconnect.php" class="Nav-Link"><i class="fas fa-times" style="color:white;"></i></a> <?php
						}
					}
					else{
								//Disconnected so link to Login_Form
						?> <a href="Login/login_form.php" class=" Nav-Link"><i class="fas fa-user" style="color:white;"></i></a> <?php
					}
                    




				if(isset($_SESSION['Lang'])){
					if($_SESSION['Lang'] == "FR"){  ?>
						<a href="switch_language.php" class="Nav-Link Lang">FR</a>
					<?php
					}
					if($_SESSION['Lang'] == "ENG"){ ?>
						<a href="switch_language.php" class="Nav-Link Lang">ENG</a>
					<?php } 

					}
					else{
						$_SESSION['Lang'] = "FR";
						header('location: switch_language.php');
				}
					?>

			
</header>