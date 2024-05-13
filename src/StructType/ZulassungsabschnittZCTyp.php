<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZCTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZCTyp extends AbstractStructBase
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
     * The MerkmalAusserbetriebsetzung
     * @var bool|null
     */
    public ?bool $MerkmalAusserbetriebsetzung = null;
    /**
     * The MerkmalTageszulassung
     * @var bool|null
     */
    public ?bool $MerkmalTageszulassung = null;
    /**
     * The Antragsnummer
     * @var string|null
     */
    public ?string $Antragsnummer = null;
    /**
     * The Kennzeichendaten
     * @var \THAG\XKfz\StructType\Kennzeichendaten|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichendaten $Kennzeichendaten = null;
    /**
     * The ZulassungsbescheinigungTeil1
     * @var \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1|null
     */
    public ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1 $ZulassungsbescheinigungTeil1 = null;
    /**
     * The ZulassungsbescheinigungTeil2
     * @var \THAG\XKfz\StructType\ZulassungsbescheinigungTeil2|null
     */
    public ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $ZulassungsbescheinigungTeil2 = null;
    /**
     * The Fahrzeugidentifizierung
     * @var \THAG\XKfz\StructType\Fahrzeugidentifizierung|null
     */
    public ?\THAG\XKfz\StructType\Fahrzeugidentifizierung $Fahrzeugidentifizierung = null;
    /**
     * The Fahrzeug
     * @var \THAG\XKfz\StructType\FahrzeugZCTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugZCTyp $Fahrzeug = null;
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
     * The Halter
     * @var \THAG\XKfz\StructType\HalterZCTyp|null
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $Halter = null;
    /**
     * The TextUebermittlungssperre
     * @var string|null
     */
    public ?string $TextUebermittlungssperre = null;
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
     * The Verwertungsnachweis
     * @var \THAG\XKfz\StructType\Verwertungsnachweis|null
     */
    public ?\THAG\XKfz\StructType\Verwertungsnachweis $Verwertungsnachweis = null;
    /**
     * The Fahrtenbuchauflage
     * @var \THAG\XKfz\StructType\Fahrtenbuchauflage|null
     */
    public ?\THAG\XKfz\StructType\Fahrtenbuchauflage $Fahrtenbuchauflage = null;
    /**
     * The Fahrzeughinweise
     * @var \THAG\XKfz\StructType\FahrzeughinweiseZCTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeughinweiseZCTyp $Fahrzeughinweise = null;
    /**
     * The Versicherungsdaten
     * @var \THAG\XKfz\StructType\VersicherungsdatenZCTyp|null
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZCTyp $Versicherungsdaten = null;
    /**
     * The Empfangsbevollmaechtigter
     * @var \THAG\XKfz\StructType\Empfangsbevollmaechtigter|null
     */
    public ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $Empfangsbevollmaechtigter = null;
    /**
     * The DokumentennummerAusland
     * @var \THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp|null
     */
    public ?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $DokumentennummerAusland = null;
    /**
     * Constructor method for ZulassungsabschnittZCTyp
     * @uses ZulassungsabschnittZCTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZCTyp::setIdentifikationZulassungsabschnitt()
     * @uses ZulassungsabschnittZCTyp::setArbeitsgang()
     * @uses ZulassungsabschnittZCTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZCTyp::setZeitpunktVerarbeitungZFZR()
     * @uses ZulassungsabschnittZCTyp::setMerkmalStornierung()
     * @uses ZulassungsabschnittZCTyp::setZeitpunktStornierung()
     * @uses ZulassungsabschnittZCTyp::setMerkmalFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZCTyp::setMerkmalAusserbetriebsetzung()
     * @uses ZulassungsabschnittZCTyp::setMerkmalTageszulassung()
     * @uses ZulassungsabschnittZCTyp::setAntragsnummer()
     * @uses ZulassungsabschnittZCTyp::setKennzeichendaten()
     * @uses ZulassungsabschnittZCTyp::setZulassungsbescheinigungTeil1()
     * @uses ZulassungsabschnittZCTyp::setZulassungsbescheinigungTeil2()
     * @uses ZulassungsabschnittZCTyp::setFahrzeugidentifizierung()
     * @uses ZulassungsabschnittZCTyp::setFahrzeug()
     * @uses ZulassungsabschnittZCTyp::setFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZCTyp::setAutonomesFahren()
     * @uses ZulassungsabschnittZCTyp::setHalter()
     * @uses ZulassungsabschnittZCTyp::setTextUebermittlungssperre()
     * @uses ZulassungsabschnittZCTyp::setVeraeusserungsanzeige()
     * @uses ZulassungsabschnittZCTyp::setVerfuegungsberechtigter()
     * @uses ZulassungsabschnittZCTyp::setVerwertungsnachweis()
     * @uses ZulassungsabschnittZCTyp::setFahrtenbuchauflage()
     * @uses ZulassungsabschnittZCTyp::setFahrzeughinweise()
     * @uses ZulassungsabschnittZCTyp::setVersicherungsdaten()
     * @uses ZulassungsabschnittZCTyp::setEmpfangsbevollmaechtigter()
     * @uses ZulassungsabschnittZCTyp::setDokumentennummerAusland()
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param string $identifikationZulassungsabschnitt
     * @param string $arbeitsgang
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktVerarbeitungZFZR
     * @param string $merkmalStornierung
     * @param string $zeitpunktStornierung
     * @param bool $merkmalFahrzeugbeschreibung
     * @param bool $merkmalAusserbetriebsetzung
     * @param bool $merkmalTageszulassung
     * @param string $antragsnummer
     * @param \THAG\XKfz\StructType\Kennzeichendaten $kennzeichendaten
     * @param \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1 $zulassungsbescheinigungTeil1
     * @param \THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $zulassungsbescheinigungTeil2
     * @param \THAG\XKfz\StructType\Fahrzeugidentifizierung $fahrzeugidentifizierung
     * @param \THAG\XKfz\StructType\FahrzeugZCTyp $fahrzeug
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $fahrzeugbeschreibung
     * @param \THAG\XKfz\StructType\AutonomesFahren $autonomesFahren
     * @param \THAG\XKfz\StructType\HalterZCTyp $halter
     * @param string $textUebermittlungssperre
     * @param \THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $veraeusserungsanzeige
     * @param \THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter
     * @param \THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis
     * @param \THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage
     * @param \THAG\XKfz\StructType\FahrzeughinweiseZCTyp $fahrzeughinweise
     * @param \THAG\XKfz\StructType\VersicherungsdatenZCTyp $versicherungsdaten
     * @param \THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter
     * @param \THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $dokumentennummerAusland
     */
    public function __construct(?string $zeitpunktBeendigungZulassungsabschnitt = null, ?string $identifikationZulassungsabschnitt = null, ?string $arbeitsgang = null, ?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null, ?string $merkmalStornierung = null, ?string $zeitpunktStornierung = null, ?bool $merkmalFahrzeugbeschreibung = null, ?bool $merkmalAusserbetriebsetzung = null, ?bool $merkmalTageszulassung = null, ?string $antragsnummer = null, ?\THAG\XKfz\StructType\Kennzeichendaten $kennzeichendaten = null, ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1 $zulassungsbescheinigungTeil1 = null, ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $zulassungsbescheinigungTeil2 = null, ?\THAG\XKfz\StructType\Fahrzeugidentifizierung $fahrzeugidentifizierung = null, ?\THAG\XKfz\StructType\FahrzeugZCTyp $fahrzeug = null, ?\THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $fahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\AutonomesFahren $autonomesFahren = null, ?\THAG\XKfz\StructType\HalterZCTyp $halter = null, ?string $textUebermittlungssperre = null, ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $veraeusserungsanzeige = null, ?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null, ?\THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis = null, ?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null, ?\THAG\XKfz\StructType\FahrzeughinweiseZCTyp $fahrzeughinweise = null, ?\THAG\XKfz\StructType\VersicherungsdatenZCTyp $versicherungsdaten = null, ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter = null, ?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $dokumentennummerAusland = null)
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
            ->setMerkmalAusserbetriebsetzung($merkmalAusserbetriebsetzung)
            ->setMerkmalTageszulassung($merkmalTageszulassung)
            ->setAntragsnummer($antragsnummer)
            ->setKennzeichendaten($kennzeichendaten)
            ->setZulassungsbescheinigungTeil1($zulassungsbescheinigungTeil1)
            ->setZulassungsbescheinigungTeil2($zulassungsbescheinigungTeil2)
            ->setFahrzeugidentifizierung($fahrzeugidentifizierung)
            ->setFahrzeug($fahrzeug)
            ->setFahrzeugbeschreibung($fahrzeugbeschreibung)
            ->setAutonomesFahren($autonomesFahren)
            ->setHalter($halter)
            ->setTextUebermittlungssperre($textUebermittlungssperre)
            ->setVeraeusserungsanzeige($veraeusserungsanzeige)
            ->setVerfuegungsberechtigter($verfuegungsberechtigter)
            ->setVerwertungsnachweis($verwertungsnachweis)
            ->setFahrtenbuchauflage($fahrtenbuchauflage)
            ->setFahrzeughinweise($fahrzeughinweise)
            ->setVersicherungsdaten($versicherungsdaten)
            ->setEmpfangsbevollmaechtigter($empfangsbevollmaechtigter)
            ->setDokumentennummerAusland($dokumentennummerAusland);
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setMerkmalFahrzeugbeschreibung(?bool $merkmalFahrzeugbeschreibung = null): self
    {
        $this->MerkmalFahrzeugbeschreibung = $merkmalFahrzeugbeschreibung;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setMerkmalAusserbetriebsetzung(?bool $merkmalAusserbetriebsetzung = null): self
    {
        $this->MerkmalAusserbetriebsetzung = $merkmalAusserbetriebsetzung;
        
        return $this;
    }
    /**
     * Get MerkmalTageszulassung value
     * @return bool|null
     */
    public function getMerkmalTageszulassung(): ?bool
    {
        return $this->MerkmalTageszulassung;
    }
    /**
     * Set MerkmalTageszulassung value
     * @param bool $merkmalTageszulassung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setMerkmalTageszulassung(?bool $merkmalTageszulassung = null): self
    {
        $this->MerkmalTageszulassung = $merkmalTageszulassung;
        
        return $this;
    }
    /**
     * Get Antragsnummer value
     * @return string|null
     */
    public function getAntragsnummer(): ?string
    {
        return $this->Antragsnummer;
    }
    /**
     * Set Antragsnummer value
     * @param string $antragsnummer
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setAntragsnummer(?string $antragsnummer = null): self
    {
        $this->Antragsnummer = $antragsnummer;
        
        return $this;
    }
    /**
     * Get Kennzeichendaten value
     * @return \THAG\XKfz\StructType\Kennzeichendaten|null
     */
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\Kennzeichendaten
    {
        return $this->Kennzeichendaten;
    }
    /**
     * Set Kennzeichendaten value
     * @param \THAG\XKfz\StructType\Kennzeichendaten $kennzeichendaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\Kennzeichendaten $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;
        
        return $this;
    }
    /**
     * Get ZulassungsbescheinigungTeil1 value
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1|null
     */
    public function getZulassungsbescheinigungTeil1(): ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
    {
        return $this->ZulassungsbescheinigungTeil1;
    }
    /**
     * Set ZulassungsbescheinigungTeil1 value
     * @param \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1 $zulassungsbescheinigungTeil1
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setZulassungsbescheinigungTeil1(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1 $zulassungsbescheinigungTeil1 = null): self
    {
        $this->ZulassungsbescheinigungTeil1 = $zulassungsbescheinigungTeil1;
        
        return $this;
    }
    /**
     * Get ZulassungsbescheinigungTeil2 value
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil2|null
     */
    public function getZulassungsbescheinigungTeil2(): ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2
    {
        return $this->ZulassungsbescheinigungTeil2;
    }
    /**
     * Set ZulassungsbescheinigungTeil2 value
     * @param \THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $zulassungsbescheinigungTeil2
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setZulassungsbescheinigungTeil2(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $zulassungsbescheinigungTeil2 = null): self
    {
        $this->ZulassungsbescheinigungTeil2 = $zulassungsbescheinigungTeil2;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierung value
     * @return \THAG\XKfz\StructType\Fahrzeugidentifizierung|null
     */
    public function getFahrzeugidentifizierung(): ?\THAG\XKfz\StructType\Fahrzeugidentifizierung
    {
        return $this->Fahrzeugidentifizierung;
    }
    /**
     * Set Fahrzeugidentifizierung value
     * @param \THAG\XKfz\StructType\Fahrzeugidentifizierung $fahrzeugidentifizierung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setFahrzeugidentifizierung(?\THAG\XKfz\StructType\Fahrzeugidentifizierung $fahrzeugidentifizierung = null): self
    {
        $this->Fahrzeugidentifizierung = $fahrzeugidentifizierung;
        
        return $this;
    }
    /**
     * Get Fahrzeug value
     * @return \THAG\XKfz\StructType\FahrzeugZCTyp|null
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\FahrzeugZCTyp
    {
        return $this->Fahrzeug;
    }
    /**
     * Set Fahrzeug value
     * @param \THAG\XKfz\StructType\FahrzeugZCTyp $fahrzeug
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\FahrzeugZCTyp $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setAutonomesFahren(?\THAG\XKfz\StructType\AutonomesFahren $autonomesFahren = null): self
    {
        $this->AutonomesFahren = $autonomesFahren;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZCTyp $halter = null): self
    {
        $this->Halter = $halter;
        
        return $this;
    }
    /**
     * Get TextUebermittlungssperre value
     * @return string|null
     */
    public function getTextUebermittlungssperre(): ?string
    {
        return $this->TextUebermittlungssperre;
    }
    /**
     * Set TextUebermittlungssperre value
     * @param string $textUebermittlungssperre
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setTextUebermittlungssperre(?string $textUebermittlungssperre = null): self
    {
        $this->TextUebermittlungssperre = $textUebermittlungssperre;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setVerfuegungsberechtigter(?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null): self
    {
        $this->Verfuegungsberechtigter = $verfuegungsberechtigter;
        
        return $this;
    }
    /**
     * Get Verwertungsnachweis value
     * @return \THAG\XKfz\StructType\Verwertungsnachweis|null
     */
    public function getVerwertungsnachweis(): ?\THAG\XKfz\StructType\Verwertungsnachweis
    {
        return $this->Verwertungsnachweis;
    }
    /**
     * Set Verwertungsnachweis value
     * @param \THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setVerwertungsnachweis(?\THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis = null): self
    {
        $this->Verwertungsnachweis = $verwertungsnachweis;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setFahrtenbuchauflage(?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null): self
    {
        $this->Fahrtenbuchauflage = $fahrtenbuchauflage;
        
        return $this;
    }
    /**
     * Get Fahrzeughinweise value
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZCTyp|null
     */
    public function getFahrzeughinweise(): ?\THAG\XKfz\StructType\FahrzeughinweiseZCTyp
    {
        return $this->Fahrzeughinweise;
    }
    /**
     * Set Fahrzeughinweise value
     * @param \THAG\XKfz\StructType\FahrzeughinweiseZCTyp $fahrzeughinweise
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setFahrzeughinweise(?\THAG\XKfz\StructType\FahrzeughinweiseZCTyp $fahrzeughinweise = null): self
    {
        $this->Fahrzeughinweise = $fahrzeughinweise;
        
        return $this;
    }
    /**
     * Get Versicherungsdaten value
     * @return \THAG\XKfz\StructType\VersicherungsdatenZCTyp|null
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZCTyp
    {
        return $this->Versicherungsdaten;
    }
    /**
     * Set Versicherungsdaten value
     * @param \THAG\XKfz\StructType\VersicherungsdatenZCTyp $versicherungsdaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZCTyp $versicherungsdaten = null): self
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setEmpfangsbevollmaechtigter(?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter = null): self
    {
        $this->Empfangsbevollmaechtigter = $empfangsbevollmaechtigter;
        
        return $this;
    }
    /**
     * Get DokumentennummerAusland value
     * @return \THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp|null
     */
    public function getDokumentennummerAusland(): ?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp
    {
        return $this->DokumentennummerAusland;
    }
    /**
     * Set DokumentennummerAusland value
     * @param \THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $dokumentennummerAusland
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp
     */
    public function setDokumentennummerAusland(?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $dokumentennummerAusland = null): self
    {
        $this->DokumentennummerAusland = $dokumentennummerAusland;
        
        return $this;
    }
}
