<?php

    class Menu{

        private $pages;

        public function __construct($pages){
            $this->pages = $pages;
        }

        function generate_menu(): string{
            $menu_items = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu
            $empty_string = '     ';
            $counter = 0;
            // Prechádza všetky položky v zadanom zozname stránok a URL adries
            foreach($this->pages as $page_name => $page_url){
                if($page_name == 'Register' || $page_name == 'Login')
                {
                    if($counter++ < 1){
                        for ($i = 0; $i <= 19; $i++) {
                            $menu_items .= '<li class="nav-item ms-5">' . $empty_string . '</li>';
                        }
                        
                        
                    }
               
                $menu_items .= '<li class="nav-item ms-3"><a class="nav-link" href="' . $page_url . '">' . $page_name . '</a></li>';

                }

                elseif($page_name == 'Logout')
                {
                    if($counter++ < 1){
                        for ($i = 0; $i <= 21; $i++) {
                            $menu_items .= '<li class="nav-item ms-5">' . $empty_string . '</li>';
                        }
                        
                        
                    }
                    $menu_items .= '<li class="nav-item ms-3"><a class="nav-link" href="' . $page_url . '">' . $page_name . '</a></li>';

                }
                else
                {
                $menu_items .= '<li class="nav-item ms-3"><a class="nav-link" href="' . $page_url . '">' . $page_name . '</a></li>';
                }
            }
        
            // Vráti vygenerovaný HTML kód pre navigačné menu
            return $menu_items;
        }
    }

?>