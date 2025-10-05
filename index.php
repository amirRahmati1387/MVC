<?php

include("app/autoload.php");

$request = request::requestCapture();

// $request = requestManagement::requestManagement($rotKey[2]);

$adjustRequestSendRouter = new adjustRequestSendRouter;
$adjustRequestSendRouter -> adjustRequestSendRouter($request);