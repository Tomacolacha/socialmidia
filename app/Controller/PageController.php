<?php
    namespace App\Controller;
    use App\Utils\ViewManager;

        class PageController{
            //Funcao Mostrar Pagina
            public static function getPage(){
                return ViewManager::render("page",[
                    "title" =>"SocialMida| Home", 
                    "contentView" =>"SocialMida| Home", 
        
                ]);
            }





     
        }

 
?>    


            




