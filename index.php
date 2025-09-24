<?php

include("app/autoload.php");

$rotKey = router::router();

controlRouter::controlRouter($rotKey[2]);