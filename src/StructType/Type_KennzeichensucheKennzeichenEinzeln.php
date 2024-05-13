<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KennzeichensucheKennzeichenEinzeln StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KennzeichensucheKennzeichenEinzeln extends AbstractStructBase
{
    /**
     * The unterscheidungszeichen
     * @var string|null
     */
    public ?string $unterscheidungszeichen = null;
    /**
     * The erkennungszeichen
     * @var string|null
     */
    public ?string $erkennungszeichen = null;
    /**
     * The erkennungsnummer
     * @var string|null
     */
    public ?string $erkennungsnummer = null;
    /**
     * The MerkmalOldtimerkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;
    /**
     * The MerkmalElektrokennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalElektrokennzeichen = null;
    /**
     * The MerkmalWechselkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalWechselkennzeichen = null;
    /**
     * The MerkmalGruenesKennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalGruenesKennzeichen = null;
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
     * The sucheinschraenkung
     * @var \THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null;
    /**
     * The strukturKennzeichenInhalt
     * @var \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt|null
     */
    public ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null;
    /**
     * The kundennummer
     * @var string|null
     */
    public ?string $kundennummer = null;
    /**
     * Constructor method for Type.KennzeichensucheKennzeichenEinzeln
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setUnterscheidungszeichen()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setErkennungszeichen()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setErkennungsnummer()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setMerkmalOldtimerkennzeichen()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setMerkmalElektrokennzeichen()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setMerkmalWechselkennzeichen()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setMerkmalGruenesKennzeichen()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setBetriebszeitraumVon()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setBetriebszeitraumBis()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setDatumKennzeichenGueltigBis()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setSucheinschraenkung()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setStrukturKennzeichenInhalt()
     * @uses Type_KennzeichensucheKennzeichenEinzeln::setKundennummer()
     * @param string $unterscheidungszeichen
     * @param string $erkennungszeichen
     * @param string $erkennungsnummer
     * @param bool $merkmalOldtimerkennzeichen
     * @param bool $merkmalElektrokennzeichen
     * @param bool $merkmalWechselkennzeichen
     * @param bool $merkmalGruenesKennzeichen
     * @param int $betriebszeitraumVon
     * @param int $betriebszeitraumBis
     * @param string $datumKennzeichenGueltigBis
     * @param \THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung
     * @param \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt
     * @param string $kundennummer
     */
    public function __construct(?string $unterscheidungszeichen = null, ?string $erkennungszeichen = null, ?string $erkennungsnummer = null, ?bool $merkmalOldtimerkennzeichen = null, ?bool $merkmalElektrokennzeichen = null, ?bool $merkmalWechselkennzeichen = null, ?bool $merkmalGruenesKennzeichen = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?string $datumKennzeichenGueltigBis = null, ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null, ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null, ?string $kundennummer = null)
    {
        $this
            ->setUnterscheidungszeichen($unterscheidungszeichen)
            ->setErkennungszeichen($erkennungszeichen)
            ->setErkennungsnummer($erkennungsnummer)
            ->setMerkmalOldtimerkennzeichen($merkmalOldtimerkennzeichen)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen)
            ->setMerkmalGruenesKennzeichen($merkmalGruenesKennzeichen)
            ->setBetriebszeitraumVon($betriebszeitraumVon)
            ->setBetriebszeitraumBis($betriebszeitraumBis)
            ->setDatumKennzeichenGueltigBis($datumKennzeichenGueltigBis)
            ->setSucheinschraenkung($sucheinschraenkung)
            ->setStrukturKennzeichenInhalt($strukturKennzeichenInhalt)
            ->setKundennummer($kundennummer);
    }
    /**
     * Get unterscheidungszeichen value
     * @return string|null
     */
    public function getUnterscheidungszeichen(): ?string
    {
        return $this->unterscheidungszeichen;
    }
    /**
     * Set unterscheidungszeichen value
     * @param string $unterscheidungszeichen
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setUnterscheidungszeichen(?string $unterscheidungszeichen = null): self
    {
        $this->unterscheidungszeichen = $unterscheidungszeichen;
        
        return $this;
    }
    /**
     * Get erkennungszeichen value
     * @return string|null
     */
    public function getErkennungszeichen(): ?string
    {
        return $this->erkennungszeichen;
    }
    /**
     * Set erkennungszeichen value
     * @param string $erkennungszeichen
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setErkennungszeichen(?string $erkennungszeichen = null): self
    {
        $this->erkennungszeichen = $erkennungszeichen;
        
        return $this;
    }
    /**
     * Get erkennungsnummer value
     * @return string|null
     */
    public function getErkennungsnummer(): ?string
    {
        return $this->erkennungsnummer;
    }
    /**
     * Set erkennungsnummer value
     * @param string $erkennungsnummer
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setErkennungsnummer(?string $erkennungsnummer = null): self
    {
        $this->erkennungsnummer = $erkennungsnummer;
        
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setMerkmalOldtimerkennzeichen(?bool $merkmalOldtimerkennzeichen = null): self
    {
        $this->MerkmalOldtimerkennzeichen = $merkmalOldtimerkennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setMerkmalElektrokennzeichen(?bool $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalWechselkennzeichen value
     * @return bool|null
     */
    public function getMerkmalWechselkennzeichen(): ?bool
    {
        return $this->MerkmalWechselkennzeichen;
    }
    /**
     * Set MerkmalWechselkennzeichen value
     * @param bool $merkmalWechselkennzeichen
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setMerkmalGruenesKennzeichen(?bool $merkmalGruenesKennzeichen = null): self
    {
        $this->MerkmalGruenesKennzeichen = $merkmalGruenesKennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;
        
        return $this;
    }
    /**
     * Get sucheinschraenkung value
     * @return \THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen|null
     */
    public function getSucheinschraenkung(): ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen
    {
        return $this->sucheinschraenkung;
    }
    /**
     * Set sucheinschraenkung value
     * @param \THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setSucheinschraenkung(?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null): self
    {
        $this->sucheinschraenkung = $sucheinschraenkung;
        
        return $this;
    }
    /**
     * Get strukturKennzeichenInhalt value
     * @return \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt|null
     */
    public function getStrukturKennzeichenInhalt(): ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt
    {
        return $this->strukturKennzeichenInhalt;
    }
    /**
     * Set strukturKennzeichenInhalt value
     * @param \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setStrukturKennzeichenInhalt(?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null): self
    {
        $this->strukturKennzeichenInhalt = $strukturKennzeichenInhalt;
        
        return $this;
    }
    /**
     * Get kundennummer value
     * @return string|null
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }
    /**
     * Set kundennummer value
     * @param string $kundennummer
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;
        
        return $this;
    }
}
