<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TechnischeAbsenderinformation StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class TechnischeAbsenderinformation extends AbstractStructBase
{
    /**
     * The Kommunikationspartnerkennung
     * @var string|null
     */
    public ?string $Kommunikationspartnerkennung = null;
    /**
     * The Softwareversion
     * @var string|null
     */
    public ?string $Softwareversion = null;
    /**
     * The ZeitpunktNachrichtengenerierung
     * @var string|null
     */
    public ?string $ZeitpunktNachrichtengenerierung = null;
    /**
     * Constructor method for TechnischeAbsenderinformation
     * @uses TechnischeAbsenderinformation::setKommunikationspartnerkennung()
     * @uses TechnischeAbsenderinformation::setSoftwareversion()
     * @uses TechnischeAbsenderinformation::setZeitpunktNachrichtengenerierung()
     * @param string $kommunikationspartnerkennung
     * @param string $softwareversion
     * @param string $zeitpunktNachrichtengenerierung
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
     * @return string|null
     */
    public function getKommunikationspartnerkennung(): ?string
    {
        return $this->Kommunikationspartnerkennung;
    }
    /**
     * Set Kommunikationspartnerkennung value
     * @param string $kommunikationspartnerkennung
     * @return \THAG\XKfz\StructType\TechnischeAbsenderinformation
     */
    public function setKommunikationspartnerkennung(?string $kommunikationspartnerkennung = null): self
    {
        $this->Kommunikationspartnerkennung = $kommunikationspartnerkennung;
        
        return $this;
    }
    /**
     * Get Softwareversion value
     * @return string|null
     */
    public function getSoftwareversion(): ?string
    {
        return $this->Softwareversion;
    }
    /**
     * Set Softwareversion value
     * @param string $softwareversion
     * @return \THAG\XKfz\StructType\TechnischeAbsenderinformation
     */
    public function setSoftwareversion(?string $softwareversion = null): self
    {
        $this->Softwareversion = $softwareversion;
        
        return $this;
    }
    /**
     * Get ZeitpunktNachrichtengenerierung value
     * @return string|null
     */
    public function getZeitpunktNachrichtengenerierung(): ?string
    {
        return $this->ZeitpunktNachrichtengenerierung;
    }
    /**
     * Set ZeitpunktNachrichtengenerierung value
     * @param string $zeitpunktNachrichtengenerierung
     * @return \THAG\XKfz\StructType\TechnischeAbsenderinformation
     */
    public function setZeitpunktNachrichtengenerierung(?string $zeitpunktNachrichtengenerierung = null): self
    {
        $this->ZeitpunktNachrichtengenerierung = $zeitpunktNachrichtengenerierung;
        
        return $this;
    }
}
