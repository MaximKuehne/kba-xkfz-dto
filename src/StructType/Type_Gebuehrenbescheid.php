<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehrenbescheid StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehrenbescheid extends AbstractStructBase
{
    /**
     * The gebuehrenAntrag
     */
    public ?\THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag $gebuehrenAntrag = null;

    /**
     * The summePositionenGesamt
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null;

    /**
     * The bemerkung
     */
    public ?string $bemerkung = null;

    /**
     * The gebuehrenglaeubiger
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenglaeubiger = null;

    /**
     * The bankverbindung
     */
    public ?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindung = null;

    /**
     * The verwendungszweck
     */
    public ?string $verwendungszweck = null;

    /**
     * The kassenzeichen
     */
    public ?string $kassenzeichen = null;

    /**
     * The datumDerFaelligkeit
     */
    public ?string $datumDerFaelligkeit = null;

    /**
     * The gebuehrenschuldner
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenschuldner = null;

    /**
     * The gebuehrenbescheid
     */
    public ?\THAG\XKfz\StructType\Type_Dokument $gebuehrenbescheid = null;

    /**
     * The abrechnungszeitraumVon
     */
    public ?string $abrechnungszeitraumVon = null;

    /**
     * The abrechnungszeitraumBis
     */
    public ?string $abrechnungszeitraumBis = null;

    /**
     * The anzahlAbgerechneteAntraege
     */
    public ?string $anzahlAbgerechneteAntraege = null;

    /**
     * The datumDerEinziehung
     */
    public ?string $datumDerEinziehung = null;

    /**
     * The nummerGebuehrenbescheid
     */
    public ?string $nummerGebuehrenbescheid = null;

    /**
     * The absenderGebuehrenbescheid
     */
    public ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $absenderGebuehrenbescheid = null;

    /**
     * The empfaengerGebuehrenbescheid
     */
    public ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $empfaengerGebuehrenbescheid = null;

    /**
     * The rechtsbehelfsbelehrung
     */
    public ?string $rechtsbehelfsbelehrung = null;

    /**
     * Constructor method for Type.Gebuehrenbescheid
     *
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
     */
    public function getGebuehrenAntrag(): ?\THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag
    {
        return $this->gebuehrenAntrag;
    }

    /**
     * Set gebuehrenAntrag value
     */
    public function setGebuehrenAntrag(?\THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag $gebuehrenAntrag = null): self
    {
        $this->gebuehrenAntrag = $gebuehrenAntrag;

        return $this;
    }

    /**
     * Get summePositionenGesamt value
     */
    public function getSummePositionenGesamt(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->summePositionenGesamt;
    }

    /**
     * Set summePositionenGesamt value
     */
    public function setSummePositionenGesamt(?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null): self
    {
        $this->summePositionenGesamt = $summePositionenGesamt;

        return $this;
    }

    /**
     * Get bemerkung value
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    /**
     * Set bemerkung value
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;

        return $this;
    }

    /**
     * Get gebuehrenglaeubiger value
     */
    public function getGebuehrenglaeubiger(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->gebuehrenglaeubiger;
    }

    /**
     * Set gebuehrenglaeubiger value
     */
    public function setGebuehrenglaeubiger(?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenglaeubiger = null): self
    {
        $this->gebuehrenglaeubiger = $gebuehrenglaeubiger;

        return $this;
    }

    /**
     * Get bankverbindung value
     */
    public function getBankverbindung(): ?\THAG\XKfz\StructType\Type_Bankverbindung
    {
        return $this->bankverbindung;
    }

    /**
     * Set bankverbindung value
     */
    public function setBankverbindung(?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindung = null): self
    {
        $this->bankverbindung = $bankverbindung;

        return $this;
    }

    /**
     * Get verwendungszweck value
     */
    public function getVerwendungszweck(): ?string
    {
        return $this->verwendungszweck;
    }

    /**
     * Set verwendungszweck value
     */
    public function setVerwendungszweck(?string $verwendungszweck = null): self
    {
        $this->verwendungszweck = $verwendungszweck;

        return $this;
    }

    /**
     * Get kassenzeichen value
     */
    public function getKassenzeichen(): ?string
    {
        return $this->kassenzeichen;
    }

    /**
     * Set kassenzeichen value
     */
    public function setKassenzeichen(?string $kassenzeichen = null): self
    {
        $this->kassenzeichen = $kassenzeichen;

        return $this;
    }

    /**
     * Get datumDerFaelligkeit value
     */
    public function getDatumDerFaelligkeit(): ?string
    {
        return $this->datumDerFaelligkeit;
    }

    /**
     * Set datumDerFaelligkeit value
     */
    public function setDatumDerFaelligkeit(?string $datumDerFaelligkeit = null): self
    {
        $this->datumDerFaelligkeit = $datumDerFaelligkeit;

        return $this;
    }

    /**
     * Get gebuehrenschuldner value
     */
    public function getGebuehrenschuldner(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->gebuehrenschuldner;
    }

    /**
     * Set gebuehrenschuldner value
     */
    public function setGebuehrenschuldner(?\THAG\XKfz\StructType\Type_Kommunikationspartner $gebuehrenschuldner = null): self
    {
        $this->gebuehrenschuldner = $gebuehrenschuldner;

        return $this;
    }

    /**
     * Get gebuehrenbescheid value
     */
    public function getGebuehrenbescheid(): ?\THAG\XKfz\StructType\Type_Dokument
    {
        return $this->gebuehrenbescheid;
    }

    /**
     * Set gebuehrenbescheid value
     */
    public function setGebuehrenbescheid(?\THAG\XKfz\StructType\Type_Dokument $gebuehrenbescheid = null): self
    {
        $this->gebuehrenbescheid = $gebuehrenbescheid;

        return $this;
    }

    /**
     * Get abrechnungszeitraumVon value
     */
    public function getAbrechnungszeitraumVon(): ?string
    {
        return $this->abrechnungszeitraumVon;
    }

    /**
     * Set abrechnungszeitraumVon value
     */
    public function setAbrechnungszeitraumVon(?string $abrechnungszeitraumVon = null): self
    {
        $this->abrechnungszeitraumVon = $abrechnungszeitraumVon;

        return $this;
    }

    /**
     * Get abrechnungszeitraumBis value
     */
    public function getAbrechnungszeitraumBis(): ?string
    {
        return $this->abrechnungszeitraumBis;
    }

    /**
     * Set abrechnungszeitraumBis value
     */
    public function setAbrechnungszeitraumBis(?string $abrechnungszeitraumBis = null): self
    {
        $this->abrechnungszeitraumBis = $abrechnungszeitraumBis;

        return $this;
    }

    /**
     * Get anzahlAbgerechneteAntraege value
     */
    public function getAnzahlAbgerechneteAntraege(): ?string
    {
        return $this->anzahlAbgerechneteAntraege;
    }

    /**
     * Set anzahlAbgerechneteAntraege value
     */
    public function setAnzahlAbgerechneteAntraege(?string $anzahlAbgerechneteAntraege = null): self
    {
        $this->anzahlAbgerechneteAntraege = $anzahlAbgerechneteAntraege;

        return $this;
    }

    /**
     * Get datumDerEinziehung value
     */
    public function getDatumDerEinziehung(): ?string
    {
        return $this->datumDerEinziehung;
    }

    /**
     * Set datumDerEinziehung value
     */
    public function setDatumDerEinziehung(?string $datumDerEinziehung = null): self
    {
        $this->datumDerEinziehung = $datumDerEinziehung;

        return $this;
    }

    /**
     * Get nummerGebuehrenbescheid value
     */
    public function getNummerGebuehrenbescheid(): ?string
    {
        return $this->nummerGebuehrenbescheid;
    }

    /**
     * Set nummerGebuehrenbescheid value
     */
    public function setNummerGebuehrenbescheid(?string $nummerGebuehrenbescheid = null): self
    {
        $this->nummerGebuehrenbescheid = $nummerGebuehrenbescheid;

        return $this;
    }

    /**
     * Get absenderGebuehrenbescheid value
     */
    public function getAbsenderGebuehrenbescheid(): ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson
    {
        return $this->absenderGebuehrenbescheid;
    }

    /**
     * Set absenderGebuehrenbescheid value
     */
    public function setAbsenderGebuehrenbescheid(?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $absenderGebuehrenbescheid = null): self
    {
        $this->absenderGebuehrenbescheid = $absenderGebuehrenbescheid;

        return $this;
    }

    /**
     * Get empfaengerGebuehrenbescheid value
     */
    public function getEmpfaengerGebuehrenbescheid(): ?\THAG\XKfz\StructType\Type_PersonUndKontaktperson
    {
        return $this->empfaengerGebuehrenbescheid;
    }

    /**
     * Set empfaengerGebuehrenbescheid value
     */
    public function setEmpfaengerGebuehrenbescheid(?\THAG\XKfz\StructType\Type_PersonUndKontaktperson $empfaengerGebuehrenbescheid = null): self
    {
        $this->empfaengerGebuehrenbescheid = $empfaengerGebuehrenbescheid;

        return $this;
    }

    /**
     * Get rechtsbehelfsbelehrung value
     */
    public function getRechtsbehelfsbelehrung(): ?string
    {
        return $this->rechtsbehelfsbelehrung;
    }

    /**
     * Set rechtsbehelfsbelehrung value
     */
    public function setRechtsbehelfsbelehrung(?string $rechtsbehelfsbelehrung = null): self
    {
        $this->rechtsbehelfsbelehrung = $rechtsbehelfsbelehrung;

        return $this;
    }
}
