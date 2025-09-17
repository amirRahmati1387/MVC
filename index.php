<?php

include("App/autoload.php");
include("App/router.php");

$router = new router($key);
$rotKey = $router -> uriArray();