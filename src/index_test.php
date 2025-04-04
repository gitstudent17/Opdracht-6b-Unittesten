<?php
    // Functie: programma login OOP 
    // Auteur: ishika

    // Initialisatie
    include 'classes/User.php';

    //Main
    $piet = new User();
    $piet->username = "Piet";

    $piet->ShowUser();

    $jan = new User();
    $jan->username = "Jan";
    $jan->ShowUser();

?>