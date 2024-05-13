<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeKommunikationspartnerkennung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeKommunikationspartnerkennung extends AbstractStructBase
{
    /**
     * The Kommunikationspartnerkennung
     */
    public ?string $Kommunikationspartnerkennung = null;

    /**
     * Constructor method for ListeKommunikationspartnerkennung
     *
     * @uses ListeKommunikationspartnerkennung::setKommunikationspartnerkennung()
     */
    public function __construct(?string $kommunikationspartnerkennung = null)
    {
        $this
            ->setKommunikationspartnerkennung($kommunikationspartnerkennung);
    }

    /**
     * Get Kommunikationspartnerkennung value
     */
    public function getKommunikationspartnerkennung(): ?string
    {
        return $this->Kommunikationspartnerkennung;
    }

    /**
     * Set Kommunikationspartnerkennung value
     */
    public function setKommunikationspartnerkennung(?string $kommunikationspartnerkennung = null): self
    {
        $this->Kommunikationspartnerkennung = $kommunikationspartnerkennung;

        return $this;
    }
}
