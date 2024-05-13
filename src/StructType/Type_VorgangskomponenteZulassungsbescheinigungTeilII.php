<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteZulassungsbescheinigungTeilII
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteZulassungsbescheinigungTeilII extends AbstractStructBase
{
    /**
     * The NummerZulBeschTeil2
     * @var string|null
     */
    public ?string $NummerZulBeschTeil2 = null;
    /**
     * The zulassungsdaten
     * @var \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2|null
     */
    public ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2 $zulassungsdaten = null;
    /**
     * The druckstuecknummer
     * @var string|null
     */
    public ?string $druckstuecknummer = null;
    /**
     * The sicherheitscode
     * @var string|null
     */
    public ?string $sicherheitscode = null;
    /**
     * The fahrzeugdaten
     * @var \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2|null
     */
    public ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2 $fahrzeugdaten = null;
    /**
     * The vermerkHersteller
     * @var string|null
     */
    public ?string $vermerkHersteller = null;
    /**
     * The ausgabeZulBeschTeil2
     * @var \THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2|null
     */
    public ?\THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2 $ausgabeZulBeschTeil2 = null;
    /**
     * The vermerkeBehoerde
     * @var string|null
     */
    public ?string $vermerkeBehoerde = null;
    /**
     * Constructor method for Type.VorgangskomponenteZulassungsbescheinigungTeilII
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setNummerZulBeschTeil2()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setZulassungsdaten()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setDruckstuecknummer()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setSicherheitscode()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setFahrzeugdaten()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setVermerkHersteller()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setAusgabeZulBeschTeil2()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setVermerkeBehoerde()
     * @param string $nummerZulBeschTeil2
     * @param \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2 $zulassungsdaten
     * @param string $druckstuecknummer
     * @param string $sicherheitscode
     * @param \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2 $fahrzeugdaten
     * @param string $vermerkHersteller
     * @param \THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2 $ausgabeZulBeschTeil2
     * @param string $vermerkeBehoerde
     */
    public function __construct(?string $nummerZulBeschTeil2 = null, ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2 $zulassungsdaten = null, ?string $druckstuecknummer = null, ?string $sicherheitscode = null, ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2 $fahrzeugdaten = null, ?string $vermerkHersteller = null, ?\THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2 $ausgabeZulBeschTeil2 = null, ?string $vermerkeBehoerde = null)
    {
        $this
            ->setNummerZulBeschTeil2($nummerZulBeschTeil2)
            ->setZulassungsdaten($zulassungsdaten)
            ->setDruckstuecknummer($druckstuecknummer)
            ->setSicherheitscode($sicherheitscode)
            ->setFahrzeugdaten($fahrzeugdaten)
            ->setVermerkHersteller($vermerkHersteller)
            ->setAusgabeZulBeschTeil2($ausgabeZulBeschTeil2)
            ->setVermerkeBehoerde($vermerkeBehoerde);
    }
    /**
     * Get NummerZulBeschTeil2 value
     * @return string|null
     */
    public function getNummerZulBeschTeil2(): ?string
    {
        return $this->NummerZulBeschTeil2;
    }
    /**
     * Set NummerZulBeschTeil2 value
     * @param string $nummerZulBeschTeil2
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;
        
        return $this;
    }
    /**
     * Get zulassungsdaten value
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2|null
     */
    public function getZulassungsdaten(): ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
    {
        return $this->zulassungsdaten;
    }
    /**
     * Set zulassungsdaten value
     * @param \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2 $zulassungsdaten
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
     */
    public function setZulassungsdaten(?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2 $zulassungsdaten = null): self
    {
        $this->zulassungsdaten = $zulassungsdaten;
        
        return $this;
    }
    /**
     * Get druckstuecknummer value
     * @return string|null
     */
    public function getDruckstuecknummer(): ?string
    {
        return $this->druckstuecknummer;
    }
    /**
     * Set druckstuecknummer value
     * @param string $druckstuecknummer
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
     */
    public function setDruckstuecknummer(?string $druckstuecknummer = null): self
    {
        $this->druckstuecknummer = $druckstuecknummer;
        
        return $this;
    }
    /**
     * Get sicherheitscode value
     * @return string|null
     */
    public function getSicherheitscode(): ?string
    {
        return $this->sicherheitscode;
    }
    /**
     * Set sicherheitscode value
     * @param string $sicherheitscode
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
     */
    public function setSicherheitscode(?string $sicherheitscode = null): self
    {
        $this->sicherheitscode = $sicherheitscode;
        
        return $this;
    }
    /**
     * Get fahrzeugdaten value
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2|null
     */
    public function getFahrzeugdaten(): ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
    {
        return $this->fahrzeugdaten;
    }
    /**
     * Set fahrzeugdaten value
     * @param \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2 $fahrzeugdaten
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
     */
    public function setFahrzeugdaten(?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2 $fahrzeugdaten = null): self
    {
        $this->fahrzeugdaten = $fahrzeugdaten;
        
        return $this;
    }
    /**
     * Get vermerkHersteller value
     * @return string|null
     */
    public function getVermerkHersteller(): ?string
    {
        return $this->vermerkHersteller;
    }
    /**
     * Set vermerkHersteller value
     * @param string $vermerkHersteller
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
     */
    public function setVermerkHersteller(?string $vermerkHersteller = null): self
    {
        $this->vermerkHersteller = $vermerkHersteller;
        
        return $this;
    }
    /**
     * Get ausgabeZulBeschTeil2 value
     * @return \THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2|null
     */
    public function getAusgabeZulBeschTeil2(): ?\THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2
    {
        return $this->ausgabeZulBeschTeil2;
    }
    /**
     * Set ausgabeZulBeschTeil2 value
     * @param \THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2 $ausgabeZulBeschTeil2
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
     */
    public function setAusgabeZulBeschTeil2(?\THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2 $ausgabeZulBeschTeil2 = null): self
    {
        $this->ausgabeZulBeschTeil2 = $ausgabeZulBeschTeil2;
        
        return $this;
    }
    /**
     * Get vermerkeBehoerde value
     * @return string|null
     */
    public function getVermerkeBehoerde(): ?string
    {
        return $this->vermerkeBehoerde;
    }
    /**
     * Set vermerkeBehoerde value
     * @param string $vermerkeBehoerde
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
     */
    public function setVermerkeBehoerde(?string $vermerkeBehoerde = null): self
    {
        $this->vermerkeBehoerde = $vermerkeBehoerde;
        
        return $this;
    }
}
