<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeKommunikationspartnerkennung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeKommunikationspartnerkennung extends AbstractStructBase
{
    /**
     * The Kommunikationspartnerkennung
     * @var string|null
     */
    public ?string $Kommunikationspartnerkennung = null;
    /**
     * Constructor method for ListeKommunikationspartnerkennung
     * @uses ListeKommunikationspartnerkennung::setKommunikationspartnerkennung()
     * @param string $kommunikationspartnerkennung
     */
    public function __construct(?string $kommunikationspartnerkennung = null)
    {
        $this
            ->setKommunikationspartnerkennung($kommunikationspartnerkennung);
    }
    /**
     * Get Kommunikationspartnerkennung value
     * @return string|null
     */
    public function getKommunikationspartnerkennung(): ?string
    {
        return $this->Kommunikationspartnerkennung;
    }
    /**
     * Set Kommunikationspartnerkennung value
     * @param string $kommunikationspartnerkennung
     * @return \THAG\XKfz\StructType\ListeKommunikationspartnerkennung
     */
    public function setKommunikationspartnerkennung(?string $kommunikationspartnerkennung = null): self
    {
        $this->Kommunikationspartnerkennung = $kommunikationspartnerkennung;
        
        return $this;
    }
}
