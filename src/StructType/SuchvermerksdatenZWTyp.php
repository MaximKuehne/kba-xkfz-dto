<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuchvermerksdatenZWTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SuchvermerksdatenZWTyp extends AbstractStructBase
{
    /**
     * The AnzahlSuchvermerke
     * @var int|null
     */
    public ?int $AnzahlSuchvermerke = null;
    /**
     * The SISVermerke
     * @var \THAG\XKfz\StructType\SISVermerke|null
     */
    public ?\THAG\XKfz\StructType\SISVermerke $SISVermerke = null;
    /**
     * The Suchvermerke
     * @var \THAG\XKfz\StructType\SuchvermerkeZWTyp|null
     */
    public ?\THAG\XKfz\StructType\SuchvermerkeZWTyp $Suchvermerke = null;
    /**
     * Constructor method for SuchvermerksdatenZWTyp
     * @uses SuchvermerksdatenZWTyp::setAnzahlSuchvermerke()
     * @uses SuchvermerksdatenZWTyp::setSISVermerke()
     * @uses SuchvermerksdatenZWTyp::setSuchvermerke()
     * @param int $anzahlSuchvermerke
     * @param \THAG\XKfz\StructType\SISVermerke $sISVermerke
     * @param \THAG\XKfz\StructType\SuchvermerkeZWTyp $suchvermerke
     */
    public function __construct(?int $anzahlSuchvermerke = null, ?\THAG\XKfz\StructType\SISVermerke $sISVermerke = null, ?\THAG\XKfz\StructType\SuchvermerkeZWTyp $suchvermerke = null)
    {
        $this
            ->setAnzahlSuchvermerke($anzahlSuchvermerke)
            ->setSISVermerke($sISVermerke)
            ->setSuchvermerke($suchvermerke);
    }
    /**
     * Get AnzahlSuchvermerke value
     * @return int|null
     */
    public function getAnzahlSuchvermerke(): ?int
    {
        return $this->AnzahlSuchvermerke;
    }
    /**
     * Set AnzahlSuchvermerke value
     * @param int $anzahlSuchvermerke
     * @return \THAG\XKfz\StructType\SuchvermerksdatenZWTyp
     */
    public function setAnzahlSuchvermerke(?int $anzahlSuchvermerke = null): self
    {
        $this->AnzahlSuchvermerke = $anzahlSuchvermerke;
        
        return $this;
    }
    /**
     * Get SISVermerke value
     * @return \THAG\XKfz\StructType\SISVermerke|null
     */
    public function getSISVermerke(): ?\THAG\XKfz\StructType\SISVermerke
    {
        return $this->SISVermerke;
    }
    /**
     * Set SISVermerke value
     * @param \THAG\XKfz\StructType\SISVermerke $sISVermerke
     * @return \THAG\XKfz\StructType\SuchvermerksdatenZWTyp
     */
    public function setSISVermerke(?\THAG\XKfz\StructType\SISVermerke $sISVermerke = null): self
    {
        $this->SISVermerke = $sISVermerke;
        
        return $this;
    }
    /**
     * Get Suchvermerke value
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp|null
     */
    public function getSuchvermerke(): ?\THAG\XKfz\StructType\SuchvermerkeZWTyp
    {
        return $this->Suchvermerke;
    }
    /**
     * Set Suchvermerke value
     * @param \THAG\XKfz\StructType\SuchvermerkeZWTyp $suchvermerke
     * @return \THAG\XKfz\StructType\SuchvermerksdatenZWTyp
     */
    public function setSuchvermerke(?\THAG\XKfz\StructType\SuchvermerkeZWTyp $suchvermerke = null): self
    {
        $this->Suchvermerke = $suchvermerke;
        
        return $this;
    }
}
