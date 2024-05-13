<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FzRechercheAnfrage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FzRechercheAnfrage extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The Fahrzeugart
     */
    public ?string $Fahrzeugart = null;

    /**
     * The VerwendungFahrzeug
     */
    public ?string $VerwendungFahrzeug = null;

    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * The MerkmalOldtimer
     */
    public ?string $MerkmalOldtimer = null;

    /**
     * The MerkmalElektrokennzeichen
     */
    public ?string $MerkmalElektrokennzeichen = null;

    /**
     * The MerkmalWechselkennzeichen
     */
    public ?string $MerkmalWechselkennzeichen = null;

    /**
     * The KennzeichenZugehoerigesWechselkennzeichenBekannt
     */
    public ?string $KennzeichenZugehoerigesWechselkennzeichenBekannt = null;

    /**
     * The NameHalter
     */
    public ?string $NameHalter = null;

    /**
     * The ZustaendigeBehoerdeKreisschluessel
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;

    /**
     * The ZustaendigeBehoerdeZusatzziffer
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;

    /**
     * The AbDatensatzId
     */
    public ?string $AbDatensatzId = null;

    /**
     * The AnzahlDatensaetze
     */
    public ?string $AnzahlDatensaetze = null;

    /**
     * The SortierungSpalte
     */
    public ?string $SortierungSpalte = null;

    /**
     * The SortierungRichtung
     */
    public ?string $SortierungRichtung = null;

    /**
     * Constructor method for FzRechercheAnfrage
     *
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
     * Get Versicherungsunternehmensnummer value
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }

    /**
     * Set Versicherungsunternehmensnummer value
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;

        return $this;
    }

    /**
     * Get SchluesselHersteller value
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }

    /**
     * Set SchluesselHersteller value
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;

        return $this;
    }

    /**
     * Get SchluesselTyp value
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }

    /**
     * Set SchluesselTyp value
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;

        return $this;
    }

    /**
     * Get Fahrzeugart value
     */
    public function getFahrzeugart(): ?string
    {
        return $this->Fahrzeugart;
    }

    /**
     * Set Fahrzeugart value
     */
    public function setFahrzeugart(?string $fahrzeugart = null): self
    {
        $this->Fahrzeugart = $fahrzeugart;

        return $this;
    }

    /**
     * Get VerwendungFahrzeug value
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }

    /**
     * Set VerwendungFahrzeug value
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;

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
     * Get MerkmalOldtimer value
     */
    public function getMerkmalOldtimer(): ?string
    {
        return $this->MerkmalOldtimer;
    }

    /**
     * Set MerkmalOldtimer value
     */
    public function setMerkmalOldtimer(?string $merkmalOldtimer = null): self
    {
        $this->MerkmalOldtimer = $merkmalOldtimer;

        return $this;
    }

    /**
     * Get MerkmalElektrokennzeichen value
     */
    public function getMerkmalElektrokennzeichen(): ?string
    {
        return $this->MerkmalElektrokennzeichen;
    }

    /**
     * Set MerkmalElektrokennzeichen value
     */
    public function setMerkmalElektrokennzeichen(?string $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;

        return $this;
    }

    /**
     * Get MerkmalWechselkennzeichen value
     */
    public function getMerkmalWechselkennzeichen(): ?string
    {
        return $this->MerkmalWechselkennzeichen;
    }

    /**
     * Set MerkmalWechselkennzeichen value
     */
    public function setMerkmalWechselkennzeichen(?string $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;

        return $this;
    }

    /**
     * Get KennzeichenZugehoerigesWechselkennzeichenBekannt value
     */
    public function getKennzeichenZugehoerigesWechselkennzeichenBekannt(): ?string
    {
        return $this->KennzeichenZugehoerigesWechselkennzeichenBekannt;
    }

    /**
     * Set KennzeichenZugehoerigesWechselkennzeichenBekannt value
     */
    public function setKennzeichenZugehoerigesWechselkennzeichenBekannt(?string $kennzeichenZugehoerigesWechselkennzeichenBekannt = null): self
    {
        $this->KennzeichenZugehoerigesWechselkennzeichenBekannt = $kennzeichenZugehoerigesWechselkennzeichenBekannt;

        return $this;
    }

    /**
     * Get NameHalter value
     */
    public function getNameHalter(): ?string
    {
        return $this->NameHalter;
    }

    /**
     * Set NameHalter value
     */
    public function setNameHalter(?string $nameHalter = null): self
    {
        $this->NameHalter = $nameHalter;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }

    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }

    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;

        return $this;
    }

    /**
     * Get AbDatensatzId value
     */
    public function getAbDatensatzId(): ?string
    {
        return $this->AbDatensatzId;
    }

    /**
     * Set AbDatensatzId value
     */
    public function setAbDatensatzId(?string $abDatensatzId = null): self
    {
        $this->AbDatensatzId = $abDatensatzId;

        return $this;
    }

    /**
     * Get AnzahlDatensaetze value
     */
    public function getAnzahlDatensaetze(): ?string
    {
        return $this->AnzahlDatensaetze;
    }

    /**
     * Set AnzahlDatensaetze value
     */
    public function setAnzahlDatensaetze(?string $anzahlDatensaetze = null): self
    {
        $this->AnzahlDatensaetze = $anzahlDatensaetze;

        return $this;
    }

    /**
     * Get SortierungSpalte value
     */
    public function getSortierungSpalte(): ?string
    {
        return $this->SortierungSpalte;
    }

    /**
     * Set SortierungSpalte value
     */
    public function setSortierungSpalte(?string $sortierungSpalte = null): self
    {
        $this->SortierungSpalte = $sortierungSpalte;

        return $this;
    }

    /**
     * Get SortierungRichtung value
     */
    public function getSortierungRichtung(): ?string
    {
        return $this->SortierungRichtung;
    }

    /**
     * Set SortierungRichtung value
     */
    public function setSortierungRichtung(?string $sortierungRichtung = null): self
    {
        $this->SortierungRichtung = $sortierungRichtung;

        return $this;
    }
}
