<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteZulassungsbescheinigungTeilI
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteZulassungsbescheinigungTeilI extends AbstractStructBase
{
    /**
     * The NummerZulBeschTeil1
     */
    public ?string $NummerZulBeschTeil1 = null;

    /**
     * The vordrucknummer
     */
    public ?string $vordrucknummer = null;

    /**
     * The druckstuecknummer
     */
    public ?string $druckstuecknummer = null;

    /**
     * The sicherheitscode
     */
    public ?string $sicherheitscode = null;

    /**
     * The zulassungsdaten
     */
    public ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1 $zulassungsdaten = null;

    /**
     * The fahrzeugdaten
     */
    public ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1 $fahrzeugdaten = null;

    /**
     * Constructor method for Type.VorgangskomponenteZulassungsbescheinigungTeilI
     *
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setNummerZulBeschTeil1()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setVordrucknummer()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setDruckstuecknummer()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setSicherheitscode()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setZulassungsdaten()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilI::setFahrzeugdaten()
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
     */
    public function getNummerZulBeschTeil1(): ?string
    {
        return $this->NummerZulBeschTeil1;
    }

    /**
     * Set NummerZulBeschTeil1 value
     */
    public function setNummerZulBeschTeil1(?string $nummerZulBeschTeil1 = null): self
    {
        $this->NummerZulBeschTeil1 = $nummerZulBeschTeil1;

        return $this;
    }

    /**
     * Get vordrucknummer value
     */
    public function getVordrucknummer(): ?string
    {
        return $this->vordrucknummer;
    }

    /**
     * Set vordrucknummer value
     */
    public function setVordrucknummer(?string $vordrucknummer = null): self
    {
        $this->vordrucknummer = $vordrucknummer;

        return $this;
    }

    /**
     * Get druckstuecknummer value
     */
    public function getDruckstuecknummer(): ?string
    {
        return $this->druckstuecknummer;
    }

    /**
     * Set druckstuecknummer value
     */
    public function setDruckstuecknummer(?string $druckstuecknummer = null): self
    {
        $this->druckstuecknummer = $druckstuecknummer;

        return $this;
    }

    /**
     * Get sicherheitscode value
     */
    public function getSicherheitscode(): ?string
    {
        return $this->sicherheitscode;
    }

    /**
     * Set sicherheitscode value
     */
    public function setSicherheitscode(?string $sicherheitscode = null): self
    {
        $this->sicherheitscode = $sicherheitscode;

        return $this;
    }

    /**
     * Get zulassungsdaten value
     */
    public function getZulassungsdaten(): ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
    {
        return $this->zulassungsdaten;
    }

    /**
     * Set zulassungsdaten value
     */
    public function setZulassungsdaten(?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1 $zulassungsdaten = null): self
    {
        $this->zulassungsdaten = $zulassungsdaten;

        return $this;
    }

    /**
     * Get fahrzeugdaten value
     */
    public function getFahrzeugdaten(): ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1
    {
        return $this->fahrzeugdaten;
    }

    /**
     * Set fahrzeugdaten value
     */
    public function setFahrzeugdaten(?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil1 $fahrzeugdaten = null): self
    {
        $this->fahrzeugdaten = $fahrzeugdaten;

        return $this;
    }
}
