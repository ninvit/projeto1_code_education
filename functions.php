<?php
function rotas($param){
    $rotaValida = array("contato","empresa","produtos","servicos","home");
    if(in_array($param, $rotaValida)){
        require_once($param.'.php');
    } elseif ($param == ""){
        require_once('home.php');
    }else{
        require_once('404.php');
    }
}