<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UebermittlungsRechercheAnfrage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UebermittlungsRechercheAnfrage extends AbstractStructBase
{
    /**
     * The NachrichtenId
     */
    public ?string $NachrichtenId = null;

    /**
     * The Vorgangsart
     */
    public ?string $Vorgangsart = null;

    /**
     * The UebermittlungsvorgaengeVon
     */
    public ?string $UebermittlungsvorgaengeVon = null;

    /**
     * The UebermittlungsvorgaengeBis
     */
    public ?string $UebermittlungsvorgaengeBis = null;

    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The GDVVermittlernummer
     */
    public ?string $GDVVermittlernummer = null;

    /**
     * The DatumVersicherungsbeginnVon
     */
    public ?string $DatumVersicherungsbeginnVon = null;

    /**
     * The DatumVersicherungsbeginnBis
     */
    public ?string $DatumVersicherungsbeginnBis = null;

    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The Versicherungsscheinnummer
     */
    public ?string $Versicherungsscheinnummer = null;

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
     * Constructor method for UebermittlungsRechercheAnfrage
     *
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
     */
    public function getNachrichtenId(): ?string
    {
        return $this->NachrichtenId;
    }

    /**
     * Set NachrichtenId value
     */
    public function setNachrichtenId(?string $nachrichtenId = null): self
    {
        $this->NachrichtenId = $nachrichtenId;

        return $this;
    }

    /**
     * Get Vorgangsart value
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }

    /**
     * Set Vorgangsart value
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;

        return $this;
    }

    /**
     * Get UebermittlungsvorgaengeVon value
     */
    public function getUebermittlungsvorgaengeVon(): ?string
    {
        return $this->UebermittlungsvorgaengeVon;
    }

    /**
     * Set UebermittlungsvorgaengeVon value
     */
    public function setUebermittlungsvorgaengeVon(?string $uebermittlungsvorgaengeVon = null): self
    {
        $this->UebermittlungsvorgaengeVon = $uebermittlungsvorgaengeVon;

        return $this;
    }

    /**
     * Get UebermittlungsvorgaengeBis value
     */
    public function getUebermittlungsvorgaengeBis(): ?string
    {
        return $this->UebermittlungsvorgaengeBis;
    }

    /**
     * Set UebermittlungsvorgaengeBis value
     */
    public function setUebermittlungsvorgaengeBis(?string $uebermittlungsvorgaengeBis = null): self
    {
        $this->UebermittlungsvorgaengeBis = $uebermittlungsvorgaengeBis;

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
     * Get Versicherungsscheinnummer value
     */
    public function getVersicherungsscheinnummer(): ?string
    {
        return $this->Versicherungsscheinnummer;
    }

    /**
     * Set Versicherungsscheinnummer value
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;

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
