<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZWTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZWTyp extends AbstractStructBase
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
     * The Veranlasser
     * @var \THAG\XKfz\StructType\Veranlasser|null
     */
    public ?\THAG\XKfz\StructType\Veranlasser $Veranlasser = null;
    /**
     * The MerkmalMitteilungsart
     * @var string|null
     */
    public ?string $MerkmalMitteilungsart = null;
    /**
     * The MerkmalAntragstellung
     * @var string|null
     */
    public ?string $MerkmalAntragstellung = null;
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
     * The Einplanungssymbol
     * @var string|null
     */
    public ?string $Einplanungssymbol = null;
    /**
     * The Kennzeichendaten
     * @var \THAG\XKfz\StructType\Kennzeichendaten|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichendaten $Kennzeichendaten = null;
    /**
     * The WeitereKennzeichen
     * @var \THAG\XKfz\StructType\WeitereKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\WeitereKennzeichen $WeitereKennzeichen = null;
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
     * @var \THAG\XKfz\StructType\FahrzeugZWTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugZWTyp $Fahrzeug = null;
    /**
     * The Fahrzeugbeschreibung
     * @var \THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp $Fahrzeugbeschreibung = null;
    /**
     * The AutonomesFahren
     * @var \THAG\XKfz\StructType\AutonomesFahren|null
     */
    public ?\THAG\XKfz\StructType\AutonomesFahren $AutonomesFahren = null;
    /**
     * The Halter
     * @var \THAG\XKfz\StructType\HalterZWTyp|null
     */
    public ?\THAG\XKfz\StructType\HalterZWTyp $Halter = null;
    /**
     * The Veraeusserungsanzeige
     * @var \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp|null
     */
    public ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp $Veraeusserungsanzeige = null;
    /**
     * The Verfuegungsberechtigter
     * @var \THAG\XKfz\StructType\Verfuegungsberechtigter|null
     */
    public ?\THAG\XKfz\StructType\Verfuegungsberechtigter $Verfuegungsberechtigter = null;
    /**
     * The Sicherstellungsort
     * @var \THAG\XKfz\StructType\Sicherstellungsort|null
     */
    public ?\THAG\XKfz\StructType\Sicherstellungsort $Sicherstellungsort = null;
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
     * The PruemerVertrag
     * @var \THAG\XKfz\StructType\PruemerVertrag|null
     */
    public ?\THAG\XKfz\StructType\PruemerVertrag $PruemerVertrag = null;
    /**
     * The Uebermittlungssperre
     * @var \THAG\XKfz\StructType\Uebermittlungssperre|null
     */
    public ?\THAG\XKfz\StructType\Uebermittlungssperre $Uebermittlungssperre = null;
    /**
     * The TextUebermittlungssperre
     * @var string|null
     */
    public ?string $TextUebermittlungssperre = null;
    /**
     * The Anzeigenvorfaelle
     * @var \THAG\XKfz\StructType\Anzeigenvorfaelle|null
     */
    public ?\THAG\XKfz\StructType\Anzeigenvorfaelle $Anzeigenvorfaelle = null;
    /**
     * The Fahrzeughinweise
     * @var \THAG\XKfz\StructType\FahrzeughinweiseZWTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeughinweiseZWTyp $Fahrzeughinweise = null;
    /**
     * The Anhaengerverzeichnis
     * @var \THAG\XKfz\StructType\Anhaengerverzeichnis|null
     */
    public ?\THAG\XKfz\StructType\Anhaengerverzeichnis $Anhaengerverzeichnis = null;
    /**
     * The Versicherungsdaten
     * @var \THAG\XKfz\StructType\VersicherungsdatenZWTyp|null
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZWTyp $Versicherungsdaten = null;
    /**
     * The Fehlerhinweise
     * @var \THAG\XKfz\StructType\Fehlerhinweise|null
     */
    public ?\THAG\XKfz\StructType\Fehlerhinweise $Fehlerhinweise = null;
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
     * Constructor method for ZulassungsabschnittZWTyp
     * @uses ZulassungsabschnittZWTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZWTyp::setIdentifikationZulassungsabschnitt()
     * @uses ZulassungsabschnittZWTyp::setArbeitsgang()
     * @uses ZulassungsabschnittZWTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZWTyp::setZeitpunktVerarbeitungZFZR()
     * @uses ZulassungsabschnittZWTyp::setMerkmalStornierung()
     * @uses ZulassungsabschnittZWTyp::setZeitpunktStornierung()
     * @uses ZulassungsabschnittZWTyp::setMerkmalFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZWTyp::setVeranlasser()
     * @uses ZulassungsabschnittZWTyp::setMerkmalMitteilungsart()
     * @uses ZulassungsabschnittZWTyp::setMerkmalAntragstellung()
     * @uses ZulassungsabschnittZWTyp::setMerkmalTageszulassung()
     * @uses ZulassungsabschnittZWTyp::setAntragsnummer()
     * @uses ZulassungsabschnittZWTyp::setEinplanungssymbol()
     * @uses ZulassungsabschnittZWTyp::setKennzeichendaten()
     * @uses ZulassungsabschnittZWTyp::setWeitereKennzeichen()
     * @uses ZulassungsabschnittZWTyp::setZulassungsbescheinigungTeil1()
     * @uses ZulassungsabschnittZWTyp::setZulassungsbescheinigungTeil2()
     * @uses ZulassungsabschnittZWTyp::setFahrzeugidentifizierung()
     * @uses ZulassungsabschnittZWTyp::setFahrzeug()
     * @uses ZulassungsabschnittZWTyp::setFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZWTyp::setAutonomesFahren()
     * @uses ZulassungsabschnittZWTyp::setHalter()
     * @uses ZulassungsabschnittZWTyp::setVeraeusserungsanzeige()
     * @uses ZulassungsabschnittZWTyp::setVerfuegungsberechtigter()
     * @uses ZulassungsabschnittZWTyp::setSicherstellungsort()
     * @uses ZulassungsabschnittZWTyp::setVerwertungsnachweis()
     * @uses ZulassungsabschnittZWTyp::setFahrtenbuchauflage()
     * @uses ZulassungsabschnittZWTyp::setPruemerVertrag()
     * @uses ZulassungsabschnittZWTyp::setUebermittlungssperre()
     * @uses ZulassungsabschnittZWTyp::setTextUebermittlungssperre()
     * @uses ZulassungsabschnittZWTyp::setAnzeigenvorfaelle()
     * @uses ZulassungsabschnittZWTyp::setFahrzeughinweise()
     * @uses ZulassungsabschnittZWTyp::setAnhaengerverzeichnis()
     * @uses ZulassungsabschnittZWTyp::setVersicherungsdaten()
     * @uses ZulassungsabschnittZWTyp::setFehlerhinweise()
     * @uses ZulassungsabschnittZWTyp::setEmpfangsbevollmaechtigter()
     * @uses ZulassungsabschnittZWTyp::setDokumentennummerAusland()
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param string $identifikationZulassungsabschnitt
     * @param string $arbeitsgang
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktVerarbeitungZFZR
     * @param string $merkmalStornierung
     * @param string $zeitpunktStornierung
     * @param bool $merkmalFahrzeugbeschreibung
     * @param \THAG\XKfz\StructType\Veranlasser $veranlasser
     * @param string $merkmalMitteilungsart
     * @param string $merkmalAntragstellung
     * @param bool $merkmalTageszulassung
     * @param string $antragsnummer
     * @param string $einplanungssymbol
     * @param \THAG\XKfz\StructType\Kennzeichendaten $kennzeichendaten
     * @param \THAG\XKfz\StructType\WeitereKennzeichen $weitereKennzeichen
     * @param \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1 $zulassungsbescheinigungTeil1
     * @param \THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $zulassungsbescheinigungTeil2
     * @param \THAG\XKfz\StructType\Fahrzeugidentifizierung $fahrzeugidentifizierung
     * @param \THAG\XKfz\StructType\FahrzeugZWTyp $fahrzeug
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp $fahrzeugbeschreibung
     * @param \THAG\XKfz\StructType\AutonomesFahren $autonomesFahren
     * @param \THAG\XKfz\StructType\HalterZWTyp $halter
     * @param \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp $veraeusserungsanzeige
     * @param \THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter
     * @param \THAG\XKfz\StructType\Sicherstellungsort $sicherstellungsort
     * @param \THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis
     * @param \THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage
     * @param \THAG\XKfz\StructType\PruemerVertrag $pruemerVertrag
     * @param \THAG\XKfz\StructType\Uebermittlungssperre $uebermittlungssperre
     * @param string $textUebermittlungssperre
     * @param \THAG\XKfz\StructType\Anzeigenvorfaelle $anzeigenvorfaelle
     * @param \THAG\XKfz\StructType\FahrzeughinweiseZWTyp $fahrzeughinweise
     * @param \THAG\XKfz\StructType\Anhaengerverzeichnis $anhaengerverzeichnis
     * @param \THAG\XKfz\StructType\VersicherungsdatenZWTyp $versicherungsdaten
     * @param \THAG\XKfz\StructType\Fehlerhinweise $fehlerhinweise
     * @param \THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter
     * @param \THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $dokumentennummerAusland
     */
    public function __construct(?string $zeitpunktBeendigungZulassungsabschnitt = null, ?string $identifikationZulassungsabschnitt = null, ?string $arbeitsgang = null, ?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null, ?string $merkmalStornierung = null, ?string $zeitpunktStornierung = null, ?bool $merkmalFahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\Veranlasser $veranlasser = null, ?string $merkmalMitteilungsart = null, ?string $merkmalAntragstellung = null, ?bool $merkmalTageszulassung = null, ?string $antragsnummer = null, ?string $einplanungssymbol = null, ?\THAG\XKfz\StructType\Kennzeichendaten $kennzeichendaten = null, ?\THAG\XKfz\StructType\WeitereKennzeichen $weitereKennzeichen = null, ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1 $zulassungsbescheinigungTeil1 = null, ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $zulassungsbescheinigungTeil2 = null, ?\THAG\XKfz\StructType\Fahrzeugidentifizierung $fahrzeugidentifizierung = null, ?\THAG\XKfz\StructType\FahrzeugZWTyp $fahrzeug = null, ?\THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp $fahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\AutonomesFahren $autonomesFahren = null, ?\THAG\XKfz\StructType\HalterZWTyp $halter = null, ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp $veraeusserungsanzeige = null, ?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null, ?\THAG\XKfz\StructType\Sicherstellungsort $sicherstellungsort = null, ?\THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis = null, ?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null, ?\THAG\XKfz\StructType\PruemerVertrag $pruemerVertrag = null, ?\THAG\XKfz\StructType\Uebermittlungssperre $uebermittlungssperre = null, ?string $textUebermittlungssperre = null, ?\THAG\XKfz\StructType\Anzeigenvorfaelle $anzeigenvorfaelle = null, ?\THAG\XKfz\StructType\FahrzeughinweiseZWTyp $fahrzeughinweise = null, ?\THAG\XKfz\StructType\Anhaengerverzeichnis $anhaengerverzeichnis = null, ?\THAG\XKfz\StructType\VersicherungsdatenZWTyp $versicherungsdaten = null, ?\THAG\XKfz\StructType\Fehlerhinweise $fehlerhinweise = null, ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter = null, ?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $dokumentennummerAusland = null)
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
            ->setVeranlasser($veranlasser)
            ->setMerkmalMitteilungsart($merkmalMitteilungsart)
            ->setMerkmalAntragstellung($merkmalAntragstellung)
            ->setMerkmalTageszulassung($merkmalTageszulassung)
            ->setAntragsnummer($antragsnummer)
            ->setEinplanungssymbol($einplanungssymbol)
            ->setKennzeichendaten($kennzeichendaten)
            ->setWeitereKennzeichen($weitereKennzeichen)
            ->setZulassungsbescheinigungTeil1($zulassungsbescheinigungTeil1)
            ->setZulassungsbescheinigungTeil2($zulassungsbescheinigungTeil2)
            ->setFahrzeugidentifizierung($fahrzeugidentifizierung)
            ->setFahrzeug($fahrzeug)
            ->setFahrzeugbeschreibung($fahrzeugbeschreibung)
            ->setAutonomesFahren($autonomesFahren)
            ->setHalter($halter)
            ->setVeraeusserungsanzeige($veraeusserungsanzeige)
            ->setVerfuegungsberechtigter($verfuegungsberechtigter)
            ->setSicherstellungsort($sicherstellungsort)
            ->setVerwertungsnachweis($verwertungsnachweis)
            ->setFahrtenbuchauflage($fahrtenbuchauflage)
            ->setPruemerVertrag($pruemerVertrag)
            ->setUebermittlungssperre($uebermittlungssperre)
            ->setTextUebermittlungssperre($textUebermittlungssperre)
            ->setAnzeigenvorfaelle($anzeigenvorfaelle)
            ->setFahrzeughinweise($fahrzeughinweise)
            ->setAnhaengerverzeichnis($anhaengerverzeichnis)
            ->setVersicherungsdaten($versicherungsdaten)
            ->setFehlerhinweise($fehlerhinweise)
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setMerkmalFahrzeugbeschreibung(?bool $merkmalFahrzeugbeschreibung = null): self
    {
        $this->MerkmalFahrzeugbeschreibung = $merkmalFahrzeugbeschreibung;
        
        return $this;
    }
    /**
     * Get Veranlasser value
     * @return \THAG\XKfz\StructType\Veranlasser|null
     */
    public function getVeranlasser(): ?\THAG\XKfz\StructType\Veranlasser
    {
        return $this->Veranlasser;
    }
    /**
     * Set Veranlasser value
     * @param \THAG\XKfz\StructType\Veranlasser $veranlasser
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setVeranlasser(?\THAG\XKfz\StructType\Veranlasser $veranlasser = null): self
    {
        $this->Veranlasser = $veranlasser;
        
        return $this;
    }
    /**
     * Get MerkmalMitteilungsart value
     * @return string|null
     */
    public function getMerkmalMitteilungsart(): ?string
    {
        return $this->MerkmalMitteilungsart;
    }
    /**
     * Set MerkmalMitteilungsart value
     * @param string $merkmalMitteilungsart
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setMerkmalMitteilungsart(?string $merkmalMitteilungsart = null): self
    {
        $this->MerkmalMitteilungsart = $merkmalMitteilungsart;
        
        return $this;
    }
    /**
     * Get MerkmalAntragstellung value
     * @return string|null
     */
    public function getMerkmalAntragstellung(): ?string
    {
        return $this->MerkmalAntragstellung;
    }
    /**
     * Set MerkmalAntragstellung value
     * @param string $merkmalAntragstellung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setMerkmalAntragstellung(?string $merkmalAntragstellung = null): self
    {
        $this->MerkmalAntragstellung = $merkmalAntragstellung;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setAntragsnummer(?string $antragsnummer = null): self
    {
        $this->Antragsnummer = $antragsnummer;
        
        return $this;
    }
    /**
     * Get Einplanungssymbol value
     * @return string|null
     */
    public function getEinplanungssymbol(): ?string
    {
        return $this->Einplanungssymbol;
    }
    /**
     * Set Einplanungssymbol value
     * @param string $einplanungssymbol
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setEinplanungssymbol(?string $einplanungssymbol = null): self
    {
        $this->Einplanungssymbol = $einplanungssymbol;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\Kennzeichendaten $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;
        
        return $this;
    }
    /**
     * Get WeitereKennzeichen value
     * @return \THAG\XKfz\StructType\WeitereKennzeichen|null
     */
    public function getWeitereKennzeichen(): ?\THAG\XKfz\StructType\WeitereKennzeichen
    {
        return $this->WeitereKennzeichen;
    }
    /**
     * Set WeitereKennzeichen value
     * @param \THAG\XKfz\StructType\WeitereKennzeichen $weitereKennzeichen
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setWeitereKennzeichen(?\THAG\XKfz\StructType\WeitereKennzeichen $weitereKennzeichen = null): self
    {
        $this->WeitereKennzeichen = $weitereKennzeichen;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setFahrzeugidentifizierung(?\THAG\XKfz\StructType\Fahrzeugidentifizierung $fahrzeugidentifizierung = null): self
    {
        $this->Fahrzeugidentifizierung = $fahrzeugidentifizierung;
        
        return $this;
    }
    /**
     * Get Fahrzeug value
     * @return \THAG\XKfz\StructType\FahrzeugZWTyp|null
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\FahrzeugZWTyp
    {
        return $this->Fahrzeug;
    }
    /**
     * Set Fahrzeug value
     * @param \THAG\XKfz\StructType\FahrzeugZWTyp $fahrzeug
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\FahrzeugZWTyp $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;
        
        return $this;
    }
    /**
     * Get Fahrzeugbeschreibung value
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp|null
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp
    {
        return $this->Fahrzeugbeschreibung;
    }
    /**
     * Set Fahrzeugbeschreibung value
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp $fahrzeugbeschreibung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp $fahrzeugbeschreibung = null): self
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setAutonomesFahren(?\THAG\XKfz\StructType\AutonomesFahren $autonomesFahren = null): self
    {
        $this->AutonomesFahren = $autonomesFahren;
        
        return $this;
    }
    /**
     * Get Halter value
     * @return \THAG\XKfz\StructType\HalterZWTyp|null
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZWTyp
    {
        return $this->Halter;
    }
    /**
     * Set Halter value
     * @param \THAG\XKfz\StructType\HalterZWTyp $halter
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZWTyp $halter = null): self
    {
        $this->Halter = $halter;
        
        return $this;
    }
    /**
     * Get Veraeusserungsanzeige value
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp|null
     */
    public function getVeraeusserungsanzeige(): ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp
    {
        return $this->Veraeusserungsanzeige;
    }
    /**
     * Set Veraeusserungsanzeige value
     * @param \THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp $veraeusserungsanzeige
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setVeraeusserungsanzeige(?\THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp $veraeusserungsanzeige = null): self
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setVerfuegungsberechtigter(?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null): self
    {
        $this->Verfuegungsberechtigter = $verfuegungsberechtigter;
        
        return $this;
    }
    /**
     * Get Sicherstellungsort value
     * @return \THAG\XKfz\StructType\Sicherstellungsort|null
     */
    public function getSicherstellungsort(): ?\THAG\XKfz\StructType\Sicherstellungsort
    {
        return $this->Sicherstellungsort;
    }
    /**
     * Set Sicherstellungsort value
     * @param \THAG\XKfz\StructType\Sicherstellungsort $sicherstellungsort
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setSicherstellungsort(?\THAG\XKfz\StructType\Sicherstellungsort $sicherstellungsort = null): self
    {
        $this->Sicherstellungsort = $sicherstellungsort;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setFahrtenbuchauflage(?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null): self
    {
        $this->Fahrtenbuchauflage = $fahrtenbuchauflage;
        
        return $this;
    }
    /**
     * Get PruemerVertrag value
     * @return \THAG\XKfz\StructType\PruemerVertrag|null
     */
    public function getPruemerVertrag(): ?\THAG\XKfz\StructType\PruemerVertrag
    {
        return $this->PruemerVertrag;
    }
    /**
     * Set PruemerVertrag value
     * @param \THAG\XKfz\StructType\PruemerVertrag $pruemerVertrag
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setPruemerVertrag(?\THAG\XKfz\StructType\PruemerVertrag $pruemerVertrag = null): self
    {
        $this->PruemerVertrag = $pruemerVertrag;
        
        return $this;
    }
    /**
     * Get Uebermittlungssperre value
     * @return \THAG\XKfz\StructType\Uebermittlungssperre|null
     */
    public function getUebermittlungssperre(): ?\THAG\XKfz\StructType\Uebermittlungssperre
    {
        return $this->Uebermittlungssperre;
    }
    /**
     * Set Uebermittlungssperre value
     * @param \THAG\XKfz\StructType\Uebermittlungssperre $uebermittlungssperre
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setUebermittlungssperre(?\THAG\XKfz\StructType\Uebermittlungssperre $uebermittlungssperre = null): self
    {
        $this->Uebermittlungssperre = $uebermittlungssperre;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setTextUebermittlungssperre(?string $textUebermittlungssperre = null): self
    {
        $this->TextUebermittlungssperre = $textUebermittlungssperre;
        
        return $this;
    }
    /**
     * Get Anzeigenvorfaelle value
     * @return \THAG\XKfz\StructType\Anzeigenvorfaelle|null
     */
    public function getAnzeigenvorfaelle(): ?\THAG\XKfz\StructType\Anzeigenvorfaelle
    {
        return $this->Anzeigenvorfaelle;
    }
    /**
     * Set Anzeigenvorfaelle value
     * @param \THAG\XKfz\StructType\Anzeigenvorfaelle $anzeigenvorfaelle
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setAnzeigenvorfaelle(?\THAG\XKfz\StructType\Anzeigenvorfaelle $anzeigenvorfaelle = null): self
    {
        $this->Anzeigenvorfaelle = $anzeigenvorfaelle;
        
        return $this;
    }
    /**
     * Get Fahrzeughinweise value
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZWTyp|null
     */
    public function getFahrzeughinweise(): ?\THAG\XKfz\StructType\FahrzeughinweiseZWTyp
    {
        return $this->Fahrzeughinweise;
    }
    /**
     * Set Fahrzeughinweise value
     * @param \THAG\XKfz\StructType\FahrzeughinweiseZWTyp $fahrzeughinweise
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setFahrzeughinweise(?\THAG\XKfz\StructType\FahrzeughinweiseZWTyp $fahrzeughinweise = null): self
    {
        $this->Fahrzeughinweise = $fahrzeughinweise;
        
        return $this;
    }
    /**
     * Get Anhaengerverzeichnis value
     * @return \THAG\XKfz\StructType\Anhaengerverzeichnis|null
     */
    public function getAnhaengerverzeichnis(): ?\THAG\XKfz\StructType\Anhaengerverzeichnis
    {
        return $this->Anhaengerverzeichnis;
    }
    /**
     * Set Anhaengerverzeichnis value
     * @param \THAG\XKfz\StructType\Anhaengerverzeichnis $anhaengerverzeichnis
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setAnhaengerverzeichnis(?\THAG\XKfz\StructType\Anhaengerverzeichnis $anhaengerverzeichnis = null): self
    {
        $this->Anhaengerverzeichnis = $anhaengerverzeichnis;
        
        return $this;
    }
    /**
     * Get Versicherungsdaten value
     * @return \THAG\XKfz\StructType\VersicherungsdatenZWTyp|null
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZWTyp
    {
        return $this->Versicherungsdaten;
    }
    /**
     * Set Versicherungsdaten value
     * @param \THAG\XKfz\StructType\VersicherungsdatenZWTyp $versicherungsdaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZWTyp $versicherungsdaten = null): self
    {
        $this->Versicherungsdaten = $versicherungsdaten;
        
        return $this;
    }
    /**
     * Get Fehlerhinweise value
     * @return \THAG\XKfz\StructType\Fehlerhinweise|null
     */
    public function getFehlerhinweise(): ?\THAG\XKfz\StructType\Fehlerhinweise
    {
        return $this->Fehlerhinweise;
    }
    /**
     * Set Fehlerhinweise value
     * @param \THAG\XKfz\StructType\Fehlerhinweise $fehlerhinweise
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setFehlerhinweise(?\THAG\XKfz\StructType\Fehlerhinweise $fehlerhinweise = null): self
    {
        $this->Fehlerhinweise = $fehlerhinweise;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp
     */
    public function setDokumentennummerAusland(?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $dokumentennummerAusland = null): self
    {
        $this->DokumentennummerAusland = $dokumentennummerAusland;
        
        return $this;
    }
}
