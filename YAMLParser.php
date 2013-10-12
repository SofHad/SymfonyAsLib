<?php
/*
 * This file is part of the SofHad package.
 *
 * (c) Sofiane HADDAG <sofiane.haddag@yahoo.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\Yaml\Parser;

require_once 'MyLib/init.php';
//----------------------------------------------

$yaml = new Parser();

$config = $yaml->parse(file_get_contents('MyData/MyConfig.yml'));

echo "<pre>";
var_dump($config); die;

