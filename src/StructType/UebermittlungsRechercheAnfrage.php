<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UebermittlungsRechercheAnfrage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UebermittlungsRechercheAnfrage extends AbstractStructBase
{
    /**
     * The NachrichtenId
     * @var string|null
     */
    public ?string $NachrichtenId = null;
    /**
     * The Vorgangsart
     * @var string|null
     */
    public ?string $Vorgangsart = null;
    /**
     * The UebermittlungsvorgaengeVon
     * @var string|null
     */
    public ?string $UebermittlungsvorgaengeVon = null;
    /**
     * The UebermittlungsvorgaengeBis
     * @var string|null
     */
    public ?string $UebermittlungsvorgaengeBis = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The GDVVermittlernummer
     * @var string|null
     */
    public ?string $GDVVermittlernummer = null;
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
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The Versicherungsscheinnummer
     * @var string|null
     */
    public ?string $Versicherungsscheinnummer = null;
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
     * Constructor method for UebermittlungsRechercheAnfrage
     * @uses UebermittlungsRechercheAnfrage::setNachrichtenId()
     * @uses UebermittlungsRechercheAnfrage::setVorgangsart()
     * @uses UebermittlungsRechercheAnfrage::setUebermittlungsvorgaengeVon()
     * @uses UebermittlungsRechercheAnfrage::setUebermittlungsvorgaengeBis()
     * @uses UebermittlungsRechercheAnfrage::setVersicherungsunternehmensnummer()
     * @uses UebermittlungsRechercheAnfrage::setGDVVermittlernummer()
     * @uses UebermittlungsRechercheAnfrage::setDatumVersicherungsbeginnVon()
     * @uses UebermittlungsRechercheAnfrage::setDatumVersicherungsbeginnBis()
     * @uses UebermittlungsRechercheAnfrage::setKennzeichen()
     * @uses UebermittlungsRechercheAnfrage::setVersicherungsscheinnummer()
     * @uses UebermittlungsRechercheAnfrage::setAbDatensatzId()
     * @uses UebermittlungsRechercheAnfrage::setAnzahlDatensaetze()
     * @uses UebermittlungsRechercheAnfrage::setSortierungSpalte()
     * @uses UebermittlungsRechercheAnfrage::setSortierungRichtung()
     * @param string $nachrichtenId
     * @param string $vorgangsart
     * @param string $uebermittlungsvorgaengeVon
     * @param string $uebermittlungsvorgaengeBis
     * @param string $versicherungsunternehmensnummer
     * @param string $gDVVermittlernummer
     * @param string $datumVersicherungsbeginnVon
     * @param string $datumVersicherungsbeginnBis
     * @param string $kennzeichen
     * @param string $versicherungsscheinnummer
     * @param string $abDatensatzId
     * @param string $anzahlDatensaetze
     * @param string $sortierungSpalte
     * @param string $sortierungRichtung
     */
    public function __construct(?string $nachrichtenId = null, ?string $vorgangsart = null, ?string $uebermittlungsvorgaengeVon = null, ?string $uebermittlungsvorgaengeBis = null, ?string $versicherungsunternehmensnummer = null, ?string $gDVVermittlernummer = null, ?string $datumVersicherungsbeginnVon = null, ?string $datumVersicherungsbeginnBis = null, ?string $kennzeichen = null, ?string $versicherungsscheinnummer = null, ?string $abDatensatzId = null, ?string $anzahlDatensaetze = null, ?string $sortierungSpalte = null, ?string $sortierungRichtung = null)
    {
        $this
            ->setNachrichtenId($nachrichtenId)
            ->setVorgangsart($vorgangsart)
            ->setUebermittlungsvorgaengeVon($uebermittlungsvorgaengeVon)
            ->setUebermittlungsvorgaengeBis($uebermittlungsvorgaengeBis)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setGDVVermittlernummer($gDVVermittlernummer)
            ->setDatumVersicherungsbeginnVon($datumVersicherungsbeginnVon)
            ->setDatumVersicherungsbeginnBis($datumVersicherungsbeginnBis)
            ->setKennzeichen($kennzeichen)
            ->setVersicherungsscheinnummer($versicherungsscheinnummer)
            ->setAbDatensatzId($abDatensatzId)
            ->setAnzahlDatensaetze($anzahlDatensaetze)
            ->setSortierungSpalte($sortierungSpalte)
            ->setSortierungRichtung($sortierungRichtung);
    }
    /**
     * Get NachrichtenId value
     * @return string|null
     */
    public function getNachrichtenId(): ?string
    {
        return $this->NachrichtenId;
    }
    /**
     * Set NachrichtenId value
     * @param string $nachrichtenId
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setNachrichtenId(?string $nachrichtenId = null): self
    {
        $this->NachrichtenId = $nachrichtenId;
        
        return $this;
    }
    /**
     * Get Vorgangsart value
     * @return string|null
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }
    /**
     * Set Vorgangsart value
     * @param string $vorgangsart
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;
        
        return $this;
    }
    /**
     * Get UebermittlungsvorgaengeVon value
     * @return string|null
     */
    public function getUebermittlungsvorgaengeVon(): ?string
    {
        return $this->UebermittlungsvorgaengeVon;
    }
    /**
     * Set UebermittlungsvorgaengeVon value
     * @param string $uebermittlungsvorgaengeVon
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setUebermittlungsvorgaengeVon(?string $uebermittlungsvorgaengeVon = null): self
    {
        $this->UebermittlungsvorgaengeVon = $uebermittlungsvorgaengeVon;
        
        return $this;
    }
    /**
     * Get UebermittlungsvorgaengeBis value
     * @return string|null
     */
    public function getUebermittlungsvorgaengeBis(): ?string
    {
        return $this->UebermittlungsvorgaengeBis;
    }
    /**
     * Set UebermittlungsvorgaengeBis value
     * @param string $uebermittlungsvorgaengeBis
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setUebermittlungsvorgaengeBis(?string $uebermittlungsvorgaengeBis = null): self
    {
        $this->UebermittlungsvorgaengeBis = $uebermittlungsvorgaengeBis;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setDatumVersicherungsbeginnBis(?string $datumVersicherungsbeginnBis = null): self
    {
        $this->DatumVersicherungsbeginnBis = $datumVersicherungsbeginnBis;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Versicherungsscheinnummer value
     * @return string|null
     */
    public function getVersicherungsscheinnummer(): ?string
    {
        return $this->Versicherungsscheinnummer;
    }
    /**
     * Set Versicherungsscheinnummer value
     * @param string $versicherungsscheinnummer
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
     */
    public function setSortierungRichtung(?string $sortierungRichtung = null): self
    {
        $this->SortierungRichtung = $sortierungRichtung;
        
        return $this;
    }
}
