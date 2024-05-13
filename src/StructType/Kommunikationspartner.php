<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Kommunikationspartner StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Kommunikationspartner extends AbstractStructBase
{
    /**
     * The Kommunikationspartnertyp
     * @var string|null
     */
    public ?string $Kommunikationspartnertyp = null;
    /**
     * The GDVVermittlernummer
     * @var string|null
     */
    public ?string $GDVVermittlernummer = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
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
     * Constructor method for Kommunikationspartner
     * @uses Kommunikationspartner::setKommunikationspartnertyp()
     * @uses Kommunikationspartner::setGDVVermittlernummer()
     * @uses Kommunikationspartner::setVersicherungsunternehmensnummer()
     * @uses Kommunikationspartner::setZustaendigeBehoerdeKreisschluessel()
     * @uses Kommunikationspartner::setZustaendigeBehoerdeZusatzziffer()
     * @param string $kommunikationspartnertyp
     * @param string $gDVVermittlernummer
     * @param string $versicherungsunternehmensnummer
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
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
     * @return string|null
     */
    public function getKommunikationspartnertyp(): ?string
    {
        return $this->Kommunikationspartnertyp;
    }
    /**
     * Set Kommunikationspartnertyp value
     * @param string $kommunikationspartnertyp
     * @return \THAG\XKfz\StructType\Kommunikationspartner
     */
    public function setKommunikationspartnertyp(?string $kommunikationspartnertyp = null): self
    {
        $this->Kommunikationspartnertyp = $kommunikationspartnertyp;
        
        return $this;
    }
    /**
     * Get GDVVermittlernummer value
     * @return string|null
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }
    /**
     * Set GDVVermittlernummer value
     * @param string $gDVVermittlernummer
     * @return \THAG\XKfz\StructType\Kommunikationspartner
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;
        
        return $this;
    }
    /**
     * Get Versicherungsunternehmensnummer value
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\Kommunikationspartner
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
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
     * @return \THAG\XKfz\StructType\Kommunikationspartner
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
     * @return \THAG\XKfz\StructType\Kommunikationspartner
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;
        
        return $this;
    }
}
