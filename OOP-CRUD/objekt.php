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
class Film {
    // Vlastnosti
    public $nazev;
    public $rok;
    public $hodnoceni;
   
    /// Konstruktor - zavolaný při vytvoření instance
    function __construct($nazev, $rok, $hodnoceni)
    {
        // Sestavujeme zde objekt z příchozích hodnot
        $this->nazev = $nazev;
        $this->rok = $rok;
        $this->hodnoceni = $hodnoceni;
    }

    public function vypsatInfo() {
        echo '<div style="display: inline-block; padding: 20px 30px; border-radius: 18px; border: 2px solid black; margin: 12px;">';
        echo "<h2 style='text-shadow: 1px 1px 4px grey; '> ~ ($this->nazev) ~ </h2>";
   
        echo "Rok vydání $this->rok <br>";
        
        echo "Hodnoceni: ";
        for ($i=0; $i < $this->hodnoceni; $i++) { 
            echo "⭐️";
        }
        
        echo "</b>";
        echo "</div>";

    }

}


/// Kód mimo třídu se vykonává okamžitě...

// Vytvoření objektu (instance)
/*
    $mojeAuto = new Auto("ŠKODA", "modrá", 4);
    $mojeAuto->vypsatInfo();
*/