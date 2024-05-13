<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZATyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZATyp extends AbstractStructBase
{
    /**
     * The ZeitpunktBeendigungZulassungsabschnitt
     */
    public ?string $ZeitpunktBeendigungZulassungsabschnitt = null;

    /**
     * The IdentifikationZulassungsabschnitt
     */
    public ?string $IdentifikationZulassungsabschnitt = null;

    /**
     * The Arbeitsgang
     */
    public ?string $Arbeitsgang = null;

    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The ZeitpunktVerarbeitungZFZR
     */
    public ?string $ZeitpunktVerarbeitungZFZR = null;

    /**
     * The MerkmalStornierung
     */
    public ?string $MerkmalStornierung = null;

    /**
     * The ZeitpunktStornierung
     */
    public ?string $ZeitpunktStornierung = null;

    /**
     * The MerkmalFahrzeugbeschreibung
     */
    public ?bool $MerkmalFahrzeugbeschreibung = null;

    /**
     * The Kennzeichendaten
     */
    public ?\THAG\XKfz\StructType\KennzeichendatenZATyp $Kennzeichendaten = null;

    /**
     * The Fahrzeugidentifizierung
     */
    public ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $Fahrzeugidentifizierung = null;

    /**
     * The VerwendungFahrzeug
     */
    public ?string $VerwendungFahrzeug = null;

    /**
     * The Halter
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $Halter = null;

    /**
     * The Veraeusserungsanzeige
     */
    public ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $Veraeusserungsanzeige = null;

    /**
     * The Verfuegungsberechtigter
     */
    public ?\THAG\XKfz\StructType\Verfuegungsberechtigter $Verfuegungsberechtigter = null;

    /**
     * The Fahrzeugbeschreibung
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $Fahrzeugbeschreibung = null;

    /**
     * The AutonomesFahren
     */
    public ?\THAG\XKfz\StructType\AutonomesFahren $AutonomesFahren = null;

    /**
     * The Versicherungsdaten
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZATyp $Versicherungsdaten = null;

    /**
     * The Empfangsbevollmaechtigter
     */
    public ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $Empfangsbevollmaechtigter = null;

    /**
     * The Fahrtenbuchauflage
     */
    public ?\THAG\XKfz\StructType\Fahrtenbuchauflage $Fahrtenbuchauflage = null;

    /**
     * Constructor method for ZulassungsabschnittZATyp
     *
     * @uses ZulassungsabschnittZATyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZATyp::setIdentifikationZulassungsabschnitt()
     * @uses ZulassungsabschnittZATyp::setArbeitsgang()
     * @uses ZulassungsabschnittZATyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZATyp::setZeitpunktVerarbeitungZFZR()
     * @uses ZulassungsabschnittZATyp::setMerkmalStornierung()
     * @uses ZulassungsabschnittZATyp::setZeitpunktStornierung()
     * @uses ZulassungsabschnittZATyp::setMerkmalFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZATyp::setKennzeichendaten()
     * @uses ZulassungsabschnittZATyp::setFahrzeugidentifizierung()
     * @uses ZulassungsabschnittZATyp::setVerwendungFahrzeug()
     * @uses ZulassungsabschnittZATyp::setHalter()
     * @uses ZulassungsabschnittZATyp::setVeraeusserungsanzeige()
     * @uses ZulassungsabschnittZATyp::setVerfuegungsberechtigter()
     * @uses ZulassungsabschnittZATyp::setFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZATyp::setAutonomesFahren()
     * @uses ZulassungsabschnittZATyp::setVersicherungsdaten()
     * @uses ZulassungsabschnittZATyp::setEmpfangsbevollmaechtigter()
     * @uses ZulassungsabschnittZATyp::setFahrtenbuchauflage()
     */
    public function __construct(?string $zeitpunktBeendigungZulassungsabschnitt = null, ?string $identifikationZulassungsabschnitt = null, ?string $arbeitsgang = null, ?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null, ?string $merkmalStornierung = null, ?string $zeitpunktStornierung = null, ?bool $merkmalFahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\KennzeichendatenZATyp $kennzeichendaten = null, ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung = null, ?string $verwendungFahrzeug = null, ?\THAG\XKfz\StructType\HalterZCTyp $halter = null, ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $veraeusserungsanzeige = null, ?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null, ?\THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $fahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\AutonomesFahren $autonomesFahren = null, ?\THAG\XKfz\StructType\VersicherungsdatenZATyp $versicherungsdaten = null, ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter = null, ?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null)
    {
        $this
            ->setZeitpunktBeendigungZulassungsabschnitt($zeitpunktBeendigungZulassungsabschnitt)
            ->setIdentifikationZulassungsabschnitt($identifikationZulassungsabschnitt)
            ->setArbeitsgang($arbeitsgang)
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setZeitpunktVerarbeitungZFZR($zeitpunktVerarbeitungZFZR)
            ->setMerkmalStornierung($merkmalStornierung)
            ->setZeitpunktStornierung($zeitpunktStornierung)
            ->setMerkmalFahrzeugbeschreibung($merkmalFahrzeugbeschreibung)
            ->setKennzeichendaten($kennzeichendaten)
            ->setFahrzeugidentifizierung($fahrzeugidentifizierung)
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setHalter($halter)
            ->setVeraeusserungsanzeige($veraeusserungsanzeige)
            ->setVerfuegungsberechtigter($verfuegungsberechtigter)
            ->setFahrzeugbeschreibung($fahrzeugbeschreibung)
            ->setAutonomesFahren($autonomesFahren)
            ->setVersicherungsdaten($versicherungsdaten)
            ->setEmpfangsbevollmaechtigter($empfangsbevollmaechtigter)
            ->setFahrtenbuchauflage($fahrtenbuchauflage);
    }

    /**
     * Get ZeitpunktBeendigungZulassungsabschnitt value
     */
    public function getZeitpunktBeendigungZulassungsabschnitt(): ?string
    {
        return $this->ZeitpunktBeendigungZulassungsabschnitt;
    }

    /**
     * Set ZeitpunktBeendigungZulassungsabschnitt value
     */
    public function setZeitpunktBeendigungZulassungsabschnitt(?string $zeitpunktBeendigungZulassungsabschnitt = null): self
    {
        $this->ZeitpunktBeendigungZulassungsabschnitt = $zeitpunktBeendigungZulassungsabschnitt;

        return $this;
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
     * Get Arbeitsgang value
     */
    public function getArbeitsgang(): ?string
    {
        return $this->Arbeitsgang;
    }

    /**
     * Set Arbeitsgang value
     */
    public function setArbeitsgang(?string $arbeitsgang = null): self
    {
        $this->Arbeitsgang = $arbeitsgang;

        return $this;
    }

    /**
     * Get ZeitpunktAenderung value
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }

    /**
     * Set ZeitpunktAenderung value
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;

        return $this;
    }

    /**
     * Get ZeitpunktVerarbeitungZFZR value
     */
    public function getZeitpunktVerarbeitungZFZR(): ?string
    {
        return $this->ZeitpunktVerarbeitungZFZR;
    }

    /**
     * Set ZeitpunktVerarbeitungZFZR value
     */
    public function setZeitpunktVerarbeitungZFZR(?string $zeitpunktVerarbeitungZFZR = null): self
    {
        $this->ZeitpunktVerarbeitungZFZR = $zeitpunktVerarbeitungZFZR;

        return $this;
    }

    /**
     * Get MerkmalStornierung value
     */
    public function getMerkmalStornierung(): ?string
    {
        return $this->MerkmalStornierung;
    }

    /**
     * Set MerkmalStornierung value
     */
    public function setMerkmalStornierung(?string $merkmalStornierung = null): self
    {
        $this->MerkmalStornierung = $merkmalStornierung;

        return $this;
    }

    /**
     * Get ZeitpunktStornierung value
     */
    public function getZeitpunktStornierung(): ?string
    {
        return $this->ZeitpunktStornierung;
    }

    /**
     * Set ZeitpunktStornierung value
     */
    public function setZeitpunktStornierung(?string $zeitpunktStornierung = null): self
    {
        $this->ZeitpunktStornierung = $zeitpunktStornierung;

        return $this;
    }

    /**
     * Get MerkmalFahrzeugbeschreibung value
     */
    public function getMerkmalFahrzeugbeschreibung(): ?bool
    {
        return $this->MerkmalFahrzeugbeschreibung;
    }

    /**
     * Set MerkmalFahrzeugbeschreibung value
     */
    public function setMerkmalFahrzeugbeschreibung(?bool $merkmalFahrzeugbeschreibung = null): self
    {
        $this->MerkmalFahrzeugbeschreibung = $merkmalFahrzeugbeschreibung;

        return $this;
    }

    /**
     * Get Kennzeichendaten value
     */
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\KennzeichendatenZATyp
    {
        return $this->Kennzeichendaten;
    }

    /**
     * Set Kennzeichendaten value
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\KennzeichendatenZATyp $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;

        return $this;
    }

    /**
     * Get Fahrzeugidentifizierung value
     */
    public function getFahrzeugidentifizierung(): ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
    {
        return $this->Fahrzeugidentifizierung;
    }

    /**
     * Set Fahrzeugidentifizierung value
     */
    public function setFahrzeugidentifizierung(?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung = null): self
    {
        $this->Fahrzeugidentifizierung = $fahrzeugidentifizierung;

        return $this;
    }

    /**
     * Get VerwendungFahrzeug value
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }

    /**
     * Set VerwendungFahrzeug value
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;

        return $this;
    }

    /**
     * Get Halter value
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZCTyp
    {
        return $this->Halter;
    }

    /**
     * Set Halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZCTyp $halter = null): self
    {
        $this->Halter = $halter;

        return $this;
    }

    /**
     * Get Veraeusserungsanzeige value
     */
    public function getVeraeusserungsanzeige(): ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp
    {
        return $this->Veraeusserungsanzeige;
    }

    /**
     * Set Veraeusserungsanzeige value
     */
    public function setVeraeusserungsanzeige(?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $veraeusserungsanzeige = null): self
    {
        $this->Veraeusserungsanzeige = $veraeusserungsanzeige;

        return $this;
    }

    /**
     * Get Verfuegungsberechtigter value
     */
    public function getVerfuegungsberechtigter(): ?\THAG\XKfz\StructType\Verfuegungsberechtigter
    {
        return $this->Verfuegungsberechtigter;
    }

    /**
     * Set Verfuegungsberechtigter value
     */
    public function setVerfuegungsberechtigter(?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null): self
    {
        $this->Verfuegungsberechtigter = $verfuegungsberechtigter;

        return $this;
    }

    /**
     * Get Fahrzeugbeschreibung value
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp
    {
        return $this->Fahrzeugbeschreibung;
    }

    /**
     * Set Fahrzeugbeschreibung value
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;

        return $this;
    }

    /**
     * Get AutonomesFahren value
     */
    public function getAutonomesFahren(): ?\THAG\XKfz\StructType\AutonomesFahren
    {
        return $this->AutonomesFahren;
    }

    /**
     * Set AutonomesFahren value
     */
    public function setAutonomesFahren(?\THAG\XKfz\StructType\AutonomesFahren $autonomesFahren = null): self
    {
        $this->AutonomesFahren = $autonomesFahren;

        return $this;
    }

    /**
     * Get Versicherungsdaten value
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZATyp
    {
        return $this->Versicherungsdaten;
    }

    /**
     * Set Versicherungsdaten value
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZATyp $versicherungsdaten = null): self
    {
        $this->Versicherungsdaten = $versicherungsdaten;

        return $this;
    }

    /**
     * Get Empfangsbevollmaechtigter value
     */
    public function getEmpfangsbevollmaechtigter(): ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter
    {
        return $this->Empfangsbevollmaechtigter;
    }

    /**
     * Set Empfangsbevollmaechtigter value
     */
    public function setEmpfangsbevollmaechtigter(?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter = null): self
    {
        $this->Empfangsbevollmaechtigter = $empfangsbevollmaechtigter;

        return $this;
    }

    /**
     * Get Fahrtenbuchauflage value
     */
    public function getFahrtenbuchauflage(): ?\THAG\XKfz\StructType\Fahrtenbuchauflage
    {
        return $this->Fahrtenbuchauflage;
    }

    /**
     * Set Fahrtenbuchauflage value
     */
    public function setFahrtenbuchauflage(?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null): self
    {
        $this->Fahrtenbuchauflage = $fahrtenbuchauflage;

        return $this;
    }
}
