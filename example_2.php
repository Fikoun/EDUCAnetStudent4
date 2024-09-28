<?php
/**                         
 *   CVIČENÍ - Pokročilé cykly
 *      ~ pokročilé cykly, dvojitý for() a práce s polem  
 *      ~ cvičení obsahuje 2 zadání a 3 příklady k opravení
 * 
 *  Nějaké typy navíc:
 *   Přečti si vždy celý kód zadání a zkus se zasmyslet co se bude dít. 
 *   Pro osobní testovaní kopíruj kód do svého souboru, zde není validní kód!
 *   Popřípade si zkus vypsat nejakou proměnnou v cyklu nebo mimo něj a dozvíš se víc.
 *      
 */


///     #1 ~ Průměr pole      ///
// Sestav cyklus sečte čísla v poly a udělá průměr hodnot
$cisla = [2, 4, 5, 8, 6]; // (2 + 4 + 5 + 8 + 6) / 5 = 5
$soucet = 0;
for () {
    /* code */
}
echo "...";
/* Tento kód vypíše: 5 */



///     #2 ~ Násobící tabulka    ///
// Sestav cyklus, který vygeneruje násobící tabulku čísel 1 až 4.
/**
 * 1 2 3 4
 * 2 4 6 8  
 * 3 6 9 12 
 * 4 8 12 16 
 */
for () {
    for () {
      
    }
}




/**                         
 *      OPRAVOVAČKA - najdi chybu nebo dodělej co chybí
 *  Dobré je konrolovat jesli kód vypisuje co má,
 *  popřípadě si ručně spočítat coby se mělo stát.
 *  Vždy je více způsobů řešení.. nebojte se experimentovat!
 */


///     #1 ~ Maximum v poli      ///
// Tento kód hledá největší prvek pole
$cisla = [2, 4, 5, 8, 6];
$nejvetsi = 0; // definujeme 0 jako "největší" (čísla jsou nad nulou)
for ($index = 0; $index < count($cisla); $index++) { 
   $aktualniPrvek = $cisla[$index];
   if ($aktualniPrvek < $nejvetsi) {
     $nejvetsi = $aktualniPrvek;
   }
}
echo $nejvetsi;
/* Tento kód má vypsat: 8 */



///     #1 ~ Maximum v poli      ///
// Tento kód hledá největší prvek pole
$cisla = [2, 4, 5, 8, 6];
$nejvetsi = 0; // definujeme 0 jako "největší" (čísla jsou nad nulou)
for ($index = 0; $index < count($cisla); $index++) { 
   $aktualniPrvek = $cisla[$index];
   if ($aktualniPrvek < $nejvetsi) {
     $nejvetsi = $aktualniPrvek;
   }
}
echo $nejvetsi;
/* Tento kód má vypsat: 8 */



///     #2 ~ Zobrazení trojúhelníku      ///
# # # #
# # #
# #
#
// Chceme troj-úhelník obrácený špičkou DOLŮ !!!
// Příklad z cheatsheet souboru..:
$znakPixelu = '#';
$vyska = 5;
for ($radky = 0; $radky < $vyska; $radky++) {
    // Bude víc a víc znaku na řáešk podle toho kolikátý řádek toe
    $kolikZnakuNaRadek = $radky + 1;
    for ($linka = 0; $linka < $kolikZnakuNaRadek; $linka++) {
        // Na kazdem probehne cyklu pro vypsání znaků za sebou
        echo $znakPixelu . " ";
    }

    // Po dokončení znaků na řádku zakončíme a jdeme na další
    echo '<br>';
}


