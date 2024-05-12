<?php
require_once('config.php');



function redirect_homepage(){
    header("Location: templates/home.php");
    die("Nepodarilo sa nájsť Domovskú stránku");
}



    /**
 * Generuje odkazy na JS súbory pre pätu stránky
 *
 * Táto funkcia generuje odkazy na základné JS súbory a pridáva odkazy na špecifické
 * JS súbory podľa názvu aktuálnej stránky. Odkazy sú vložené na koniec body tagu.
 *
 * @return void
 */
function add_scripts(){
    echo('<script src="../assets/js/menu.js"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
    case 'home':
        echo('<script src="../assets/js/slider.js"></script>');
        break;
    case 'qna':
        echo('<script src="../assets/js/accordion.js"></script>');
        break;  
    }
    
}




/**
 * Generuje HTML kód pre posuvníkové snímky s obrázkami a nadpisami.
 *
 * @param array $headings Pole s nadpismi pre jednotlivé snímky
 * @param string $img_folder Cesta k adresáru so súbormi obrázkov
 * @return void
 */

function generate_slides(array $headings, string $img_folder) {
    echo('<section class="slides-container">');
    // Získanie zoznamu súborov obrázkov v adresári
    $img_files = glob($img_folder . '*.jpg');
    
    // Kontrola počtu nadpisov
    $heading_count = count($headings);
    
    // Prechádza cez každý obrázok
    for ($i = 0; $i < count($img_files); $i++) {
        // Začiatok divu pre snímku
        echo('<div class="slide fade">');
        
        // Vloženie obrázka
        echo('<img src="'.$img_files[$i].'">');
        
        // Začiatok divu pre text snímky
        echo('<div class="slide-text">');
        
        // Podmienka pre výpis nadpisu
        if ($heading_count == count($img_files)) {
            // Vypíše i-ty nadpis, ak je ich dostatok
            echo($headings[$i]);
        } else {
            // Inak vypíše nadpis len ak sme mimo rozsahu poľa
            if ($i < $heading_count) {
                echo($headings[$i]);
            }
        }
        
        echo('</div>');
        
        echo('</div>');
    }
    echo('<a id="prev" class="prev">❮</a>
    <a id="next" class="next">❯</a>
    </section>');
}



function generate_qna(array $qna){
    foreach($qna as $question=>$answer){
        echo('<div class="accordion">');
        echo('<div class="question">'.$question.'</div>');
        echo('<div class="answer">'.$answer.'</div>');
        echo('</div>');
    }
}


function db_connection(){
    try{
        
        $connection = new PDO("mysql:host=" . DATABASE['HOST'] . ";dbname=" . DATABASE['DBNAME'] . ";charset=utf8", 
                              DATABASE['USER_NAME'], 
                              DATABASE['PASSWORD']);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $connection;
        
    }catch(PDOException $e){
        die("Chyba pripojenia k databáze: " . $e->getMessage());
    }
}
?>