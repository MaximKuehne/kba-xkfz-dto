<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VuArbeitsgang StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VuArbeitsgang extends AbstractStructBase
{
    /**
     * The Mitteilungsart
     * @var string|null
     */
    public ?string $Mitteilungsart = null;
    /**
     * The Storno
     * @var string|null
     */
    public ?string $Storno = null;
    /**
     * The AenderungHalter
     * @var string|null
     */
    public ?string $AenderungHalter = null;
    /**
     * The AenderungVersicherung
     * @var string|null
     */
    public ?string $AenderungVersicherung = null;
    /**
     * The AenderungKennzeichen
     * @var string|null
     */
    public ?string $AenderungKennzeichen = null;
    /**
     * The AenderungFahrzeugklasse
     * @var string|null
     */
    public ?string $AenderungFahrzeugklasse = null;
    /**
     * The AenderungMerkmalOldtimer
     * @var string|null
     */
    public ?string $AenderungMerkmalOldtimer = null;
    /**
     * The AenderungVerwendungFahrzeug
     * @var string|null
     */
    public ?string $AenderungVerwendungFahrzeug = null;
    /**
     * The AenderungMerkmalElektrokennzeichen
     * @var string|null
     */
    public ?string $AenderungMerkmalElektrokennzeichen = null;
    /**
     * Constructor method for VuArbeitsgang
     * @uses VuArbeitsgang::setMitteilungsart()
     * @uses VuArbeitsgang::setStorno()
     * @uses VuArbeitsgang::setAenderungHalter()
     * @uses VuArbeitsgang::setAenderungVersicherung()
     * @uses VuArbeitsgang::setAenderungKennzeichen()
     * @uses VuArbeitsgang::setAenderungFahrzeugklasse()
     * @uses VuArbeitsgang::setAenderungMerkmalOldtimer()
     * @uses VuArbeitsgang::setAenderungVerwendungFahrzeug()
     * @uses VuArbeitsgang::setAenderungMerkmalElektrokennzeichen()
     * @param string $mitteilungsart
     * @param string $storno
     * @param string $aenderungHalter
     * @param string $aenderungVersicherung
     * @param string $aenderungKennzeichen
     * @param string $aenderungFahrzeugklasse
     * @param string $aenderungMerkmalOldtimer
     * @param string $aenderungVerwendungFahrzeug
     * @param string $aenderungMerkmalElektrokennzeichen
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
     * @return string|null
     */
    public function getMitteilungsart(): ?string
    {
        return $this->Mitteilungsart;
    }
    /**
     * Set Mitteilungsart value
     * @param string $mitteilungsart
     * @return \THAG\XKfz\StructType\VuArbeitsgang
     */
    public function setMitteilungsart(?string $mitteilungsart = null): self
    {
        $this->Mitteilungsart = $mitteilungsart;
        
        return $this;
    }
    /**
     * Get Storno value
     * @return string|null
     */
    public function getStorno(): ?string
    {
        return $this->Storno;
    }
    /**
     * Set Storno value
     * @param string $storno
     * @return \THAG\XKfz\StructType\VuArbeitsgang
     */
    public function setStorno(?string $storno = null): self
    {
        $this->Storno = $storno;
        
        return $this;
    }
    /**
     * Get AenderungHalter value
     * @return string|null
     */
    public function getAenderungHalter(): ?string
    {
        return $this->AenderungHalter;
    }
    /**
     * Set AenderungHalter value
     * @param string $aenderungHalter
     * @return \THAG\XKfz\StructType\VuArbeitsgang
     */
    public function setAenderungHalter(?string $aenderungHalter = null): self
    {
        $this->AenderungHalter = $aenderungHalter;
        
        return $this;
    }
    /**
     * Get AenderungVersicherung value
     * @return string|null
     */
    public function getAenderungVersicherung(): ?string
    {
        return $this->AenderungVersicherung;
    }
    /**
     * Set AenderungVersicherung value
     * @param string $aenderungVersicherung
     * @return \THAG\XKfz\StructType\VuArbeitsgang
     */
    public function setAenderungVersicherung(?string $aenderungVersicherung = null): self
    {
        $this->AenderungVersicherung = $aenderungVersicherung;
        
        return $this;
    }
    /**
     * Get AenderungKennzeichen value
     * @return string|null
     */
    public function getAenderungKennzeichen(): ?string
    {
        return $this->AenderungKennzeichen;
    }
    /**
     * Set AenderungKennzeichen value
     * @param string $aenderungKennzeichen
     * @return \THAG\XKfz\StructType\VuArbeitsgang
     */
    public function setAenderungKennzeichen(?string $aenderungKennzeichen = null): self
    {
        $this->AenderungKennzeichen = $aenderungKennzeichen;
        
        return $this;
    }
    /**
     * Get AenderungFahrzeugklasse value
     * @return string|null
     */
    public function getAenderungFahrzeugklasse(): ?string
    {
        return $this->AenderungFahrzeugklasse;
    }
    /**
     * Set AenderungFahrzeugklasse value
     * @param string $aenderungFahrzeugklasse
     * @return \THAG\XKfz\StructType\VuArbeitsgang
     */
    public function setAenderungFahrzeugklasse(?string $aenderungFahrzeugklasse = null): self
    {
        $this->AenderungFahrzeugklasse = $aenderungFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get AenderungMerkmalOldtimer value
     * @return string|null
     */
    public function getAenderungMerkmalOldtimer(): ?string
    {
        return $this->AenderungMerkmalOldtimer;
    }
    /**
     * Set AenderungMerkmalOldtimer value
     * @param string $aenderungMerkmalOldtimer
     * @return \THAG\XKfz\StructType\VuArbeitsgang
     */
    public function setAenderungMerkmalOldtimer(?string $aenderungMerkmalOldtimer = null): self
    {
        $this->AenderungMerkmalOldtimer = $aenderungMerkmalOldtimer;
        
        return $this;
    }
    /**
     * Get AenderungVerwendungFahrzeug value
     * @return string|null
     */
    public function getAenderungVerwendungFahrzeug(): ?string
    {
        return $this->AenderungVerwendungFahrzeug;
    }
    /**
     * Set AenderungVerwendungFahrzeug value
     * @param string $aenderungVerwendungFahrzeug
     * @return \THAG\XKfz\StructType\VuArbeitsgang
     */
    public function setAenderungVerwendungFahrzeug(?string $aenderungVerwendungFahrzeug = null): self
    {
        $this->AenderungVerwendungFahrzeug = $aenderungVerwendungFahrzeug;
        
        return $this;
    }
    /**
     * Get AenderungMerkmalElektrokennzeichen value
     * @return string|null
     */
    public function getAenderungMerkmalElektrokennzeichen(): ?string
    {
        return $this->AenderungMerkmalElektrokennzeichen;
    }
    /**
     * Set AenderungMerkmalElektrokennzeichen value
     * @param string $aenderungMerkmalElektrokennzeichen
     * @return \THAG\XKfz\StructType\VuArbeitsgang
     */
    public function setAenderungMerkmalElektrokennzeichen(?string $aenderungMerkmalElektrokennzeichen = null): self
    {
        $this->AenderungMerkmalElektrokennzeichen = $aenderungMerkmalElektrokennzeichen;
        
        return $this;
    }
}