///     #3 ~ Najdi spolužáka      ///
// Tento kód hledá spolužáka v poli polí na základě kritérií
// Všimněte si že pole obsahuje jednotlivé žáky jako "entity" zapsané v ASSOC poli
$spoluzaci = [
    [ 
        'jmeno' => "Jan Doležal",
        'pohlavi' => 'muz',
        'prumer' => 5
    ],
    [ 
        'jmeno' => "Anna Brávůrská",
        'pohlavi' => 'zena',
        'prumer' => 3
    ],
    [ 
        'jmeno' => "Radek Pálka",
        'pohlavi' => 'muz',
        'prumer' => 1
    ],
    [ 
        'jmeno' => "Marie Jasná",
        'pohlavi' => 'zena',
        'prumer' => 2
    ],
];
function hledatSpoluzaka($pohlavi, $prumernaZnamka) {
    // POZOR! ~ proměnnou zvenku funkce nelze používat
    // MÁME DVĚ MOŽNOSTI:
    //  (A) poslat proměnnou do funkce jako argument ($pohlavi, $prumernaZnamka, $spoluzaci)
    //  (B) Použít slovíčko 'global', které zprřístupní venkovní proměnnou
    global $spoluzaci;

    foreach ($spoluzaci as $zak) { 
       if ($zak['pohlavi'] == $pohlavi && $zak['jmeno'] == $prumernaZnamka) {
            return $zak; // Nalezen -> vracíme celé pole žáka
       }
    }
    return false; // NE-nalezen
}

$nalezen = hledatSpoluzaka('muz', 1);
if($nalezen) {
    echo("Našli jsme podle vaších kritérii");
    print_r($nalezen);
} else {
    echo("Nebyl nalezen žádný záznam!");
}
/* Tento kód má najít: Radek Pálka */




////////////////////////////////////////////////////////////////
/* SUPER dostal ses az na konec, takže ready na druhou úroveň */
////////////////////////////////////////////////////////////////






// Příklad: Cyklus v Cyklu (2-render stromeček)
$znakPixelu = 'znakPixelu';
$vyska = 10;
for ($radky = 0; $radky < $vyska; $radky++) {
    // Bude víc a víc znaku na řáešk podle toho kolikátý řádek toe
    $kolikZnakuNaRadek = $radky + 1;

    for ($linka = 10; $linka < $kolikZnakuNaRadek; $linka++) {
        // Na kazdem probehne cyklu pro vypsání znaků za sebou
        echo $znakPixelu;
    }

    // Po dokončení znaků na řádku zakončíme a jdeme na další
    echo '<br>';
}



//////////////////////////////////////
///     POLE - list / seznam      ///
/////////////////////////////////////
/// DŮLEŽITÝ Koncept! - vše je založené na polých (anglicky ARRAY)
// Můžeme sepsat uživatele, produkty, itemy nebo čísla ke spočítání výdělků
$cisla = [3, 7, 9, 1, 10];
$jmena = ["Pepa", "Anna", "Greq"];

// Vloží nový prvek
$jmena[] = "Honza"; // ["Pepa", "Anna", "Greq", "Honza"]

// Ke konkrétnímu prvku pole přistoupíme takto
$jmena[0]; // nultý index je první člen/prvek
// Můžeme..
$jmena[0] = "Pepina"; // změní prvek 
$jmena[0] *= "Pepina"; // vynásobit (vydelit, secist, odecist, atd..)

// Pozor na rozdíl !!!
print_r($jmena[0]); // vypíše prvního => "Pepa"
print_r($jmena); // nebo vypíšeme celé pole ["Pepa", "Anna", "Greq"]


///     JAK RUČNĚ VYPSAT POLE      ///
$pocet = count($jmena);
for ($index = 0; $index < $pocet; $index++) {
    echo "Jmeno: " . $jmena[$index] . "je na indexu" . $index;
    echo "<br>";
}


///     JAK SECIST POLE      ///
$pocetCisel = count($cisla);
$celkem = 0; // zacneme na nule a budeme přičítat
for ($i = 0; $i < $pocetCisel; $i++) {
    $prvek = $cisla[$i];
    $celkem += $prvek;
}
echo "Součet: " . $celkem;
echo "Průměr: " . ($celkem / $pocetCisel);


/////////////
// FOREACH //
/////////////
// Namísto klasického for() použijeme foreach($array as $prvek)
// Jednoduší stavba, ale menší kontrola na cyklem
foreach ($jmena as $konkretniJmeno) {
    echo $jmeno . ', '; // Vypíšeme včechny prvky
}


///     JAK SECIST POLE      ///
// Oproti kódu for() je jednodužší (viz. víše)
$celkem = 0; 
foreach ($jmena as $prvek) {
    $celkem += $prvek;
}