<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VuArbeitsgang StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VuArbeitsgang extends AbstractStructBase
{
    /**
     * The Mitteilungsart
     */
    public ?string $Mitteilungsart = null;

    /**
     * The Storno
     */
    public ?string $Storno = null;

    /**
     * The AenderungHalter
     */
    public ?string $AenderungHalter = null;

    /**
     * The AenderungVersicherung
     */
    public ?string $AenderungVersicherung = null;

    /**
     * The AenderungKennzeichen
     */
    public ?string $AenderungKennzeichen = null;

    /**
     * The AenderungFahrzeugklasse
     */
    public ?string $AenderungFahrzeugklasse = null;

    /**
     * The AenderungMerkmalOldtimer
     */
    public ?string $AenderungMerkmalOldtimer = null;

    /**
     * The AenderungVerwendungFahrzeug
     */
    public ?string $AenderungVerwendungFahrzeug = null;

    /**
     * The AenderungMerkmalElektrokennzeichen
     */
    public ?string $AenderungMerkmalElektrokennzeichen = null;

    /**
     * Constructor method for VuArbeitsgang
     *
     * @uses VuArbeitsgang::setMitteilungsart()
     * @uses VuArbeitsgang::setStorno()
     * @uses VuArbeitsgang::setAenderungHalter()
     * @uses VuArbeitsgang::setAenderungVersicherung()
     * @uses VuArbeitsgang::setAenderungKennzeichen()
     * @uses VuArbeitsgang::setAenderungFahrzeugklasse()
     * @uses VuArbeitsgang::setAenderungMerkmalOldtimer()
     * @uses VuArbeitsgang::setAenderungVerwendungFahrzeug()
     * @uses VuArbeitsgang::setAenderungMerkmalElektrokennzeichen()
     */
    public function __construct(?string $mitteilungsart = null, ?string $storno = null, ?string $aenderungHalter = null, ?string $aenderungVersicherung = null, ?string $aenderungKennzeichen = null, ?string $aenderungFahrzeugklasse = null, ?string $aenderungMerkmalOldtimer = null, ?string $aenderungVerwendungFahrzeug = null, ?string $aenderungMerkmalElektrokennzeichen = null)
    {
        $this
            ->setMitteilungsart($mitteilungsart)
            ->setStorno($storno)
            ->setAenderungHalter($aenderungHalter)
            ->setAenderungVersicherung($aenderungVersicherung)
            ->setAenderungKennzeichen($aenderungKennzeichen)
            ->setAenderungFahrzeugklasse($aenderungFahrzeugklasse)
            ->setAenderungMerkmalOldtimer($aenderungMerkmalOldtimer)
            ->setAenderungVerwendungFahrzeug($aenderungVerwendungFahrzeug)
            ->setAenderungMerkmalElektrokennzeichen($aenderungMerkmalElektrokennzeichen);
    }

    /**
     * Get Mitteilungsart value
     */
    public function getMitteilungsart(): ?string
    {
        return $this->Mitteilungsart;
    }

    /**
     * Set Mitteilungsart value
     */
    public function setMitteilungsart(?string $mitteilungsart = null): self
    {
        $this->Mitteilungsart = $mitteilungsart;

        return $this;
    }

    /**
     * Get Storno value
     */
    public function getStorno(): ?string
    {
        return $this->Storno;
    }

    /**
     * Set Storno value
     */
    public function setStorno(?string $storno = null): self
    {
        $this->Storno = $storno;

        return $this;
    }

    /**
     * Get AenderungHalter value
     */
    public function getAenderungHalter(): ?string
    {
        return $this->AenderungHalter;
    }

    /**
     * Set AenderungHalter value
     */
    public function setAenderungHalter(?string $aenderungHalter = null): self
    {
        $this->AenderungHalter = $aenderungHalter;

        return $this;
    }

    /**
     * Get AenderungVersicherung value
     */
    public function getAenderungVersicherung(): ?string
    {
        return $this->AenderungVersicherung;
    }

    /**
     * Set AenderungVersicherung value
     */
    public function setAenderungVersicherung(?string $aenderungVersicherung = null): self
    {
        $this->AenderungVersicherung = $aenderungVersicherung;

        return $this;
    }

    /**
     * Get AenderungKennzeichen value
     */
    public function getAenderungKennzeichen(): ?string
    {
        return $this->AenderungKennzeichen;
    }

    /**
     * Set AenderungKennzeichen value
     */
    public function setAenderungKennzeichen(?string $aenderungKennzeichen = null): self
    {
        $this->AenderungKennzeichen = $aenderungKennzeichen;

        return $this;
    }

    /**
     * Get AenderungFahrzeugklasse value
     */
    public function getAenderungFahrzeugklasse(): ?string
    {
        return $this->AenderungFahrzeugklasse;
    }

    /**
     * Set AenderungFahrzeugklasse value
     */
    public function setAenderungFahrzeugklasse(?string $aenderungFahrzeugklasse = null): self
    {
        $this->AenderungFahrzeugklasse = $aenderungFahrzeugklasse;

        return $this;
    }

    /**
     * Get AenderungMerkmalOldtimer value
     */
    public function getAenderungMerkmalOldtimer(): ?string
    {
        return $this->AenderungMerkmalOldtimer;
    }

    /**
     * Set AenderungMerkmalOldtimer value
     */
    public function setAenderungMerkmalOldtimer(?string $aenderungMerkmalOldtimer = null): self
    {
        $this->AenderungMerkmalOldtimer = $aenderungMerkmalOldtimer;

        return $this;
    }

    /**
     * Get AenderungVerwendungFahrzeug value
     */
    public function getAenderungVerwendungFahrzeug(): ?string
    {
        return $this->AenderungVerwendungFahrzeug;
    }

    /**
     * Set AenderungVerwendungFahrzeug value
     */
    public function setAenderungVerwendungFahrzeug(?string $aenderungVerwendungFahrzeug = null): self
    {
        $this->AenderungVerwendungFahrzeug = $aenderungVerwendungFahrzeug;

        return $this;
    }

    /**
     * Get AenderungMerkmalElektrokennzeichen value
     */
    public function getAenderungMerkmalElektrokennzeichen(): ?string
    {
        return $this->AenderungMerkmalElektrokennzeichen;
    }

    /**
     * Set AenderungMerkmalElektrokennzeichen value
     */
    public function setAenderungMerkmalElektrokennzeichen(?string $aenderungMerkmalElektrokennzeichen = null): self
    {
        $this->AenderungMerkmalElektrokennzeichen = $aenderungMerkmalElektrokennzeichen;

        return $this;
    }
}
