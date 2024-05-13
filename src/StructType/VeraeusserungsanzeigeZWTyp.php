<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeraeusserungsanzeigeZWTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VeraeusserungsanzeigeZWTyp extends AbstractStructBase
{
    /**
     * The ZeitpunktVeraeusserungsanzeige
     * @var string|null
     */
    public ?string $ZeitpunktVeraeusserungsanzeige = null;
    /**
     * The DatumEingangVeraeusserungsanzeige
     * @var string|null
     */
    public ?string $DatumEingangVeraeusserungsanzeige = null;
    /**
     * The VollstaendigkeitVeraeusserungsanzeige
     * @var string|null
     */
    public ?string $VollstaendigkeitVeraeusserungsanzeige = null;
    /**
     * The Person
     * @var \THAG\XKfz\StructType\Person|null
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;
    /**
     * The Anschrift
     * @var \THAG\XKfz\StructType\Anschrift|null
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;
    /**
     * The TextErwerberdaten
     * @var string|null
     */
    public ?string $TextErwerberdaten = null;
    /**
     * Constructor method for VeraeusserungsanzeigeZWTyp
     * @uses VeraeusserungsanzeigeZWTyp::setZeitpunktVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZWTyp::setDatumEingangVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZWTyp::setVollstaendigkeitVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZWTyp::setPerson()
     * @uses VeraeusserungsanzeigeZWTyp::setAnschrift()
     * @uses VeraeusserungsanzeigeZWTyp::setTextErwerberdaten()
     * @param string $zeitpunktVeraeusserungsanzeige
     * @param string $datumEingangVeraeusserungsanzeige
     * @param string $vollstaendigkeitVeraeusserungsanzeige
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param string $textErwerberdaten
     */
    public function __construct(?string $zeitpunktVeraeusserungsanzeige = null, ?string $datumEingangVeraeusserungsanzeige = null, ?string $vollstaendigkeitVeraeusserungsanzeige = null, ?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?string $textErwerberdaten = null)
    {
        $this
            ->setZeitpunktVeraeusserungsanzeige($zeitpunktVeraeusserungsanzeige)
            ->setDatumEingangVeraeusserungsanzeige($datumEingangVeraeusserungsanzeige)
            ->setVollstaendigkeitVeraeusserungsanzeige($vollstaendigkeitVeraeusserungsanzeige)
            ->setPerson($person)
            ->setAnschrift($anschrift)
            ->setTextErwerberdaten($textErwerberdaten);
    }
    /**
     * Get ZeitpunktVeraeusserungsanzeige value
     * @return string|null
     */
    public function getZeitpunktVeraeusserungsanzeige(): ?string
    {
        return $this->ZeitpunktVeraeusserungsanzeige;
    }
    /**
     * Set ZeitpunktVeraeusserungsanzeige value
     * @param string $zeitpunktVeraeusserungsanzeige
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp
     */
    public function setZeitpunktVeraeusserungsanzeige(?string $zeitpunktVeraeusserungsanzeige = null): self
    {
        $this->ZeitpunktVeraeusserungsanzeige = $zeitpunktVeraeusserungsanzeige;
        
        return $this;
    }
    /**
     * Get DatumEingangVeraeusserungsanzeige value
     * @return string|null
     */
    public function getDatumEingangVeraeusserungsanzeige(): ?string
    {
        return $this->DatumEingangVeraeusserungsanzeige;
    }
    /**
     * Set DatumEingangVeraeusserungsanzeige value
     * @param string $datumEingangVeraeusserungsanzeige
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp
     */
    public function setDatumEingangVeraeusserungsanzeige(?string $datumEingangVeraeusserungsanzeige = null): self
    {
        $this->DatumEingangVeraeusserungsanzeige = $datumEingangVeraeusserungsanzeige;
        
        return $this;
    }
    /**
     * Get VollstaendigkeitVeraeusserungsanzeige value
     * @return string|null
     */
    public function getVollstaendigkeitVeraeusserungsanzeige(): ?string
    {
        return $this->VollstaendigkeitVeraeusserungsanzeige;
    }
    /**
     * Set VollstaendigkeitVeraeusserungsanzeige value
     * @param string $vollstaendigkeitVeraeusserungsanzeige
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp
     */
    public function setVollstaendigkeitVeraeusserungsanzeige(?string $vollstaendigkeitVeraeusserungsanzeige = null): self
    {
        $this->VollstaendigkeitVeraeusserungsanzeige = $vollstaendigkeitVeraeusserungsanzeige;
        
        return $this;
    }
    /**
     * Get Person value
     * @return \THAG\XKfz\StructType\Person|null
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Person
    {
        return $this->Person;
    }
    /**
     * Set Person value
     * @param \THAG\XKfz\StructType\Person $person
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp
     */
    public function setPerson(?\THAG\XKfz\StructType\Person $person = null): self
    {
        $this->Person = $person;
        
        return $this;
    }
    /**
     * Get Anschrift value
     * @return \THAG\XKfz\StructType\Anschrift|null
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }
    /**
     * Set Anschrift value
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
    /**
     * Get TextErwerberdaten value
     * @return string|null
     */
    public function getTextErwerberdaten(): ?string
    {
        return $this->TextErwerberdaten;
    }
    /**
     * Set TextErwerberdaten value
     * @param string $textErwerberdaten
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp
     */
    public function setTextErwerberdaten(?string $textErwerberdaten = null): self
    {
        $this->TextErwerberdaten = $textErwerberdaten;
        
        return $this;
    }
}
