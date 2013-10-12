<?php
/*
 * This file is part of the SofHad package.
 *
 * (c) Sofiane HADDAG <sofiane.haddag@yahoo.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\Validator\Constraints\NotBlank ;
use Symfony\Component\Validator\Constraints\Length ;

require_once 'MyLib/init.php';
//----------------------------------------------

//Twig
//$viewDir = View Directory
$app = new SetupSymfony($viewDir = "views");
$twig = $app->twig();

$formFactory = $app->getFormFactory($twig) ;
$form = $formFactory->createBuilder()
    ->add('firstName', 'text', array(
        'constraints' => array(
            new NotBlank(),
             new Length(array("min" => 1, "max" => 4)),
        ),
    ))
    ->add('lastName', 'text', array(
        'constraints' => array(
            new NotBlank(),
        ),
    ))
    ->add('gender', 'choice', array(
        'choices' => array('m' => 'Male', 'f' => 'Female'),
    ))
    ->add('newsletter', 'checkbox', array(
        'required' => false,
    ))
    ->getForm();

if (isset($_POST[$form->getName()])) {
    $form->bind($_POST[$form->getName()]);

    if ($form->isValid()) {
        var_dump('VALID', $form->getData());
        die;
    }
}

echo $twig->render('form.html.twig', array(
    'form' => $form->createView(),
));


?>

