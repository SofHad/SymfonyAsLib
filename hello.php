<?php

/*
 * This file is part of the SofHad package.
 *
 * (c) Sofiane HADDAG <sofiane.haddag@yahoo.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once 'MyLib/init.php';
//----------------------------------------------

$hello = new SetupSymfony($viewDir = "views");
$twig = $hello->twig();

echo $hello->twigRender($twig, 'hello.html.twig', array(
    'name' => hello(),
));

?>

