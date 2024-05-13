<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVerarbeitungsschritt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVerarbeitungsschritt extends AbstractStructBase
{
    /**
     * The Verarbeitungsschritt
     * @var \THAG\XKfz\StructType\Verarbeitungsschritt|null
     */
    public ?\THAG\XKfz\StructType\Verarbeitungsschritt $Verarbeitungsschritt = null;
    /**
     * Constructor method for ListeVerarbeitungsschritt
     * @uses ListeVerarbeitungsschritt::setVerarbeitungsschritt()
     * @param \THAG\XKfz\StructType\Verarbeitungsschritt $verarbeitungsschritt
     */
    public function __construct(?\THAG\XKfz\StructType\Verarbeitungsschritt $verarbeitungsschritt = null)
    {
        $this
            ->setVerarbeitungsschritt($verarbeitungsschritt);
    }
    /**
     * Get Verarbeitungsschritt value
     * @return \THAG\XKfz\StructType\Verarbeitungsschritt|null
     */
    public function getVerarbeitungsschritt(): ?\THAG\XKfz\StructType\Verarbeitungsschritt
    {
        return $this->Verarbeitungsschritt;
    }
    /**
     * Set Verarbeitungsschritt value
     * @param \THAG\XKfz\StructType\Verarbeitungsschritt $verarbeitungsschritt
     * @return \THAG\XKfz\StructType\ListeVerarbeitungsschritt
     */
    public function setVerarbeitungsschritt(?\THAG\XKfz\StructType\Verarbeitungsschritt $verarbeitungsschritt = null): self
    {
        $this->Verarbeitungsschritt = $verarbeitungsschritt;
        
        return $this;
    }
}
