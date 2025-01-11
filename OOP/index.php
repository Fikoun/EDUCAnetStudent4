<?php
/****---------------------****/
/***      TAHÁK ~ OOP      ***/
/**-------------------------**/
/**                         
 *  Zde naleznete ty koncepty týkající se objektového programování
 *  Důležité chápat Rámec (SCOPE)  ->  Neboli KDE se nějaká část kódu nachází [funkce, metoda, objekt, globalní rámec]
 *  Dokážu vygooglit specifiký problém/pojem (php.net, w3school, stackoverflow, chatgpt/gemini, ...) 🙌
 *  Nejlepší je si vždy spustit/otestovat kousek a přidávat postupně...
 */

/// SPOJOVÁNÍ SOUBORŮ ///
// Přistupujeme vždy k jednomu souboru Např.. https://localhost/index.php 
// Vstupní index.php jako spojovač ostatních php souborů (nemusí nutně být "index")

// Na žačátku souboru připojujeme ostaní potřebné funkce [třídy, funkce, knihovny]
// include == require 
include("objekt.php");
require("funkce.php");

// once (pouze jednou) nahrává pouze pokud ještě nebyl inkludování
include_once("objekt.php");
require_once("objekt.php");

// Vytvoření objektu (instance) -> constructor
$mojeAuto = new Auto("ŠKODA", "MODRÁ", 4);
$jineAuto = new Auto("MERCEDES", "ČERVENÁ", 4);
$noveAuto = new Auto("FIAT", "ZELENÁ", 4);

// Volání metody objektu
$noveAuto->vypsatInfo();

// Získání a Změna vlastností objektu
$noveAuto->barva = "ČERVENÁ";
$noveAuto->pocetKol = 3;
//$mojeAuto->zapnuto = true; // NEPŮJDE..!protože je private

$noveAuto->zapnoutMotor();
$noveAuto->vypsatInfo();



echo "<br><br><br> <b> Porovnání aut: </b> ";
$mojeAuto->vypsatInfo();
$jineAuto->vypsatInfo();

// Porovnání aut
if (porovnejAuta($mojeAuto, $jineAuto)) {
    echo "<br> Auta jsou stejná";
} else {
    echo "<br> Auta nejsou stejná";
}






