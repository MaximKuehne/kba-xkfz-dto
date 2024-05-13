<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KennzeichendatenZRTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class KennzeichendatenZRTyp extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The BetriebszeitraumVon
     */
    public ?int $BetriebszeitraumVon = null;

    /**
     * The BetriebszeitraumBis
     */
    public ?int $BetriebszeitraumBis = null;

    /**
     * The MerkmalOldtimerkennzeichen
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;

    /**
     * The MerkmalElektrokennzeichen
     */
    public ?bool $MerkmalElektrokennzeichen = null;

    /**
     * The MerkmalGruenesKennzeichen
     */
    public ?bool $MerkmalGruenesKennzeichen = null;

    /**
     * The ZeitpunktZuteilungGruenesKennzeichen
     */
    public ?string $ZeitpunktZuteilungGruenesKennzeichen = null;

    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * The ZeitpunktZuteilungKennzeichen
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;

    /**
     * Constructor method for KennzeichendatenZRTyp
     *
     * @uses KennzeichendatenZRTyp::setKennzeichen()
     * @uses KennzeichendatenZRTyp::setBetriebszeitraumVon()
     * @uses KennzeichendatenZRTyp::setBetriebszeitraumBis()
     * @uses KennzeichendatenZRTyp::setMerkmalOldtimerkennzeichen()
     * @uses KennzeichendatenZRTyp::setMerkmalElektrokennzeichen()
     * @uses KennzeichendatenZRTyp::setMerkmalGruenesKennzeichen()
     * @uses KennzeichendatenZRTyp::setZeitpunktZuteilungGruenesKennzeichen()
     * @uses KennzeichendatenZRTyp::setMerkmalKennzeichenart()
     * @uses KennzeichendatenZRTyp::setZeitpunktZuteilungKennzeichen()
     */
    public function __construct(?string $kennzeichen = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?bool $merkmalOldtimerkennzeichen = null, ?bool $merkmalElektrokennzeichen = null, ?bool $merkmalGruenesKennzeichen = null, ?string $zeitpunktZuteilungGruenesKennzeichen = null, ?string $merkmalKennzeichenart = null, ?string $zeitpunktZuteilungKennzeichen = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setBetriebszeitraumVon($betriebszeitraumVon)
            ->setBetriebszeitraumBis($betriebszeitraumBis)
            ->setMerkmalOldtimerkennzeichen($merkmalOldtimerkennzeichen)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen)
            ->setMerkmalGruenesKennzeichen($merkmalGruenesKennzeichen)
            ->setZeitpunktZuteilungGruenesKennzeichen($zeitpunktZuteilungGruenesKennzeichen)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setZeitpunktZuteilungKennzeichen($zeitpunktZuteilungKennzeichen);
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

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
     * Get ZeitpunktZuteilungGruenesKennzeichen value
     */
    public function getZeitpunktZuteilungGruenesKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungGruenesKennzeichen;
    }

    /**
     * Set ZeitpunktZuteilungGruenesKennzeichen value
     */
    public function setZeitpunktZuteilungGruenesKennzeichen(?string $zeitpunktZuteilungGruenesKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungGruenesKennzeichen = $zeitpunktZuteilungGruenesKennzeichen;

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
     * Get ZeitpunktZuteilungKennzeichen value
     */
    public function getZeitpunktZuteilungKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungKennzeichen;
    }

    /**
     * Set ZeitpunktZuteilungKennzeichen value
     */
    public function setZeitpunktZuteilungKennzeichen(?string $zeitpunktZuteilungKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungKennzeichen = $zeitpunktZuteilungKennzeichen;

        return $this;
    }
}
