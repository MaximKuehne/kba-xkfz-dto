<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fahrzeug StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Fahrzeug extends AbstractStructBase
{
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
    /**
     * The Hersteller
     * @var string|null
     */
    public ?string $Hersteller = null;
    /**
     * The SchluesselTyp
     * @var string|null
     */
    public ?string $SchluesselTyp = null;
    /**
     * The SchluesselVarianteVersion
     * @var string|null
     */
    public ?string $SchluesselVarianteVersion = null;
    /**
     * The Fahrzeugart
     * @var string|null
     */
    public ?string $Fahrzeugart = null;
    /**
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
    /**
     * The SchluesselAufbau
     * @var string|null
     */
    public ?string $SchluesselAufbau = null;
    /**
     * The TextFahrzeugklasse
     * @var string|null
     */
    public ?string $TextFahrzeugklasse = null;
    /**
     * The TextAufbau
     * @var string|null
     */
    public ?string $TextAufbau = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The Hubraum
     * @var string|null
     */
    public ?string $Hubraum = null;
    /**
     * The NennleistungKw
     * @var string|null
     */
    public ?string $NennleistungKw = null;
    /**
     * The MerkmalOldtimer
     * @var string|null
     */
    public ?string $MerkmalOldtimer = null;
    /**
     * The VerwendungFahrzeug
     * @var string|null
     */
    public ?string $VerwendungFahrzeug = null;
    /**
     * The ListeVerwendungFahrzeug
     * @var \THAG\XKfz\StructType\ListeVerwendungFahrzeug|null
     */
    public ?\THAG\XKfz\StructType\ListeVerwendungFahrzeug $ListeVerwendungFahrzeug = null;
    /**
     * Constructor method for Fahrzeug
     * @uses Fahrzeug::setSchluesselHersteller()
     * @uses Fahrzeug::setHersteller()
     * @uses Fahrzeug::setSchluesselTyp()
     * @uses Fahrzeug::setSchluesselVarianteVersion()
     * @uses Fahrzeug::setFahrzeugart()
     * @uses Fahrzeug::setSchluesselFahrzeugklasse()
     * @uses Fahrzeug::setSchluesselAufbau()
     * @uses Fahrzeug::setTextFahrzeugklasse()
     * @uses Fahrzeug::setTextAufbau()
     * @uses Fahrzeug::setFahrzeugidentifizierungsnummer()
     * @uses Fahrzeug::setHubraum()
     * @uses Fahrzeug::setNennleistungKw()
     * @uses Fahrzeug::setMerkmalOldtimer()
     * @uses Fahrzeug::setVerwendungFahrzeug()
     * @uses Fahrzeug::setListeVerwendungFahrzeug()
     * @param string $schluesselHersteller
     * @param string $hersteller
     * @param string $schluesselTyp
     * @param string $schluesselVarianteVersion
     * @param string $fahrzeugart
     * @param string $schluesselFahrzeugklasse
     * @param string $schluesselAufbau
     * @param string $textFahrzeugklasse
     * @param string $textAufbau
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $hubraum
     * @param string $nennleistungKw
     * @param string $merkmalOldtimer
     * @param string $verwendungFahrzeug
     * @param \THAG\XKfz\StructType\ListeVerwendungFahrzeug $listeVerwendungFahrzeug
     */
    public function __construct(?string $schluesselHersteller = null, ?string $hersteller = null, ?string $schluesselTyp = null, ?string $schluesselVarianteVersion = null, ?string $fahrzeugart = null, ?string $schluesselFahrzeugklasse = null, ?string $schluesselAufbau = null, ?string $textFahrzeugklasse = null, ?string $textAufbau = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $hubraum = null, ?string $nennleistungKw = null, ?string $merkmalOldtimer = null, ?string $verwendungFahrzeug = null, ?\THAG\XKfz\StructType\ListeVerwendungFahrzeug $listeVerwendungFahrzeug = null)
    {
        $this
            ->setSchluesselHersteller($schluesselHersteller)
            ->setHersteller($hersteller)
            ->setSchluesselTyp($schluesselTyp)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setFahrzeugart($fahrzeugart)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselAufbau($schluesselAufbau)
            ->setTextFahrzeugklasse($textFahrzeugklasse)
            ->setTextAufbau($textAufbau)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setHubraum($hubraum)
            ->setNennleistungKw($nennleistungKw)
            ->setMerkmalOldtimer($merkmalOldtimer)
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setListeVerwendungFahrzeug($listeVerwendungFahrzeug);
    }
    /**
     * Get SchluesselHersteller value
     * @return string|null
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }
    /**
     * Set SchluesselHersteller value
     * @param string $schluesselHersteller
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
        return $this;
    }
    /**
     * Get Hersteller value
     * @return string|null
     */
    public function getHersteller(): ?string
    {
        return $this->Hersteller;
    }
    /**
     * Set Hersteller value
     * @param string $hersteller
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setHersteller(?string $hersteller = null): self
    {
        $this->Hersteller = $hersteller;
        
        return $this;
    }
    /**
     * Get SchluesselTyp value
     * @return string|null
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }
    /**
     * Set SchluesselTyp value
     * @param string $schluesselTyp
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;
        
        return $this;
    }
    /**
     * Get SchluesselVarianteVersion value
     * @return string|null
     */
    public function getSchluesselVarianteVersion(): ?string
    {
        return $this->SchluesselVarianteVersion;
    }
    /**
     * Set SchluesselVarianteVersion value
     * @param string $schluesselVarianteVersion
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;
        
        return $this;
    }
    /**
     * Get Fahrzeugart value
     * @return string|null
     */
    public function getFahrzeugart(): ?string
    {
        return $this->Fahrzeugart;
    }
    /**
     * Set Fahrzeugart value
     * @param string $fahrzeugart
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setFahrzeugart(?string $fahrzeugart = null): self
    {
        $this->Fahrzeugart = $fahrzeugart;
        
        return $this;
    }
    /**
     * Get SchluesselFahrzeugklasse value
     * @return string|null
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }
    /**
     * Set SchluesselFahrzeugklasse value
     * @param string $schluesselFahrzeugklasse
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get SchluesselAufbau value
     * @return string|null
     */
    public function getSchluesselAufbau(): ?string
    {
        return $this->SchluesselAufbau;
    }
    /**
     * Set SchluesselAufbau value
     * @param string $schluesselAufbau
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setSchluesselAufbau(?string $schluesselAufbau = null): self
    {
        $this->SchluesselAufbau = $schluesselAufbau;
        
        return $this;
    }
    /**
     * Get TextFahrzeugklasse value
     * @return string|null
     */
    public function getTextFahrzeugklasse(): ?string
    {
        return $this->TextFahrzeugklasse;
    }
    /**
     * Set TextFahrzeugklasse value
     * @param string $textFahrzeugklasse
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get TextAufbau value
     * @return string|null
     */
    public function getTextAufbau(): ?string
    {
        return $this->TextAufbau;
    }
    /**
     * Set TextAufbau value
     * @param string $textAufbau
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setTextAufbau(?string $textAufbau = null): self
    {
        $this->TextAufbau = $textAufbau;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }
    /**
     * Set Fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get Hubraum value
     * @return string|null
     */
    public function getHubraum(): ?string
    {
        return $this->Hubraum;
    }
    /**
     * Set Hubraum value
     * @param string $hubraum
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setHubraum(?string $hubraum = null): self
    {
        $this->Hubraum = $hubraum;
        
        return $this;
    }
    /**
     * Get NennleistungKw value
     * @return string|null
     */
    public function getNennleistungKw(): ?string
    {
        return $this->NennleistungKw;
    }
    /**
     * Set NennleistungKw value
     * @param string $nennleistungKw
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setNennleistungKw(?string $nennleistungKw = null): self
    {
        $this->NennleistungKw = $nennleistungKw;
        
        return $this;
    }
    /**
     * Get MerkmalOldtimer value
     * @return string|null
     */
    public function getMerkmalOldtimer(): ?string
    {
        return $this->MerkmalOldtimer;
    }
    /**
     * Set MerkmalOldtimer value
     * @param string $merkmalOldtimer
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setMerkmalOldtimer(?string $merkmalOldtimer = null): self
    {
        $this->MerkmalOldtimer = $merkmalOldtimer;
        
        return $this;
    }
    /**
     * Get VerwendungFahrzeug value
     * @return string|null
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }
    /**
     * Set VerwendungFahrzeug value
     * @param string $verwendungFahrzeug
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;
        
        return $this;
    }
    /**
     * Get ListeVerwendungFahrzeug value
     * @return \THAG\XKfz\StructType\ListeVerwendungFahrzeug|null
     */
    public function getListeVerwendungFahrzeug(): ?\THAG\XKfz\StructType\ListeVerwendungFahrzeug
    {
        return $this->ListeVerwendungFahrzeug;
    }
    /**
     * Set ListeVerwendungFahrzeug value
     * @param \THAG\XKfz\StructType\ListeVerwendungFahrzeug $listeVerwendungFahrzeug
     * @return \THAG\XKfz\StructType\Fahrzeug
     */
    public function setListeVerwendungFahrzeug(?\THAG\XKfz\StructType\ListeVerwendungFahrzeug $listeVerwendungFahrzeug = null): self
    {
        $this->ListeVerwendungFahrzeug = $listeVerwendungFahrzeug;
        
        return $this;
    }
}
