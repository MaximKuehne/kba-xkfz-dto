<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Kommunikationspartner StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Kommunikationspartner extends AbstractStructBase
{
    /**
     * The Kommunikationspartnertyp
     */
    public ?string $Kommunikationspartnertyp = null;

    /**
     * The GDVVermittlernummer
     */
    public ?string $GDVVermittlernummer = null;

    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The ZustaendigeBehoerdeKreisschluessel
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;

    /**
     * The ZustaendigeBehoerdeZusatzziffer
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;

    /**
     * Constructor method for Kommunikationspartner
     *
     * @uses Kommunikationspartner::setKommunikationspartnertyp()
     * @uses Kommunikationspartner::setGDVVermittlernummer()
     * @uses Kommunikationspartner::setVersicherungsunternehmensnummer()
     * @uses Kommunikationspartner::setZustaendigeBehoerdeKreisschluessel()
     * @uses Kommunikationspartner::setZustaendigeBehoerdeZusatzziffer()
     */
    public function __construct(?string $kommunikationspartnertyp = null, ?string $gDVVermittlernummer = null, ?string $versicherungsunternehmensnummer = null, ?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null)
    {
        $this
            ->setKommunikationspartnertyp($kommunikationspartnertyp)
            ->setGDVVermittlernummer($gDVVermittlernummer)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer);
    }

    /**
     * Get Kommunikationspartnertyp value
     */
    public function getKommunikationspartnertyp(): ?string
    {
        return $this->Kommunikationspartnertyp;
    }

    /**
     * Set Kommunikationspartnertyp value
     */
    public function setKommunikationspartnertyp(?string $kommunikationspartnertyp = null): self
    {
        $this->Kommunikationspartnertyp = $kommunikationspartnertyp;

        return $this;
    }

    /**
     * Get GDVVermittlernummer value
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }

    /**
     * Set GDVVermittlernummer value
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;

        return $this;
    }

    /**
     * Get Versicherungsunternehmensnummer value
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }

    /**
     * Set Versicherungsunternehmensnummer value
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }

    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }

    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;

        return $this;
    }
}
