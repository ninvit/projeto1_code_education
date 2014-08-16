<?php require_once("header.php");

      require_once("menu.php");

?>




<div class="container">

<?php

if(!isset($_GET['pagina']))
{
    $_GET["pagina"] = "home";
}

switch ($_GET['pagina']) {


    case "empresa":
       require_once("empresa.php");
        break;
    case "produtos":
        require_once("produtos.php");
        break;
    case "servicos":
        require_once("servicos.php");
        break;
    case "contato":
        require_once("contato.php");
        break;
    default:
        require_once("home.php");
}
?>


</div> <!-- /container -->

<?php require_once("footer.php"); ?>
