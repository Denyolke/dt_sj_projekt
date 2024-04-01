<?php
/** 
 * @param array $pages Asociatívne pole stránok a ich URL adries
 * @return string HTML kód pre navigačné menu
 */
function generate_menu(array $pages): string{
    $menuItems = ''; 
    
    
    foreach($pages as $page_name => $page_url){
        
        $menuItems .= '<li class="nav-item ms-3"><a class="nav-link" href="' . $page_url . '">' . $page_name . '</a></li>';
    }

    
    return $menuItems;
}

function redirect_homepage(){
    header("Location: templates/home.php");
    die("Nepodarilo sa nájsť Domovskú stránku");
}
?>