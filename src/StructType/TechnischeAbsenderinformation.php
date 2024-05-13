<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TechnischeAbsenderinformation StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class TechnischeAbsenderinformation extends AbstractStructBase
{
    /**
     * The Kommunikationspartnerkennung
     */
    public ?string $Kommunikationspartnerkennung = null;

    /**
     * The Softwareversion
     */
    public ?string $Softwareversion = null;

    /**
     * The ZeitpunktNachrichtengenerierung
     */
    public ?string $ZeitpunktNachrichtengenerierung = null;

    /**
     * Constructor method for TechnischeAbsenderinformation
     *
     * @uses TechnischeAbsenderinformation::setKommunikationspartnerkennung()
     * @uses TechnischeAbsenderinformation::setSoftwareversion()
     * @uses TechnischeAbsenderinformation::setZeitpunktNachrichtengenerierung()
     */
    public function __construct(?string $kommunikationspartnerkennung = null, ?string $softwareversion = null, ?string $zeitpunktNachrichtengenerierung = null)
    {
        $this
            ->setKommunikationspartnerkennung($kommunikationspartnerkennung)
            ->setSoftwareversion($softwareversion)
            ->setZeitpunktNachrichtengenerierung($zeitpunktNachrichtengenerierung);
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

    /**
     * Get Softwareversion value
     */
    public function getSoftwareversion(): ?string
    {
        return $this->Softwareversion;
    }

    /**
     * Set Softwareversion value
     */
    public function setSoftwareversion(?string $softwareversion = null): self
    {
        $this->Softwareversion = $softwareversion;

        return $this;
    }

    /**
     * Get ZeitpunktNachrichtengenerierung value
     */
    public function getZeitpunktNachrichtengenerierung(): ?string
    {
        return $this->ZeitpunktNachrichtengenerierung;
    }

    /**
     * Set ZeitpunktNachrichtengenerierung value
     */
    public function setZeitpunktNachrichtengenerierung(?string $zeitpunktNachrichtengenerierung = null): self
    {
        $this->ZeitpunktNachrichtengenerierung = $zeitpunktNachrichtengenerierung;

        return $this;
    }
}
