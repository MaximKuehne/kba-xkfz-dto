<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UebermittlungsRechercheAntwortDetails StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UebermittlungsRechercheAntwortDetails extends AbstractStructBase
{
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
     * The DatumVersicherungsbeginn
     */
    public ?string $DatumVersicherungsbeginn = null;

    /**
     * The WeitereDatensaetzeVorhanden
     */
    public ?string $WeitereDatensaetzeVorhanden = null;

    /**
     * The ListeUebermittlungsVerarbeitungshistorie
     */
    public ?\THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie $ListeUebermittlungsVerarbeitungshistorie = null;

    /**
     * Constructor method for UebermittlungsRechercheAntwortDetails
     *
     * @uses UebermittlungsRechercheAntwortDetails::setVersicherungsunternehmensnummer()
     * @uses UebermittlungsRechercheAntwortDetails::setKennzeichen()
     * @uses UebermittlungsRechercheAntwortDetails::setVersicherungsscheinnummer()
     * @uses UebermittlungsRechercheAntwortDetails::setVorgangsnummer()
     * @uses UebermittlungsRechercheAntwortDetails::setVorgangsart()
     * @uses UebermittlungsRechercheAntwortDetails::setGDVVermittlernummer()
     * @uses UebermittlungsRechercheAntwortDetails::setDatumVersicherungsbeginn()
     * @uses UebermittlungsRechercheAntwortDetails::setWeitereDatensaetzeVorhanden()
     * @uses UebermittlungsRechercheAntwortDetails::setListeUebermittlungsVerarbeitungshistorie()
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

    /**
     * Get WeitereDatensaetzeVorhanden value
     */
    public function getWeitereDatensaetzeVorhanden(): ?string
    {
        return $this->WeitereDatensaetzeVorhanden;
    }

    /**
     * Set WeitereDatensaetzeVorhanden value
     */
    public function setWeitereDatensaetzeVorhanden(?string $weitereDatensaetzeVorhanden = null): self
    {
        $this->WeitereDatensaetzeVorhanden = $weitereDatensaetzeVorhanden;

        return $this;
    }

    /**
     * Get ListeUebermittlungsVerarbeitungshistorie value
     */
    public function getListeUebermittlungsVerarbeitungshistorie(): ?\THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie
    {
        return $this->ListeUebermittlungsVerarbeitungshistorie;
    }

    /**
     * Set ListeUebermittlungsVerarbeitungshistorie value
     */
    public function setListeUebermittlungsVerarbeitungshistorie(?\THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie $listeUebermittlungsVerarbeitungshistorie = null): self
    {
        $this->ListeUebermittlungsVerarbeitungshistorie = $listeUebermittlungsVerarbeitungshistorie;

        return $this;
    }
}
