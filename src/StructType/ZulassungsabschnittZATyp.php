<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZATyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZATyp extends AbstractStructBase
{
    /**
     * The ZeitpunktBeendigungZulassungsabschnitt
     * @var string|null
     */
    public ?string $ZeitpunktBeendigungZulassungsabschnitt = null;
    /**
     * The IdentifikationZulassungsabschnitt
     * @var string|null
     */
    public ?string $IdentifikationZulassungsabschnitt = null;
    /**
     * The Arbeitsgang
     * @var string|null
     */
    public ?string $Arbeitsgang = null;
    /**
     * The ZeitpunktAenderung
     * @var string|null
     */
    public ?string $ZeitpunktAenderung = null;
    /**
     * The ZeitpunktVerarbeitungZFZR
     * @var string|null
     */
    public ?string $ZeitpunktVerarbeitungZFZR = null;
    /**
     * The MerkmalStornierung
     * @var string|null
     */
    public ?string $MerkmalStornierung = null;
    /**
     * The ZeitpunktStornierung
     * @var string|null
     */
    public ?string $ZeitpunktStornierung = null;
    /**
     * The MerkmalFahrzeugbeschreibung
     * @var bool|null
     */
    public ?bool $MerkmalFahrzeugbeschreibung = null;
    /**
     * The Kennzeichendaten
     * @var \THAG\XKfz\StructType\KennzeichendatenZATyp|null
     */
    public ?\THAG\XKfz\StructType\KennzeichendatenZATyp $Kennzeichendaten = null;
    /**
     * The Fahrzeugidentifizierung
     * @var \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $Fahrzeugidentifizierung = null;
    /**
     * The VerwendungFahrzeug
     * @var string|null
     */
    public ?string $VerwendungFahrzeug = null;
    /**
     * The Halter
     * @var \THAG\XKfz\StructType\HalterZCTyp|null
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $Halter = null;
    /**
     * The Veraeusserungsanzeige
     * @var \THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp|null
     */
    public ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $Veraeusserungsanzeige = null;
    /**
     * The Verfuegungsberechtigter
     * @var \THAG\XKfz\StructType\Verfuegungsberechtigter|null
     */
    public ?\THAG\XKfz\StructType\Verfuegungsberechtigter $Verfuegungsberechtigter = null;
    /**
     * The Fahrzeugbeschreibung
     * @var \THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $Fahrzeugbeschreibung = null;
    /**
     * The AutonomesFahren
     * @var \THAG\XKfz\StructType\AutonomesFahren|null
     */
    public ?\THAG\XKfz\StructType\AutonomesFahren $AutonomesFahren = null;
    /**
     * The Versicherungsdaten
     * @var \THAG\XKfz\StructType\VersicherungsdatenZATyp|null
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZATyp $Versicherungsdaten = null;
    /**
     * The Empfangsbevollmaechtigter
     * @var \THAG\XKfz\StructType\Empfangsbevollmaechtigter|null
     */
    public ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $Empfangsbevollmaechtigter = null;
    /**
     * The Fahrtenbuchauflage
     * @var \THAG\XKfz\StructType\Fahrtenbuchauflage|null
     */
    public ?\THAG\XKfz\StructType\Fahrtenbuchauflage $Fahrtenbuchauflage = null;
    /**
     * Constructor method for ZulassungsabschnittZATyp
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
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param string $identifikationZulassungsabschnitt
     * @param string $arbeitsgang
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktVerarbeitungZFZR
     * @param string $merkmalStornierung
     * @param string $zeitpunktStornierung
     * @param bool $merkmalFahrzeugbeschreibung
     * @param \THAG\XKfz\StructType\KennzeichendatenZATyp $kennzeichendaten
     * @param \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung
     * @param string $verwendungFahrzeug
     * @param \THAG\XKfz\StructType\HalterZCTyp $halter
     * @param \THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $veraeusserungsanzeige
     * @param \THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $fahrzeugbeschreibung
     * @param \THAG\XKfz\StructType\AutonomesFahren $autonomesFahren
     * @param \THAG\XKfz\StructType\VersicherungsdatenZATyp $versicherungsdaten
     * @param \THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter
     * @param \THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage
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
     * @return string|null
     */
    public function getZeitpunktBeendigungZulassungsabschnitt(): ?string
    {
        return $this->ZeitpunktBeendigungZulassungsabschnitt;
    }
    /**
     * Set ZeitpunktBeendigungZulassungsabschnitt value
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setZeitpunktBeendigungZulassungsabschnitt(?string $zeitpunktBeendigungZulassungsabschnitt = null): self
    {
        $this->ZeitpunktBeendigungZulassungsabschnitt = $zeitpunktBeendigungZulassungsabschnitt;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setIdentifikationZulassungsabschnitt(?string $identifikationZulassungsabschnitt = null): self
    {
        $this->IdentifikationZulassungsabschnitt = $identifikationZulassungsabschnitt;
        
        return $this;
    }
    /**
     * Get Arbeitsgang value
     * @return string|null
     */
    public function getArbeitsgang(): ?string
    {
        return $this->Arbeitsgang;
    }
    /**
     * Set Arbeitsgang value
     * @param string $arbeitsgang
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setArbeitsgang(?string $arbeitsgang = null): self
    {
        $this->Arbeitsgang = $arbeitsgang;
        
        return $this;
    }
    /**
     * Get ZeitpunktAenderung value
     * @return string|null
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }
    /**
     * Set ZeitpunktAenderung value
     * @param string $zeitpunktAenderung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;
        
        return $this;
    }
    /**
     * Get ZeitpunktVerarbeitungZFZR value
     * @return string|null
     */
    public function getZeitpunktVerarbeitungZFZR(): ?string
    {
        return $this->ZeitpunktVerarbeitungZFZR;
    }
    /**
     * Set ZeitpunktVerarbeitungZFZR value
     * @param string $zeitpunktVerarbeitungZFZR
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setZeitpunktVerarbeitungZFZR(?string $zeitpunktVerarbeitungZFZR = null): self
    {
        $this->ZeitpunktVerarbeitungZFZR = $zeitpunktVerarbeitungZFZR;
        
        return $this;
    }
    /**
     * Get MerkmalStornierung value
     * @return string|null
     */
    public function getMerkmalStornierung(): ?string
    {
        return $this->MerkmalStornierung;
    }
    /**
     * Set MerkmalStornierung value
     * @param string $merkmalStornierung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setMerkmalStornierung(?string $merkmalStornierung = null): self
    {
        $this->MerkmalStornierung = $merkmalStornierung;
        
        return $this;
    }
    /**
     * Get ZeitpunktStornierung value
     * @return string|null
     */
    public function getZeitpunktStornierung(): ?string
    {
        return $this->ZeitpunktStornierung;
    }
    /**
     * Set ZeitpunktStornierung value
     * @param string $zeitpunktStornierung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setZeitpunktStornierung(?string $zeitpunktStornierung = null): self
    {
        $this->ZeitpunktStornierung = $zeitpunktStornierung;
        
        return $this;
    }
    /**
     * Get MerkmalFahrzeugbeschreibung value
     * @return bool|null
     */
    public function getMerkmalFahrzeugbeschreibung(): ?bool
    {
        return $this->MerkmalFahrzeugbeschreibung;
    }
    /**
     * Set MerkmalFahrzeugbeschreibung value
     * @param bool $merkmalFahrzeugbeschreibung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setMerkmalFahrzeugbeschreibung(?bool $merkmalFahrzeugbeschreibung = null): self
    {
        $this->MerkmalFahrzeugbeschreibung = $merkmalFahrzeugbeschreibung;
        
        return $this;
    }
    /**
     * Get Kennzeichendaten value
     * @return \THAG\XKfz\StructType\KennzeichendatenZATyp|null
     */
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\KennzeichendatenZATyp
    {
        return $this->Kennzeichendaten;
    }
    /**
     * Set Kennzeichendaten value
     * @param \THAG\XKfz\StructType\KennzeichendatenZATyp $kennzeichendaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\KennzeichendatenZATyp $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierung value
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp|null
     */
    public function getFahrzeugidentifizierung(): ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
    {
        return $this->Fahrzeugidentifizierung;
    }
    /**
     * Set Fahrzeugidentifizierung value
     * @param \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setFahrzeugidentifizierung(?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung = null): self
    {
        $this->Fahrzeugidentifizierung = $fahrzeugidentifizierung;
        
        return $this;
    }
    /**
     * Get VerwendungFahrzeug value
     * @return string|null
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }
    /**
     * Set VerwendungFahrzeug value
     * @param string $verwendungFahrzeug
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;
        
        return $this;
    }
    /**
     * Get Halter value
     * @return \THAG\XKfz\StructType\HalterZCTyp|null
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZCTyp
    {
        return $this->Halter;
    }
    /**
     * Set Halter value
     * @param \THAG\XKfz\StructType\HalterZCTyp $halter
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZCTyp $halter = null): self
    {
        $this->Halter = $halter;
        
        return $this;
    }
    /**
     * Get Veraeusserungsanzeige value
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp|null
     */
    public function getVeraeusserungsanzeige(): ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp
    {
        return $this->Veraeusserungsanzeige;
    }
    /**
     * Set Veraeusserungsanzeige value
     * @param \THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $veraeusserungsanzeige
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setVeraeusserungsanzeige(?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $veraeusserungsanzeige = null): self
    {
        $this->Veraeusserungsanzeige = $veraeusserungsanzeige;
        
        return $this;
    }
    /**
     * Get Verfuegungsberechtigter value
     * @return \THAG\XKfz\StructType\Verfuegungsberechtigter|null
     */
    public function getVerfuegungsberechtigter(): ?\THAG\XKfz\StructType\Verfuegungsberechtigter
    {
        return $this->Verfuegungsberechtigter;
    }
    /**
     * Set Verfuegungsberechtigter value
     * @param \THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setVerfuegungsberechtigter(?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null): self
    {
        $this->Verfuegungsberechtigter = $verfuegungsberechtigter;
        
        return $this;
    }
    /**
     * Get Fahrzeugbeschreibung value
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp|null
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp
    {
        return $this->Fahrzeugbeschreibung;
    }
    /**
     * Set Fahrzeugbeschreibung value
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $fahrzeugbeschreibung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;
        
        return $this;
    }
    /**
     * Get AutonomesFahren value
     * @return \THAG\XKfz\StructType\AutonomesFahren|null
     */
    public function getAutonomesFahren(): ?\THAG\XKfz\StructType\AutonomesFahren
    {
        return $this->AutonomesFahren;
    }
    /**
     * Set AutonomesFahren value
     * @param \THAG\XKfz\StructType\AutonomesFahren $autonomesFahren
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setAutonomesFahren(?\THAG\XKfz\StructType\AutonomesFahren $autonomesFahren = null): self
    {
        $this->AutonomesFahren = $autonomesFahren;
        
        return $this;
    }
    /**
     * Get Versicherungsdaten value
     * @return \THAG\XKfz\StructType\VersicherungsdatenZATyp|null
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZATyp
    {
        return $this->Versicherungsdaten;
    }
    /**
     * Set Versicherungsdaten value
     * @param \THAG\XKfz\StructType\VersicherungsdatenZATyp $versicherungsdaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZATyp $versicherungsdaten = null): self
    {
        $this->Versicherungsdaten = $versicherungsdaten;
        
        return $this;
    }
    /**
     * Get Empfangsbevollmaechtigter value
     * @return \THAG\XKfz\StructType\Empfangsbevollmaechtigter|null
     */
    public function getEmpfangsbevollmaechtigter(): ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter
    {
        return $this->Empfangsbevollmaechtigter;
    }
    /**
     * Set Empfangsbevollmaechtigter value
     * @param \THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setEmpfangsbevollmaechtigter(?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter = null): self
    {
        $this->Empfangsbevollmaechtigter = $empfangsbevollmaechtigter;
        
        return $this;
    }
    /**
     * Get Fahrtenbuchauflage value
     * @return \THAG\XKfz\StructType\Fahrtenbuchauflage|null
     */
    public function getFahrtenbuchauflage(): ?\THAG\XKfz\StructType\Fahrtenbuchauflage
    {
        return $this->Fahrtenbuchauflage;
    }
    /**
     * Set Fahrtenbuchauflage value
     * @param \THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZATyp
     */
    public function setFahrtenbuchauflage(?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null): self
    {
        $this->Fahrtenbuchauflage = $fahrtenbuchauflage;
        
        return $this;
    }
}
