<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZSTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZSTyp extends AbstractStructBase
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
     * @var \THAG\XKfz\StructType\KennzeichendatenZSTyp|null
     */
    public ?\THAG\XKfz\StructType\KennzeichendatenZSTyp $Kennzeichendaten = null;
    /**
     * The ZulassungsbescheinigungTeil1
     * @var string|null
     */
    public ?string $ZulassungsbescheinigungTeil1 = null;
    /**
     * The Fahrzeugidentifizierung
     * @var \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $Fahrzeugidentifizierung = null;
    /**
     * The Verfuegungsberechtigter
     * @var \THAG\XKfz\StructType\Verfuegungsberechtigter|null
     */
    public ?\THAG\XKfz\StructType\Verfuegungsberechtigter $Verfuegungsberechtigter = null;
    /**
     * The Veraeusserungsanzeige
     * @var \THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp|null
     */
    public ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp $Veraeusserungsanzeige = null;
    /**
     * The Fahrzeugbeschreibung
     * @var \THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp $Fahrzeugbeschreibung = null;
    /**
     * The Fahrzeughinweise
     * @var \THAG\XKfz\StructType\FahrzeughinweiseZSTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeughinweiseZSTyp $Fahrzeughinweise = null;
    /**
     * The Empfangsbevollmaechtigter
     * @var \THAG\XKfz\StructType\Empfangsbevollmaechtigter|null
     */
    public ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $Empfangsbevollmaechtigter = null;
    /**
     * Constructor method for ZulassungsabschnittZSTyp
     * @uses ZulassungsabschnittZSTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZSTyp::setIdentifikationZulassungsabschnitt()
     * @uses ZulassungsabschnittZSTyp::setArbeitsgang()
     * @uses ZulassungsabschnittZSTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZSTyp::setZeitpunktVerarbeitungZFZR()
     * @uses ZulassungsabschnittZSTyp::setMerkmalStornierung()
     * @uses ZulassungsabschnittZSTyp::setZeitpunktStornierung()
     * @uses ZulassungsabschnittZSTyp::setMerkmalFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZSTyp::setKennzeichendaten()
     * @uses ZulassungsabschnittZSTyp::setZulassungsbescheinigungTeil1()
     * @uses ZulassungsabschnittZSTyp::setFahrzeugidentifizierung()
     * @uses ZulassungsabschnittZSTyp::setVerfuegungsberechtigter()
     * @uses ZulassungsabschnittZSTyp::setVeraeusserungsanzeige()
     * @uses ZulassungsabschnittZSTyp::setFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZSTyp::setFahrzeughinweise()
     * @uses ZulassungsabschnittZSTyp::setEmpfangsbevollmaechtigter()
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param string $identifikationZulassungsabschnitt
     * @param string $arbeitsgang
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktVerarbeitungZFZR
     * @param string $merkmalStornierung
     * @param string $zeitpunktStornierung
     * @param bool $merkmalFahrzeugbeschreibung
     * @param \THAG\XKfz\StructType\KennzeichendatenZSTyp $kennzeichendaten
     * @param string $zulassungsbescheinigungTeil1
     * @param \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung
     * @param \THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter
     * @param \THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp $veraeusserungsanzeige
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp $fahrzeugbeschreibung
     * @param \THAG\XKfz\StructType\FahrzeughinweiseZSTyp $fahrzeughinweise
     * @param \THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter
     */
    public function __construct(?string $zeitpunktBeendigungZulassungsabschnitt = null, ?string $identifikationZulassungsabschnitt = null, ?string $arbeitsgang = null, ?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null, ?string $merkmalStornierung = null, ?string $zeitpunktStornierung = null, ?bool $merkmalFahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\KennzeichendatenZSTyp $kennzeichendaten = null, ?string $zulassungsbescheinigungTeil1 = null, ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung = null, ?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null, ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp $veraeusserungsanzeige = null, ?\THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp $fahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\FahrzeughinweiseZSTyp $fahrzeughinweise = null, ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter = null)
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
            ->setZulassungsbescheinigungTeil1($zulassungsbescheinigungTeil1)
            ->setFahrzeugidentifizierung($fahrzeugidentifizierung)
            ->setVerfuegungsberechtigter($verfuegungsberechtigter)
            ->setVeraeusserungsanzeige($veraeusserungsanzeige)
            ->setFahrzeugbeschreibung($fahrzeugbeschreibung)
            ->setFahrzeughinweise($fahrzeughinweise)
            ->setEmpfangsbevollmaechtigter($empfangsbevollmaechtigter);
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
     */
    public function setMerkmalFahrzeugbeschreibung(?bool $merkmalFahrzeugbeschreibung = null): self
    {
        $this->MerkmalFahrzeugbeschreibung = $merkmalFahrzeugbeschreibung;
        
        return $this;
    }
    /**
     * Get Kennzeichendaten value
     * @return \THAG\XKfz\StructType\KennzeichendatenZSTyp|null
     */
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\KennzeichendatenZSTyp
    {
        return $this->Kennzeichendaten;
    }
    /**
     * Set Kennzeichendaten value
     * @param \THAG\XKfz\StructType\KennzeichendatenZSTyp $kennzeichendaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\KennzeichendatenZSTyp $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;
        
        return $this;
    }
    /**
     * Get ZulassungsbescheinigungTeil1 value
     * @return string|null
     */
    public function getZulassungsbescheinigungTeil1(): ?string
    {
        return $this->ZulassungsbescheinigungTeil1;
    }
    /**
     * Set ZulassungsbescheinigungTeil1 value
     * @param string $zulassungsbescheinigungTeil1
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
     */
    public function setZulassungsbescheinigungTeil1(?string $zulassungsbescheinigungTeil1 = null): self
    {
        $this->ZulassungsbescheinigungTeil1 = $zulassungsbescheinigungTeil1;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
     */
    public function setFahrzeugidentifizierung(?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung = null): self
    {
        $this->Fahrzeugidentifizierung = $fahrzeugidentifizierung;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
     */
    public function setVerfuegungsberechtigter(?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null): self
    {
        $this->Verfuegungsberechtigter = $verfuegungsberechtigter;
        
        return $this;
    }
    /**
     * Get Veraeusserungsanzeige value
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp|null
     */
    public function getVeraeusserungsanzeige(): ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp
    {
        return $this->Veraeusserungsanzeige;
    }
    /**
     * Set Veraeusserungsanzeige value
     * @param \THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp $veraeusserungsanzeige
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
     */
    public function setVeraeusserungsanzeige(?\THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp $veraeusserungsanzeige = null): self
    {
        $this->Veraeusserungsanzeige = $veraeusserungsanzeige;
        
        return $this;
    }
    /**
     * Get Fahrzeugbeschreibung value
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp|null
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp
    {
        return $this->Fahrzeugbeschreibung;
    }
    /**
     * Set Fahrzeugbeschreibung value
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp $fahrzeugbeschreibung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;
        
        return $this;
    }
    /**
     * Get Fahrzeughinweise value
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZSTyp|null
     */
    public function getFahrzeughinweise(): ?\THAG\XKfz\StructType\FahrzeughinweiseZSTyp
    {
        return $this->Fahrzeughinweise;
    }
    /**
     * Set Fahrzeughinweise value
     * @param \THAG\XKfz\StructType\FahrzeughinweiseZSTyp $fahrzeughinweise
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
     */
    public function setFahrzeughinweise(?\THAG\XKfz\StructType\FahrzeughinweiseZSTyp $fahrzeughinweise = null): self
    {
        $this->Fahrzeughinweise = $fahrzeughinweise;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZSTyp
     */
    public function setEmpfangsbevollmaechtigter(?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter = null): self
    {
        $this->Empfangsbevollmaechtigter = $empfangsbevollmaechtigter;
        
        return $this;
    }
}
