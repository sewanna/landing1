<?php

mail(
    "seweryniakanna1@gmail.com", 
    "Es gibt eine neue Kontaktanfrage", 
    "Email: {$_POST['email']}, Name: {$_POST['name']}, Nachricht: {$_POST['message']}");

header("Location: index.php?contacted=1");

?>
