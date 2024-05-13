<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feldauspraegung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Feldauspraegung extends AbstractStructBase
{
    /**
     * The Wert
     */
    public ?string $Wert = null;

    /**
     * The Bedeutung
     */
    public ?string $Bedeutung = null;

    /**
     * The ListeVorgangsart
     */
    public ?\THAG\XKfz\StructType\ListeVorgangsart $ListeVorgangsart = null;

    /**
     * Constructor method for Feldauspraegung
     *
     * @uses Feldauspraegung::setWert()
     * @uses Feldauspraegung::setBedeutung()
     * @uses Feldauspraegung::setListeVorgangsart()
     */
    public function __construct(?string $wert = null, ?string $bedeutung = null, ?\THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart = null)
    {
        $this
            ->setWert($wert)
            ->setBedeutung($bedeutung)
            ->setListeVorgangsart($listeVorgangsart);
    }

    /**
     * Get Wert value
     */
    public function getWert(): ?string
    {
        return $this->Wert;
    }

    /**
     * Set Wert value
     */
    public function setWert(?string $wert = null): self
    {
        $this->Wert = $wert;

        return $this;
    }

    /**
     * Get Bedeutung value
     */
    public function getBedeutung(): ?string
    {
        return $this->Bedeutung;
    }

    /**
     * Set Bedeutung value
     */
    public function setBedeutung(?string $bedeutung = null): self
    {
        $this->Bedeutung = $bedeutung;

        return $this;
    }

    /**
     * Get ListeVorgangsart value
     */
    public function getListeVorgangsart(): ?\THAG\XKfz\StructType\ListeVorgangsart
    {
        return $this->ListeVorgangsart;
    }

    /**
     * Set ListeVorgangsart value
     */
    public function setListeVorgangsart(?\THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart = null): self
    {
        $this->ListeVorgangsart = $listeVorgangsart;

        return $this;
    }
}
