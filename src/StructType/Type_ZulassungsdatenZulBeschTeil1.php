<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ZulassungsdatenZulBeschTeil1 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ZulassungsdatenZulBeschTeil1 extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The MerkmalKennzeichenart
     * @var string|null
     */
    public ?string $MerkmalKennzeichenart = null;
    /**
     * The MerkmalOldtimerkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;
    /**
     * The vorgangskomponentenIDHalter
     * @var string|null
     */
    public ?string $vorgangskomponentenIDHalter = null;
    /**
     * The NaechsteHauptuntersuchung
     * @var string|null
     */
    public ?string $NaechsteHauptuntersuchung = null;
    /**
     * The NaechsteSicherheitspruefung
     * @var string|null
     */
    public ?string $NaechsteSicherheitspruefung = null;
    /**
     * The ausstellendeBehoerde
     * @var \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde = null;
    /**
     * The datumAusstellung
     * @var string|null
     */
    public ?string $datumAusstellung = null;
    /**
     * The NummerZulBeschTeil2
     * @var string|null
     */
    public ?string $NummerZulBeschTeil2 = null;
    /**
     * The DatumErstzulassung
     * @var string|null
     */
    public ?string $DatumErstzulassung = null;
    /**
     * The MerkmalElektrokennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalElektrokennzeichen = null;
    /**
     * The BetriebszeitraumVon
     * @var int|null
     */
    public ?int $BetriebszeitraumVon = null;
    /**
     * The BetriebszeitraumBis
     * @var int|null
     */
    public ?int $BetriebszeitraumBis = null;
    /**
     * The DatumKennzeichenGueltigBis
     * @var string|null
     */
    public ?string $DatumKennzeichenGueltigBis = null;
    /**
     * The MerkmalGruenesKennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalGruenesKennzeichen = null;
    /**
     * Constructor method for Type.ZulassungsdatenZulBeschTeil1
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
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param string $merkmalKennzeichenart
     * @param bool $merkmalOldtimerkennzeichen
     * @param string $vorgangskomponentenIDHalter
     * @param string $naechsteHauptuntersuchung
     * @param string $naechsteSicherheitspruefung
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde
     * @param string $datumAusstellung
     * @param string $nummerZulBeschTeil2
     * @param string $datumErstzulassung
     * @param bool $merkmalElektrokennzeichen
     * @param int $betriebszeitraumVon
     * @param int $betriebszeitraumBis
     * @param string $datumKennzeichenGueltigBis
     * @param bool $merkmalGruenesKennzeichen
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
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalKennzeichenart value
     * @return string|null
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }
    /**
     * Set MerkmalKennzeichenart value
     * @param string $merkmalKennzeichenart
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;
        
        return $this;
    }
    /**
     * Get MerkmalOldtimerkennzeichen value
     * @return bool|null
     */
    public function getMerkmalOldtimerkennzeichen(): ?bool
    {
        return $this->MerkmalOldtimerkennzeichen;
    }
    /**
     * Set MerkmalOldtimerkennzeichen value
     * @param bool $merkmalOldtimerkennzeichen
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setMerkmalOldtimerkennzeichen(?bool $merkmalOldtimerkennzeichen = null): self
    {
        $this->MerkmalOldtimerkennzeichen = $merkmalOldtimerkennzeichen;
        
        return $this;
    }
    /**
     * Get vorgangskomponentenIDHalter value
     * @return string|null
     */
    public function getVorgangskomponentenIDHalter(): ?string
    {
        return $this->vorgangskomponentenIDHalter;
    }
    /**
     * Set vorgangskomponentenIDHalter value
     * @param string $vorgangskomponentenIDHalter
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setVorgangskomponentenIDHalter(?string $vorgangskomponentenIDHalter = null): self
    {
        $this->vorgangskomponentenIDHalter = $vorgangskomponentenIDHalter;
        
        return $this;
    }
    /**
     * Get NaechsteHauptuntersuchung value
     * @return string|null
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }
    /**
     * Set NaechsteHauptuntersuchung value
     * @param string $naechsteHauptuntersuchung
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;
        
        return $this;
    }
    /**
     * Get NaechsteSicherheitspruefung value
     * @return string|null
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }
    /**
     * Set NaechsteSicherheitspruefung value
     * @param string $naechsteSicherheitspruefung
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;
        
        return $this;
    }
    /**
     * Get ausstellendeBehoerde value
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public function getAusstellendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->ausstellendeBehoerde;
    }
    /**
     * Set ausstellendeBehoerde value
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setAusstellendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde = null): self
    {
        $this->ausstellendeBehoerde = $ausstellendeBehoerde;
        
        return $this;
    }
    /**
     * Get datumAusstellung value
     * @return string|null
     */
    public function getDatumAusstellung(): ?string
    {
        return $this->datumAusstellung;
    }
    /**
     * Set datumAusstellung value
     * @param string $datumAusstellung
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setDatumAusstellung(?string $datumAusstellung = null): self
    {
        $this->datumAusstellung = $datumAusstellung;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;
        
        return $this;
    }
    /**
     * Get DatumErstzulassung value
     * @return string|null
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }
    /**
     * Set DatumErstzulassung value
     * @param string $datumErstzulassung
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;
        
        return $this;
    }
    /**
     * Get MerkmalElektrokennzeichen value
     * @return bool|null
     */
    public function getMerkmalElektrokennzeichen(): ?bool
    {
        return $this->MerkmalElektrokennzeichen;
    }
    /**
     * Set MerkmalElektrokennzeichen value
     * @param bool $merkmalElektrokennzeichen
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setMerkmalElektrokennzeichen(?bool $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;
        
        return $this;
    }
    /**
     * Get BetriebszeitraumVon value
     * @return int|null
     */
    public function getBetriebszeitraumVon(): ?int
    {
        return $this->BetriebszeitraumVon;
    }
    /**
     * Set BetriebszeitraumVon value
     * @param int $betriebszeitraumVon
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setBetriebszeitraumVon(?int $betriebszeitraumVon = null): self
    {
        $this->BetriebszeitraumVon = $betriebszeitraumVon;
        
        return $this;
    }
    /**
     * Get BetriebszeitraumBis value
     * @return int|null
     */
    public function getBetriebszeitraumBis(): ?int
    {
        return $this->BetriebszeitraumBis;
    }
    /**
     * Set BetriebszeitraumBis value
     * @param int $betriebszeitraumBis
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setBetriebszeitraumBis(?int $betriebszeitraumBis = null): self
    {
        $this->BetriebszeitraumBis = $betriebszeitraumBis;
        
        return $this;
    }
    /**
     * Get DatumKennzeichenGueltigBis value
     * @return string|null
     */
    public function getDatumKennzeichenGueltigBis(): ?string
    {
        return $this->DatumKennzeichenGueltigBis;
    }
    /**
     * Set DatumKennzeichenGueltigBis value
     * @param string $datumKennzeichenGueltigBis
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;
        
        return $this;
    }
    /**
     * Get MerkmalGruenesKennzeichen value
     * @return bool|null
     */
    public function getMerkmalGruenesKennzeichen(): ?bool
    {
        return $this->MerkmalGruenesKennzeichen;
    }
    /**
     * Set MerkmalGruenesKennzeichen value
     * @param bool $merkmalGruenesKennzeichen
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil1
     */
    public function setMerkmalGruenesKennzeichen(?bool $merkmalGruenesKennzeichen = null): self
    {
        $this->MerkmalGruenesKennzeichen = $merkmalGruenesKennzeichen;
        
        return $this;
    }
}
