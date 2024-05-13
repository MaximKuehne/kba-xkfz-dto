<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ZulassungsdatenZulBeschTeil2 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ZulassungsdatenZulBeschTeil2 extends AbstractStructBase
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
     * The DatumErstzulassung
     * @var string|null
     */
    public ?string $DatumErstzulassung = null;
    /**
     * The AnzahlVorhalter
     * @var int|null
     */
    public ?int $AnzahlVorhalter = null;
    /**
     * The vorgangskomponentenIDHalter
     * @var string|null
     */
    public ?string $vorgangskomponentenIDHalter = null;
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
     * Constructor method for Type.ZulassungsdatenZulBeschTeil2
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
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param string $merkmalKennzeichenart
     * @param bool $merkmalOldtimerkennzeichen
     * @param string $datumErstzulassung
     * @param int $anzahlVorhalter
     * @param string $vorgangskomponentenIDHalter
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $ausstellendeBehoerde
     * @param string $datumAusstellung
     * @param bool $merkmalElektrokennzeichen
     * @param int $betriebszeitraumVon
     * @param int $betriebszeitraumBis
     * @param string $datumKennzeichenGueltigBis
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
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
     */
    public function setMerkmalOldtimerkennzeichen(?bool $merkmalOldtimerkennzeichen = null): self
    {
        $this->MerkmalOldtimerkennzeichen = $merkmalOldtimerkennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;
        
        return $this;
    }
    /**
     * Get AnzahlVorhalter value
     * @return int|null
     */
    public function getAnzahlVorhalter(): ?int
    {
        return $this->AnzahlVorhalter;
    }
    /**
     * Set AnzahlVorhalter value
     * @param int $anzahlVorhalter
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
     */
    public function setAnzahlVorhalter(?int $anzahlVorhalter = null): self
    {
        $this->AnzahlVorhalter = $anzahlVorhalter;
        
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
     */
    public function setVorgangskomponentenIDHalter(?string $vorgangskomponentenIDHalter = null): self
    {
        $this->vorgangskomponentenIDHalter = $vorgangskomponentenIDHalter;
        
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
     */
    public function setDatumAusstellung(?string $datumAusstellung = null): self
    {
        $this->datumAusstellung = $datumAusstellung;
        
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsdatenZulBeschTeil2
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;
        
        return $this;
    }
}
