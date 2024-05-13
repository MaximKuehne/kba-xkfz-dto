<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeLogistikArtikel StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeLogistikArtikel extends AbstractStructBase
{
    /**
     * The LogistikArtikel
     * @var \THAG\XKfz\StructType\LogistikArtikel|null
     */
    public ?\THAG\XKfz\StructType\LogistikArtikel $LogistikArtikel = null;
    /**
     * Constructor method for ListeLogistikArtikel
     * @uses ListeLogistikArtikel::setLogistikArtikel()
     * @param \THAG\XKfz\StructType\LogistikArtikel $logistikArtikel
     */
    public function __construct(?\THAG\XKfz\StructType\LogistikArtikel $logistikArtikel = null)
    {
        $this
            ->setLogistikArtikel($logistikArtikel);
    }
    /**
     * Get LogistikArtikel value
     * @return \THAG\XKfz\StructType\LogistikArtikel|null
     */
    public function getLogistikArtikel(): ?\THAG\XKfz\StructType\LogistikArtikel
    {
        return $this->LogistikArtikel;
    }
    /**
     * Set LogistikArtikel value
     * @param \THAG\XKfz\StructType\LogistikArtikel $logistikArtikel
     * @return \THAG\XKfz\StructType\ListeLogistikArtikel
     */
    public function setLogistikArtikel(?\THAG\XKfz\StructType\LogistikArtikel $logistikArtikel = null): self
    {
        $this->LogistikArtikel = $logistikArtikel;
        
        return $this;
    }
}
