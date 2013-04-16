<?php

function __autoload($classe) {
   if (substr($classe, 0, 7) === "Symfony"){
     require_once  SYMFONY_COMPONENT . $classe .'.php';
     return ;
}
}
?>
