<?php
/// Objektové programování (OOP) ///

// Ukázkové řešení: //
// Vytvořte třídu "Auto" s vlastnostmi "značka", "barva" a "počet kol" (použijte zapouzdření a dodžujte zásady OOP)
// Vytvořte metodu "vypsatInfo", která vypíše informace o autě  
// Vytvořte meodu "zmenitBarvu", která změní barvu auta
// Vytvořte instanci třídy "Auto" a zavolejte metodu "vypsatInfo"

class Auto {
    // Vlastnosti
    private $znacka;
    private $barva;
    private $pocetKolu;

    /// Konstruktor - zavolaný při vytvoření instance
    function __construct($znacka, $barva, $pocetKolu)
    {
        // Sestavujeme zde objekt z příchozích hodnot
        $this->znacka = $znacka;
        $this->barva = $barva;
        $this->pocetKolu = $pocetKolu;
    }

    // Metoda pro změnu barvy
    public function zmenitBarvu($novaBarva) {
        $this->barva = $novaBarva;
    }

    // Metoda pro výpis informací
    public function vypsatInfo() {
        echo "~ $this->znacka <br>";
        echo "Barva: $this->barva <br>";
        echo "Počet kol: $this->pocetKolu";
    }
}

// Vytvoření objektu (instance)
$mojeAuto = new Auto("ŠKODA", "modrá", 4);
$mojeAuto->vypsatInfo();


/// Příklad 1. ///

// Vytvořte třídu "Film" s vlastnostmi "název", "rok" a "hodnocení" (použijte zapouzdření a dodžujte zásady OOP)
// Vytvořte metodu "zmenitHodnoceni", která změní hodnocení filmu
// Vytvořte metodu "vypsatInfo", která vypíše informace o filmu
// Vytvořte instanci třídy "Film" a zavolejte metodu "vypsatInfo"



/// Příklad 2. ///

// Vytvořte třídu "Student" s vlastnostmi "jméno", "příjmení" a "známky" (použijte zapouzdření a dodžujte zásady OOP)
// Vytvořte metodu "pridatZnamku", která přidá známku do pole známek
// Vytvořte metodu "vypocitatPrumer", která vypočítá průměr známek
// Vytvořte instanci třídy "Student" a zavolejte metodu "vypocitatPrumer"



/// Příklad 3. ///

// Vytvořte třídu "Obdelník" s vlastnostmi "šířka" a "výška" (použijte zapouzdření a dodžujte zásady OOP)
// Vytvořte metodu "vypocitatObsah", která vypočítá obsah obdélníku
// Vytvořte metodu "vypocitatObvod", která vypočítá obvod obdélníku
// Vytvořte instanci třídy "Obdelník" a zavolejte metodu "vypocitatObsah" a "vypocitatObvod"



/// Příklad 4. ///
// Vytvořte třídu "Kalkulacka" se statickou metodou "secti", která sečte dvě čísla
// Vytvořte statickou metodu "odecti", která odečte dvě čísla
// Zavolejte obě metody bez vytváření instance třídy