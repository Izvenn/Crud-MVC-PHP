<?php

use App\controller\testeController;

require "../vendor/autoload.php";

$teste = new testeController;

echo $teste->getHello();