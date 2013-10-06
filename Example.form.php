<?php
/*
  # ------------------------------------------------------------------------
  # SymfonyAsLib
  # ------------------------------------------------------------------------
  # Developer: Sofiane Haddag, sofiane.haddag@yahoo.fr
 */

require_once 'MyLib/init.php';

use Symfony\Component\Validator\Constraints\NotBlank ;
use Symfony\Component\Validator\Constraints\Length ;

//----------------------------------------------

//Twig
$setupSymfony = new setupSymfony($viewDir = "views");
$twig = $setupSymfony->twig();

$formFactory = $setupSymfony->getFormFactory($twig) ;

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

echo $twig->render('Example.form.html.twig', array(
    'form' => $form->createView(),
));


?>

