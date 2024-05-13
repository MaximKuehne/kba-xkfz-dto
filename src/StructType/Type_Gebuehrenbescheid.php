<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehrenbescheid StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehrenbescheid extends AbstractStructBase
{
    /**
     * The gebuehrenAntrag
     * @var \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag|null
     */
    public ?\THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag $gebuehrenAntrag = null;
    /**
     * The summePositionenGesamt
     * @var \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null;
    /**
     * The bemerkung
     * @var string|null
     */
    public ?string $bemerkung = null;
    /**
     * The gebuehrenglaeubiger
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenglaeubiger = null;
    /**
     * The bankverbindung
     * @var \THAG\XKfz\StructType\Type_Bankverbindung|null
     */
    public ?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindung = null;
    /**
     * The verwendungszweck
     * @var string|null
     */
    public ?string $verwendungszweck = null;
    /**
     * The kassenzeichen
     * @var string|null
     */
    public ?string $kassenzeichen = null;
    /**
     * The datumDerFaelligkeit
     * @var string|null
     */
    public ?string $datumDerFaelligkeit = null;
    /**
     * The gebuehrenschuldner
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenschuldner = null;
    /**
     * The gebuehrenbescheid
     * @var \THAG\XKfz\StructType\Type_Dokument|null
     */
    public ?\THAG\XKfz\StructType\Type_Dokument $gebuehrenbescheid = null;
    /**
     * The abrechnungszeitraumVon
     * @var string|null
     */
    public ?string $abrechnungszeitraumVon = null;
    /**
     * The abrechnungszeitraumBis
     * @var string|null
     */
    public ?string $abrechnungszeitraumBis = null;
    /**
     * The anzahlAbgerechneteAntraege
     * @var string|null
     */
    public ?string $anzahlAbgerechneteAntraege = null;
    /**
     * The datumDerEinziehung
     * @var string|null
     */
    public ?string $datumDerEinziehung = null;
    /**
     * The nummerGebuehrenbescheid
     * @var string|null
     */
    public ?string $nummerGebuehrenbescheid = null;
    /**
     * The absenderGebuehrenbescheid
     * @var \THAG\XKfz\StructType\Type_PersonUndKontaktperson|null
     */
    public ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $absenderGebuehrenbescheid = null;
    /**
     * The empfaengerGebuehrenbescheid
     * @var \THAG\XKfz\StructType\Type_PersonUndKontaktperson|null
     */
    public ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $empfaengerGebuehrenbescheid = null;
    /**
     * The rechtsbehelfsbelehrung
     * @var string|null
     */
    public ?string $rechtsbehelfsbelehrung = null;
    /**
     * Constructor method for Type.Gebuehrenbescheid
     * @uses Type_Gebuehrenbescheid::setGebuehrenAntrag()
     * @uses Type_Gebuehrenbescheid::setSummePositionenGesamt()
     * @uses Type_Gebuehrenbescheid::setBemerkung()
     * @uses Type_Gebuehrenbescheid::setGebuehrenglaeubiger()
     * @uses Type_Gebuehrenbescheid::setBankverbindung()
     * @uses Type_Gebuehrenbescheid::setVerwendungszweck()
     * @uses Type_Gebuehrenbescheid::setKassenzeichen()
     * @uses Type_Gebuehrenbescheid::setDatumDerFaelligkeit()
     * @uses Type_Gebuehrenbescheid::setGebuehrenschuldner()
     * @uses Type_Gebuehrenbescheid::setGebuehrenbescheid()
     * @uses Type_Gebuehrenbescheid::setAbrechnungszeitraumVon()
     * @uses Type_Gebuehrenbescheid::setAbrechnungszeitraumBis()
     * @uses Type_Gebuehrenbescheid::setAnzahlAbgerechneteAntraege()
     * @uses Type_Gebuehrenbescheid::setDatumDerEinziehung()
     * @uses Type_Gebuehrenbescheid::setNummerGebuehrenbescheid()
     * @uses Type_Gebuehrenbescheid::setAbsenderGebuehrenbescheid()
     * @uses Type_Gebuehrenbescheid::setEmpfaengerGebuehrenbescheid()
     * @uses Type_Gebuehrenbescheid::setRechtsbehelfsbelehrung()
     * @param \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag $gebuehrenAntrag
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt
     * @param string $bemerkung
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenglaeubiger
     * @param \THAG\XKfz\StructType\Type_Bankverbindung $bankverbindung
     * @param string $verwendungszweck
     * @param string $kassenzeichen
     * @param string $datumDerFaelligkeit
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenschuldner
     * @param \THAG\XKfz\StructType\Type_Dokument $gebuehrenbescheid
     * @param string $abrechnungszeitraumVon
     * @param string $abrechnungszeitraumBis
     * @param string $anzahlAbgerechneteAntraege
     * @param string $datumDerEinziehung
     * @param string $nummerGebuehrenbescheid
     * @param \THAG\XKfz\StructType\Type_PersonUndKontaktperson $absenderGebuehrenbescheid
     * @param \THAG\XKfz\StructType\Type_PersonUndKontaktperson $empfaengerGebuehrenbescheid
     * @param string $rechtsbehelfsbelehrung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag $gebuehrenAntrag = null, ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null, ?string $bemerkung = null, ?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenglaeubiger = null, ?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindung = null, ?string $verwendungszweck = null, ?string $kassenzeichen = null, ?string $datumDerFaelligkeit = null, ?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenschuldner = null, ?\THAG\XKfz\StructType\Type_Dokument $gebuehrenbescheid = null, ?string $abrechnungszeitraumVon = null, ?string $abrechnungszeitraumBis = null, ?string $anzahlAbgerechneteAntraege = null, ?string $datumDerEinziehung = null, ?string $nummerGebuehrenbescheid = null, ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $absenderGebuehrenbescheid = null, ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $empfaengerGebuehrenbescheid = null, ?string $rechtsbehelfsbelehrung = null)
    {
        $this
            ->setGebuehrenAntrag($gebuehrenAntrag)
            ->setSummePositionenGesamt($summePositionenGesamt)
            ->setBemerkung($bemerkung)
            ->setGebuehrenglaeubiger($gebuehrenglaeubiger)
            ->setBankverbindung($bankverbindung)
            ->setVerwendungszweck($verwendungszweck)
            ->setKassenzeichen($kassenzeichen)
            ->setDatumDerFaelligkeit($datumDerFaelligkeit)
            ->setGebuehrenschuldner($gebuehrenschuldner)
            ->setGebuehrenbescheid($gebuehrenbescheid)
            ->setAbrechnungszeitraumVon($abrechnungszeitraumVon)
            ->setAbrechnungszeitraumBis($abrechnungszeitraumBis)
            ->setAnzahlAbgerechneteAntraege($anzahlAbgerechneteAntraege)
            ->setDatumDerEinziehung($datumDerEinziehung)
            ->setNummerGebuehrenbescheid($nummerGebuehrenbescheid)
            ->setAbsenderGebuehrenbescheid($absenderGebuehrenbescheid)
            ->setEmpfaengerGebuehrenbescheid($empfaengerGebuehrenbescheid)
            ->setRechtsbehelfsbelehrung($rechtsbehelfsbelehrung);
    }
    /**
     * Get gebuehrenAntrag value
     * @return \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag|null
     */
    public function getGebuehrenAntrag(): ?\THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag
    {
        return $this->gebuehrenAntrag;
    }
    /**
     * Set gebuehrenAntrag value
     * @param \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag $gebuehrenAntrag
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setGebuehrenAntrag(?\THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag $gebuehrenAntrag = null): self
    {
        $this->gebuehrenAntrag = $gebuehrenAntrag;
        
        return $this;
    }
    /**
     * Get summePositionenGesamt value
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public function getSummePositionenGesamt(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->summePositionenGesamt;
    }
    /**
     * Set summePositionenGesamt value
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setSummePositionenGesamt(?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null): self
    {
        $this->summePositionenGesamt = $summePositionenGesamt;
        
        return $this;
    }
    /**
     * Get bemerkung value
     * @return string|null
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }
    /**
     * Set bemerkung value
     * @param string $bemerkung
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;
        
        return $this;
    }
    /**
     * Get gebuehrenglaeubiger value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getGebuehrenglaeubiger(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->gebuehrenglaeubiger;
    }
    /**
     * Set gebuehrenglaeubiger value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenglaeubiger
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setGebuehrenglaeubiger(?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenglaeubiger = null): self
    {
        $this->gebuehrenglaeubiger = $gebuehrenglaeubiger;
        
        return $this;
    }
    /**
     * Get bankverbindung value
     * @return \THAG\XKfz\StructType\Type_Bankverbindung|null
     */
    public function getBankverbindung(): ?\THAG\XKfz\StructType\Type_Bankverbindung
    {
        return $this->bankverbindung;
    }
    /**
     * Set bankverbindung value
     * @param \THAG\XKfz\StructType\Type_Bankverbindung $bankverbindung
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setBankverbindung(?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindung = null): self
    {
        $this->bankverbindung = $bankverbindung;
        
        return $this;
    }
    /**
     * Get verwendungszweck value
     * @return string|null
     */
    public function getVerwendungszweck(): ?string
    {
        return $this->verwendungszweck;
    }
    /**
     * Set verwendungszweck value
     * @param string $verwendungszweck
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setVerwendungszweck(?string $verwendungszweck = null): self
    {
        $this->verwendungszweck = $verwendungszweck;
        
        return $this;
    }
    /**
     * Get kassenzeichen value
     * @return string|null
     */
    public function getKassenzeichen(): ?string
    {
        return $this->kassenzeichen;
    }
    /**
     * Set kassenzeichen value
     * @param string $kassenzeichen
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setKassenzeichen(?string $kassenzeichen = null): self
    {
        $this->kassenzeichen = $kassenzeichen;
        
        return $this;
    }
    /**
     * Get datumDerFaelligkeit value
     * @return string|null
     */
    public function getDatumDerFaelligkeit(): ?string
    {
        return $this->datumDerFaelligkeit;
    }
    /**
     * Set datumDerFaelligkeit value
     * @param string $datumDerFaelligkeit
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setDatumDerFaelligkeit(?string $datumDerFaelligkeit = null): self
    {
        $this->datumDerFaelligkeit = $datumDerFaelligkeit;
        
        return $this;
    }
    /**
     * Get gebuehrenschuldner value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getGebuehrenschuldner(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->gebuehrenschuldner;
    }
    /**
     * Set gebuehrenschuldner value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenschuldner
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setGebuehrenschuldner(?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenschuldner = null): self
    {
        $this->gebuehrenschuldner = $gebuehrenschuldner;
        
        return $this;
    }
    /**
     * Get gebuehrenbescheid value
     * @return \THAG\XKfz\StructType\Type_Dokument|null
     */
    public function getGebuehrenbescheid(): ?\THAG\XKfz\StructType\Type_Dokument
    {
        return $this->gebuehrenbescheid;
    }
    /**
     * Set gebuehrenbescheid value
     * @param \THAG\XKfz\StructType\Type_Dokument $gebuehrenbescheid
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setGebuehrenbescheid(?\THAG\XKfz\StructType\Type_Dokument $gebuehrenbescheid = null): self
    {
        $this->gebuehrenbescheid = $gebuehrenbescheid;
        
        return $this;
    }
    /**
     * Get abrechnungszeitraumVon value
     * @return string|null
     */
    public function getAbrechnungszeitraumVon(): ?string
    {
        return $this->abrechnungszeitraumVon;
    }
    /**
     * Set abrechnungszeitraumVon value
     * @param string $abrechnungszeitraumVon
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setAbrechnungszeitraumVon(?string $abrechnungszeitraumVon = null): self
    {
        $this->abrechnungszeitraumVon = $abrechnungszeitraumVon;
        
        return $this;
    }
    /**
     * Get abrechnungszeitraumBis value
     * @return string|null
     */
    public function getAbrechnungszeitraumBis(): ?string
    {
        return $this->abrechnungszeitraumBis;
    }
    /**
     * Set abrechnungszeitraumBis value
     * @param string $abrechnungszeitraumBis
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setAbrechnungszeitraumBis(?string $abrechnungszeitraumBis = null): self
    {
        $this->abrechnungszeitraumBis = $abrechnungszeitraumBis;
        
        return $this;
    }
    /**
     * Get anzahlAbgerechneteAntraege value
     * @return string|null
     */
    public function getAnzahlAbgerechneteAntraege(): ?string
    {
        return $this->anzahlAbgerechneteAntraege;
    }
    /**
     * Set anzahlAbgerechneteAntraege value
     * @param string $anzahlAbgerechneteAntraege
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setAnzahlAbgerechneteAntraege(?string $anzahlAbgerechneteAntraege = null): self
    {
        $this->anzahlAbgerechneteAntraege = $anzahlAbgerechneteAntraege;
        
        return $this;
    }
    /**
     * Get datumDerEinziehung value
     * @return string|null
     */
    public function getDatumDerEinziehung(): ?string
    {
        return $this->datumDerEinziehung;
    }
    /**
     * Set datumDerEinziehung value
     * @param string $datumDerEinziehung
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setDatumDerEinziehung(?string $datumDerEinziehung = null): self
    {
        $this->datumDerEinziehung = $datumDerEinziehung;
        
        return $this;
    }
    /**
     * Get nummerGebuehrenbescheid value
     * @return string|null
     */
    public function getNummerGebuehrenbescheid(): ?string
    {
        return $this->nummerGebuehrenbescheid;
    }
    /**
     * Set nummerGebuehrenbescheid value
     * @param string $nummerGebuehrenbescheid
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setNummerGebuehrenbescheid(?string $nummerGebuehrenbescheid = null): self
    {
        $this->nummerGebuehrenbescheid = $nummerGebuehrenbescheid;
        
        return $this;
    }
    /**
     * Get absenderGebuehrenbescheid value
     * @return \THAG\XKfz\StructType\Type_PersonUndKontaktperson|null
     */
    public function getAbsenderGebuehrenbescheid(): ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson
    {
        return $this->absenderGebuehrenbescheid;
    }
    /**
     * Set absenderGebuehrenbescheid value
     * @param \THAG\XKfz\StructType\Type_PersonUndKontaktperson $absenderGebuehrenbescheid
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setAbsenderGebuehrenbescheid(?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $absenderGebuehrenbescheid = null): self
    {
        $this->absenderGebuehrenbescheid = $absenderGebuehrenbescheid;
        
        return $this;
    }
    /**
     * Get empfaengerGebuehrenbescheid value
     * @return \THAG\XKfz\StructType\Type_PersonUndKontaktperson|null
     */
    public function getEmpfaengerGebuehrenbescheid(): ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson
    {
        return $this->empfaengerGebuehrenbescheid;
    }
    /**
     * Set empfaengerGebuehrenbescheid value
     * @param \THAG\XKfz\StructType\Type_PersonUndKontaktperson $empfaengerGebuehrenbescheid
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setEmpfaengerGebuehrenbescheid(?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $empfaengerGebuehrenbescheid = null): self
    {
        $this->empfaengerGebuehrenbescheid = $empfaengerGebuehrenbescheid;
        
        return $this;
    }
    /**
     * Get rechtsbehelfsbelehrung value
     * @return string|null
     */
    public function getRechtsbehelfsbelehrung(): ?string
    {
        return $this->rechtsbehelfsbelehrung;
    }
    /**
     * Set rechtsbehelfsbelehrung value
     * @param string $rechtsbehelfsbelehrung
     * @return \THAG\XKfz\StructType\Type_Gebuehrenbescheid
     */
    public function setRechtsbehelfsbelehrung(?string $rechtsbehelfsbelehrung = null): self
    {
        $this->rechtsbehelfsbelehrung = $rechtsbehelfsbelehrung;
        
        return $this;
    }
}
