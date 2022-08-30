<?php 

    //phpinfo(); 

    class Core 

    { 

        public function start($urlGet) 

        { 

            $acao = 'index'; 

            if($urlGet['pagina']) 

            { 

                $controller = ucfirst($urlGet['pagina'].'Control'); 

  

            }  

            else  

            { 

                $controller = 'HomeControl'; 

  

            } 

  

            //var_dump($urlGet); 

            if (!class_exists($controller)) 

            { 

                $controller = 'ErroControl'; 

            } 

            call_user_func_array(array(new $controller, $acao),array()); 

            echo $controller; 

        } 

          

    } 

?> 