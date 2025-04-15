<?php
/// Cykly ///
// Trénujte cykly: for, while, foreach a rekurzy
// Pokud rekurzy neovládám dá se napsat cyklem, se sníženým ohodnocením.

/// Ukázkové řešení: ///
// Vytvořte funkci, která vypíše Faktorial čísla (n!) pomocí rekurze.
// Faktoriál čísla n je součin všech celých čísel od 1 do n.
// Např.: 5! = 5 * 4 * 3 * 2 * 1 = 120

$vstup = 5;
function faktorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        // Rekurze - volání funkce sama sebe
        return $n * faktorial($n - 1);
    }
}
echo "Faktorial čísla $vstup je: " . faktorial($vstup) . "<br>";

// Pomocí cyklu
function faktorialCyklem($n) {
    $faktorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $faktorial *= $i;
    }
    return $faktorial;
}
echo "Faktorial čísla $vstup je: " . faktorialCyklem($vstup) . "<br>";



/// Příklad 1. ///
// Vypočítejte součet čísel od 1 do N pomocí cyklu
// Např.: 5 -> 1 + 2 + 3 + 4 + 5 = 15



/// Příklad 2. ///
// Najděte největší číslo v poli pomocí cyklu
// Např.: [1, 2, 3, 4, 5] -> 5


/// Příklad 3. ///
// Obrácení řetězce pomocí cyklu
// Např.: "ahoj" -> "joha"



/// Příklad 4. ///
// Nahraďte funkci explode pomocí vlastní funkce, která rozdělí řetězec na pole podle zadaného oddělovače.
// Např.: "ahoj,jak,se,máš" -> ["ahoj", "jak", "se", "máš"]

