<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ZulassungsdatenZulBeschTeil1 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ZulassungsdatenZulBeschTeil1 extends AbstractStructBase
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
     * The vorgangskomponentenIDHalter
     */
    public ?string $vorgangskomponentenIDHalter = null;

    /**
     * The NaechsteHauptuntersuchung
     */
    public ?string $NaechsteHauptuntersuchung = null;

    /**
     * The NaechsteSicherheitspruefung
     */
    public ?string $NaechsteSicherheitspruefung = null;

    /**
     * The ausstellendeBehoerde
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde = null;

    /**
     * The datumAusstellung
     */
    public ?string $datumAusstellung = null;

    /**
     * The NummerZulBeschTeil2
     */
    public ?string $NummerZulBeschTeil2 = null;

    /**
     * The DatumErstzulassung
     */
    public ?string $DatumErstzulassung = null;

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
     * The MerkmalGruenesKennzeichen
     */
    public ?bool $MerkmalGruenesKennzeichen = null;

    /**
     * Constructor method for Type.ZulassungsdatenZulBeschTeil1
     *
     * @uses Type_ZulassungsdatenZulBeschTeil1::setKennzeichen()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setMerkmalKennzeichenart()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setMerkmalOldtimerkennzeichen()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setVorgangskomponentenIDHalter()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setNaechsteHauptuntersuchung()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setNaechsteSicherheitspruefung()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setAusstellendeBehoerde()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setDatumAusstellung()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setNummerZulBeschTeil2()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setDatumErstzulassung()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setMerkmalElektrokennzeichen()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setBetriebszeitraumVon()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setBetriebszeitraumBis()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setDatumKennzeichenGueltigBis()
     * @uses Type_ZulassungsdatenZulBeschTeil1::setMerkmalGruenesKennzeichen()
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?string $merkmalKennzeichenart = null, ?bool $merkmalOldtimerkennzeichen = null, ?string $vorgangskomponentenIDHalter = null, ?string $naechsteHauptuntersuchung = null, ?string $naechsteSicherheitspruefung = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde = null, ?string $datumAusstellung = null, ?string $nummerZulBeschTeil2 = null, ?string $datumErstzulassung = null, ?bool $merkmalElektrokennzeichen = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?string $datumKennzeichenGueltigBis = null, ?bool $merkmalGruenesKennzeichen = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setMerkmalOldtimerkennzeichen($merkmalOldtimerkennzeichen)
            ->setVorgangskomponentenIDHalter($vorgangskomponentenIDHalter)
            ->setNaechsteHauptuntersuchung($naechsteHauptuntersuchung)
            ->setNaechsteSicherheitspruefung($naechsteSicherheitspruefung)
            ->setAusstellendeBehoerde($ausstellendeBehoerde)
            ->setDatumAusstellung($datumAusstellung)
            ->setNummerZulBeschTeil2($nummerZulBeschTeil2)
            ->setDatumErstzulassung($datumErstzulassung)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen)
            ->setBetriebszeitraumVon($betriebszeitraumVon)
            ->setBetriebszeitraumBis($betriebszeitraumBis)
            ->setDatumKennzeichenGueltigBis($datumKennzeichenGueltigBis)
            ->setMerkmalGruenesKennzeichen($merkmalGruenesKennzeichen);
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
     * Get NaechsteHauptuntersuchung value
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }

    /**
     * Set NaechsteHauptuntersuchung value
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;

        return $this;
    }

    /**
     * Get NaechsteSicherheitspruefung value
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }

    /**
     * Set NaechsteSicherheitspruefung value
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;

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

    /**
     * Get MerkmalGruenesKennzeichen value
     */
    public function getMerkmalGruenesKennzeichen(): ?bool
    {
        return $this->MerkmalGruenesKennzeichen;
    }

    /**
     * Set MerkmalGruenesKennzeichen value
     */
    public function setMerkmalGruenesKennzeichen(?bool $merkmalGruenesKennzeichen = null): self
    {
        $this->MerkmalGruenesKennzeichen = $merkmalGruenesKennzeichen;

        return $this;
    }
}
