<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeKommunikationspartner StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeKommunikationspartner extends AbstractStructBase
{
    /**
     * The Kommunikationspartner
     */
    public ?\THAG\XKfz\StructType\Kommunikationspartner $Kommunikationspartner = null;

    /**
     * Constructor method for ListeKommunikationspartner
     *
     * @uses ListeKommunikationspartner::setKommunikationspartner()
     */
    public function __construct(?\THAG\XKfz\StructType\Kommunikationspartner $kommunikationspartner = null)
    {
        $this
            ->setKommunikationspartner($kommunikationspartner);
    }

    /**
     * Get Kommunikationspartner value
     */
    public function getKommunikationspartner(): ?\THAG\XKfz\StructType\Kommunikationspartner
    {
        return $this->Kommunikationspartner;
    }

    /**
     * Set Kommunikationspartner value
     */
    public function setKommunikationspartner(?\THAG\XKfz\StructType\Kommunikationspartner $kommunikationspartner = null): self
    {
        $this->Kommunikationspartner = $kommunikationspartner;

        return $this;
    }
}
