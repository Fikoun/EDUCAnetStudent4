<?php
require_once("funkce.php");
require_once("objekt.php");

// Odchycení POST dat a jejich uložení do souboru
if (isset($_POST["nazev"])) {
    // Co přislo z inputů <form>
    $nazev = $_POST["nazev"];
    $rok  = $_POST["rok"];
    $hodnoceni = $_POST["hodnoceni"];
    
    // Načtení dat z ulozistě (původní uložené)
    $filmy = nacistVse();
    
    // Přidání nového auta do pole
    $filmy[] = new Film($nazev, $rok, $hodnoceni);

    // Uložení pole aut do souboru
    ulozitVse($filmy);
}


require_once("index.php");
