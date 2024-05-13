<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FzRechercheAnfrage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FzRechercheAnfrage extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
    /**
     * The SchluesselTyp
     * @var string|null
     */
    public ?string $SchluesselTyp = null;
    /**
     * The Fahrzeugart
     * @var string|null
     */
    public ?string $Fahrzeugart = null;
    /**
     * The VerwendungFahrzeug
     * @var string|null
     */
    public ?string $VerwendungFahrzeug = null;
    /**
     * The MerkmalKennzeichenart
     * @var string|null
     */
    public ?string $MerkmalKennzeichenart = null;
    /**
     * The MerkmalOldtimer
     * @var string|null
     */
    public ?string $MerkmalOldtimer = null;
    /**
     * The MerkmalElektrokennzeichen
     * @var string|null
     */
    public ?string $MerkmalElektrokennzeichen = null;
    /**
     * The MerkmalWechselkennzeichen
     * @var string|null
     */
    public ?string $MerkmalWechselkennzeichen = null;
    /**
     * The KennzeichenZugehoerigesWechselkennzeichenBekannt
     * @var string|null
     */
    public ?string $KennzeichenZugehoerigesWechselkennzeichenBekannt = null;
    /**
     * The NameHalter
     * @var string|null
     */
    public ?string $NameHalter = null;
    /**
     * The ZustaendigeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;
    /**
     * The ZustaendigeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;
    /**
     * The AbDatensatzId
     * @var string|null
     */
    public ?string $AbDatensatzId = null;
    /**
     * The AnzahlDatensaetze
     * @var string|null
     */
    public ?string $AnzahlDatensaetze = null;
    /**
     * The SortierungSpalte
     * @var string|null
     */
    public ?string $SortierungSpalte = null;
    /**
     * The SortierungRichtung
     * @var string|null
     */
    public ?string $SortierungRichtung = null;
    /**
     * Constructor method for FzRechercheAnfrage
     * @uses FzRechercheAnfrage::setKennzeichen()
     * @uses FzRechercheAnfrage::setVersicherungsunternehmensnummer()
     * @uses FzRechercheAnfrage::setSchluesselHersteller()
     * @uses FzRechercheAnfrage::setSchluesselTyp()
     * @uses FzRechercheAnfrage::setFahrzeugart()
     * @uses FzRechercheAnfrage::setVerwendungFahrzeug()
     * @uses FzRechercheAnfrage::setMerkmalKennzeichenart()
     * @uses FzRechercheAnfrage::setMerkmalOldtimer()
     * @uses FzRechercheAnfrage::setMerkmalElektrokennzeichen()
     * @uses FzRechercheAnfrage::setMerkmalWechselkennzeichen()
     * @uses FzRechercheAnfrage::setKennzeichenZugehoerigesWechselkennzeichenBekannt()
     * @uses FzRechercheAnfrage::setNameHalter()
     * @uses FzRechercheAnfrage::setZustaendigeBehoerdeKreisschluessel()
     * @uses FzRechercheAnfrage::setZustaendigeBehoerdeZusatzziffer()
     * @uses FzRechercheAnfrage::setAbDatensatzId()
     * @uses FzRechercheAnfrage::setAnzahlDatensaetze()
     * @uses FzRechercheAnfrage::setSortierungSpalte()
     * @uses FzRechercheAnfrage::setSortierungRichtung()
     * @param string $kennzeichen
     * @param string $versicherungsunternehmensnummer
     * @param string $schluesselHersteller
     * @param string $schluesselTyp
     * @param string $fahrzeugart
     * @param string $verwendungFahrzeug
     * @param string $merkmalKennzeichenart
     * @param string $merkmalOldtimer
     * @param string $merkmalElektrokennzeichen
     * @param string $merkmalWechselkennzeichen
     * @param string $kennzeichenZugehoerigesWechselkennzeichenBekannt
     * @param string $nameHalter
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @param string $abDatensatzId
     * @param string $anzahlDatensaetze
     * @param string $sortierungSpalte
     * @param string $sortierungRichtung
     */
    public function __construct(?string $kennzeichen = null, ?string $versicherungsunternehmensnummer = null, ?string $schluesselHersteller = null, ?string $schluesselTyp = null, ?string $fahrzeugart = null, ?string $verwendungFahrzeug = null, ?string $merkmalKennzeichenart = null, ?string $merkmalOldtimer = null, ?string $merkmalElektrokennzeichen = null, ?string $merkmalWechselkennzeichen = null, ?string $kennzeichenZugehoerigesWechselkennzeichenBekannt = null, ?string $nameHalter = null, ?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null, ?string $abDatensatzId = null, ?string $anzahlDatensaetze = null, ?string $sortierungSpalte = null, ?string $sortierungRichtung = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setSchluesselHersteller($schluesselHersteller)
            ->setSchluesselTyp($schluesselTyp)
            ->setFahrzeugart($fahrzeugart)
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setMerkmalOldtimer($merkmalOldtimer)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen)
            ->setKennzeichenZugehoerigesWechselkennzeichenBekannt($kennzeichenZugehoerigesWechselkennzeichenBekannt)
            ->setNameHalter($nameHalter)
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer)
            ->setAbDatensatzId($abDatensatzId)
            ->setAnzahlDatensaetze($anzahlDatensaetze)
            ->setSortierungSpalte($sortierungSpalte)
            ->setSortierungRichtung($sortierungRichtung);
    }
    /**
     * Get Kennzeichen value
     * @return string|null
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param string $kennzeichen
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Versicherungsunternehmensnummer value
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
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
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;
        
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
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setFahrzeugart(?string $fahrzeugart = null): self
    {
        $this->Fahrzeugart = $fahrzeugart;
        
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
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;
        
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
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;
        
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
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setMerkmalOldtimer(?string $merkmalOldtimer = null): self
    {
        $this->MerkmalOldtimer = $merkmalOldtimer;
        
        return $this;
    }
    /**
     * Get MerkmalElektrokennzeichen value
     * @return string|null
     */
    public function getMerkmalElektrokennzeichen(): ?string
    {
        return $this->MerkmalElektrokennzeichen;
    }
    /**
     * Set MerkmalElektrokennzeichen value
     * @param string $merkmalElektrokennzeichen
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setMerkmalElektrokennzeichen(?string $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalWechselkennzeichen value
     * @return string|null
     */
    public function getMerkmalWechselkennzeichen(): ?string
    {
        return $this->MerkmalWechselkennzeichen;
    }
    /**
     * Set MerkmalWechselkennzeichen value
     * @param string $merkmalWechselkennzeichen
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setMerkmalWechselkennzeichen(?string $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get KennzeichenZugehoerigesWechselkennzeichenBekannt value
     * @return string|null
     */
    public function getKennzeichenZugehoerigesWechselkennzeichenBekannt(): ?string
    {
        return $this->KennzeichenZugehoerigesWechselkennzeichenBekannt;
    }
    /**
     * Set KennzeichenZugehoerigesWechselkennzeichenBekannt value
     * @param string $kennzeichenZugehoerigesWechselkennzeichenBekannt
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setKennzeichenZugehoerigesWechselkennzeichenBekannt(?string $kennzeichenZugehoerigesWechselkennzeichenBekannt = null): self
    {
        $this->KennzeichenZugehoerigesWechselkennzeichenBekannt = $kennzeichenZugehoerigesWechselkennzeichenBekannt;
        
        return $this;
    }
    /**
     * Get NameHalter value
     * @return string|null
     */
    public function getNameHalter(): ?string
    {
        return $this->NameHalter;
    }
    /**
     * Set NameHalter value
     * @param string $nameHalter
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setNameHalter(?string $nameHalter = null): self
    {
        $this->NameHalter = $nameHalter;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }
    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }
    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;
        
        return $this;
    }
    /**
     * Get AbDatensatzId value
     * @return string|null
     */
    public function getAbDatensatzId(): ?string
    {
        return $this->AbDatensatzId;
    }
    /**
     * Set AbDatensatzId value
     * @param string $abDatensatzId
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setAbDatensatzId(?string $abDatensatzId = null): self
    {
        $this->AbDatensatzId = $abDatensatzId;
        
        return $this;
    }
    /**
     * Get AnzahlDatensaetze value
     * @return string|null
     */
    public function getAnzahlDatensaetze(): ?string
    {
        return $this->AnzahlDatensaetze;
    }
    /**
     * Set AnzahlDatensaetze value
     * @param string $anzahlDatensaetze
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setAnzahlDatensaetze(?string $anzahlDatensaetze = null): self
    {
        $this->AnzahlDatensaetze = $anzahlDatensaetze;
        
        return $this;
    }
    /**
     * Get SortierungSpalte value
     * @return string|null
     */
    public function getSortierungSpalte(): ?string
    {
        return $this->SortierungSpalte;
    }
    /**
     * Set SortierungSpalte value
     * @param string $sortierungSpalte
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setSortierungSpalte(?string $sortierungSpalte = null): self
    {
        $this->SortierungSpalte = $sortierungSpalte;
        
        return $this;
    }
    /**
     * Get SortierungRichtung value
     * @return string|null
     */
    public function getSortierungRichtung(): ?string
    {
        return $this->SortierungRichtung;
    }
    /**
     * Set SortierungRichtung value
     * @param string $sortierungRichtung
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage
     */
    public function setSortierungRichtung(?string $sortierungRichtung = null): self
    {
        $this->SortierungRichtung = $sortierungRichtung;
        
        return $this;
    }
}
