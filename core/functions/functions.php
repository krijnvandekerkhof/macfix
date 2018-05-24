<?php
function login(){
	
	if ($_POST['username'] === 'macfix' && md5($_POST['password']) === '76c532544c71c83cbcc92583bfdd17a3'){
		echo "login gelukt";
	}
	else{
		echo "mislukt";
		echo md5("Soldeer123");
	}
}
?>