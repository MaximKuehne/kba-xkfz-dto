<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UebermittlungsRechercheAnfrageDetails StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UebermittlungsRechercheAnfrageDetails extends AbstractStructBase
{
    /**
     * The Vorgangsnummer
     */
    public ?string $Vorgangsnummer = null;

    /**
     * The UebermittlungsVerarbeitungshistorieVon
     */
    public ?string $UebermittlungsVerarbeitungshistorieVon = null;

    /**
     * The UebermittlungsVerarbeitungshistorieBis
     */
    public ?string $UebermittlungsVerarbeitungshistorieBis = null;

    /**
     * Constructor method for UebermittlungsRechercheAnfrageDetails
     *
     * @uses UebermittlungsRechercheAnfrageDetails::setVorgangsnummer()
     * @uses UebermittlungsRechercheAnfrageDetails::setUebermittlungsVerarbeitungshistorieVon()
     * @uses UebermittlungsRechercheAnfrageDetails::setUebermittlungsVerarbeitungshistorieBis()
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
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    /**
     * Set Vorgangsnummer value
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;

        return $this;
    }

    /**
     * Get UebermittlungsVerarbeitungshistorieVon value
     */
    public function getUebermittlungsVerarbeitungshistorieVon(): ?string
    {
        return $this->UebermittlungsVerarbeitungshistorieVon;
    }

    /**
     * Set UebermittlungsVerarbeitungshistorieVon value
     */
    public function setUebermittlungsVerarbeitungshistorieVon(?string $uebermittlungsVerarbeitungshistorieVon = null): self
    {
        $this->UebermittlungsVerarbeitungshistorieVon = $uebermittlungsVerarbeitungshistorieVon;

        return $this;
    }

    /**
     * Get UebermittlungsVerarbeitungshistorieBis value
     */
    public function getUebermittlungsVerarbeitungshistorieBis(): ?string
    {
        return $this->UebermittlungsVerarbeitungshistorieBis;
    }

    /**
     * Set UebermittlungsVerarbeitungshistorieBis value
     */
    public function setUebermittlungsVerarbeitungshistorieBis(?string $uebermittlungsVerarbeitungshistorieBis = null): self
    {
        $this->UebermittlungsVerarbeitungshistorieBis = $uebermittlungsVerarbeitungshistorieBis;

        return $this;
    }
}
