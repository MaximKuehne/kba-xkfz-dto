<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuchvermerksdatenZWTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SuchvermerksdatenZWTyp extends AbstractStructBase
{
    /**
     * The AnzahlSuchvermerke
     */
    public ?int $AnzahlSuchvermerke = null;

    /**
     * The SISVermerke
     */
    public ?\THAG\XKfz\StructType\SISVermerke $SISVermerke = null;

    /**
     * The Suchvermerke
     */
    public ?\THAG\XKfz\StructType\SuchvermerkeZWTyp $Suchvermerke = null;

    /**
     * Constructor method for SuchvermerksdatenZWTyp
     *
     * @uses SuchvermerksdatenZWTyp::setAnzahlSuchvermerke()
     * @uses SuchvermerksdatenZWTyp::setSISVermerke()
     * @uses SuchvermerksdatenZWTyp::setSuchvermerke()
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
     */
    public function getAnzahlSuchvermerke(): ?int
    {
        return $this->AnzahlSuchvermerke;
    }

    /**
     * Set AnzahlSuchvermerke value
     */
    public function setAnzahlSuchvermerke(?int $anzahlSuchvermerke = null): self
    {
        $this->AnzahlSuchvermerke = $anzahlSuchvermerke;

        return $this;
    }

    /**
     * Get SISVermerke value
     */
    public function getSISVermerke(): ?\THAG\XKfz\StructType\SISVermerke
    {
        return $this->SISVermerke;
    }

    /**
     * Set SISVermerke value
     */
    public function setSISVermerke(?\THAG\XKfz\StructType\SISVermerke $sISVermerke = null): self
    {
        $this->SISVermerke = $sISVermerke;

        return $this;
    }

    /**
     * Get Suchvermerke value
     */
    public function getSuchvermerke(): ?\THAG\XKfz\StructType\SuchvermerkeZWTyp
    {
        return $this->Suchvermerke;
    }

    /**
     * Set Suchvermerke value
     */
    public function setSuchvermerke(?\THAG\XKfz\StructType\SuchvermerkeZWTyp $suchvermerke = null): self
    {
        $this->Suchvermerke = $suchvermerke;

        return $this;
    }
}
