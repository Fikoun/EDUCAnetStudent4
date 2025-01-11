<?php
///////////////////////
/// POMOCNÉ FUNKCE ///
//////////////////////


// Funkce pro porovnání aut
function porovnejAuta($auto1, $auto2) {
    // Porovnání aut na základě barvy, značky a počtu kol
    if ($auto1->barva == $auto2->barva && $auto1->znacka == $auto2->znacka && $auto1->pocetKol == $auto2->pocetKol) {
        return true; // Vše je stejné TRUE
    } else {
        return false; // Něco je jiné FALSE
    }
}
