<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NutzerRechercheAnfrage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NutzerRechercheAnfrage extends AbstractStructBase
{
    /**
     * The Nutzerkennung
     * @var string|null
     */
    public ?string $Nutzerkennung = null;
    /**
     * The Gruppennummer
     * @var string|null
     */
    public ?string $Gruppennummer = null;
    /**
     * The Nachname
     * @var string|null
     */
    public ?string $Nachname = null;
    /**
     * The Vorname
     * @var string|null
     */
    public ?string $Vorname = null;
    /**
     * The Namensbestandteil
     * @var string|null
     */
    public ?string $Namensbestandteil = null;
    /**
     * The Zugangsberechtigung
     * @var string|null
     */
    public ?string $Zugangsberechtigung = null;
    /**
     * The Wohnort
     * @var string|null
     */
    public ?string $Wohnort = null;
    /**
     * The Telefonnummer
     * @var string|null
     */
    public ?string $Telefonnummer = null;
    /**
     * The IHKRegistrierungsnummer
     * @var string|null
     */
    public ?string $IHKRegistrierungsnummer = null;
    /**
     * The VUNutzerId
     * @var string|null
     */
    public ?string $VUNutzerId = null;
    /**
     * The NutzerAngemeldet
     * @var string|null
     */
    public ?string $NutzerAngemeldet = null;
    /**
     * The NutzerkennungIndividuell
     * @var string|null
     */
    public ?string $NutzerkennungIndividuell = null;
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
     * Constructor method for NutzerRechercheAnfrage
     * @uses NutzerRechercheAnfrage::setNutzerkennung()
     * @uses NutzerRechercheAnfrage::setGruppennummer()
     * @uses NutzerRechercheAnfrage::setNachname()
     * @uses NutzerRechercheAnfrage::setVorname()
     * @uses NutzerRechercheAnfrage::setNamensbestandteil()
     * @uses NutzerRechercheAnfrage::setZugangsberechtigung()
     * @uses NutzerRechercheAnfrage::setWohnort()
     * @uses NutzerRechercheAnfrage::setTelefonnummer()
     * @uses NutzerRechercheAnfrage::setIHKRegistrierungsnummer()
     * @uses NutzerRechercheAnfrage::setVUNutzerId()
     * @uses NutzerRechercheAnfrage::setNutzerAngemeldet()
     * @uses NutzerRechercheAnfrage::setNutzerkennungIndividuell()
     * @uses NutzerRechercheAnfrage::setAbDatensatzId()
     * @uses NutzerRechercheAnfrage::setAnzahlDatensaetze()
     * @uses NutzerRechercheAnfrage::setSortierungSpalte()
     * @uses NutzerRechercheAnfrage::setSortierungRichtung()
     * @param string $nutzerkennung
     * @param string $gruppennummer
     * @param string $nachname
     * @param string $vorname
     * @param string $namensbestandteil
     * @param string $zugangsberechtigung
     * @param string $wohnort
     * @param string $telefonnummer
     * @param string $iHKRegistrierungsnummer
     * @param string $vUNutzerId
     * @param string $nutzerAngemeldet
     * @param string $nutzerkennungIndividuell
     * @param string $abDatensatzId
     * @param string $anzahlDatensaetze
     * @param string $sortierungSpalte
     * @param string $sortierungRichtung
     */
    public function __construct(?string $nutzerkennung = null, ?string $gruppennummer = null, ?string $nachname = null, ?string $vorname = null, ?string $namensbestandteil = null, ?string $zugangsberechtigung = null, ?string $wohnort = null, ?string $telefonnummer = null, ?string $iHKRegistrierungsnummer = null, ?string $vUNutzerId = null, ?string $nutzerAngemeldet = null, ?string $nutzerkennungIndividuell = null, ?string $abDatensatzId = null, ?string $anzahlDatensaetze = null, ?string $sortierungSpalte = null, ?string $sortierungRichtung = null)
    {
        $this
            ->setNutzerkennung($nutzerkennung)
            ->setGruppennummer($gruppennummer)
            ->setNachname($nachname)
            ->setVorname($vorname)
            ->setNamensbestandteil($namensbestandteil)
            ->setZugangsberechtigung($zugangsberechtigung)
            ->setWohnort($wohnort)
            ->setTelefonnummer($telefonnummer)
            ->setIHKRegistrierungsnummer($iHKRegistrierungsnummer)
            ->setVUNutzerId($vUNutzerId)
            ->setNutzerAngemeldet($nutzerAngemeldet)
            ->setNutzerkennungIndividuell($nutzerkennungIndividuell)
            ->setAbDatensatzId($abDatensatzId)
            ->setAnzahlDatensaetze($anzahlDatensaetze)
            ->setSortierungSpalte($sortierungSpalte)
            ->setSortierungRichtung($sortierungRichtung);
    }
    /**
     * Get Nutzerkennung value
     * @return string|null
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }
    /**
     * Set Nutzerkennung value
     * @param string $nutzerkennung
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;
        
        return $this;
    }
    /**
     * Get Gruppennummer value
     * @return string|null
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }
    /**
     * Set Gruppennummer value
     * @param string $gruppennummer
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;
        
        return $this;
    }
    /**
     * Get Nachname value
     * @return string|null
     */
    public function getNachname(): ?string
    {
        return $this->Nachname;
    }
    /**
     * Set Nachname value
     * @param string $nachname
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setNachname(?string $nachname = null): self
    {
        $this->Nachname = $nachname;
        
        return $this;
    }
    /**
     * Get Vorname value
     * @return string|null
     */
    public function getVorname(): ?string
    {
        return $this->Vorname;
    }
    /**
     * Set Vorname value
     * @param string $vorname
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setVorname(?string $vorname = null): self
    {
        $this->Vorname = $vorname;
        
        return $this;
    }
    /**
     * Get Namensbestandteil value
     * @return string|null
     */
    public function getNamensbestandteil(): ?string
    {
        return $this->Namensbestandteil;
    }
    /**
     * Set Namensbestandteil value
     * @param string $namensbestandteil
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setNamensbestandteil(?string $namensbestandteil = null): self
    {
        $this->Namensbestandteil = $namensbestandteil;
        
        return $this;
    }
    /**
     * Get Zugangsberechtigung value
     * @return string|null
     */
    public function getZugangsberechtigung(): ?string
    {
        return $this->Zugangsberechtigung;
    }
    /**
     * Set Zugangsberechtigung value
     * @param string $zugangsberechtigung
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setZugangsberechtigung(?string $zugangsberechtigung = null): self
    {
        $this->Zugangsberechtigung = $zugangsberechtigung;
        
        return $this;
    }
    /**
     * Get Wohnort value
     * @return string|null
     */
    public function getWohnort(): ?string
    {
        return $this->Wohnort;
    }
    /**
     * Set Wohnort value
     * @param string $wohnort
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setWohnort(?string $wohnort = null): self
    {
        $this->Wohnort = $wohnort;
        
        return $this;
    }
    /**
     * Get Telefonnummer value
     * @return string|null
     */
    public function getTelefonnummer(): ?string
    {
        return $this->Telefonnummer;
    }
    /**
     * Set Telefonnummer value
     * @param string $telefonnummer
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setTelefonnummer(?string $telefonnummer = null): self
    {
        $this->Telefonnummer = $telefonnummer;
        
        return $this;
    }
    /**
     * Get IHKRegistrierungsnummer value
     * @return string|null
     */
    public function getIHKRegistrierungsnummer(): ?string
    {
        return $this->IHKRegistrierungsnummer;
    }
    /**
     * Set IHKRegistrierungsnummer value
     * @param string $iHKRegistrierungsnummer
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setIHKRegistrierungsnummer(?string $iHKRegistrierungsnummer = null): self
    {
        $this->IHKRegistrierungsnummer = $iHKRegistrierungsnummer;
        
        return $this;
    }
    /**
     * Get VUNutzerId value
     * @return string|null
     */
    public function getVUNutzerId(): ?string
    {
        return $this->VUNutzerId;
    }
    /**
     * Set VUNutzerId value
     * @param string $vUNutzerId
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setVUNutzerId(?string $vUNutzerId = null): self
    {
        $this->VUNutzerId = $vUNutzerId;
        
        return $this;
    }
    /**
     * Get NutzerAngemeldet value
     * @return string|null
     */
    public function getNutzerAngemeldet(): ?string
    {
        return $this->NutzerAngemeldet;
    }
    /**
     * Set NutzerAngemeldet value
     * @param string $nutzerAngemeldet
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setNutzerAngemeldet(?string $nutzerAngemeldet = null): self
    {
        $this->NutzerAngemeldet = $nutzerAngemeldet;
        
        return $this;
    }
    /**
     * Get NutzerkennungIndividuell value
     * @return string|null
     */
    public function getNutzerkennungIndividuell(): ?string
    {
        return $this->NutzerkennungIndividuell;
    }
    /**
     * Set NutzerkennungIndividuell value
     * @param string $nutzerkennungIndividuell
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setNutzerkennungIndividuell(?string $nutzerkennungIndividuell = null): self
    {
        $this->NutzerkennungIndividuell = $nutzerkennungIndividuell;
        
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
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage
     */
    public function setSortierungRichtung(?string $sortierungRichtung = null): self
    {
        $this->SortierungRichtung = $sortierungRichtung;
        
        return $this;
    }
}
