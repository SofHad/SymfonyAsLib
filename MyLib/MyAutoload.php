<?php
/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function __autoload($classe) {
   if (substr($classe, 0, 7) === "Symfony"){
     require_once  SYMFONY_COMPONENT . $classe .'.php';
     return ;
}
}
?>
