<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NutzerRechercheAnfrage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NutzerRechercheAnfrage extends AbstractStructBase
{
    /**
     * The Nutzerkennung
     */
    public ?string $Nutzerkennung = null;

    /**
     * The Gruppennummer
     */
    public ?string $Gruppennummer = null;

    /**
     * The Nachname
     */
    public ?string $Nachname = null;

    /**
     * The Vorname
     */
    public ?string $Vorname = null;

    /**
     * The Namensbestandteil
     */
    public ?string $Namensbestandteil = null;

    /**
     * The Zugangsberechtigung
     */
    public ?string $Zugangsberechtigung = null;

    /**
     * The Wohnort
     */
    public ?string $Wohnort = null;

    /**
     * The Telefonnummer
     */
    public ?string $Telefonnummer = null;

    /**
     * The IHKRegistrierungsnummer
     */
    public ?string $IHKRegistrierungsnummer = null;

    /**
     * The VUNutzerId
     */
    public ?string $VUNutzerId = null;

    /**
     * The NutzerAngemeldet
     */
    public ?string $NutzerAngemeldet = null;

    /**
     * The NutzerkennungIndividuell
     */
    public ?string $NutzerkennungIndividuell = null;

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
     * Constructor method for NutzerRechercheAnfrage
     *
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
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }

    /**
     * Set Nutzerkennung value
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;

        return $this;
    }

    /**
     * Get Gruppennummer value
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }

    /**
     * Set Gruppennummer value
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;

        return $this;
    }

    /**
     * Get Nachname value
     */
    public function getNachname(): ?string
    {
        return $this->Nachname;
    }

    /**
     * Set Nachname value
     */
    public function setNachname(?string $nachname = null): self
    {
        $this->Nachname = $nachname;

        return $this;
    }

    /**
     * Get Vorname value
     */
    public function getVorname(): ?string
    {
        return $this->Vorname;
    }

    /**
     * Set Vorname value
     */
    public function setVorname(?string $vorname = null): self
    {
        $this->Vorname = $vorname;

        return $this;
    }

    /**
     * Get Namensbestandteil value
     */
    public function getNamensbestandteil(): ?string
    {
        return $this->Namensbestandteil;
    }

    /**
     * Set Namensbestandteil value
     */
    public function setNamensbestandteil(?string $namensbestandteil = null): self
    {
        $this->Namensbestandteil = $namensbestandteil;

        return $this;
    }

    /**
     * Get Zugangsberechtigung value
     */
    public function getZugangsberechtigung(): ?string
    {
        return $this->Zugangsberechtigung;
    }

    /**
     * Set Zugangsberechtigung value
     */
    public function setZugangsberechtigung(?string $zugangsberechtigung = null): self
    {
        $this->Zugangsberechtigung = $zugangsberechtigung;

        return $this;
    }

    /**
     * Get Wohnort value
     */
    public function getWohnort(): ?string
    {
        return $this->Wohnort;
    }

    /**
     * Set Wohnort value
     */
    public function setWohnort(?string $wohnort = null): self
    {
        $this->Wohnort = $wohnort;

        return $this;
    }

    /**
     * Get Telefonnummer value
     */
    public function getTelefonnummer(): ?string
    {
        return $this->Telefonnummer;
    }

    /**
     * Set Telefonnummer value
     */
    public function setTelefonnummer(?string $telefonnummer = null): self
    {
        $this->Telefonnummer = $telefonnummer;

        return $this;
    }

    /**
     * Get IHKRegistrierungsnummer value
     */
    public function getIHKRegistrierungsnummer(): ?string
    {
        return $this->IHKRegistrierungsnummer;
    }

    /**
     * Set IHKRegistrierungsnummer value
     */
    public function setIHKRegistrierungsnummer(?string $iHKRegistrierungsnummer = null): self
    {
        $this->IHKRegistrierungsnummer = $iHKRegistrierungsnummer;

        return $this;
    }

    /**
     * Get VUNutzerId value
     */
    public function getVUNutzerId(): ?string
    {
        return $this->VUNutzerId;
    }

    /**
     * Set VUNutzerId value
     */
    public function setVUNutzerId(?string $vUNutzerId = null): self
    {
        $this->VUNutzerId = $vUNutzerId;

        return $this;
    }

    /**
     * Get NutzerAngemeldet value
     */
    public function getNutzerAngemeldet(): ?string
    {
        return $this->NutzerAngemeldet;
    }

    /**
     * Set NutzerAngemeldet value
     */
    public function setNutzerAngemeldet(?string $nutzerAngemeldet = null): self
    {
        $this->NutzerAngemeldet = $nutzerAngemeldet;

        return $this;
    }

    /**
     * Get NutzerkennungIndividuell value
     */
    public function getNutzerkennungIndividuell(): ?string
    {
        return $this->NutzerkennungIndividuell;
    }

    /**
     * Set NutzerkennungIndividuell value
     */
    public function setNutzerkennungIndividuell(?string $nutzerkennungIndividuell = null): self
    {
        $this->NutzerkennungIndividuell = $nutzerkennungIndividuell;

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
