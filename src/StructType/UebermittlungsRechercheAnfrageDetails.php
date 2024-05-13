<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UebermittlungsRechercheAnfrageDetails StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UebermittlungsRechercheAnfrageDetails extends AbstractStructBase
{
    /**
     * The Vorgangsnummer
     * @var string|null
     */
    public ?string $Vorgangsnummer = null;
    /**
     * The UebermittlungsVerarbeitungshistorieVon
     * @var string|null
     */
    public ?string $UebermittlungsVerarbeitungshistorieVon = null;
    /**
     * The UebermittlungsVerarbeitungshistorieBis
     * @var string|null
     */
    public ?string $UebermittlungsVerarbeitungshistorieBis = null;
    /**
     * Constructor method for UebermittlungsRechercheAnfrageDetails
     * @uses UebermittlungsRechercheAnfrageDetails::setVorgangsnummer()
     * @uses UebermittlungsRechercheAnfrageDetails::setUebermittlungsVerarbeitungshistorieVon()
     * @uses UebermittlungsRechercheAnfrageDetails::setUebermittlungsVerarbeitungshistorieBis()
     * @param string $vorgangsnummer
     * @param string $uebermittlungsVerarbeitungshistorieVon
     * @param string $uebermittlungsVerarbeitungshistorieBis
     */
    public function __construct(?string $vorgangsnummer = null, ?string $uebermittlungsVerarbeitungshistorieVon = null, ?string $uebermittlungsVerarbeitungshistorieBis = null)
    {
        $this
            ->setVorgangsnummer($vorgangsnummer)
            ->setUebermittlungsVerarbeitungshistorieVon($uebermittlungsVerarbeitungshistorieVon)
            ->setUebermittlungsVerarbeitungshistorieBis($uebermittlungsVerarbeitungshistorieBis);
    }
    /**
     * Get Vorgangsnummer value
     * @return string|null
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }
    /**
     * Set Vorgangsnummer value
     * @param string $vorgangsnummer
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;
        
        return $this;
    }
    /**
     * Get UebermittlungsVerarbeitungshistorieVon value
     * @return string|null
     */
    public function getUebermittlungsVerarbeitungshistorieVon(): ?string
    {
        return $this->UebermittlungsVerarbeitungshistorieVon;
    }
    /**
     * Set UebermittlungsVerarbeitungshistorieVon value
     * @param string $uebermittlungsVerarbeitungshistorieVon
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails
     */
    public function setUebermittlungsVerarbeitungshistorieVon(?string $uebermittlungsVerarbeitungshistorieVon = null): self
    {
        $this->UebermittlungsVerarbeitungshistorieVon = $uebermittlungsVerarbeitungshistorieVon;
        
        return $this;
    }
    /**
     * Get UebermittlungsVerarbeitungshistorieBis value
     * @return string|null
     */
    public function getUebermittlungsVerarbeitungshistorieBis(): ?string
    {
        return $this->UebermittlungsVerarbeitungshistorieBis;
    }
    /**
     * Set UebermittlungsVerarbeitungshistorieBis value
     * @param string $uebermittlungsVerarbeitungshistorieBis
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails
     */
    public function setUebermittlungsVerarbeitungshistorieBis(?string $uebermittlungsVerarbeitungshistorieBis = null): self
    {
        $this->UebermittlungsVerarbeitungshistorieBis = $uebermittlungsVerarbeitungshistorieBis;
        
        return $this;
    }
}
