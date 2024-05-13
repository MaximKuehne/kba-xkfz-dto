<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuchvermerksdatenZCTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SuchvermerksdatenZCTyp extends AbstractStructBase
{
    /**
     * The AnzahlSuchvermerke
     * @var int|null
     */
    public ?int $AnzahlSuchvermerke = null;
    /**
     * The Suchvermerke
     * @var \THAG\XKfz\StructType\SuchvermerkeZCTyp|null
     */
    public ?\THAG\XKfz\StructType\SuchvermerkeZCTyp $Suchvermerke = null;
    /**
     * Constructor method for SuchvermerksdatenZCTyp
     * @uses SuchvermerksdatenZCTyp::setAnzahlSuchvermerke()
     * @uses SuchvermerksdatenZCTyp::setSuchvermerke()
     * @param int $anzahlSuchvermerke
     * @param \THAG\XKfz\StructType\SuchvermerkeZCTyp $suchvermerke
     */
    public function __construct(?int $anzahlSuchvermerke = null, ?\THAG\XKfz\StructType\SuchvermerkeZCTyp $suchvermerke = null)
    {
        $this
            ->setAnzahlSuchvermerke($anzahlSuchvermerke)
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
     * @return \THAG\XKfz\StructType\SuchvermerksdatenZCTyp
     */
    public function setAnzahlSuchvermerke(?int $anzahlSuchvermerke = null): self
    {
        $this->AnzahlSuchvermerke = $anzahlSuchvermerke;
        
        return $this;
    }
    /**
     * Get Suchvermerke value
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp|null
     */
    public function getSuchvermerke(): ?\THAG\XKfz\StructType\SuchvermerkeZCTyp
    {
        return $this->Suchvermerke;
    }
    /**
     * Set Suchvermerke value
     * @param \THAG\XKfz\StructType\SuchvermerkeZCTyp $suchvermerke
     * @return \THAG\XKfz\StructType\SuchvermerksdatenZCTyp
     */
    public function setSuchvermerke(?\THAG\XKfz\StructType\SuchvermerkeZCTyp $suchvermerke = null): self
    {
        $this->Suchvermerke = $suchvermerke;
        
        return $this;
    }
}
