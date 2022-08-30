<?php 

  

require_once'app/Core/Core.php'; 

require_once'app/Controller/HomeControl.php'; 

require_once'app/Controller/ErroControl.php'; 

require_once'app/Model/Postagem.php'; 

require_once'lib/Database/Conecta.php'; 

$template = file_get_contents('app/Template/estrutura.html'); 

  

ob_start(); 

    $core = new Core(); 

    $core -> start($_GET); 

    $saida = ob_get_contents(); 

ob_end_clean(); 

  

$tpronto = str_replace("{{area}}",$saida,$template); 

  

echo ($tpronto); 

  

?>      