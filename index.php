<?php
include('user.php');
	
$user1 = new Member("Frane", "frane@frane.com", "Jan 20");
echo $user1->getType();
echo "<br><br>";

$user2 = new Admin("Filip", "filip.duzevic@gmail.com", 3);
echo $user2->getType();



?>
	