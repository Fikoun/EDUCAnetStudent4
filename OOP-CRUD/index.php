<?php

/****---------------------****/
/***       CRUD ~ OOP      ***/
/**-------------------------**/
/**                         
 *  Zde naleznete příklad CRUD systému založeném na souborech
 *  Naleznete zde práci se soubory, objekty, HTML formuláře
 *  Není zde použit žádný framework, vše je čistě v PHP
 *  Databáze je simulována pomocí souborů
 */

/// SPOJOVÁNÍ SOUBORŮ ///
// Přistupujeme vždy k jednomu souboru Např.. https://localhost/index.php 
// Vstupní index.php jako hlavní a spojovací ostatních php souborů (nemusí nutně být "index")
// Stačí dotázat url bez index.php, tedy stačí https://localhost/ (index se bere jako výchozí!)

// Na žačátku souboru připojujeme ostaní potřebné funkce [třídy, funkce, knihovny]
require_once("objekt.php");
require_once("funkce.php");

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
    </head>

    <body>


            <!-- Zde je formulář pro přidání nového záznamu -->
            <div style="float: right;">
             <h2>Formulář</h2>
             <form action="vytvoreni.php" method="POST">
						 		<label for="nazev">Jmeno:</label><br>
                 <input type="text" name="nazev"><br>
						 		
								 <label for="rok">Rok vydání:</label><br>
                 <input type="number" name="rok"><br>


								 <label for="hodnoceni">Hodnocení:</label><br>
                 <input type="range" min="0" max="5" name="hodnoceni"><br>
                 

                 <input type="submit" value="Odeslat">
             </form>
         </div>

        <h1>Seznam filmů</h1>

        <?php
        // Zde nacteme ze souboru a vypíšeme všechny záznamy
        $zaznamy = nacistVse();
        foreach ($zaznamy as $jedenZaznam) {
            echo $jedenZaznam->vypsatInfo();
        }

        ?>



    </body>

</html>