<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteZulassungsbescheinigungTeilII
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteZulassungsbescheinigungTeilII extends AbstractStructBase
{
    /**
     * The NummerZulBeschTeil2
     */
    public ?string $NummerZulBeschTeil2 = null;

    /**
     * The zulassungsdaten
     */
    public ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2 $zulassungsdaten = null;

    /**
     * The druckstuecknummer
     */
    public ?string $druckstuecknummer = null;

    /**
     * The sicherheitscode
     */
    public ?string $sicherheitscode = null;

    /**
     * The fahrzeugdaten
     */
    public ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2 $fahrzeugdaten = null;

    /**
     * The vermerkHersteller
     */
    public ?string $vermerkHersteller = null;

    /**
     * The ausgabeZulBeschTeil2
     */
    public ?\THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2 $ausgabeZulBeschTeil2 = null;

    /**
     * The vermerkeBehoerde
     */
    public ?string $vermerkeBehoerde = null;

    /**
     * Constructor method for Type.VorgangskomponenteZulassungsbescheinigungTeilII
     *
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setNummerZulBeschTeil2()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setZulassungsdaten()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setDruckstuecknummer()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setSicherheitscode()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setFahrzeugdaten()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setVermerkHersteller()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setAusgabeZulBeschTeil2()
     * @uses Type_VorgangskomponenteZulassungsbescheinigungTeilII::setVermerkeBehoerde()
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
     */
    public function getNummerZulBeschTeil2(): ?string
    {
        return $this->NummerZulBeschTeil2;
    }

    /**
     * Set NummerZulBeschTeil2 value
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;

        return $this;
    }

    /**
     * Get zulassungsdaten value
     */
    public function getZulassungsdaten(): ?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
    {
        return $this->zulassungsdaten;
    }

    /**
     * Set zulassungsdaten value
     */
    public function setZulassungsdaten(?\THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2 $zulassungsdaten = null): self
    {
        $this->zulassungsdaten = $zulassungsdaten;

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
     * Get fahrzeugdaten value
     */
    public function getFahrzeugdaten(): ?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
    {
        return $this->fahrzeugdaten;
    }

    /**
     * Set fahrzeugdaten value
     */
    public function setFahrzeugdaten(?\THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2 $fahrzeugdaten = null): self
    {
        $this->fahrzeugdaten = $fahrzeugdaten;

        return $this;
    }

    /**
     * Get vermerkHersteller value
     */
    public function getVermerkHersteller(): ?string
    {
        return $this->vermerkHersteller;
    }

    /**
     * Set vermerkHersteller value
     */
    public function setVermerkHersteller(?string $vermerkHersteller = null): self
    {
        $this->vermerkHersteller = $vermerkHersteller;

        return $this;
    }

    /**
     * Get ausgabeZulBeschTeil2 value
     */
    public function getAusgabeZulBeschTeil2(): ?\THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2
    {
        return $this->ausgabeZulBeschTeil2;
    }

    /**
     * Set ausgabeZulBeschTeil2 value
     */
    public function setAusgabeZulBeschTeil2(?\THAG\XKfz\StructType\Type_AusgabeZulBeschTeil2 $ausgabeZulBeschTeil2 = null): self
    {
        $this->ausgabeZulBeschTeil2 = $ausgabeZulBeschTeil2;

        return $this;
    }

    /**
     * Get vermerkeBehoerde value
     */
    public function getVermerkeBehoerde(): ?string
    {
        return $this->vermerkeBehoerde;
    }

    /**
     * Set vermerkeBehoerde value
     */
    public function setVermerkeBehoerde(?string $vermerkeBehoerde = null): self
    {
        $this->vermerkeBehoerde = $vermerkeBehoerde;

        return $this;
    }
}
