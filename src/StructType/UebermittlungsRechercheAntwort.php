<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UebermittlungsRechercheAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UebermittlungsRechercheAntwort extends AbstractStructBase
{
    /**
     * The ZeitpunktBeginnUebermittlungsvorgang
     * @var string|null
     */
    public ?string $ZeitpunktBeginnUebermittlungsvorgang = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
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
     * The Vorgangsnummer
     * @var string|null
     */
    public ?string $Vorgangsnummer = null;
    /**
     * The Vorgangsart
     * @var string|null
     */
    public ?string $Vorgangsart = null;
    /**
     * The GDVVermittlernummer
     * @var string|null
     */
    public ?string $GDVVermittlernummer = null;
    /**
     * The VUInterneVermittlernummer
     * @var string|null
     */
    public ?string $VUInterneVermittlernummer = null;
    /**
     * The DatumVersicherungsbeginn
     * @var string|null
     */
    public ?string $DatumVersicherungsbeginn = null;
    /**
     * Constructor method for UebermittlungsRechercheAntwort
     * @uses UebermittlungsRechercheAntwort::setZeitpunktBeginnUebermittlungsvorgang()
     * @uses UebermittlungsRechercheAntwort::setVersicherungsunternehmensnummer()
     * @uses UebermittlungsRechercheAntwort::setKennzeichen()
     * @uses UebermittlungsRechercheAntwort::setVersicherungsscheinnummer()
     * @uses UebermittlungsRechercheAntwort::setVorgangsnummer()
     * @uses UebermittlungsRechercheAntwort::setVorgangsart()
     * @uses UebermittlungsRechercheAntwort::setGDVVermittlernummer()
     * @uses UebermittlungsRechercheAntwort::setVUInterneVermittlernummer()
     * @uses UebermittlungsRechercheAntwort::setDatumVersicherungsbeginn()
     * @param string $zeitpunktBeginnUebermittlungsvorgang
     * @param string $versicherungsunternehmensnummer
     * @param string $kennzeichen
     * @param string $versicherungsscheinnummer
     * @param string $vorgangsnummer
     * @param string $vorgangsart
     * @param string $gDVVermittlernummer
     * @param string $vUInterneVermittlernummer
     * @param string $datumVersicherungsbeginn
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
     * @return string|null
     */
    public function getZeitpunktBeginnUebermittlungsvorgang(): ?string
    {
        return $this->ZeitpunktBeginnUebermittlungsvorgang;
    }
    /**
     * Set ZeitpunktBeginnUebermittlungsvorgang value
     * @param string $zeitpunktBeginnUebermittlungsvorgang
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwort
     */
    public function setZeitpunktBeginnUebermittlungsvorgang(?string $zeitpunktBeginnUebermittlungsvorgang = null): self
    {
        $this->ZeitpunktBeginnUebermittlungsvorgang = $zeitpunktBeginnUebermittlungsvorgang;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwort
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwort
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwort
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;
        
        return $this;
    }
    /**
     * Get Vorgangsnummer value
     * @return string|null
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }
    /**
     * Set Vorgangsnummer value
     * @param string $vorgangsnummer
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwort
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwort
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwort
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;
        
        return $this;
    }
    /**
     * Get VUInterneVermittlernummer value
     * @return string|null
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }
    /**
     * Set VUInterneVermittlernummer value
     * @param string $vUInterneVermittlernummer
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwort
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;
        
        return $this;
    }
    /**
     * Get DatumVersicherungsbeginn value
     * @return string|null
     */
    public function getDatumVersicherungsbeginn(): ?string
    {
        return $this->DatumVersicherungsbeginn;
    }
    /**
     * Set DatumVersicherungsbeginn value
     * @param string $datumVersicherungsbeginn
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwort
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;
        
        return $this;
    }
}
