<?php

mail(
    "annapolitniem@wp.pl", 
    "Es gibt eine neue Kontaktanfrage", 
    "Email: {$_POST['email']}, Name: {$_POST['name']}, Nachricht: {$_POST['message']}");

header("Location: index.php?contacted=1");

?>
