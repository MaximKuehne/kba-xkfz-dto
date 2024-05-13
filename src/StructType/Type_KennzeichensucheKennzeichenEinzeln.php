<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KennzeichensucheKennzeichenEinzeln StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KennzeichensucheKennzeichenEinzeln extends AbstractStructBase
{
    /**
     * The unterscheidungszeichen
     */
    public ?string $unterscheidungszeichen = null;

    /**
     * The erkennungszeichen
     */
    public ?string $erkennungszeichen = null;

    /**
     * The erkennungsnummer
     */
    public ?string $erkennungsnummer = null;

    /**
     * The MerkmalOldtimerkennzeichen
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;

    /**
     * The MerkmalElektrokennzeichen
     */
    public ?bool $MerkmalElektrokennzeichen = null;

    /**
     * The MerkmalWechselkennzeichen
     */
    public ?bool $MerkmalWechselkennzeichen = null;

    /**
     * The MerkmalGruenesKennzeichen
     */
    public ?bool $MerkmalGruenesKennzeichen = null;

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
     * The sucheinschraenkung
     */
    public ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null;

    /**
     * The strukturKennzeichenInhalt
     */
    public ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null;

    /**
     * The kundennummer
     */
    public ?string $kundennummer = null;

    /**
     * Constructor method for Type.KennzeichensucheKennzeichenEinzeln
     *
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
     */
    public function getUnterscheidungszeichen(): ?string
    {
        return $this->unterscheidungszeichen;
    }

    /**
     * Set unterscheidungszeichen value
     */
    public function setUnterscheidungszeichen(?string $unterscheidungszeichen = null): self
    {
        $this->unterscheidungszeichen = $unterscheidungszeichen;

        return $this;
    }

    /**
     * Get erkennungszeichen value
     */
    public function getErkennungszeichen(): ?string
    {
        return $this->erkennungszeichen;
    }

    /**
     * Set erkennungszeichen value
     */
    public function setErkennungszeichen(?string $erkennungszeichen = null): self
    {
        $this->erkennungszeichen = $erkennungszeichen;

        return $this;
    }

    /**
     * Get erkennungsnummer value
     */
    public function getErkennungsnummer(): ?string
    {
        return $this->erkennungsnummer;
    }

    /**
     * Set erkennungsnummer value
     */
    public function setErkennungsnummer(?string $erkennungsnummer = null): self
    {
        $this->erkennungsnummer = $erkennungsnummer;

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
     * Get MerkmalWechselkennzeichen value
     */
    public function getMerkmalWechselkennzeichen(): ?bool
    {
        return $this->MerkmalWechselkennzeichen;
    }

    /**
     * Set MerkmalWechselkennzeichen value
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;

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
     * Get sucheinschraenkung value
     */
    public function getSucheinschraenkung(): ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen
    {
        return $this->sucheinschraenkung;
    }

    /**
     * Set sucheinschraenkung value
     */
    public function setSucheinschraenkung(?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null): self
    {
        $this->sucheinschraenkung = $sucheinschraenkung;

        return $this;
    }

    /**
     * Get strukturKennzeichenInhalt value
     */
    public function getStrukturKennzeichenInhalt(): ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt
    {
        return $this->strukturKennzeichenInhalt;
    }

    /**
     * Set strukturKennzeichenInhalt value
     */
    public function setStrukturKennzeichenInhalt(?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null): self
    {
        $this->strukturKennzeichenInhalt = $strukturKennzeichenInhalt;

        return $this;
    }

    /**
     * Get kundennummer value
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }

    /**
     * Set kundennummer value
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;

        return $this;
    }
}
