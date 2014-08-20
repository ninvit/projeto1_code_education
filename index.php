<?php
require_once("paths.php");
require_once("functions.php");
require_once("header.php");
require_once("menu.php");

?>

<div class="container">

<?php

if(file_exists($path .".php"))
{
    rotas($path);
}else if( $path)
{
    rotas($path);
}else {
    require_once('home.php');
}

?>

</div> <!-- /container -->

<?php require_once("footer.php"); ?>
