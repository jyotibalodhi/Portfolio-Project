<?php

	$to = "jyotibalodhi@gmail.com";
	$subject = "Form details";
	if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["message"])){
		$txt = " Name - ".$_POST["name"]. "\n Email - ".$_POST["email"]. " \n Message - ".$_POST["message"];
		 mail($to,$subject,$txt);
		 echo "Thank you for the message, Will write back soon!";
	}else{
		echo "Invalid data";
	}
	
?>