<?php

require 'vendor/autoload.php';

use Symfony\Component\Form\Forms;
use Symfony\Bridge\Twig\Extension\FormExtension;
use Symfony\Bridge\Twig\Form\TwigRenderer;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;

var_dump($_REQUEST);

$defaultFormTheme = 'form_div_layout.html.twig';

$vendorDir = realpath(__DIR__ . '/vendor');

$vendorTwigBridgeDir = $vendorDir . '/symfony/twig-bridge/Symfony/Bridge/Twig';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/views');

$twig = new Twig_Environment(new Twig_Loader_Filesystem(array(
    __DIR__ . '/views',
    $vendorTwigBridgeDir . '/Resources/views/Form',
)));

$formEngine = new TwigRendererEngine(array($defaultFormTheme));
$formEngine->setEnvironment($twig);

$twig->addExtension(
    new FormExtension(new TwigRenderer($formEngine))
);

$formFactory = Forms::createFormFactoryBuilder()
    ->getFormFactory();

$form = $formFactory->createBuilder()
    ->add('task', 'text')
    ->add('dueDate', 'date')
    ->getForm();

echo $twig->render('index.html.twig', array(
    'form' => $form->createView(),
));
