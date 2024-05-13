<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeLogistikArtikel StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeLogistikArtikel extends AbstractStructBase
{
    /**
     * The LogistikArtikel
     */
    public ?\THAG\XKfz\StructType\LogistikArtikel $LogistikArtikel = null;

    /**
     * Constructor method for ListeLogistikArtikel
     *
     * @uses ListeLogistikArtikel::setLogistikArtikel()
     */
    public function __construct(?\THAG\XKfz\StructType\LogistikArtikel $logistikArtikel = null)
    {
        $this
            ->setLogistikArtikel($logistikArtikel);
    }

    /**
     * Get LogistikArtikel value
     */
    public function getLogistikArtikel(): ?\THAG\XKfz\StructType\LogistikArtikel
    {
        return $this->LogistikArtikel;
    }

    /**
     * Set LogistikArtikel value
     */
    public function setLogistikArtikel(?\THAG\XKfz\StructType\LogistikArtikel $logistikArtikel = null): self
    {
        $this->LogistikArtikel = $logistikArtikel;

        return $this;
    }
}
