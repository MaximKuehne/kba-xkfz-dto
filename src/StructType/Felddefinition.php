<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Felddefinition StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Felddefinition extends AbstractStructBase
{
    /**
     * The Feldbezeichnung
     * @var string|null
     */
    public ?string $Feldbezeichnung = null;
    /**
     * The FeldFormatbeschreibung
     * @var string|null
     */
    public ?string $FeldFormatbeschreibung = null;
    /**
     * Constructor method for Felddefinition
     * @uses Felddefinition::setFeldbezeichnung()
     * @uses Felddefinition::setFeldFormatbeschreibung()
     * @param string $feldbezeichnung
     * @param string $feldFormatbeschreibung
     */
    public function __construct(?string $feldbezeichnung = null, ?string $feldFormatbeschreibung = null)
    {
        $this
            ->setFeldbezeichnung($feldbezeichnung)
            ->setFeldFormatbeschreibung($feldFormatbeschreibung);
    }
    /**
     * Get Feldbezeichnung value
     * @return string|null
     */
    public function getFeldbezeichnung(): ?string
    {
        return $this->Feldbezeichnung;
    }
    /**
     * Set Feldbezeichnung value
     * @param string $feldbezeichnung
     * @return \THAG\XKfz\StructType\Felddefinition
     */
    public function setFeldbezeichnung(?string $feldbezeichnung = null): self
    {
        $this->Feldbezeichnung = $feldbezeichnung;
        
        return $this;
    }
    /**
     * Get FeldFormatbeschreibung value
     * @return string|null
     */
    public function getFeldFormatbeschreibung(): ?string
    {
        return $this->FeldFormatbeschreibung;
    }
    /**
     * Set FeldFormatbeschreibung value
     * @param string $feldFormatbeschreibung
     * @return \THAG\XKfz\StructType\Felddefinition
     */
    public function setFeldFormatbeschreibung(?string $feldFormatbeschreibung = null): self
    {
        $this->FeldFormatbeschreibung = $feldFormatbeschreibung;
        
        return $this;
    }
}
