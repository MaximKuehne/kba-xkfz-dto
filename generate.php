#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

$version = '5.9';
$wsdl = 'C:\laragon\www\kba-app-11\packages\kba-webservice-package\src\KBA\Schema\gks\gks.wsdl';
$login = '';
$pass = '';

// Options definition: the configuration file parameter is optional
$options = \WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions::instance(/* '/path/file.yml' */);
$options
    //->setComposerName('thag/dto-schema-xkfz_'.$version)
    //->setValidation(false)
    //->setGenerateTutorialFile(false)
    ->setNamespaceDictatesDirectories(false)
//            ->setNamespace('THAG\\XKfz\\Dto')
    ->setStandalone(false)
    ->setValidation(false)
    ->setOrigin($wsdl)
//    ->setBasicLogin($login)
//    ->setBasicPassword($pass)
    ->setNamespace('THAG\\XKfz')
    ->setDestination('./');

// Generator instantiation
$generator = new \WsdlToPhp\PackageGenerator\Generator\Generator($options);

$generator->setOptionAddComments([
    'date' => date('Y-m-d'),
    'codeVersion' => $version,
]);

// Package generation
$generator->generatePackage();

print_r('ok');
