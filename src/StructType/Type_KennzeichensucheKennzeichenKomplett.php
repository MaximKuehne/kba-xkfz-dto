<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KennzeichensucheKennzeichenKomplett StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KennzeichensucheKennzeichenKomplett extends AbstractStructBase
{
    /**
     * The kennzeichen
     */
    public ?string $kennzeichen = null;

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
     * Constructor method for Type.KennzeichensucheKennzeichenKomplett
     *
     * @uses Type_KennzeichensucheKennzeichenKomplett::setKennzeichen()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setMerkmalOldtimerkennzeichen()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setMerkmalElektrokennzeichen()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setMerkmalWechselkennzeichen()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setMerkmalGruenesKennzeichen()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setBetriebszeitraumVon()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setBetriebszeitraumBis()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setDatumKennzeichenGueltigBis()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setSucheinschraenkung()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setStrukturKennzeichenInhalt()
     * @uses Type_KennzeichensucheKennzeichenKomplett::setKundennummer()
     */
    public function __construct(?string $kennzeichen = null, ?bool $merkmalOldtimerkennzeichen = null, ?bool $merkmalElektrokennzeichen = null, ?bool $merkmalWechselkennzeichen = null, ?bool $merkmalGruenesKennzeichen = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?string $datumKennzeichenGueltigBis = null, ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null, ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null, ?string $kundennummer = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
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
     * Get kennzeichen value
     */
    public function getKennzeichen(): ?string
    {
        return $this->kennzeichen;
    }

    /**
     * Set kennzeichen value
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;

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
