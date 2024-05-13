<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbRechercheAnfrage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbRechercheAnfrage extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The VbArt
     * @var string|null
     */
    public ?string $VbArt = null;
    /**
     * The VbEinstelldatumVon
     * @var string|null
     */
    public ?string $VbEinstelldatumVon = null;
    /**
     * The VbEinstelldatumBis
     * @var string|null
     */
    public ?string $VbEinstelldatumBis = null;
    /**
     * The GeschaeftsstelleVersicherung
     * @var string|null
     */
    public ?string $GeschaeftsstelleVersicherung = null;
    /**
     * The AgenturVersicherung
     * @var string|null
     */
    public ?string $AgenturVersicherung = null;
    /**
     * The DatumVersicherungsbeginnVon
     * @var string|null
     */
    public ?string $DatumVersicherungsbeginnVon = null;
    /**
     * The DatumVersicherungsbeginnBis
     * @var string|null
     */
    public ?string $DatumVersicherungsbeginnBis = null;
    /**
     * The NameVersicherungsnehmer
     * @var string|null
     */
    public ?string $NameVersicherungsnehmer = null;
    /**
     * The NameHalter
     * @var string|null
     */
    public ?string $NameHalter = null;
    /**
     * The PostleitzahlVersicherungsnehmer
     * @var string|null
     */
    public ?string $PostleitzahlVersicherungsnehmer = null;
    /**
     * The WohnortVersicherungsnehmer
     * @var string|null
     */
    public ?string $WohnortVersicherungsnehmer = null;
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The GDVVermittlernummer
     * @var string|null
     */
    public ?string $GDVVermittlernummer = null;
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
     * Constructor method for VbRechercheAnfrage
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
     * @param string $versicherungsunternehmensnummer
     * @param string $versicherungsbestaetigungsnummer
     * @param string $vbArt
     * @param string $vbEinstelldatumVon
     * @param string $vbEinstelldatumBis
     * @param string $geschaeftsstelleVersicherung
     * @param string $agenturVersicherung
     * @param string $datumVersicherungsbeginnVon
     * @param string $datumVersicherungsbeginnBis
     * @param string $nameVersicherungsnehmer
     * @param string $nameHalter
     * @param string $postleitzahlVersicherungsnehmer
     * @param string $wohnortVersicherungsnehmer
     * @param string $kennzeichen
     * @param string $gDVVermittlernummer
     * @param string $abDatensatzId
     * @param string $anzahlDatensaetze
     * @param string $sortierungSpalte
     * @param string $sortierungRichtung
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
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
    }
    /**
     * Get Versicherungsbestaetigungsnummer value
     * @return string|null
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }
    /**
     * Set Versicherungsbestaetigungsnummer value
     * @param string $versicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get VbArt value
     * @return string|null
     */
    public function getVbArt(): ?string
    {
        return $this->VbArt;
    }
    /**
     * Set VbArt value
     * @param string $vbArt
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setVbArt(?string $vbArt = null): self
    {
        $this->VbArt = $vbArt;
        
        return $this;
    }
    /**
     * Get VbEinstelldatumVon value
     * @return string|null
     */
    public function getVbEinstelldatumVon(): ?string
    {
        return $this->VbEinstelldatumVon;
    }
    /**
     * Set VbEinstelldatumVon value
     * @param string $vbEinstelldatumVon
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setVbEinstelldatumVon(?string $vbEinstelldatumVon = null): self
    {
        $this->VbEinstelldatumVon = $vbEinstelldatumVon;
        
        return $this;
    }
    /**
     * Get VbEinstelldatumBis value
     * @return string|null
     */
    public function getVbEinstelldatumBis(): ?string
    {
        return $this->VbEinstelldatumBis;
    }
    /**
     * Set VbEinstelldatumBis value
     * @param string $vbEinstelldatumBis
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setVbEinstelldatumBis(?string $vbEinstelldatumBis = null): self
    {
        $this->VbEinstelldatumBis = $vbEinstelldatumBis;
        
        return $this;
    }
    /**
     * Get GeschaeftsstelleVersicherung value
     * @return string|null
     */
    public function getGeschaeftsstelleVersicherung(): ?string
    {
        return $this->GeschaeftsstelleVersicherung;
    }
    /**
     * Set GeschaeftsstelleVersicherung value
     * @param string $geschaeftsstelleVersicherung
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setGeschaeftsstelleVersicherung(?string $geschaeftsstelleVersicherung = null): self
    {
        $this->GeschaeftsstelleVersicherung = $geschaeftsstelleVersicherung;
        
        return $this;
    }
    /**
     * Get AgenturVersicherung value
     * @return string|null
     */
    public function getAgenturVersicherung(): ?string
    {
        return $this->AgenturVersicherung;
    }
    /**
     * Set AgenturVersicherung value
     * @param string $agenturVersicherung
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setAgenturVersicherung(?string $agenturVersicherung = null): self
    {
        $this->AgenturVersicherung = $agenturVersicherung;
        
        return $this;
    }
    /**
     * Get DatumVersicherungsbeginnVon value
     * @return string|null
     */
    public function getDatumVersicherungsbeginnVon(): ?string
    {
        return $this->DatumVersicherungsbeginnVon;
    }
    /**
     * Set DatumVersicherungsbeginnVon value
     * @param string $datumVersicherungsbeginnVon
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setDatumVersicherungsbeginnVon(?string $datumVersicherungsbeginnVon = null): self
    {
        $this->DatumVersicherungsbeginnVon = $datumVersicherungsbeginnVon;
        
        return $this;
    }
    /**
     * Get DatumVersicherungsbeginnBis value
     * @return string|null
     */
    public function getDatumVersicherungsbeginnBis(): ?string
    {
        return $this->DatumVersicherungsbeginnBis;
    }
    /**
     * Set DatumVersicherungsbeginnBis value
     * @param string $datumVersicherungsbeginnBis
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setDatumVersicherungsbeginnBis(?string $datumVersicherungsbeginnBis = null): self
    {
        $this->DatumVersicherungsbeginnBis = $datumVersicherungsbeginnBis;
        
        return $this;
    }
    /**
     * Get NameVersicherungsnehmer value
     * @return string|null
     */
    public function getNameVersicherungsnehmer(): ?string
    {
        return $this->NameVersicherungsnehmer;
    }
    /**
     * Set NameVersicherungsnehmer value
     * @param string $nameVersicherungsnehmer
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setNameVersicherungsnehmer(?string $nameVersicherungsnehmer = null): self
    {
        $this->NameVersicherungsnehmer = $nameVersicherungsnehmer;
        
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
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setNameHalter(?string $nameHalter = null): self
    {
        $this->NameHalter = $nameHalter;
        
        return $this;
    }
    /**
     * Get PostleitzahlVersicherungsnehmer value
     * @return string|null
     */
    public function getPostleitzahlVersicherungsnehmer(): ?string
    {
        return $this->PostleitzahlVersicherungsnehmer;
    }
    /**
     * Set PostleitzahlVersicherungsnehmer value
     * @param string $postleitzahlVersicherungsnehmer
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setPostleitzahlVersicherungsnehmer(?string $postleitzahlVersicherungsnehmer = null): self
    {
        $this->PostleitzahlVersicherungsnehmer = $postleitzahlVersicherungsnehmer;
        
        return $this;
    }
    /**
     * Get WohnortVersicherungsnehmer value
     * @return string|null
     */
    public function getWohnortVersicherungsnehmer(): ?string
    {
        return $this->WohnortVersicherungsnehmer;
    }
    /**
     * Set WohnortVersicherungsnehmer value
     * @param string $wohnortVersicherungsnehmer
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setWohnortVersicherungsnehmer(?string $wohnortVersicherungsnehmer = null): self
    {
        $this->WohnortVersicherungsnehmer = $wohnortVersicherungsnehmer;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get GDVVermittlernummer value
     * @return string|null
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }
    /**
     * Set GDVVermittlernummer value
     * @param string $gDVVermittlernummer
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;
        
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
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage
     */
    public function setSortierungRichtung(?string $sortierungRichtung = null): self
    {
        $this->SortierungRichtung = $sortierungRichtung;
        
        return $this;
    }
}
