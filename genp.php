<?php 
    function genPass($allowed_number){
        $allowed="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789!£$%&/()'?^+-*/[]{}#@ç°-_.:,;\|";
        $password="";

        while(strlen($password) < $allowed_number){
            $random=$allowed[rand(0, strlen($allowed)-1)];
            $password .= $random;
        };
        return $password;

    };

   if(isset($_GET["createPassword"])){
        $password = genPass($_GET["createPassword"]);
    };
?>