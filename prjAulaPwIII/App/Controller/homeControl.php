<?php 

  

    class HomeControl 

    { 

        public function index() 

        { 

           echo ' Esta é a página HomeControl '; 

           postagem::select_all(); 

  

        } 

    } 

?> 