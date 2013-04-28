<?php
/*
  # ------------------------------------------------------------------------
  # SymfonyAsLib
  # ------------------------------------------------------------------------
  # Developer : Sofiane Haddag, sofiane.haddag@yahoo.fr
 */


use Symfony\Component\Validator\Validation;
use Symfony\Component\ClassLoader\UniversalClassLoader;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Extension\Csrf\CsrfExtension;
use Symfony\Component\Form\Extension\Csrf\CsrfProvider\DefaultCsrfProvider;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\XliffFileLoader;
use Symfony\Bridge\Twig\Extension\TranslationExtension;
use Symfony\Bridge\Twig\Extension\FormExtension;
use Symfony\Bridge\Twig\Form\TwigRenderer;
use Symfony\Component\Yaml\Yaml;

class setupSymfony {

   private $viewDir, $formEngine, $csrfProvider;
   private $translator;
   private $validator;

   /**
    * __construct
    *
    */
   public function __construct($viewsDir) {
      $this->viewDir = $viewsDir;
      $this->loader();
   }

   /**
    * loader
    *
    * @return   void
    */
   public function loader(array $registerNamespacesAdd = array()) {
      $registerNamespaces = array_merge(array(
          'Symfony' => VENDOR_DIR . '/symfony/symfony/src',
              ), $registerNamespacesAdd);
      $loader = new UniversalClassLoader();
      $loader->registerPrefixFallback(VENDOR_TWIG_LIB);
      $loader->registerPrefixFallback("MyLib");
      $loader->registerNamespaces($registerNamespaces);

      $loader->register();
     
   }

   /**
    * getFormFactory
    *
    * @param    Twig_Environment    $twig
    * @return   Forms  $formFactory 
    */
   public function getFormFactory(Twig_Environment $twig) {

      //Validator
      $this->setValidator($this->createValidator());

      //TwigRendererEngine
      $formEngine = new TwigRendererEngine(array(DEFAULT_FORM_THEME));
      $formEngine->setEnvironment($twig);
      $twig->addExtension(new TranslationExtension($this->getTranslator()));
      $twig->addExtension(new FormExtension(new TwigRenderer($formEngine, $this->getCsrfProvider())));

      // FormFactory
      $formFactory = Forms::createFormFactoryBuilder()
              ->addExtension(new CsrfExtension($this->getCsrfProvider()))
              ->addExtension(new ValidatorExtension($this->getValidator()))
              ->getFormFactory();
      return $formFactory;
   }

   /**
    * formBuilderSetup
    *
    * @return   Twig_Environment  $twig
    */
   public function twig(array $Twig_Loader_FilesystemAdd = array(), $formTheme = DEFAULT_FORM_THEME) {

      //Csrf
      $this->setCsrfProvider(new DefaultCsrfProvider(CSRF_SECRET));
      $this->setTranslator($this->formTranslator());

      // Twig
      $Twig_Loader_Filesystem = array_merge(array(
          $this->viewDir,
          VENDOR_TWIG_BRIDGE_DIR . '/Resources/views/Form',
              ), $Twig_Loader_FilesystemAdd);
      $twig = new Twig_Environment(new Twig_Loader_Filesystem($Twig_Loader_Filesystem));

      $formEngine = new TwigRendererEngine(array($formTheme));
      $formEngine->setEnvironment($twig);
      $twig->addExtension(new TranslationExtension($this->getTranslator()));
      $twig->addExtension(new FormExtension(new TwigRenderer($formEngine, $this->getCsrfProvider())));
      return $twig;
   }

   /**
    * formTranslator
    *
    * @return   Translator  $translator 
    */
   public function formTranslator() {

// Set up the Translation component
      $translator = new Translator('en');
      $translator->addLoader('xlf', new XliffFileLoader());
      $translator->addResource('xlf', VENDOR_FORM_DIR . '/Resources/translations/validators.en.xlf', 'en', 'validators');
      $translator->addResource('xlf', VENDOR_VALIDATOR_DIR . '/Resources/translations/validators.en.xlf', 'en', 'validators');
      return $translator;
   }

   /**
    * Renders a template.
    *
    * @param Twig_Environment $twig   
    * @param string $name    The template name
    * @param array  $context An array of parameters to pass to the template
    *
    * @return string The rendered template
    */
   public function twigRender(Twig_Environment $twig, $name, array $contextAdd) {
      $context = array_merge(array(
                 'file' => $_SERVER['PHP_SELF'], //for example
                 //put your default objects or vars or constants
              ), $contextAdd);
      echo $twig->render($name, $context);
   }

   /**
    * createValidator
    *
    * @return Validation 
    */
   public function createValidator() {
      return Validation::createValidator();
   }

   //GETTER SETTER
   public function getValidator() {
      return $this->validator;
   }

   public function setValidator($validator) {
      $this->validator = $validator;
   }

   public function getTranslator() {
      return $this->translator;
   }

   public function setTranslator($translator) {
      $this->translator = $translator;
   }

   public function getViewDir() {
      return $this->viewDir;
   }

   public function setViewDir($viewDir) {
      $this->viewDir = $viewDir;
   }

   public function getFormEngine() {
      return $this->formEngine;
   }

   public function setFormEngine($formEngine) {
      $this->formEngine = $formEngine;
   }

   public function getCsrfProvider() {
      return $this->csrfProvider;
   }

   public function setCsrfProvider($csrfProvider) {
      $this->csrfProvider = $csrfProvider;
   }

}

?>