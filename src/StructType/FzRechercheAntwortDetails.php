<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FzRechercheAntwortDetails StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FzRechercheAntwortDetails extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The KennzeichenZugehoerigesWechselkennzeichen
     * @var string|null
     */
    public ?string $KennzeichenZugehoerigesWechselkennzeichen = null;
    /**
     * The Fahrzeug
     * @var \THAG\XKfz\StructType\Fahrzeug|null
     */
    public ?\THAG\XKfz\StructType\Fahrzeug $Fahrzeug = null;
    /**
     * The Versicherung
     * @var \THAG\XKfz\StructType\Versicherung|null
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;
    /**
     * The Halter
     * @var \THAG\XKfz\StructType\Halter|null
     */
    public ?\THAG\XKfz\StructType\Halter $Halter = null;
    /**
     * The NeueVb
     * @var \THAG\XKfz\StructType\NeueVb|null
     */
    public ?\THAG\XKfz\StructType\NeueVb $NeueVb = null;
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The ZustaendigeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;
    /**
     * The ZustaendigeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;
    /**
     * Constructor method for FzRechercheAntwortDetails
     * @uses FzRechercheAntwortDetails::setKennzeichen()
     * @uses FzRechercheAntwortDetails::setKennzeichenZugehoerigesWechselkennzeichen()
     * @uses FzRechercheAntwortDetails::setFahrzeug()
     * @uses FzRechercheAntwortDetails::setVersicherung()
     * @uses FzRechercheAntwortDetails::setHalter()
     * @uses FzRechercheAntwortDetails::setNeueVb()
     * @uses FzRechercheAntwortDetails::setVersicherungsbestaetigungsnummer()
     * @uses FzRechercheAntwortDetails::setZustaendigeBehoerdeKreisschluessel()
     * @uses FzRechercheAntwortDetails::setZustaendigeBehoerdeZusatzziffer()
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param string $kennzeichenZugehoerigesWechselkennzeichen
     * @param \THAG\XKfz\StructType\Fahrzeug $fahrzeug
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @param \THAG\XKfz\StructType\Halter $halter
     * @param \THAG\XKfz\StructType\NeueVb $neueVb
     * @param string $versicherungsbestaetigungsnummer
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
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
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get KennzeichenZugehoerigesWechselkennzeichen value
     * @return string|null
     */
    public function getKennzeichenZugehoerigesWechselkennzeichen(): ?string
    {
        return $this->KennzeichenZugehoerigesWechselkennzeichen;
    }
    /**
     * Set KennzeichenZugehoerigesWechselkennzeichen value
     * @param string $kennzeichenZugehoerigesWechselkennzeichen
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails
     */
    public function setKennzeichenZugehoerigesWechselkennzeichen(?string $kennzeichenZugehoerigesWechselkennzeichen = null): self
    {
        $this->KennzeichenZugehoerigesWechselkennzeichen = $kennzeichenZugehoerigesWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get Fahrzeug value
     * @return \THAG\XKfz\StructType\Fahrzeug|null
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\Fahrzeug
    {
        return $this->Fahrzeug;
    }
    /**
     * Set Fahrzeug value
     * @param \THAG\XKfz\StructType\Fahrzeug $fahrzeug
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;
        
        return $this;
    }
    /**
     * Get Versicherung value
     * @return \THAG\XKfz\StructType\Versicherung|null
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }
    /**
     * Set Versicherung value
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;
        
        return $this;
    }
    /**
     * Get Halter value
     * @return \THAG\XKfz\StructType\Halter|null
     */
    public function getHalter(): ?\THAG\XKfz\StructType\Halter
    {
        return $this->Halter;
    }
    /**
     * Set Halter value
     * @param \THAG\XKfz\StructType\Halter $halter
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails
     */
    public function setHalter(?\THAG\XKfz\StructType\Halter $halter = null): self
    {
        $this->Halter = $halter;
        
        return $this;
    }
    /**
     * Get NeueVb value
     * @return \THAG\XKfz\StructType\NeueVb|null
     */
    public function getNeueVb(): ?\THAG\XKfz\StructType\NeueVb
    {
        return $this->NeueVb;
    }
    /**
     * Set NeueVb value
     * @param \THAG\XKfz\StructType\NeueVb $neueVb
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails
     */
    public function setNeueVb(?\THAG\XKfz\StructType\NeueVb $neueVb = null): self
    {
        $this->NeueVb = $neueVb;
        
        return $this;
    }
    /**
     * Get Versicherungsbestaetigungsnummer value
     * @return string|null
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }
    /**
     * Set Versicherungsbestaetigungsnummer value
     * @param string $versicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }
    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }
    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;
        
        return $this;
    }
}
