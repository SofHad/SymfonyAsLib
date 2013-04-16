<?php

require_once 'MyLib/MyConstants.php';
require_once 'MyLib/setupSymfony.php';

$viewDir = config::partnerRoot() . "/products/views";
$setupSymfony = new setupSymfony($viewDir);
$twig = $setupSymfony->twig();

//RENDER
$context = array(
    'id' => $productId,
    'render' => $getPriceArrayMapped,
    'name' => $nameProduct,
    "session" => $session,
    'bulle' => "",
        );

echo $setupSymfony->twigRender($twig, 'simple_demo.html.twig', $context);


?>
