<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UebermittlungsRechercheAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UebermittlungsRechercheAntwort extends AbstractStructBase
{
    /**
     * The ZeitpunktBeginnUebermittlungsvorgang
     */
    public ?string $ZeitpunktBeginnUebermittlungsvorgang = null;

    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The Versicherungsscheinnummer
     */
    public ?string $Versicherungsscheinnummer = null;

    /**
     * The Vorgangsnummer
     */
    public ?string $Vorgangsnummer = null;

    /**
     * The Vorgangsart
     */
    public ?string $Vorgangsart = null;

    /**
     * The GDVVermittlernummer
     */
    public ?string $GDVVermittlernummer = null;

    /**
     * The VUInterneVermittlernummer
     */
    public ?string $VUInterneVermittlernummer = null;

    /**
     * The DatumVersicherungsbeginn
     */
    public ?string $DatumVersicherungsbeginn = null;

    /**
     * Constructor method for UebermittlungsRechercheAntwort
     *
     * @uses UebermittlungsRechercheAntwort::setZeitpunktBeginnUebermittlungsvorgang()
     * @uses UebermittlungsRechercheAntwort::setVersicherungsunternehmensnummer()
     * @uses UebermittlungsRechercheAntwort::setKennzeichen()
     * @uses UebermittlungsRechercheAntwort::setVersicherungsscheinnummer()
     * @uses UebermittlungsRechercheAntwort::setVorgangsnummer()
     * @uses UebermittlungsRechercheAntwort::setVorgangsart()
     * @uses UebermittlungsRechercheAntwort::setGDVVermittlernummer()
     * @uses UebermittlungsRechercheAntwort::setVUInterneVermittlernummer()
     * @uses UebermittlungsRechercheAntwort::setDatumVersicherungsbeginn()
     */
    public function __construct(?string $zeitpunktBeginnUebermittlungsvorgang = null, ?string $versicherungsunternehmensnummer = null, ?string $kennzeichen = null, ?string $versicherungsscheinnummer = null, ?string $vorgangsnummer = null, ?string $vorgangsart = null, ?string $gDVVermittlernummer = null, ?string $vUInterneVermittlernummer = null, ?string $datumVersicherungsbeginn = null)
    {
        $this
            ->setZeitpunktBeginnUebermittlungsvorgang($zeitpunktBeginnUebermittlungsvorgang)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setKennzeichen($kennzeichen)
            ->setVersicherungsscheinnummer($versicherungsscheinnummer)
            ->setVorgangsnummer($vorgangsnummer)
            ->setVorgangsart($vorgangsart)
            ->setGDVVermittlernummer($gDVVermittlernummer)
            ->setVUInterneVermittlernummer($vUInterneVermittlernummer)
            ->setDatumVersicherungsbeginn($datumVersicherungsbeginn);
    }

    /**
     * Get ZeitpunktBeginnUebermittlungsvorgang value
     */
    public function getZeitpunktBeginnUebermittlungsvorgang(): ?string
    {
        return $this->ZeitpunktBeginnUebermittlungsvorgang;
    }

    /**
     * Set ZeitpunktBeginnUebermittlungsvorgang value
     */
    public function setZeitpunktBeginnUebermittlungsvorgang(?string $zeitpunktBeginnUebermittlungsvorgang = null): self
    {
        $this->ZeitpunktBeginnUebermittlungsvorgang = $zeitpunktBeginnUebermittlungsvorgang;

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
     * Get Vorgangsnummer value
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    /**
     * Set Vorgangsnummer value
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;

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
     * Get VUInterneVermittlernummer value
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }

    /**
     * Set VUInterneVermittlernummer value
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;

        return $this;
    }

    /**
     * Get DatumVersicherungsbeginn value
     */
    public function getDatumVersicherungsbeginn(): ?string
    {
        return $this->DatumVersicherungsbeginn;
    }

    /**
     * Set DatumVersicherungsbeginn value
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;

        return $this;
    }
}
