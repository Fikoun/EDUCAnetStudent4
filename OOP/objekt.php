<?php
/////////////
/// TŘÍDA ///
/////////////
/// - Třída je šablona pro vytváření objektů
/// - Může obsahovat properties (vlastnosti) a methods (metody/funkce)
/// - Vlastnosti a metody mohou být veřejné (public), soukromé (private) nebo chráněné (protected) 
/// - Kód třídy se nevykonává stejně jako funkce, pouze definuje šablonu pro další použití 
/// - Klíčové slovíčko "$this" je proměnná, která odkazuje na AKTUÁLNÍ objekt

// Obecně platí pravidlo, že pojmenováváme třídy s velkým počátečním písmenem
class Auto {
    // Vlastnosti
    public $znacka;
    public $barva;
    public $pocetKol;
    private $zapnuto = false; // private -> nepřístupný z venku 

    /// Konstruktor - zavolaný při vytvoření instance
    function __construct($znacka, $barva, $pocetKol)
    {
        // Sestavujeme zde objekt z příchozích hodnot
        $this->znacka = $znacka;
        $this->barva = $barva;
        $this->pocetKol = $pocetKol;
        // Nebo jenom nastavíme pevné hodnoty
        $this->zapnuto = false;
    }

    // Metody
    public function zapnoutMotor() {
        $this->zapnuto = true;
    }
    public function vypnoutMotor() {
        $this->zapnuto = false;
    }

    public function vypsatInfo() {
        echo "<h2> ~ Auto ($this->znacka) ~ </h2>";
        echo "Má barvu $this->barva <br>"; 
        echo "Počet kol $this->pocetKol <br>";

        echo "Motor je: <b>";
        if ($this->zapnuto) {
            echo "ZAPNUTÝ";
        } else {
            echo "VYPNUTÝ";
        }
        echo "</b>";
    }

}


/// Kód mimo třídu se vykonává okamžitě...

// Vytvoření objektu (instance)
/*
    $mojeAuto = new Auto("ŠKODA", "modrá", 4);
    $mojeAuto->vypsatInfo();
*/