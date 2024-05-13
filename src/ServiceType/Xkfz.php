<?php

declare(strict_types=1);

namespace THAG\XKfz\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Xkfz ServiceType
 * @subpackage Services
 * @date 2024-05-13
 * @codeVersion 5.9
 */
class Xkfz extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named xkfzVerarbeitung
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \THAG\XKfz\StructType\XkfzNachrichten $xkfzNachrichten
     * @return \THAG\XKfz\StructType\XkfzNachrichten|bool
     */
    public function xkfzVerarbeitung(\THAG\XKfz\StructType\XkfzNachrichten $xkfzNachrichten)
    {
        try {
            $this->setResult($resultXkfzVerarbeitung = $this->getSoapClient()->__soapCall('xkfzVerarbeitung', [
                $xkfzNachrichten,
            ], [], [], $this->outputHeaders));
        
            return $resultXkfzVerarbeitung;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \THAG\XKfz\StructType\XkfzNachrichten
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
