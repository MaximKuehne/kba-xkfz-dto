<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'C:\laragon\www\kba-app-11\packages\kba-webservice-package\src\KBA\Schema\gks\gks.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:~5.0 to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'C:\laragon\www\kba-app-11\packages\kba-webservice-package\src\KBA\Schema\gks\gks.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \THAG\XKfz\ClassMap::get(),
];
/**
 * Samples for Xkfz ServiceType
 */
$xkfz = new \THAG\XKfz\ServiceType\Xkfz($options);
/**
 * Sample call for xkfzVerarbeitung operation/method
 */
if ($xkfz->xkfzVerarbeitung(new \THAG\XKfz\StructType\XkfzNachrichten()) !== false) {
    print_r($xkfz->getResult());
} else {
    print_r($xkfz->getLastError());
}
