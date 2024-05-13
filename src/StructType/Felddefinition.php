<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Felddefinition StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Felddefinition extends AbstractStructBase
{
    /**
     * The Feldbezeichnung
     */
    public ?string $Feldbezeichnung = null;

    /**
     * The FeldFormatbeschreibung
     */
    public ?string $FeldFormatbeschreibung = null;

    /**
     * Constructor method for Felddefinition
     *
     * @uses Felddefinition::setFeldbezeichnung()
     * @uses Felddefinition::setFeldFormatbeschreibung()
     */
    public function __construct(?string $feldbezeichnung = null, ?string $feldFormatbeschreibung = null)
    {
        $this
            ->setFeldbezeichnung($feldbezeichnung)
            ->setFeldFormatbeschreibung($feldFormatbeschreibung);
    }

    /**
     * Get Feldbezeichnung value
     */
    public function getFeldbezeichnung(): ?string
    {
        return $this->Feldbezeichnung;
    }

    /**
     * Set Feldbezeichnung value
     */
    public function setFeldbezeichnung(?string $feldbezeichnung = null): self
    {
        $this->Feldbezeichnung = $feldbezeichnung;

        return $this;
    }

    /**
     * Get FeldFormatbeschreibung value
     */
    public function getFeldFormatbeschreibung(): ?string
    {
        return $this->FeldFormatbeschreibung;
    }

    /**
     * Set FeldFormatbeschreibung value
     */
    public function setFeldFormatbeschreibung(?string $feldFormatbeschreibung = null): self
    {
        $this->FeldFormatbeschreibung = $feldFormatbeschreibung;

        return $this;
    }
}
