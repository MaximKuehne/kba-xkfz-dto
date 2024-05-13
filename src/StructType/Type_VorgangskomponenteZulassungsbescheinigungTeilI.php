<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteZulassungsbescheinigungTeilI
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteZulassungsbescheinigungTeilI extends AbstractStructBase
{
    /**
     * The NummerZulBeschTeil1
     * @var string|null
     */
    public ?string $NummerZulBeschTeil1 = null;
    /**
     * The vordrucknummer
     * @var string|null
     */
    public ?string $vordrucknummer = null;
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
     * The zulassungsdaten
     * @var \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1|null
     */
    public ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1 $zulassungsdaten = null;
    /**
     * The fahrzeugdaten
     * @var \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1|null
     */
    public ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1 $fahrzeugdaten = null;
    /**
     * Constructor method for Type.VorgangskomponenteZulassungsbescheinigungTeilI
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setNummerZulBeschTeil1()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setVordrucknummer()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setDruckstuecknummer()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setSicherheitscode()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setZulassungsdaten()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setFahrzeugdaten()
     * @param string $nummerZulBeschTeil1
     * @param string $vordrucknummer
     * @param string $druckstuecknummer
     * @param string $sicherheitscode
     * @param \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1 $zulassungsdaten
     * @param \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1 $fahrzeugdaten
     */
    public function __construct(?string $nummerZulBeschTeil1 = null, ?string $vordrucknummer = null, ?string $druckstuecknummer = null, ?string $sicherheitscode = null, ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1 $zulassungsdaten = null, ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1 $fahrzeugdaten = null)
    {
        $this
            ->setNummerZulBeschTeil1($nummerZulBeschTeil1)
            ->setVordrucknummer($vordrucknummer)
            ->setDruckstuecknummer($druckstuecknummer)
            ->setSicherheitscode($sicherheitscode)
            ->setZulassungsdaten($zulassungsdaten)
            ->setFahrzeugdaten($fahrzeugdaten);
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
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI
     */
    public function setNummerZulBeschTeil1(?string $nummerZulBeschTeil1 = null): self
    {
        $this->NummerZulBeschTeil1 = $nummerZulBeschTeil1;
        
        return $this;
    }
    /**
     * Get vordrucknummer value
     * @return string|null
     */
    public function getVordrucknummer(): ?string
    {
        return $this->vordrucknummer;
    }
    /**
     * Set vordrucknummer value
     * @param string $vordrucknummer
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI
     */
    public function setVordrucknummer(?string $vordrucknummer = null): self
    {
        $this->vordrucknummer = $vordrucknummer;
        
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
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI
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
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI
     */
    public function setSicherheitscode(?string $sicherheitscode = null): self
    {
        $this->sicherheitscode = $sicherheitscode;
        
        return $this;
    }
    /**
     * Get zulassungsdaten value
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1|null
     */
    public function getZulassungsdaten(): ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
    {
        return $this->zulassungsdaten;
    }
    /**
     * Set zulassungsdaten value
     * @param \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1 $zulassungsdaten
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI
     */
    public function setZulassungsdaten(?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1 $zulassungsdaten = null): self
    {
        $this->zulassungsdaten = $zulassungsdaten;
        
        return $this;
    }
    /**
     * Get fahrzeugdaten value
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1|null
     */
    public function getFahrzeugdaten(): ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1
    {
        return $this->fahrzeugdaten;
    }
    /**
     * Set fahrzeugdaten value
     * @param \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1 $fahrzeugdaten
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI
     */
    public function setFahrzeugdaten(?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1 $fahrzeugdaten = null): self
    {
        $this->fahrzeugdaten = $fahrzeugdaten;
        
        return $this;
    }
}
