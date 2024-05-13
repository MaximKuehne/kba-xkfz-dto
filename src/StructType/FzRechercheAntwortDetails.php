<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FzRechercheAntwortDetails StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FzRechercheAntwortDetails extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The KennzeichenZugehoerigesWechselkennzeichen
     */
    public ?string $KennzeichenZugehoerigesWechselkennzeichen = null;

    /**
     * The Fahrzeug
     */
    public ?\THAG\XKfz\StructType\Fahrzeug $Fahrzeug = null;

    /**
     * The Versicherung
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;

    /**
     * The Halter
     */
    public ?\THAG\XKfz\StructType\Halter $Halter = null;

    /**
     * The NeueVb
     */
    public ?\THAG\XKfz\StructType\NeueVb $NeueVb = null;

    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The ZustaendigeBehoerdeKreisschluessel
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;

    /**
     * The ZustaendigeBehoerdeZusatzziffer
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;

    /**
     * Constructor method for FzRechercheAntwortDetails
     *
     * @uses FzRechercheAntwortDetails::setKennzeichen()
     * @uses FzRechercheAntwortDetails::setKennzeichenZugehoerigesWechselkennzeichen()
     * @uses FzRechercheAntwortDetails::setFahrzeug()
     * @uses FzRechercheAntwortDetails::setVersicherung()
     * @uses FzRechercheAntwortDetails::setHalter()
     * @uses FzRechercheAntwortDetails::setNeueVb()
     * @uses FzRechercheAntwortDetails::setVersicherungsbestaetigungsnummer()
     * @uses FzRechercheAntwortDetails::setZustaendigeBehoerdeKreisschluessel()
     * @uses FzRechercheAntwortDetails::setZustaendigeBehoerdeZusatzziffer()
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?string $kennzeichenZugehoerigesWechselkennzeichen = null, ?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null, ?\THAG\XKfz\StructType\Versicherung $versicherung = null, ?\THAG\XKfz\StructType\Halter $halter = null, ?\THAG\XKfz\StructType\NeueVb $neueVb = null, ?string $versicherungsbestaetigungsnummer = null, ?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setKennzeichenZugehoerigesWechselkennzeichen($kennzeichenZugehoerigesWechselkennzeichen)
            ->setFahrzeug($fahrzeug)
            ->setVersicherung($versicherung)
            ->setHalter($halter)
            ->setNeueVb($neueVb)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer);
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get KennzeichenZugehoerigesWechselkennzeichen value
     */
    public function getKennzeichenZugehoerigesWechselkennzeichen(): ?string
    {
        return $this->KennzeichenZugehoerigesWechselkennzeichen;
    }

    /**
     * Set KennzeichenZugehoerigesWechselkennzeichen value
     */
    public function setKennzeichenZugehoerigesWechselkennzeichen(?string $kennzeichenZugehoerigesWechselkennzeichen = null): self
    {
        $this->KennzeichenZugehoerigesWechselkennzeichen = $kennzeichenZugehoerigesWechselkennzeichen;

        return $this;
    }

    /**
     * Get Fahrzeug value
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\Fahrzeug
    {
        return $this->Fahrzeug;
    }

    /**
     * Set Fahrzeug value
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;

        return $this;
    }

    /**
     * Get Versicherung value
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }

    /**
     * Set Versicherung value
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;

        return $this;
    }

    /**
     * Get Halter value
     */
    public function getHalter(): ?\THAG\XKfz\StructType\Halter
    {
        return $this->Halter;
    }

    /**
     * Set Halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\Halter $halter = null): self
    {
        $this->Halter = $halter;

        return $this;
    }

    /**
     * Get NeueVb value
     */
    public function getNeueVb(): ?\THAG\XKfz\StructType\NeueVb
    {
        return $this->NeueVb;
    }

    /**
     * Set NeueVb value
     */
    public function setNeueVb(?\THAG\XKfz\StructType\NeueVb $neueVb = null): self
    {
        $this->NeueVb = $neueVb;

        return $this;
    }

    /**
     * Get Versicherungsbestaetigungsnummer value
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }

    /**
     * Set Versicherungsbestaetigungsnummer value
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;

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
