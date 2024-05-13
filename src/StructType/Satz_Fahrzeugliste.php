<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Satz-Fahrzeugliste StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Satz_Fahrzeugliste extends AbstractStructBase
{
    /**
     * The IdentifikationZulassungsabschnitt
     */
    public ?string $IdentifikationZulassungsabschnitt = null;

    /**
     * The IdentifizierungsnummerZFZREintrag
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;

    /**
     * The DatumErstzulassung
     */
    public ?string $DatumErstzulassung = null;

    /**
     * The ZeitpunktZuteilungKennzeichen
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;

    /**
     * The MerkmalAusserbetriebsetzung
     */
    public ?bool $MerkmalAusserbetriebsetzung = null;

    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The TextFahrzeugklasse
     */
    public ?string $TextFahrzeugklasse = null;

    /**
     * The TextAufbau
     */
    public ?string $TextAufbau = null;

    /**
     * The TextTyp
     */
    public ?string $TextTyp = null;

    /**
     * The TextHersteller
     */
    public ?string $TextHersteller = null;

    /**
     * The TextMarke
     */
    public ?string $TextMarke = null;

    /**
     * The SchluesselGrundfarbe
     */
    public ?string $SchluesselGrundfarbe = null;

    /**
     * The TextGrundfarbe
     */
    public ?string $TextGrundfarbe = null;

    /**
     * The SchluesselZweitfarbe
     */
    public ?string $SchluesselZweitfarbe = null;

    /**
     * The TextZweitfarbe
     */
    public ?string $TextZweitfarbe = null;

    /**
     * The Verkehrsjahr
     */
    public ?string $Verkehrsjahr = null;

    /**
     * The MerkmalWechselkennzeichen
     */
    public ?bool $MerkmalWechselkennzeichen = null;

    /**
     * Constructor method for Satz-Fahrzeugliste
     *
     * @uses Satz_Fahrzeugliste::setIdentifikationZulassungsabschnitt()
     * @uses Satz_Fahrzeugliste::setIdentifizierungsnummerZFZREintrag()
     * @uses Satz_Fahrzeugliste::setDatumErstzulassung()
     * @uses Satz_Fahrzeugliste::setZeitpunktZuteilungKennzeichen()
     * @uses Satz_Fahrzeugliste::setMerkmalAusserbetriebsetzung()
     * @uses Satz_Fahrzeugliste::setMerkmalKennzeichenart()
     * @uses Satz_Fahrzeugliste::setKennzeichen()
     * @uses Satz_Fahrzeugliste::setFahrzeugidentifizierungsnummer()
     * @uses Satz_Fahrzeugliste::setTextFahrzeugklasse()
     * @uses Satz_Fahrzeugliste::setTextAufbau()
     * @uses Satz_Fahrzeugliste::setTextTyp()
     * @uses Satz_Fahrzeugliste::setTextHersteller()
     * @uses Satz_Fahrzeugliste::setTextMarke()
     * @uses Satz_Fahrzeugliste::setSchluesselGrundfarbe()
     * @uses Satz_Fahrzeugliste::setTextGrundfarbe()
     * @uses Satz_Fahrzeugliste::setSchluesselZweitfarbe()
     * @uses Satz_Fahrzeugliste::setTextZweitfarbe()
     * @uses Satz_Fahrzeugliste::setVerkehrsjahr()
     * @uses Satz_Fahrzeugliste::setMerkmalWechselkennzeichen()
     */
    public function __construct(?string $identifikationZulassungsabschnitt = null, ?string $identifizierungsnummerZFZREintrag = null, ?string $datumErstzulassung = null, ?string $zeitpunktZuteilungKennzeichen = null, ?bool $merkmalAusserbetriebsetzung = null, ?string $merkmalKennzeichenart = null, ?string $kennzeichen = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $textFahrzeugklasse = null, ?string $textAufbau = null, ?string $textTyp = null, ?string $textHersteller = null, ?string $textMarke = null, ?string $schluesselGrundfarbe = null, ?string $textGrundfarbe = null, ?string $schluesselZweitfarbe = null, ?string $textZweitfarbe = null, ?string $verkehrsjahr = null, ?bool $merkmalWechselkennzeichen = null)
    {
        $this
            ->setIdentifikationZulassungsabschnitt($identifikationZulassungsabschnitt)
            ->setIdentifizierungsnummerZFZREintrag($identifizierungsnummerZFZREintrag)
            ->setDatumErstzulassung($datumErstzulassung)
            ->setZeitpunktZuteilungKennzeichen($zeitpunktZuteilungKennzeichen)
            ->setMerkmalAusserbetriebsetzung($merkmalAusserbetriebsetzung)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setKennzeichen($kennzeichen)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setTextFahrzeugklasse($textFahrzeugklasse)
            ->setTextAufbau($textAufbau)
            ->setTextTyp($textTyp)
            ->setTextHersteller($textHersteller)
            ->setTextMarke($textMarke)
            ->setSchluesselGrundfarbe($schluesselGrundfarbe)
            ->setTextGrundfarbe($textGrundfarbe)
            ->setSchluesselZweitfarbe($schluesselZweitfarbe)
            ->setTextZweitfarbe($textZweitfarbe)
            ->setVerkehrsjahr($verkehrsjahr)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen);
    }

    /**
     * Get IdentifikationZulassungsabschnitt value
     */
    public function getIdentifikationZulassungsabschnitt(): ?string
    {
        return $this->IdentifikationZulassungsabschnitt;
    }

    /**
     * Set IdentifikationZulassungsabschnitt value
     */
    public function setIdentifikationZulassungsabschnitt(?string $identifikationZulassungsabschnitt = null): self
    {
        $this->IdentifikationZulassungsabschnitt = $identifikationZulassungsabschnitt;

        return $this;
    }

    /**
     * Get IdentifizierungsnummerZFZREintrag value
     */
    public function getIdentifizierungsnummerZFZREintrag(): ?string
    {
        return $this->IdentifizierungsnummerZFZREintrag;
    }

    /**
     * Set IdentifizierungsnummerZFZREintrag value
     */
    public function setIdentifizierungsnummerZFZREintrag(?string $identifizierungsnummerZFZREintrag = null): self
    {
        $this->IdentifizierungsnummerZFZREintrag = $identifizierungsnummerZFZREintrag;

        return $this;
    }

    /**
     * Get DatumErstzulassung value
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }

    /**
     * Set DatumErstzulassung value
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;

        return $this;
    }

    /**
     * Get ZeitpunktZuteilungKennzeichen value
     */
    public function getZeitpunktZuteilungKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungKennzeichen;
    }

    /**
     * Set ZeitpunktZuteilungKennzeichen value
     */
    public function setZeitpunktZuteilungKennzeichen(?string $zeitpunktZuteilungKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungKennzeichen = $zeitpunktZuteilungKennzeichen;

        return $this;
    }

    /**
     * Get MerkmalAusserbetriebsetzung value
     */
    public function getMerkmalAusserbetriebsetzung(): ?bool
    {
        return $this->MerkmalAusserbetriebsetzung;
    }

    /**
     * Set MerkmalAusserbetriebsetzung value
     */
    public function setMerkmalAusserbetriebsetzung(?bool $merkmalAusserbetriebsetzung = null): self
    {
        $this->MerkmalAusserbetriebsetzung = $merkmalAusserbetriebsetzung;

        return $this;
    }

    /**
     * Get MerkmalKennzeichenart value
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }

    /**
     * Set MerkmalKennzeichenart value
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;

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
     * Get Fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }

    /**
     * Set Fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get TextFahrzeugklasse value
     */
    public function getTextFahrzeugklasse(): ?string
    {
        return $this->TextFahrzeugklasse;
    }

    /**
     * Set TextFahrzeugklasse value
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;

        return $this;
    }

    /**
     * Get TextAufbau value
     */
    public function getTextAufbau(): ?string
    {
        return $this->TextAufbau;
    }

    /**
     * Set TextAufbau value
     */
    public function setTextAufbau(?string $textAufbau = null): self
    {
        $this->TextAufbau = $textAufbau;

        return $this;
    }

    /**
     * Get TextTyp value
     */
    public function getTextTyp(): ?string
    {
        return $this->TextTyp;
    }

    /**
     * Set TextTyp value
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;

        return $this;
    }

    /**
     * Get TextHersteller value
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }

    /**
     * Set TextHersteller value
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;

        return $this;
    }

    /**
     * Get TextMarke value
     */
    public function getTextMarke(): ?string
    {
        return $this->TextMarke;
    }

    /**
     * Set TextMarke value
     */
    public function setTextMarke(?string $textMarke = null): self
    {
        $this->TextMarke = $textMarke;

        return $this;
    }

    /**
     * Get SchluesselGrundfarbe value
     */
    public function getSchluesselGrundfarbe(): ?string
    {
        return $this->SchluesselGrundfarbe;
    }

    /**
     * Set SchluesselGrundfarbe value
     */
    public function setSchluesselGrundfarbe(?string $schluesselGrundfarbe = null): self
    {
        $this->SchluesselGrundfarbe = $schluesselGrundfarbe;

        return $this;
    }

    /**
     * Get TextGrundfarbe value
     */
    public function getTextGrundfarbe(): ?string
    {
        return $this->TextGrundfarbe;
    }

    /**
     * Set TextGrundfarbe value
     */
    public function setTextGrundfarbe(?string $textGrundfarbe = null): self
    {
        $this->TextGrundfarbe = $textGrundfarbe;

        return $this;
    }

    /**
     * Get SchluesselZweitfarbe value
     */
    public function getSchluesselZweitfarbe(): ?string
    {
        return $this->SchluesselZweitfarbe;
    }

    /**
     * Set SchluesselZweitfarbe value
     */
    public function setSchluesselZweitfarbe(?string $schluesselZweitfarbe = null): self
    {
        $this->SchluesselZweitfarbe = $schluesselZweitfarbe;

        return $this;
    }

    /**
     * Get TextZweitfarbe value
     */
    public function getTextZweitfarbe(): ?string
    {
        return $this->TextZweitfarbe;
    }

    /**
     * Set TextZweitfarbe value
     */
    public function setTextZweitfarbe(?string $textZweitfarbe = null): self
    {
        $this->TextZweitfarbe = $textZweitfarbe;

        return $this;
    }

    /**
     * Get Verkehrsjahr value
     */
    public function getVerkehrsjahr(): ?string
    {
        return $this->Verkehrsjahr;
    }

    /**
     * Set Verkehrsjahr value
     */
    public function setVerkehrsjahr(?string $verkehrsjahr = null): self
    {
        $this->Verkehrsjahr = $verkehrsjahr;

        return $this;
    }

    /**
     * Get MerkmalWechselkennzeichen value
     */
    public function getMerkmalWechselkennzeichen(): ?bool
    {
        return $this->MerkmalWechselkennzeichen;
    }

    /**
     * Set MerkmalWechselkennzeichen value
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;

        return $this;
    }
}
