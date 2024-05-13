<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SISVermerke StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SISVermerke extends AbstractStructBase
{
    /**
     * The SchengenID
     * @var string|null
     */
    public ?string $SchengenID = null;
    /**
     * The DatumDerAusschreibung
     * @var string|null
     */
    public ?string $DatumDerAusschreibung = null;
    /**
     * The LandDerAusschreibung
     * @var string|null
     */
    public ?string $LandDerAusschreibung = null;
    /**
     * The TextFahrzeugklasseSIS
     * @var string|null
     */
    public ?string $TextFahrzeugklasseSIS = null;
    /**
     * The Farbe
     * @var string|null
     */
    public ?string $Farbe = null;
    /**
     * The TextHerstellerSIS
     * @var string|null
     */
    public ?string $TextHerstellerSIS = null;
    /**
     * The TextTyp
     * @var string|null
     */
    public ?string $TextTyp = null;
    /**
     * The NummerZulBeschTeil1SIS
     * @var string|null
     */
    public ?string $NummerZulBeschTeil1SIS = null;
    /**
     * The NummerZulBeschTeil2SIS
     * @var string|null
     */
    public ?string $NummerZulBeschTeil2SIS = null;
    /**
     * The KennzeichenSIS
     * @var string|null
     */
    public ?string $KennzeichenSIS = null;
    /**
     * The Zulassungsstaat
     * @var string|null
     */
    public ?string $Zulassungsstaat = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The ZeitpunktVerarbeitung
     * @var string|null
     */
    public ?string $ZeitpunktVerarbeitung = null;
    /**
     * The ZeitpunktUebermittlung
     * @var string|null
     */
    public ?string $ZeitpunktUebermittlung = null;
    /**
     * The TextSISVermerk
     * @var string|null
     */
    public ?string $TextSISVermerk = null;
    /**
     * The DatumVerlustDiebstahlStrafanzeigeSIS
     * @var string|null
     */
    public ?string $DatumVerlustDiebstahlStrafanzeigeSIS = null;
    /**
     * The AusstellungsdatumSIS
     * @var string|null
     */
    public ?string $AusstellungsdatumSIS = null;
    /**
     * The AusstellungsortSIS
     * @var string|null
     */
    public ?string $AusstellungsortSIS = null;
    /**
     * Constructor method for SISVermerke
     * @uses SISVermerke::setSchengenID()
     * @uses SISVermerke::setDatumDerAusschreibung()
     * @uses SISVermerke::setLandDerAusschreibung()
     * @uses SISVermerke::setTextFahrzeugklasseSIS()
     * @uses SISVermerke::setFarbe()
     * @uses SISVermerke::setTextHerstellerSIS()
     * @uses SISVermerke::setTextTyp()
     * @uses SISVermerke::setNummerZulBeschTeil1SIS()
     * @uses SISVermerke::setNummerZulBeschTeil2SIS()
     * @uses SISVermerke::setKennzeichenSIS()
     * @uses SISVermerke::setZulassungsstaat()
     * @uses SISVermerke::setFahrzeugidentifizierungsnummer()
     * @uses SISVermerke::setZeitpunktVerarbeitung()
     * @uses SISVermerke::setZeitpunktUebermittlung()
     * @uses SISVermerke::setTextSISVermerk()
     * @uses SISVermerke::setDatumVerlustDiebstahlStrafanzeigeSIS()
     * @uses SISVermerke::setAusstellungsdatumSIS()
     * @uses SISVermerke::setAusstellungsortSIS()
     * @param string $schengenID
     * @param string $datumDerAusschreibung
     * @param string $landDerAusschreibung
     * @param string $textFahrzeugklasseSIS
     * @param string $farbe
     * @param string $textHerstellerSIS
     * @param string $textTyp
     * @param string $nummerZulBeschTeil1SIS
     * @param string $nummerZulBeschTeil2SIS
     * @param string $kennzeichenSIS
     * @param string $zulassungsstaat
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $zeitpunktVerarbeitung
     * @param string $zeitpunktUebermittlung
     * @param string $textSISVermerk
     * @param string $datumVerlustDiebstahlStrafanzeigeSIS
     * @param string $ausstellungsdatumSIS
     * @param string $ausstellungsortSIS
     */
    public function __construct(?string $schengenID = null, ?string $datumDerAusschreibung = null, ?string $landDerAusschreibung = null, ?string $textFahrzeugklasseSIS = null, ?string $farbe = null, ?string $textHerstellerSIS = null, ?string $textTyp = null, ?string $nummerZulBeschTeil1SIS = null, ?string $nummerZulBeschTeil2SIS = null, ?string $kennzeichenSIS = null, ?string $zulassungsstaat = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $zeitpunktVerarbeitung = null, ?string $zeitpunktUebermittlung = null, ?string $textSISVermerk = null, ?string $datumVerlustDiebstahlStrafanzeigeSIS = null, ?string $ausstellungsdatumSIS = null, ?string $ausstellungsortSIS = null)
    {
        $this
            ->setSchengenID($schengenID)
            ->setDatumDerAusschreibung($datumDerAusschreibung)
            ->setLandDerAusschreibung($landDerAusschreibung)
            ->setTextFahrzeugklasseSIS($textFahrzeugklasseSIS)
            ->setFarbe($farbe)
            ->setTextHerstellerSIS($textHerstellerSIS)
            ->setTextTyp($textTyp)
            ->setNummerZulBeschTeil1SIS($nummerZulBeschTeil1SIS)
            ->setNummerZulBeschTeil2SIS($nummerZulBeschTeil2SIS)
            ->setKennzeichenSIS($kennzeichenSIS)
            ->setZulassungsstaat($zulassungsstaat)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setZeitpunktVerarbeitung($zeitpunktVerarbeitung)
            ->setZeitpunktUebermittlung($zeitpunktUebermittlung)
            ->setTextSISVermerk($textSISVermerk)
            ->setDatumVerlustDiebstahlStrafanzeigeSIS($datumVerlustDiebstahlStrafanzeigeSIS)
            ->setAusstellungsdatumSIS($ausstellungsdatumSIS)
            ->setAusstellungsortSIS($ausstellungsortSIS);
    }
    /**
     * Get SchengenID value
     * @return string|null
     */
    public function getSchengenID(): ?string
    {
        return $this->SchengenID;
    }
    /**
     * Set SchengenID value
     * @param string $schengenID
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setSchengenID(?string $schengenID = null): self
    {
        $this->SchengenID = $schengenID;
        
        return $this;
    }
    /**
     * Get DatumDerAusschreibung value
     * @return string|null
     */
    public function getDatumDerAusschreibung(): ?string
    {
        return $this->DatumDerAusschreibung;
    }
    /**
     * Set DatumDerAusschreibung value
     * @param string $datumDerAusschreibung
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setDatumDerAusschreibung(?string $datumDerAusschreibung = null): self
    {
        $this->DatumDerAusschreibung = $datumDerAusschreibung;
        
        return $this;
    }
    /**
     * Get LandDerAusschreibung value
     * @return string|null
     */
    public function getLandDerAusschreibung(): ?string
    {
        return $this->LandDerAusschreibung;
    }
    /**
     * Set LandDerAusschreibung value
     * @param string $landDerAusschreibung
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setLandDerAusschreibung(?string $landDerAusschreibung = null): self
    {
        $this->LandDerAusschreibung = $landDerAusschreibung;
        
        return $this;
    }
    /**
     * Get TextFahrzeugklasseSIS value
     * @return string|null
     */
    public function getTextFahrzeugklasseSIS(): ?string
    {
        return $this->TextFahrzeugklasseSIS;
    }
    /**
     * Set TextFahrzeugklasseSIS value
     * @param string $textFahrzeugklasseSIS
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setTextFahrzeugklasseSIS(?string $textFahrzeugklasseSIS = null): self
    {
        $this->TextFahrzeugklasseSIS = $textFahrzeugklasseSIS;
        
        return $this;
    }
    /**
     * Get Farbe value
     * @return string|null
     */
    public function getFarbe(): ?string
    {
        return $this->Farbe;
    }
    /**
     * Set Farbe value
     * @param string $farbe
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setFarbe(?string $farbe = null): self
    {
        $this->Farbe = $farbe;
        
        return $this;
    }
    /**
     * Get TextHerstellerSIS value
     * @return string|null
     */
    public function getTextHerstellerSIS(): ?string
    {
        return $this->TextHerstellerSIS;
    }
    /**
     * Set TextHerstellerSIS value
     * @param string $textHerstellerSIS
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setTextHerstellerSIS(?string $textHerstellerSIS = null): self
    {
        $this->TextHerstellerSIS = $textHerstellerSIS;
        
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
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;
        
        return $this;
    }
    /**
     * Get NummerZulBeschTeil1SIS value
     * @return string|null
     */
    public function getNummerZulBeschTeil1SIS(): ?string
    {
        return $this->NummerZulBeschTeil1SIS;
    }
    /**
     * Set NummerZulBeschTeil1SIS value
     * @param string $nummerZulBeschTeil1SIS
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setNummerZulBeschTeil1SIS(?string $nummerZulBeschTeil1SIS = null): self
    {
        $this->NummerZulBeschTeil1SIS = $nummerZulBeschTeil1SIS;
        
        return $this;
    }
    /**
     * Get NummerZulBeschTeil2SIS value
     * @return string|null
     */
    public function getNummerZulBeschTeil2SIS(): ?string
    {
        return $this->NummerZulBeschTeil2SIS;
    }
    /**
     * Set NummerZulBeschTeil2SIS value
     * @param string $nummerZulBeschTeil2SIS
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setNummerZulBeschTeil2SIS(?string $nummerZulBeschTeil2SIS = null): self
    {
        $this->NummerZulBeschTeil2SIS = $nummerZulBeschTeil2SIS;
        
        return $this;
    }
    /**
     * Get KennzeichenSIS value
     * @return string|null
     */
    public function getKennzeichenSIS(): ?string
    {
        return $this->KennzeichenSIS;
    }
    /**
     * Set KennzeichenSIS value
     * @param string $kennzeichenSIS
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setKennzeichenSIS(?string $kennzeichenSIS = null): self
    {
        $this->KennzeichenSIS = $kennzeichenSIS;
        
        return $this;
    }
    /**
     * Get Zulassungsstaat value
     * @return string|null
     */
    public function getZulassungsstaat(): ?string
    {
        return $this->Zulassungsstaat;
    }
    /**
     * Set Zulassungsstaat value
     * @param string $zulassungsstaat
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setZulassungsstaat(?string $zulassungsstaat = null): self
    {
        $this->Zulassungsstaat = $zulassungsstaat;
        
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
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get ZeitpunktVerarbeitung value
     * @return string|null
     */
    public function getZeitpunktVerarbeitung(): ?string
    {
        return $this->ZeitpunktVerarbeitung;
    }
    /**
     * Set ZeitpunktVerarbeitung value
     * @param string $zeitpunktVerarbeitung
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setZeitpunktVerarbeitung(?string $zeitpunktVerarbeitung = null): self
    {
        $this->ZeitpunktVerarbeitung = $zeitpunktVerarbeitung;
        
        return $this;
    }
    /**
     * Get ZeitpunktUebermittlung value
     * @return string|null
     */
    public function getZeitpunktUebermittlung(): ?string
    {
        return $this->ZeitpunktUebermittlung;
    }
    /**
     * Set ZeitpunktUebermittlung value
     * @param string $zeitpunktUebermittlung
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setZeitpunktUebermittlung(?string $zeitpunktUebermittlung = null): self
    {
        $this->ZeitpunktUebermittlung = $zeitpunktUebermittlung;
        
        return $this;
    }
    /**
     * Get TextSISVermerk value
     * @return string|null
     */
    public function getTextSISVermerk(): ?string
    {
        return $this->TextSISVermerk;
    }
    /**
     * Set TextSISVermerk value
     * @param string $textSISVermerk
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setTextSISVermerk(?string $textSISVermerk = null): self
    {
        $this->TextSISVermerk = $textSISVermerk;
        
        return $this;
    }
    /**
     * Get DatumVerlustDiebstahlStrafanzeigeSIS value
     * @return string|null
     */
    public function getDatumVerlustDiebstahlStrafanzeigeSIS(): ?string
    {
        return $this->DatumVerlustDiebstahlStrafanzeigeSIS;
    }
    /**
     * Set DatumVerlustDiebstahlStrafanzeigeSIS value
     * @param string $datumVerlustDiebstahlStrafanzeigeSIS
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setDatumVerlustDiebstahlStrafanzeigeSIS(?string $datumVerlustDiebstahlStrafanzeigeSIS = null): self
    {
        $this->DatumVerlustDiebstahlStrafanzeigeSIS = $datumVerlustDiebstahlStrafanzeigeSIS;
        
        return $this;
    }
    /**
     * Get AusstellungsdatumSIS value
     * @return string|null
     */
    public function getAusstellungsdatumSIS(): ?string
    {
        return $this->AusstellungsdatumSIS;
    }
    /**
     * Set AusstellungsdatumSIS value
     * @param string $ausstellungsdatumSIS
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setAusstellungsdatumSIS(?string $ausstellungsdatumSIS = null): self
    {
        $this->AusstellungsdatumSIS = $ausstellungsdatumSIS;
        
        return $this;
    }
    /**
     * Get AusstellungsortSIS value
     * @return string|null
     */
    public function getAusstellungsortSIS(): ?string
    {
        return $this->AusstellungsortSIS;
    }
    /**
     * Set AusstellungsortSIS value
     * @param string $ausstellungsortSIS
     * @return \THAG\XKfz\StructType\SISVermerke
     */
    public function setAusstellungsortSIS(?string $ausstellungsortSIS = null): self
    {
        $this->AusstellungsortSIS = $ausstellungsortSIS;
        
        return $this;
    }
}
