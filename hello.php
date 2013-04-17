<?php
/*
  # ------------------------------------------------------------------------
  # SmfonyWithMyLib
  # ------------------------------------------------------------------------
  # Developper : Sofiane Haddag, sofiane.haddag@gmail.com
 */
require_once 'MyLib/init.php';
//----------------------------------------------
$setupSymfony = new setupSymfony($viewDir = "views");
$twig = $setupSymfony->twig();

echo $setupSymfony->twigRender($twig, 'hello.html.twig', array(
    'name' => hello(),
));

?>

