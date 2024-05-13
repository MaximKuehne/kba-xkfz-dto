<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeraeusserungsanzeigeZWTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VeraeusserungsanzeigeZWTyp extends AbstractStructBase
{
    /**
     * The ZeitpunktVeraeusserungsanzeige
     */
    public ?string $ZeitpunktVeraeusserungsanzeige = null;

    /**
     * The DatumEingangVeraeusserungsanzeige
     */
    public ?string $DatumEingangVeraeusserungsanzeige = null;

    /**
     * The VollstaendigkeitVeraeusserungsanzeige
     */
    public ?string $VollstaendigkeitVeraeusserungsanzeige = null;

    /**
     * The Person
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * The TextErwerberdaten
     */
    public ?string $TextErwerberdaten = null;

    /**
     * Constructor method for VeraeusserungsanzeigeZWTyp
     *
     * @uses VeraeusserungsanzeigeZWTyp::setZeitpunktVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZWTyp::setDatumEingangVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZWTyp::setVollstaendigkeitVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZWTyp::setPerson()
     * @uses VeraeusserungsanzeigeZWTyp::setAnschrift()
     * @uses VeraeusserungsanzeigeZWTyp::setTextErwerberdaten()
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
     */
    public function getZeitpunktVeraeusserungsanzeige(): ?string
    {
        return $this->ZeitpunktVeraeusserungsanzeige;
    }

    /**
     * Set ZeitpunktVeraeusserungsanzeige value
     */
    public function setZeitpunktVeraeusserungsanzeige(?string $zeitpunktVeraeusserungsanzeige = null): self
    {
        $this->ZeitpunktVeraeusserungsanzeige = $zeitpunktVeraeusserungsanzeige;

        return $this;
    }

    /**
     * Get DatumEingangVeraeusserungsanzeige value
     */
    public function getDatumEingangVeraeusserungsanzeige(): ?string
    {
        return $this->DatumEingangVeraeusserungsanzeige;
    }

    /**
     * Set DatumEingangVeraeusserungsanzeige value
     */
    public function setDatumEingangVeraeusserungsanzeige(?string $datumEingangVeraeusserungsanzeige = null): self
    {
        $this->DatumEingangVeraeusserungsanzeige = $datumEingangVeraeusserungsanzeige;

        return $this;
    }

    /**
     * Get VollstaendigkeitVeraeusserungsanzeige value
     */
    public function getVollstaendigkeitVeraeusserungsanzeige(): ?string
    {
        return $this->VollstaendigkeitVeraeusserungsanzeige;
    }

    /**
     * Set VollstaendigkeitVeraeusserungsanzeige value
     */
    public function setVollstaendigkeitVeraeusserungsanzeige(?string $vollstaendigkeitVeraeusserungsanzeige = null): self
    {
        $this->VollstaendigkeitVeraeusserungsanzeige = $vollstaendigkeitVeraeusserungsanzeige;

        return $this;
    }

    /**
     * Get Person value
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Person
    {
        return $this->Person;
    }

    /**
     * Set Person value
     */
    public function setPerson(?\THAG\XKfz\StructType\Person $person = null): self
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * Get Anschrift value
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }

    /**
     * Set Anschrift value
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;

        return $this;
    }

    /**
     * Get TextErwerberdaten value
     */
    public function getTextErwerberdaten(): ?string
    {
        return $this->TextErwerberdaten;
    }

    /**
     * Set TextErwerberdaten value
     */
    public function setTextErwerberdaten(?string $textErwerberdaten = null): self
    {
        $this->TextErwerberdaten = $textErwerberdaten;

        return $this;
    }
}
