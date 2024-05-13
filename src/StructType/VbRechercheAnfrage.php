<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbRechercheAnfrage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbRechercheAnfrage extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The VbArt
     */
    public ?string $VbArt = null;

    /**
     * The VbEinstelldatumVon
     */
    public ?string $VbEinstelldatumVon = null;

    /**
     * The VbEinstelldatumBis
     */
    public ?string $VbEinstelldatumBis = null;

    /**
     * The GeschaeftsstelleVersicherung
     */
    public ?string $GeschaeftsstelleVersicherung = null;

    /**
     * The AgenturVersicherung
     */
    public ?string $AgenturVersicherung = null;

    /**
     * The DatumVersicherungsbeginnVon
     */
    public ?string $DatumVersicherungsbeginnVon = null;

    /**
     * The DatumVersicherungsbeginnBis
     */
    public ?string $DatumVersicherungsbeginnBis = null;

    /**
     * The NameVersicherungsnehmer
     */
    public ?string $NameVersicherungsnehmer = null;

    /**
     * The NameHalter
     */
    public ?string $NameHalter = null;

    /**
     * The PostleitzahlVersicherungsnehmer
     */
    public ?string $PostleitzahlVersicherungsnehmer = null;

    /**
     * The WohnortVersicherungsnehmer
     */
    public ?string $WohnortVersicherungsnehmer = null;

    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The GDVVermittlernummer
     */
    public ?string $GDVVermittlernummer = null;

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
     * Constructor method for VbRechercheAnfrage
     *
     * @uses VbRechercheAnfrage::setVersicherungsunternehmensnummer()
     * @uses VbRechercheAnfrage::setVersicherungsbestaetigungsnummer()
     * @uses VbRechercheAnfrage::setVbArt()
     * @uses VbRechercheAnfrage::setVbEinstelldatumVon()
     * @uses VbRechercheAnfrage::setVbEinstelldatumBis()
     * @uses VbRechercheAnfrage::setGeschaeftsstelleVersicherung()
     * @uses VbRechercheAnfrage::setAgenturVersicherung()
     * @uses VbRechercheAnfrage::setDatumVersicherungsbeginnVon()
     * @uses VbRechercheAnfrage::setDatumVersicherungsbeginnBis()
     * @uses VbRechercheAnfrage::setNameVersicherungsnehmer()
     * @uses VbRechercheAnfrage::setNameHalter()
     * @uses VbRechercheAnfrage::setPostleitzahlVersicherungsnehmer()
     * @uses VbRechercheAnfrage::setWohnortVersicherungsnehmer()
     * @uses VbRechercheAnfrage::setKennzeichen()
     * @uses VbRechercheAnfrage::setGDVVermittlernummer()
     * @uses VbRechercheAnfrage::setAbDatensatzId()
     * @uses VbRechercheAnfrage::setAnzahlDatensaetze()
     * @uses VbRechercheAnfrage::setSortierungSpalte()
     * @uses VbRechercheAnfrage::setSortierungRichtung()
     */
    public function __construct(?string $versicherungsunternehmensnummer = null, ?string $versicherungsbestaetigungsnummer = null, ?string $vbArt = null, ?string $vbEinstelldatumVon = null, ?string $vbEinstelldatumBis = null, ?string $geschaeftsstelleVersicherung = null, ?string $agenturVersicherung = null, ?string $datumVersicherungsbeginnVon = null, ?string $datumVersicherungsbeginnBis = null, ?string $nameVersicherungsnehmer = null, ?string $nameHalter = null, ?string $postleitzahlVersicherungsnehmer = null, ?string $wohnortVersicherungsnehmer = null, ?string $kennzeichen = null, ?string $gDVVermittlernummer = null, ?string $abDatensatzId = null, ?string $anzahlDatensaetze = null, ?string $sortierungSpalte = null, ?string $sortierungRichtung = null)
    {
        $this
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setVbArt($vbArt)
            ->setVbEinstelldatumVon($vbEinstelldatumVon)
            ->setVbEinstelldatumBis($vbEinstelldatumBis)
            ->setGeschaeftsstelleVersicherung($geschaeftsstelleVersicherung)
            ->setAgenturVersicherung($agenturVersicherung)
            ->setDatumVersicherungsbeginnVon($datumVersicherungsbeginnVon)
            ->setDatumVersicherungsbeginnBis($datumVersicherungsbeginnBis)
            ->setNameVersicherungsnehmer($nameVersicherungsnehmer)
            ->setNameHalter($nameHalter)
            ->setPostleitzahlVersicherungsnehmer($postleitzahlVersicherungsnehmer)
            ->setWohnortVersicherungsnehmer($wohnortVersicherungsnehmer)
            ->setKennzeichen($kennzeichen)
            ->setGDVVermittlernummer($gDVVermittlernummer)
            ->setAbDatensatzId($abDatensatzId)
            ->setAnzahlDatensaetze($anzahlDatensaetze)
            ->setSortierungSpalte($sortierungSpalte)
            ->setSortierungRichtung($sortierungRichtung);
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
     * Get Versicherungsbestaetigungsnummer value
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }

    /**
     * Set Versicherungsbestaetigungsnummer value
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;

        return $this;
    }

    /**
     * Get VbArt value
     */
    public function getVbArt(): ?string
    {
        return $this->VbArt;
    }

    /**
     * Set VbArt value
     */
    public function setVbArt(?string $vbArt = null): self
    {
        $this->VbArt = $vbArt;

        return $this;
    }

    /**
     * Get VbEinstelldatumVon value
     */
    public function getVbEinstelldatumVon(): ?string
    {
        return $this->VbEinstelldatumVon;
    }

    /**
     * Set VbEinstelldatumVon value
     */
    public function setVbEinstelldatumVon(?string $vbEinstelldatumVon = null): self
    {
        $this->VbEinstelldatumVon = $vbEinstelldatumVon;

        return $this;
    }

    /**
     * Get VbEinstelldatumBis value
     */
    public function getVbEinstelldatumBis(): ?string
    {
        return $this->VbEinstelldatumBis;
    }

    /**
     * Set VbEinstelldatumBis value
     */
    public function setVbEinstelldatumBis(?string $vbEinstelldatumBis = null): self
    {
        $this->VbEinstelldatumBis = $vbEinstelldatumBis;

        return $this;
    }

    /**
     * Get GeschaeftsstelleVersicherung value
     */
    public function getGeschaeftsstelleVersicherung(): ?string
    {
        return $this->GeschaeftsstelleVersicherung;
    }

    /**
     * Set GeschaeftsstelleVersicherung value
     */
    public function setGeschaeftsstelleVersicherung(?string $geschaeftsstelleVersicherung = null): self
    {
        $this->GeschaeftsstelleVersicherung = $geschaeftsstelleVersicherung;

        return $this;
    }

    /**
     * Get AgenturVersicherung value
     */
    public function getAgenturVersicherung(): ?string
    {
        return $this->AgenturVersicherung;
    }

    /**
     * Set AgenturVersicherung value
     */
    public function setAgenturVersicherung(?string $agenturVersicherung = null): self
    {
        $this->AgenturVersicherung = $agenturVersicherung;

        return $this;
    }

    /**
     * Get DatumVersicherungsbeginnVon value
     */
    public function getDatumVersicherungsbeginnVon(): ?string
    {
        return $this->DatumVersicherungsbeginnVon;
    }

    /**
     * Set DatumVersicherungsbeginnVon value
     */
    public function setDatumVersicherungsbeginnVon(?string $datumVersicherungsbeginnVon = null): self
    {
        $this->DatumVersicherungsbeginnVon = $datumVersicherungsbeginnVon;

        return $this;
    }

    /**
     * Get DatumVersicherungsbeginnBis value
     */
    public function getDatumVersicherungsbeginnBis(): ?string
    {
        return $this->DatumVersicherungsbeginnBis;
    }

    /**
     * Set DatumVersicherungsbeginnBis value
     */
    public function setDatumVersicherungsbeginnBis(?string $datumVersicherungsbeginnBis = null): self
    {
        $this->DatumVersicherungsbeginnBis = $datumVersicherungsbeginnBis;

        return $this;
    }

    /**
     * Get NameVersicherungsnehmer value
     */
    public function getNameVersicherungsnehmer(): ?string
    {
        return $this->NameVersicherungsnehmer;
    }

    /**
     * Set NameVersicherungsnehmer value
     */
    public function setNameVersicherungsnehmer(?string $nameVersicherungsnehmer = null): self
    {
        $this->NameVersicherungsnehmer = $nameVersicherungsnehmer;

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
     * Get PostleitzahlVersicherungsnehmer value
     */
    public function getPostleitzahlVersicherungsnehmer(): ?string
    {
        return $this->PostleitzahlVersicherungsnehmer;
    }

    /**
     * Set PostleitzahlVersicherungsnehmer value
     */
    public function setPostleitzahlVersicherungsnehmer(?string $postleitzahlVersicherungsnehmer = null): self
    {
        $this->PostleitzahlVersicherungsnehmer = $postleitzahlVersicherungsnehmer;

        return $this;
    }

    /**
     * Get WohnortVersicherungsnehmer value
     */
    public function getWohnortVersicherungsnehmer(): ?string
    {
        return $this->WohnortVersicherungsnehmer;
    }

    /**
     * Set WohnortVersicherungsnehmer value
     */
    public function setWohnortVersicherungsnehmer(?string $wohnortVersicherungsnehmer = null): self
    {
        $this->WohnortVersicherungsnehmer = $wohnortVersicherungsnehmer;

        return $this;
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
     * Get GDVVermittlernummer value
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }

    /**
     * Set GDVVermittlernummer value
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;

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
