<?php
function login($username, $password){
	if(!empty($username) && !empty($password)){
		if ($username === 'macfix' && md5($password) === '76c532544c71c83cbcc92583bfdd17a3'){
			echo "login gelukt";
			$_SESSION['admin'] = $username;
			header('Location: index.php');
		}
		else{
			if ($username != 'macfix') {
				echo 'De gebruikersnaam is niet goed.';
			}
			else{
				echo 'Wachtwoord is niet goed';
			}
		}	
	}
	else{
		echo 'Vul een gebruikersnaam en wachtwoord in!';
	}
}

function logout(){
	session_destroy();
	header("Location: index.php");
}
?>