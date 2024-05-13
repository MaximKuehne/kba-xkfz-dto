<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ZulassungsdatenZulBeschTeil2 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ZulassungsdatenZulBeschTeil2 extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * The MerkmalOldtimerkennzeichen
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;

    /**
     * The DatumErstzulassung
     */
    public ?string $DatumErstzulassung = null;

    /**
     * The AnzahlVorhalter
     */
    public ?int $AnzahlVorhalter = null;

    /**
     * The vorgangskomponentenIDHalter
     */
    public ?string $vorgangskomponentenIDHalter = null;

    /**
     * The ausstellendeBehoerde
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde = null;

    /**
     * The datumAusstellung
     */
    public ?string $datumAusstellung = null;

    /**
     * The MerkmalElektrokennzeichen
     */
    public ?bool $MerkmalElektrokennzeichen = null;

    /**
     * The BetriebszeitraumVon
     */
    public ?int $BetriebszeitraumVon = null;

    /**
     * The BetriebszeitraumBis
     */
    public ?int $BetriebszeitraumBis = null;

    /**
     * The DatumKennzeichenGueltigBis
     */
    public ?string $DatumKennzeichenGueltigBis = null;

    /**
     * Constructor method for Type.ZulassungsdatenZulBeschTeil2
     *
     * @uses Type_ZulassungsdatenZulBeschTeil2::setKennzeichen()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setMerkmalKennzeichenart()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setMerkmalOldtimerkennzeichen()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setDatumErstzulassung()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setAnzahlVorhalter()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setVorgangskomponentenIDHalter()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setAusstellendeBehoerde()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setDatumAusstellung()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setMerkmalElektrokennzeichen()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setBetriebszeitraumVon()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setBetriebszeitraumBis()
     * @uses Type_ZulassungsdatenZulBeschTeil2::setDatumKennzeichenGueltigBis()
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?string $merkmalKennzeichenart = null, ?bool $merkmalOldtimerkennzeichen = null, ?string $datumErstzulassung = null, ?int $anzahlVorhalter = null, ?string $vorgangskomponentenIDHalter = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde = null, ?string $datumAusstellung = null, ?bool $merkmalElektrokennzeichen = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?string $datumKennzeichenGueltigBis = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setMerkmalOldtimerkennzeichen($merkmalOldtimerkennzeichen)
            ->setDatumErstzulassung($datumErstzulassung)
            ->setAnzahlVorhalter($anzahlVorhalter)
            ->setVorgangskomponentenIDHalter($vorgangskomponentenIDHalter)
            ->setAusstellendeBehoerde($ausstellendeBehoerde)
            ->setDatumAusstellung($datumAusstellung)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen)
            ->setBetriebszeitraumVon($betriebszeitraumVon)
            ->setBetriebszeitraumBis($betriebszeitraumBis)
            ->setDatumKennzeichenGueltigBis($datumKennzeichenGueltigBis);
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
     * Get MerkmalKennzeichenart value
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }

    /**
     * Set MerkmalKennzeichenart value
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;

        return $this;
    }

    /**
     * Get MerkmalOldtimerkennzeichen value
     */
    public function getMerkmalOldtimerkennzeichen(): ?bool
    {
        return $this->MerkmalOldtimerkennzeichen;
    }

    /**
     * Set MerkmalOldtimerkennzeichen value
     */
    public function setMerkmalOldtimerkennzeichen(?bool $merkmalOldtimerkennzeichen = null): self
    {
        $this->MerkmalOldtimerkennzeichen = $merkmalOldtimerkennzeichen;

        return $this;
    }

    /**
     * Get DatumErstzulassung value
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }

    /**
     * Set DatumErstzulassung value
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;

        return $this;
    }

    /**
     * Get AnzahlVorhalter value
     */
    public function getAnzahlVorhalter(): ?int
    {
        return $this->AnzahlVorhalter;
    }

    /**
     * Set AnzahlVorhalter value
     */
    public function setAnzahlVorhalter(?int $anzahlVorhalter = null): self
    {
        $this->AnzahlVorhalter = $anzahlVorhalter;

        return $this;
    }

    /**
     * Get vorgangskomponentenIDHalter value
     */
    public function getVorgangskomponentenIDHalter(): ?string
    {
        return $this->vorgangskomponentenIDHalter;
    }

    /**
     * Set vorgangskomponentenIDHalter value
     */
    public function setVorgangskomponentenIDHalter(?string $vorgangskomponentenIDHalter = null): self
    {
        $this->vorgangskomponentenIDHalter = $vorgangskomponentenIDHalter;

        return $this;
    }

    /**
     * Get ausstellendeBehoerde value
     */
    public function getAusstellendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->ausstellendeBehoerde;
    }

    /**
     * Set ausstellendeBehoerde value
     */
    public function setAusstellendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde = null): self
    {
        $this->ausstellendeBehoerde = $ausstellendeBehoerde;

        return $this;
    }

    /**
     * Get datumAusstellung value
     */
    public function getDatumAusstellung(): ?string
    {
        return $this->datumAusstellung;
    }

    /**
     * Set datumAusstellung value
     */
    public function setDatumAusstellung(?string $datumAusstellung = null): self
    {
        $this->datumAusstellung = $datumAusstellung;

        return $this;
    }

    /**
     * Get MerkmalElektrokennzeichen value
     */
    public function getMerkmalElektrokennzeichen(): ?bool
    {
        return $this->MerkmalElektrokennzeichen;
    }

    /**
     * Set MerkmalElektrokennzeichen value
     */
    public function setMerkmalElektrokennzeichen(?bool $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;

        return $this;
    }

    /**
     * Get BetriebszeitraumVon value
     */
    public function getBetriebszeitraumVon(): ?int
    {
        return $this->BetriebszeitraumVon;
    }

    /**
     * Set BetriebszeitraumVon value
     */
    public function setBetriebszeitraumVon(?int $betriebszeitraumVon = null): self
    {
        $this->BetriebszeitraumVon = $betriebszeitraumVon;

        return $this;
    }

    /**
     * Get BetriebszeitraumBis value
     */
    public function getBetriebszeitraumBis(): ?int
    {
        return $this->BetriebszeitraumBis;
    }

    /**
     * Set BetriebszeitraumBis value
     */
    public function setBetriebszeitraumBis(?int $betriebszeitraumBis = null): self
    {
        $this->BetriebszeitraumBis = $betriebszeitraumBis;

        return $this;
    }

    /**
     * Get DatumKennzeichenGueltigBis value
     */
    public function getDatumKennzeichenGueltigBis(): ?string
    {
        return $this->DatumKennzeichenGueltigBis;
    }

    /**
     * Set DatumKennzeichenGueltigBis value
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;

        return $this;
    }
}
