<?php
$rota = parse_url("http://". $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = str_replace("/","",$rota['path']);