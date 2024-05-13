<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feldauspraegung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Feldauspraegung extends AbstractStructBase
{
    /**
     * The Wert
     * @var string|null
     */
    public ?string $Wert = null;
    /**
     * The Bedeutung
     * @var string|null
     */
    public ?string $Bedeutung = null;
    /**
     * The ListeVorgangsart
     * @var \THAG\XKfz\StructType\ListeVorgangsart|null
     */
    public ?\THAG\XKfz\StructType\ListeVorgangsart $ListeVorgangsart = null;
    /**
     * Constructor method for Feldauspraegung
     * @uses Feldauspraegung::setWert()
     * @uses Feldauspraegung::setBedeutung()
     * @uses Feldauspraegung::setListeVorgangsart()
     * @param string $wert
     * @param string $bedeutung
     * @param \THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart
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
     * @return string|null
     */
    public function getWert(): ?string
    {
        return $this->Wert;
    }
    /**
     * Set Wert value
     * @param string $wert
     * @return \THAG\XKfz\StructType\Feldauspraegung
     */
    public function setWert(?string $wert = null): self
    {
        $this->Wert = $wert;
        
        return $this;
    }
    /**
     * Get Bedeutung value
     * @return string|null
     */
    public function getBedeutung(): ?string
    {
        return $this->Bedeutung;
    }
    /**
     * Set Bedeutung value
     * @param string $bedeutung
     * @return \THAG\XKfz\StructType\Feldauspraegung
     */
    public function setBedeutung(?string $bedeutung = null): self
    {
        $this->Bedeutung = $bedeutung;
        
        return $this;
    }
    /**
     * Get ListeVorgangsart value
     * @return \THAG\XKfz\StructType\ListeVorgangsart|null
     */
    public function getListeVorgangsart(): ?\THAG\XKfz\StructType\ListeVorgangsart
    {
        return $this->ListeVorgangsart;
    }
    /**
     * Set ListeVorgangsart value
     * @param \THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart
     * @return \THAG\XKfz\StructType\Feldauspraegung
     */
    public function setListeVorgangsart(?\THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart = null): self
    {
        $this->ListeVorgangsart = $listeVorgangsart;
        
        return $this;
    }
}
