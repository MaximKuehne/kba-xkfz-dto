<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Satz-Fahrzeugliste StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Satz_Fahrzeugliste extends AbstractStructBase
{
    /**
     * The IdentifikationZulassungsabschnitt
     * @var string|null
     */
    public ?string $IdentifikationZulassungsabschnitt = null;
    /**
     * The IdentifizierungsnummerZFZREintrag
     * @var string|null
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;
    /**
     * The DatumErstzulassung
     * @var string|null
     */
    public ?string $DatumErstzulassung = null;
    /**
     * The ZeitpunktZuteilungKennzeichen
     * @var string|null
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;
    /**
     * The MerkmalAusserbetriebsetzung
     * @var bool|null
     */
    public ?bool $MerkmalAusserbetriebsetzung = null;
    /**
     * The MerkmalKennzeichenart
     * @var string|null
     */
    public ?string $MerkmalKennzeichenart = null;
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The TextFahrzeugklasse
     * @var string|null
     */
    public ?string $TextFahrzeugklasse = null;
    /**
     * The TextAufbau
     * @var string|null
     */
    public ?string $TextAufbau = null;
    /**
     * The TextTyp
     * @var string|null
     */
    public ?string $TextTyp = null;
    /**
     * The TextHersteller
     * @var string|null
     */
    public ?string $TextHersteller = null;
    /**
     * The TextMarke
     * @var string|null
     */
    public ?string $TextMarke = null;
    /**
     * The SchluesselGrundfarbe
     * @var string|null
     */
    public ?string $SchluesselGrundfarbe = null;
    /**
     * The TextGrundfarbe
     * @var string|null
     */
    public ?string $TextGrundfarbe = null;
    /**
     * The SchluesselZweitfarbe
     * @var string|null
     */
    public ?string $SchluesselZweitfarbe = null;
    /**
     * The TextZweitfarbe
     * @var string|null
     */
    public ?string $TextZweitfarbe = null;
    /**
     * The Verkehrsjahr
     * @var string|null
     */
    public ?string $Verkehrsjahr = null;
    /**
     * The MerkmalWechselkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalWechselkennzeichen = null;
    /**
     * Constructor method for Satz-Fahrzeugliste
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
     * @param string $identifikationZulassungsabschnitt
     * @param string $identifizierungsnummerZFZREintrag
     * @param string $datumErstzulassung
     * @param string $zeitpunktZuteilungKennzeichen
     * @param bool $merkmalAusserbetriebsetzung
     * @param string $merkmalKennzeichenart
     * @param string $kennzeichen
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $textFahrzeugklasse
     * @param string $textAufbau
     * @param string $textTyp
     * @param string $textHersteller
     * @param string $textMarke
     * @param string $schluesselGrundfarbe
     * @param string $textGrundfarbe
     * @param string $schluesselZweitfarbe
     * @param string $textZweitfarbe
     * @param string $verkehrsjahr
     * @param bool $merkmalWechselkennzeichen
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
     * @return string|null
     */
    public function getIdentifikationZulassungsabschnitt(): ?string
    {
        return $this->IdentifikationZulassungsabschnitt;
    }
    /**
     * Set IdentifikationZulassungsabschnitt value
     * @param string $identifikationZulassungsabschnitt
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setIdentifikationZulassungsabschnitt(?string $identifikationZulassungsabschnitt = null): self
    {
        $this->IdentifikationZulassungsabschnitt = $identifikationZulassungsabschnitt;
        
        return $this;
    }
    /**
     * Get IdentifizierungsnummerZFZREintrag value
     * @return string|null
     */
    public function getIdentifizierungsnummerZFZREintrag(): ?string
    {
        return $this->IdentifizierungsnummerZFZREintrag;
    }
    /**
     * Set IdentifizierungsnummerZFZREintrag value
     * @param string $identifizierungsnummerZFZREintrag
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setIdentifizierungsnummerZFZREintrag(?string $identifizierungsnummerZFZREintrag = null): self
    {
        $this->IdentifizierungsnummerZFZREintrag = $identifizierungsnummerZFZREintrag;
        
        return $this;
    }
    /**
     * Get DatumErstzulassung value
     * @return string|null
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }
    /**
     * Set DatumErstzulassung value
     * @param string $datumErstzulassung
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;
        
        return $this;
    }
    /**
     * Get ZeitpunktZuteilungKennzeichen value
     * @return string|null
     */
    public function getZeitpunktZuteilungKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungKennzeichen;
    }
    /**
     * Set ZeitpunktZuteilungKennzeichen value
     * @param string $zeitpunktZuteilungKennzeichen
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setZeitpunktZuteilungKennzeichen(?string $zeitpunktZuteilungKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungKennzeichen = $zeitpunktZuteilungKennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalAusserbetriebsetzung value
     * @return bool|null
     */
    public function getMerkmalAusserbetriebsetzung(): ?bool
    {
        return $this->MerkmalAusserbetriebsetzung;
    }
    /**
     * Set MerkmalAusserbetriebsetzung value
     * @param bool $merkmalAusserbetriebsetzung
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setMerkmalAusserbetriebsetzung(?bool $merkmalAusserbetriebsetzung = null): self
    {
        $this->MerkmalAusserbetriebsetzung = $merkmalAusserbetriebsetzung;
        
        return $this;
    }
    /**
     * Get MerkmalKennzeichenart value
     * @return string|null
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }
    /**
     * Set MerkmalKennzeichenart value
     * @param string $merkmalKennzeichenart
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;
        
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
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }
    /**
     * Set Fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get TextFahrzeugklasse value
     * @return string|null
     */
    public function getTextFahrzeugklasse(): ?string
    {
        return $this->TextFahrzeugklasse;
    }
    /**
     * Set TextFahrzeugklasse value
     * @param string $textFahrzeugklasse
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get TextAufbau value
     * @return string|null
     */
    public function getTextAufbau(): ?string
    {
        return $this->TextAufbau;
    }
    /**
     * Set TextAufbau value
     * @param string $textAufbau
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setTextAufbau(?string $textAufbau = null): self
    {
        $this->TextAufbau = $textAufbau;
        
        return $this;
    }
    /**
     * Get TextTyp value
     * @return string|null
     */
    public function getTextTyp(): ?string
    {
        return $this->TextTyp;
    }
    /**
     * Set TextTyp value
     * @param string $textTyp
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;
        
        return $this;
    }
    /**
     * Get TextHersteller value
     * @return string|null
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }
    /**
     * Set TextHersteller value
     * @param string $textHersteller
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;
        
        return $this;
    }
    /**
     * Get TextMarke value
     * @return string|null
     */
    public function getTextMarke(): ?string
    {
        return $this->TextMarke;
    }
    /**
     * Set TextMarke value
     * @param string $textMarke
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setTextMarke(?string $textMarke = null): self
    {
        $this->TextMarke = $textMarke;
        
        return $this;
    }
    /**
     * Get SchluesselGrundfarbe value
     * @return string|null
     */
    public function getSchluesselGrundfarbe(): ?string
    {
        return $this->SchluesselGrundfarbe;
    }
    /**
     * Set SchluesselGrundfarbe value
     * @param string $schluesselGrundfarbe
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setSchluesselGrundfarbe(?string $schluesselGrundfarbe = null): self
    {
        $this->SchluesselGrundfarbe = $schluesselGrundfarbe;
        
        return $this;
    }
    /**
     * Get TextGrundfarbe value
     * @return string|null
     */
    public function getTextGrundfarbe(): ?string
    {
        return $this->TextGrundfarbe;
    }
    /**
     * Set TextGrundfarbe value
     * @param string $textGrundfarbe
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setTextGrundfarbe(?string $textGrundfarbe = null): self
    {
        $this->TextGrundfarbe = $textGrundfarbe;
        
        return $this;
    }
    /**
     * Get SchluesselZweitfarbe value
     * @return string|null
     */
    public function getSchluesselZweitfarbe(): ?string
    {
        return $this->SchluesselZweitfarbe;
    }
    /**
     * Set SchluesselZweitfarbe value
     * @param string $schluesselZweitfarbe
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setSchluesselZweitfarbe(?string $schluesselZweitfarbe = null): self
    {
        $this->SchluesselZweitfarbe = $schluesselZweitfarbe;
        
        return $this;
    }
    /**
     * Get TextZweitfarbe value
     * @return string|null
     */
    public function getTextZweitfarbe(): ?string
    {
        return $this->TextZweitfarbe;
    }
    /**
     * Set TextZweitfarbe value
     * @param string $textZweitfarbe
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setTextZweitfarbe(?string $textZweitfarbe = null): self
    {
        $this->TextZweitfarbe = $textZweitfarbe;
        
        return $this;
    }
    /**
     * Get Verkehrsjahr value
     * @return string|null
     */
    public function getVerkehrsjahr(): ?string
    {
        return $this->Verkehrsjahr;
    }
    /**
     * Set Verkehrsjahr value
     * @param string $verkehrsjahr
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setVerkehrsjahr(?string $verkehrsjahr = null): self
    {
        $this->Verkehrsjahr = $verkehrsjahr;
        
        return $this;
    }
    /**
     * Get MerkmalWechselkennzeichen value
     * @return bool|null
     */
    public function getMerkmalWechselkennzeichen(): ?bool
    {
        return $this->MerkmalWechselkennzeichen;
    }
    /**
     * Set MerkmalWechselkennzeichen value
     * @param bool $merkmalWechselkennzeichen
     * @return \THAG\XKfz\StructType\Satz_Fahrzeugliste
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;
        
        return $this;
    }
}
