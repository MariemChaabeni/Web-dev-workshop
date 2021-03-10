<?php

$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];

try {
  $bdd = new PDO('mysql:host=localhost;dbname=my-ieee-event;charset=utf8', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO  `registred`(`firstname`, `lastname`, `email`, `birthdate`) VALUES (:fname, :lname, :email, :bdate)');
$req->execute(array(
	'fname' => $fname,
	'lname' => $lname,
	'email' => $email,
	'bdate' => $bdate,
	));

  echo 'You are registred now!';
  echo  '<p>Back to event <a href="../index.php">home page</a>.</p>'
?>