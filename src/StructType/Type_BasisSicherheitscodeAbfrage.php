<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BasisSicherheitscodeAbfrage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BasisSicherheitscodeAbfrage extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The NummerZulBeschTeil1
     * @var string|null
     */
    public ?string $NummerZulBeschTeil1 = null;
    /**
     * Constructor method for Type.BasisSicherheitscodeAbfrage
     * @uses Type_BasisSicherheitscodeAbfrage::setKennzeichen()
     * @uses Type_BasisSicherheitscodeAbfrage::setFahrzeugidentifizierungsnummer()
     * @uses Type_BasisSicherheitscodeAbfrage::setNummerZulBeschTeil1()
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $nummerZulBeschTeil1
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $nummerZulBeschTeil1 = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setNummerZulBeschTeil1($nummerZulBeschTeil1);
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
     * @return \THAG\XKfz\StructType\Type_BasisSicherheitscodeAbfrage
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }
    /**
     * Set Fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Type_BasisSicherheitscodeAbfrage
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get NummerZulBeschTeil1 value
     * @return string|null
     */
    public function getNummerZulBeschTeil1(): ?string
    {
        return $this->NummerZulBeschTeil1;
    }
    /**
     * Set NummerZulBeschTeil1 value
     * @param string $nummerZulBeschTeil1
     * @return \THAG\XKfz\StructType\Type_BasisSicherheitscodeAbfrage
     */
    public function setNummerZulBeschTeil1(?string $nummerZulBeschTeil1 = null): self
    {
        $this->NummerZulBeschTeil1 = $nummerZulBeschTeil1;
        
        return $this;
    }
}
