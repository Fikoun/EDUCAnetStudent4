<?php
///////////////////////
/// POMOCNÉ FUNKCE ///
//////////////////////


// Funkce složení objektů a uložení do souboru
function ulozitVse($objekty)
{
    $data = [];
    // Pro každé auto v poli
    foreach ($objekty as $jedenZaznam) {
        // Získání dat z objektu
        $radek = [
            $jedenZaznam->nazev,
            $jedenZaznam->rok,
            $jedenZaznam->hodnoceni
        ];

        // Převedení dat na řádek textu
        $data[] = implode(";", $radek);
    }

    // Složení všech řádků do jednoho textu
    $text = implode("\n", $data);

    // Uložení textu do souboru
    file_put_contents("uloziste/filmy.csv", $text);
}


// Funkce pro načtení dat ze souboru a vytvoření objektů
function nacistVse()
{
    // Načtení textu ze souboru
    $text = file_get_contents("uloziste/filmy.csv");

    // Rozdělení textu na řádky
    $radky = explode("\n", $text);

    // Pole pro uložení objektů
    $filmy = [];

    // Pro každý řádek
    foreach ($radky as $radek) {
        // Rozdělení řádku na jednotlivé hodnoty
        $data = explode(";", $radek);

        // Kontrola, zda máme všechny hodnoty (sloupce), jine pokračujeme v cyklu a přeskočíme tento řádek
        if (count($data) != 3) {
            continue;
        }

        // Vytvoření objektu auta - co sloupec to vlastnost
        $instance = new Film($data[0], $data[1], $data[2]);

        // Přidání auta do pole
        $filmy[] = $instance;
    }

    // Vrácení pole objektů
    return $filmy;
}


// Funkce pro získání dat z formuláře   
function nactiData()
{
    // Získání dat z formuláře
    $data = array(
        "znacka" => $_POST["znacka"],
        "barva" => $_POST["barva"],
        "pocetKol" => $_POST["pocetKol"]
    );
    return $data;
}
