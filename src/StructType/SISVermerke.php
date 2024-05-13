<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SISVermerke StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SISVermerke extends AbstractStructBase
{
    /**
     * The SchengenID
     */
    public ?string $SchengenID = null;

    /**
     * The DatumDerAusschreibung
     */
    public ?string $DatumDerAusschreibung = null;

    /**
     * The LandDerAusschreibung
     */
    public ?string $LandDerAusschreibung = null;

    /**
     * The TextFahrzeugklasseSIS
     */
    public ?string $TextFahrzeugklasseSIS = null;

    /**
     * The Farbe
     */
    public ?string $Farbe = null;

    /**
     * The TextHerstellerSIS
     */
    public ?string $TextHerstellerSIS = null;

    /**
     * The TextTyp
     */
    public ?string $TextTyp = null;

    /**
     * The NummerZulBeschTeil1SIS
     */
    public ?string $NummerZulBeschTeil1SIS = null;

    /**
     * The NummerZulBeschTeil2SIS
     */
    public ?string $NummerZulBeschTeil2SIS = null;

    /**
     * The KennzeichenSIS
     */
    public ?string $KennzeichenSIS = null;

    /**
     * The Zulassungsstaat
     */
    public ?string $Zulassungsstaat = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The ZeitpunktVerarbeitung
     */
    public ?string $ZeitpunktVerarbeitung = null;

    /**
     * The ZeitpunktUebermittlung
     */
    public ?string $ZeitpunktUebermittlung = null;

    /**
     * The TextSISVermerk
     */
    public ?string $TextSISVermerk = null;

    /**
     * The DatumVerlustDiebstahlStrafanzeigeSIS
     */
    public ?string $DatumVerlustDiebstahlStrafanzeigeSIS = null;

    /**
     * The AusstellungsdatumSIS
     */
    public ?string $AusstellungsdatumSIS = null;

    /**
     * The AusstellungsortSIS
     */
    public ?string $AusstellungsortSIS = null;

    /**
     * Constructor method for SISVermerke
     *
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
     */
    public function getSchengenID(): ?string
    {
        return $this->SchengenID;
    }

    /**
     * Set SchengenID value
     */
    public function setSchengenID(?string $schengenID = null): self
    {
        $this->SchengenID = $schengenID;

        return $this;
    }

    /**
     * Get DatumDerAusschreibung value
     */
    public function getDatumDerAusschreibung(): ?string
    {
        return $this->DatumDerAusschreibung;
    }

    /**
     * Set DatumDerAusschreibung value
     */
    public function setDatumDerAusschreibung(?string $datumDerAusschreibung = null): self
    {
        $this->DatumDerAusschreibung = $datumDerAusschreibung;

        return $this;
    }

    /**
     * Get LandDerAusschreibung value
     */
    public function getLandDerAusschreibung(): ?string
    {
        return $this->LandDerAusschreibung;
    }

    /**
     * Set LandDerAusschreibung value
     */
    public function setLandDerAusschreibung(?string $landDerAusschreibung = null): self
    {
        $this->LandDerAusschreibung = $landDerAusschreibung;

        return $this;
    }

    /**
     * Get TextFahrzeugklasseSIS value
     */
    public function getTextFahrzeugklasseSIS(): ?string
    {
        return $this->TextFahrzeugklasseSIS;
    }

    /**
     * Set TextFahrzeugklasseSIS value
     */
    public function setTextFahrzeugklasseSIS(?string $textFahrzeugklasseSIS = null): self
    {
        $this->TextFahrzeugklasseSIS = $textFahrzeugklasseSIS;

        return $this;
    }

    /**
     * Get Farbe value
     */
    public function getFarbe(): ?string
    {
        return $this->Farbe;
    }

    /**
     * Set Farbe value
     */
    public function setFarbe(?string $farbe = null): self
    {
        $this->Farbe = $farbe;

        return $this;
    }

    /**
     * Get TextHerstellerSIS value
     */
    public function getTextHerstellerSIS(): ?string
    {
        return $this->TextHerstellerSIS;
    }

    /**
     * Set TextHerstellerSIS value
     */
    public function setTextHerstellerSIS(?string $textHerstellerSIS = null): self
    {
        $this->TextHerstellerSIS = $textHerstellerSIS;

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
     * Get NummerZulBeschTeil1SIS value
     */
    public function getNummerZulBeschTeil1SIS(): ?string
    {
        return $this->NummerZulBeschTeil1SIS;
    }

    /**
     * Set NummerZulBeschTeil1SIS value
     */
    public function setNummerZulBeschTeil1SIS(?string $nummerZulBeschTeil1SIS = null): self
    {
        $this->NummerZulBeschTeil1SIS = $nummerZulBeschTeil1SIS;

        return $this;
    }

    /**
     * Get NummerZulBeschTeil2SIS value
     */
    public function getNummerZulBeschTeil2SIS(): ?string
    {
        return $this->NummerZulBeschTeil2SIS;
    }

    /**
     * Set NummerZulBeschTeil2SIS value
     */
    public function setNummerZulBeschTeil2SIS(?string $nummerZulBeschTeil2SIS = null): self
    {
        $this->NummerZulBeschTeil2SIS = $nummerZulBeschTeil2SIS;

        return $this;
    }

    /**
     * Get KennzeichenSIS value
     */
    public function getKennzeichenSIS(): ?string
    {
        return $this->KennzeichenSIS;
    }

    /**
     * Set KennzeichenSIS value
     */
    public function setKennzeichenSIS(?string $kennzeichenSIS = null): self
    {
        $this->KennzeichenSIS = $kennzeichenSIS;

        return $this;
    }

    /**
     * Get Zulassungsstaat value
     */
    public function getZulassungsstaat(): ?string
    {
        return $this->Zulassungsstaat;
    }

    /**
     * Set Zulassungsstaat value
     */
    public function setZulassungsstaat(?string $zulassungsstaat = null): self
    {
        $this->Zulassungsstaat = $zulassungsstaat;

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
     * Get ZeitpunktVerarbeitung value
     */
    public function getZeitpunktVerarbeitung(): ?string
    {
        return $this->ZeitpunktVerarbeitung;
    }

    /**
     * Set ZeitpunktVerarbeitung value
     */
    public function setZeitpunktVerarbeitung(?string $zeitpunktVerarbeitung = null): self
    {
        $this->ZeitpunktVerarbeitung = $zeitpunktVerarbeitung;

        return $this;
    }

    /**
     * Get ZeitpunktUebermittlung value
     */
    public function getZeitpunktUebermittlung(): ?string
    {
        return $this->ZeitpunktUebermittlung;
    }

    /**
     * Set ZeitpunktUebermittlung value
     */
    public function setZeitpunktUebermittlung(?string $zeitpunktUebermittlung = null): self
    {
        $this->ZeitpunktUebermittlung = $zeitpunktUebermittlung;

        return $this;
    }

    /**
     * Get TextSISVermerk value
     */
    public function getTextSISVermerk(): ?string
    {
        return $this->TextSISVermerk;
    }

    /**
     * Set TextSISVermerk value
     */
    public function setTextSISVermerk(?string $textSISVermerk = null): self
    {
        $this->TextSISVermerk = $textSISVermerk;

        return $this;
    }

    /**
     * Get DatumVerlustDiebstahlStrafanzeigeSIS value
     */
    public function getDatumVerlustDiebstahlStrafanzeigeSIS(): ?string
    {
        return $this->DatumVerlustDiebstahlStrafanzeigeSIS;
    }

    /**
     * Set DatumVerlustDiebstahlStrafanzeigeSIS value
     */
    public function setDatumVerlustDiebstahlStrafanzeigeSIS(?string $datumVerlustDiebstahlStrafanzeigeSIS = null): self
    {
        $this->DatumVerlustDiebstahlStrafanzeigeSIS = $datumVerlustDiebstahlStrafanzeigeSIS;

        return $this;
    }

    /**
     * Get AusstellungsdatumSIS value
     */
    public function getAusstellungsdatumSIS(): ?string
    {
        return $this->AusstellungsdatumSIS;
    }

    /**
     * Set AusstellungsdatumSIS value
     */
    public function setAusstellungsdatumSIS(?string $ausstellungsdatumSIS = null): self
    {
        $this->AusstellungsdatumSIS = $ausstellungsdatumSIS;

        return $this;
    }

    /**
     * Get AusstellungsortSIS value
     */
    public function getAusstellungsortSIS(): ?string
    {
        return $this->AusstellungsortSIS;
    }

    /**
     * Set AusstellungsortSIS value
     */
    public function setAusstellungsortSIS(?string $ausstellungsortSIS = null): self
    {
        $this->AusstellungsortSIS = $ausstellungsortSIS;

        return $this;
    }
}
