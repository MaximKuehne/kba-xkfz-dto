<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UebermittlungsRechercheAntwortDetails StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UebermittlungsRechercheAntwortDetails extends AbstractStructBase
{
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
     * The DatumVersicherungsbeginn
     * @var string|null
     */
    public ?string $DatumVersicherungsbeginn = null;
    /**
     * The WeitereDatensaetzeVorhanden
     * @var string|null
     */
    public ?string $WeitereDatensaetzeVorhanden = null;
    /**
     * The ListeUebermittlungsVerarbeitungshistorie
     * @var \THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie|null
     */
    public ?\THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie $ListeUebermittlungsVerarbeitungshistorie = null;
    /**
     * Constructor method for UebermittlungsRechercheAntwortDetails
     * @uses UebermittlungsRechercheAntwortDetails::setVersicherungsunternehmensnummer()
     * @uses UebermittlungsRechercheAntwortDetails::setKennzeichen()
     * @uses UebermittlungsRechercheAntwortDetails::setVersicherungsscheinnummer()
     * @uses UebermittlungsRechercheAntwortDetails::setVorgangsnummer()
     * @uses UebermittlungsRechercheAntwortDetails::setVorgangsart()
     * @uses UebermittlungsRechercheAntwortDetails::setGDVVermittlernummer()
     * @uses UebermittlungsRechercheAntwortDetails::setDatumVersicherungsbeginn()
     * @uses UebermittlungsRechercheAntwortDetails::setWeitereDatensaetzeVorhanden()
     * @uses UebermittlungsRechercheAntwortDetails::setListeUebermittlungsVerarbeitungshistorie()
     * @param string $versicherungsunternehmensnummer
     * @param string $kennzeichen
     * @param string $versicherungsscheinnummer
     * @param string $vorgangsnummer
     * @param string $vorgangsart
     * @param string $gDVVermittlernummer
     * @param string $datumVersicherungsbeginn
     * @param string $weitereDatensaetzeVorhanden
     * @param \THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie $listeUebermittlungsVerarbeitungshistorie
     */
    public function __construct(?string $versicherungsunternehmensnummer = null, ?string $kennzeichen = null, ?string $versicherungsscheinnummer = null, ?string $vorgangsnummer = null, ?string $vorgangsart = null, ?string $gDVVermittlernummer = null, ?string $datumVersicherungsbeginn = null, ?string $weitereDatensaetzeVorhanden = null, ?\THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie $listeUebermittlungsVerarbeitungshistorie = null)
    {
        $this
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setKennzeichen($kennzeichen)
            ->setVersicherungsscheinnummer($versicherungsscheinnummer)
            ->setVorgangsnummer($vorgangsnummer)
            ->setVorgangsart($vorgangsart)
            ->setGDVVermittlernummer($gDVVermittlernummer)
            ->setDatumVersicherungsbeginn($datumVersicherungsbeginn)
            ->setWeitereDatensaetzeVorhanden($weitereDatensaetzeVorhanden)
            ->setListeUebermittlungsVerarbeitungshistorie($listeUebermittlungsVerarbeitungshistorie);
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;
        
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
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;
        
        return $this;
    }
    /**
     * Get WeitereDatensaetzeVorhanden value
     * @return string|null
     */
    public function getWeitereDatensaetzeVorhanden(): ?string
    {
        return $this->WeitereDatensaetzeVorhanden;
    }
    /**
     * Set WeitereDatensaetzeVorhanden value
     * @param string $weitereDatensaetzeVorhanden
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
     */
    public function setWeitereDatensaetzeVorhanden(?string $weitereDatensaetzeVorhanden = null): self
    {
        $this->WeitereDatensaetzeVorhanden = $weitereDatensaetzeVorhanden;
        
        return $this;
    }
    /**
     * Get ListeUebermittlungsVerarbeitungshistorie value
     * @return \THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie|null
     */
    public function getListeUebermittlungsVerarbeitungshistorie(): ?\THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie
    {
        return $this->ListeUebermittlungsVerarbeitungshistorie;
    }
    /**
     * Set ListeUebermittlungsVerarbeitungshistorie value
     * @param \THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie $listeUebermittlungsVerarbeitungshistorie
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
     */
    public function setListeUebermittlungsVerarbeitungshistorie(?\THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie $listeUebermittlungsVerarbeitungshistorie = null): self
    {
        $this->ListeUebermittlungsVerarbeitungshistorie = $listeUebermittlungsVerarbeitungshistorie;
        
        return $this;
    }
}
