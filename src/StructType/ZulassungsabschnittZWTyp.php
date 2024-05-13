<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZWTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZWTyp extends AbstractStructBase
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
     * The Veranlasser
     */
    public ?\THAG\XKfz\StructType\Veranlasser $Veranlasser = null;

    /**
     * The MerkmalMitteilungsart
     */
    public ?string $MerkmalMitteilungsart = null;

    /**
     * The MerkmalAntragstellung
     */
    public ?string $MerkmalAntragstellung = null;

    /**
     * The MerkmalTageszulassung
     */
    public ?bool $MerkmalTageszulassung = null;

    /**
     * The Antragsnummer
     */
    public ?string $Antragsnummer = null;

    /**
     * The Einplanungssymbol
     */
    public ?string $Einplanungssymbol = null;

    /**
     * The Kennzeichendaten
     */
    public ?\THAG\XKfz\StructType\Kennzeichendaten $Kennzeichendaten = null;

    /**
     * The WeitereKennzeichen
     */
    public ?\THAG\XKfz\StructType\WeitereKennzeichen $WeitereKennzeichen = null;

    /**
     * The ZulassungsbescheinigungTeil1
     */
    public ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1 $ZulassungsbescheinigungTeil1 = null;

    /**
     * The ZulassungsbescheinigungTeil2
     */
    public ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $ZulassungsbescheinigungTeil2 = null;

    /**
     * The Fahrzeugidentifizierung
     */
    public ?\THAG\XKfz\StructType\Fahrzeugidentifizierung $Fahrzeugidentifizierung = null;

    /**
     * The Fahrzeug
     */
    public ?\THAG\XKfz\StructType\FahrzeugZWTyp $Fahrzeug = null;

    /**
     * The Fahrzeugbeschreibung
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp $Fahrzeugbeschreibung = null;

    /**
     * The AutonomesFahren
     */
    public ?\THAG\XKfz\StructType\AutonomesFahren $AutonomesFahren = null;

    /**
     * The Halter
     */
    public ?\THAG\XKfz\StructType\HalterZWTyp $Halter = null;

    /**
     * The Veraeusserungsanzeige
     */
    public ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp $Veraeusserungsanzeige = null;

    /**
     * The Verfuegungsberechtigter
     */
    public ?\THAG\XKfz\StructType\Verfuegungsberechtigter $Verfuegungsberechtigter = null;

    /**
     * The Sicherstellungsort
     */
    public ?\THAG\XKfz\StructType\Sicherstellungsort $Sicherstellungsort = null;

    /**
     * The Verwertungsnachweis
     */
    public ?\THAG\XKfz\StructType\Verwertungsnachweis $Verwertungsnachweis = null;

    /**
     * The Fahrtenbuchauflage
     */
    public ?\THAG\XKfz\StructType\Fahrtenbuchauflage $Fahrtenbuchauflage = null;

    /**
     * The PruemerVertrag
     */
    public ?\THAG\XKfz\StructType\PruemerVertrag $PruemerVertrag = null;

    /**
     * The Uebermittlungssperre
     */
    public ?\THAG\XKfz\StructType\Uebermittlungssperre $Uebermittlungssperre = null;

    /**
     * The TextUebermittlungssperre
     */
    public ?string $TextUebermittlungssperre = null;

    /**
     * The Anzeigenvorfaelle
     */
    public ?\THAG\XKfz\StructType\Anzeigenvorfaelle $Anzeigenvorfaelle = null;

    /**
     * The Fahrzeughinweise
     */
    public ?\THAG\XKfz\StructType\FahrzeughinweiseZWTyp $Fahrzeughinweise = null;

    /**
     * The Anhaengerverzeichnis
     */
    public ?\THAG\XKfz\StructType\Anhaengerverzeichnis $Anhaengerverzeichnis = null;

    /**
     * The Versicherungsdaten
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZWTyp $Versicherungsdaten = null;

    /**
     * The Fehlerhinweise
     */
    public ?\THAG\XKfz\StructType\Fehlerhinweise $Fehlerhinweise = null;

    /**
     * The Empfangsbevollmaechtigter
     */
    public ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $Empfangsbevollmaechtigter = null;

    /**
     * The DokumentennummerAusland
     */
    public ?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $DokumentennummerAusland = null;

    /**
     * Constructor method for ZulassungsabschnittZWTyp
     *
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
     * Get Veranlasser value
     */
    public function getVeranlasser(): ?\THAG\XKfz\StructType\Veranlasser
    {
        return $this->Veranlasser;
    }

    /**
     * Set Veranlasser value
     */
    public function setVeranlasser(?\THAG\XKfz\StructType\Veranlasser $veranlasser = null): self
    {
        $this->Veranlasser = $veranlasser;

        return $this;
    }

    /**
     * Get MerkmalMitteilungsart value
     */
    public function getMerkmalMitteilungsart(): ?string
    {
        return $this->MerkmalMitteilungsart;
    }

    /**
     * Set MerkmalMitteilungsart value
     */
    public function setMerkmalMitteilungsart(?string $merkmalMitteilungsart = null): self
    {
        $this->MerkmalMitteilungsart = $merkmalMitteilungsart;

        return $this;
    }

    /**
     * Get MerkmalAntragstellung value
     */
    public function getMerkmalAntragstellung(): ?string
    {
        return $this->MerkmalAntragstellung;
    }

    /**
     * Set MerkmalAntragstellung value
     */
    public function setMerkmalAntragstellung(?string $merkmalAntragstellung = null): self
    {
        $this->MerkmalAntragstellung = $merkmalAntragstellung;

        return $this;
    }

    /**
     * Get MerkmalTageszulassung value
     */
    public function getMerkmalTageszulassung(): ?bool
    {
        return $this->MerkmalTageszulassung;
    }

    /**
     * Set MerkmalTageszulassung value
     */
    public function setMerkmalTageszulassung(?bool $merkmalTageszulassung = null): self
    {
        $this->MerkmalTageszulassung = $merkmalTageszulassung;

        return $this;
    }

    /**
     * Get Antragsnummer value
     */
    public function getAntragsnummer(): ?string
    {
        return $this->Antragsnummer;
    }

    /**
     * Set Antragsnummer value
     */
    public function setAntragsnummer(?string $antragsnummer = null): self
    {
        $this->Antragsnummer = $antragsnummer;

        return $this;
    }

    /**
     * Get Einplanungssymbol value
     */
    public function getEinplanungssymbol(): ?string
    {
        return $this->Einplanungssymbol;
    }

    /**
     * Set Einplanungssymbol value
     */
    public function setEinplanungssymbol(?string $einplanungssymbol = null): self
    {
        $this->Einplanungssymbol = $einplanungssymbol;

        return $this;
    }

    /**
     * Get Kennzeichendaten value
     */
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\Kennzeichendaten
    {
        return $this->Kennzeichendaten;
    }

    /**
     * Set Kennzeichendaten value
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\Kennzeichendaten $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;

        return $this;
    }

    /**
     * Get WeitereKennzeichen value
     */
    public function getWeitereKennzeichen(): ?\THAG\XKfz\StructType\WeitereKennzeichen
    {
        return $this->WeitereKennzeichen;
    }

    /**
     * Set WeitereKennzeichen value
     */
    public function setWeitereKennzeichen(?\THAG\XKfz\StructType\WeitereKennzeichen $weitereKennzeichen = null): self
    {
        $this->WeitereKennzeichen = $weitereKennzeichen;

        return $this;
    }

    /**
     * Get ZulassungsbescheinigungTeil1 value
     */
    public function getZulassungsbescheinigungTeil1(): ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
    {
        return $this->ZulassungsbescheinigungTeil1;
    }

    /**
     * Set ZulassungsbescheinigungTeil1 value
     */
    public function setZulassungsbescheinigungTeil1(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1 $zulassungsbescheinigungTeil1 = null): self
    {
        $this->ZulassungsbescheinigungTeil1 = $zulassungsbescheinigungTeil1;

        return $this;
    }

    /**
     * Get ZulassungsbescheinigungTeil2 value
     */
    public function getZulassungsbescheinigungTeil2(): ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2
    {
        return $this->ZulassungsbescheinigungTeil2;
    }

    /**
     * Set ZulassungsbescheinigungTeil2 value
     */
    public function setZulassungsbescheinigungTeil2(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $zulassungsbescheinigungTeil2 = null): self
    {
        $this->ZulassungsbescheinigungTeil2 = $zulassungsbescheinigungTeil2;

        return $this;
    }

    /**
     * Get Fahrzeugidentifizierung value
     */
    public function getFahrzeugidentifizierung(): ?\THAG\XKfz\StructType\Fahrzeugidentifizierung
    {
        return $this->Fahrzeugidentifizierung;
    }

    /**
     * Set Fahrzeugidentifizierung value
     */
    public function setFahrzeugidentifizierung(?\THAG\XKfz\StructType\Fahrzeugidentifizierung $fahrzeugidentifizierung = null): self
    {
        $this->Fahrzeugidentifizierung = $fahrzeugidentifizierung;

        return $this;
    }

    /**
     * Get Fahrzeug value
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\FahrzeugZWTyp
    {
        return $this->Fahrzeug;
    }

    /**
     * Set Fahrzeug value
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\FahrzeugZWTyp $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;

        return $this;
    }

    /**
     * Get Fahrzeugbeschreibung value
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp
    {
        return $this->Fahrzeugbeschreibung;
    }

    /**
     * Set Fahrzeugbeschreibung value
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZWTyp $fahrzeugbeschreibung = null): self
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
     * Get Halter value
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZWTyp
    {
        return $this->Halter;
    }

    /**
     * Set Halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZWTyp $halter = null): self
    {
        $this->Halter = $halter;

        return $this;
    }

    /**
     * Get Veraeusserungsanzeige value
     */
    public function getVeraeusserungsanzeige(): ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp
    {
        return $this->Veraeusserungsanzeige;
    }

    /**
     * Set Veraeusserungsanzeige value
     */
    public function setVeraeusserungsanzeige(?\THAG\XKfz\StructType\VeraeusserungsanzeigeZWTyp $veraeusserungsanzeige = null): self
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
     * Get Sicherstellungsort value
     */
    public function getSicherstellungsort(): ?\THAG\XKfz\StructType\Sicherstellungsort
    {
        return $this->Sicherstellungsort;
    }

    /**
     * Set Sicherstellungsort value
     */
    public function setSicherstellungsort(?\THAG\XKfz\StructType\Sicherstellungsort $sicherstellungsort = null): self
    {
        $this->Sicherstellungsort = $sicherstellungsort;

        return $this;
    }

    /**
     * Get Verwertungsnachweis value
     */
    public function getVerwertungsnachweis(): ?\THAG\XKfz\StructType\Verwertungsnachweis
    {
        return $this->Verwertungsnachweis;
    }

    /**
     * Set Verwertungsnachweis value
     */
    public function setVerwertungsnachweis(?\THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis = null): self
    {
        $this->Verwertungsnachweis = $verwertungsnachweis;

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

    /**
     * Get PruemerVertrag value
     */
    public function getPruemerVertrag(): ?\THAG\XKfz\StructType\PruemerVertrag
    {
        return $this->PruemerVertrag;
    }

    /**
     * Set PruemerVertrag value
     */
    public function setPruemerVertrag(?\THAG\XKfz\StructType\PruemerVertrag $pruemerVertrag = null): self
    {
        $this->PruemerVertrag = $pruemerVertrag;

        return $this;
    }

    /**
     * Get Uebermittlungssperre value
     */
    public function getUebermittlungssperre(): ?\THAG\XKfz\StructType\Uebermittlungssperre
    {
        return $this->Uebermittlungssperre;
    }

    /**
     * Set Uebermittlungssperre value
     */
    public function setUebermittlungssperre(?\THAG\XKfz\StructType\Uebermittlungssperre $uebermittlungssperre = null): self
    {
        $this->Uebermittlungssperre = $uebermittlungssperre;

        return $this;
    }

    /**
     * Get TextUebermittlungssperre value
     */
    public function getTextUebermittlungssperre(): ?string
    {
        return $this->TextUebermittlungssperre;
    }

    /**
     * Set TextUebermittlungssperre value
     */
    public function setTextUebermittlungssperre(?string $textUebermittlungssperre = null): self
    {
        $this->TextUebermittlungssperre = $textUebermittlungssperre;

        return $this;
    }

    /**
     * Get Anzeigenvorfaelle value
     */
    public function getAnzeigenvorfaelle(): ?\THAG\XKfz\StructType\Anzeigenvorfaelle
    {
        return $this->Anzeigenvorfaelle;
    }

    /**
     * Set Anzeigenvorfaelle value
     */
    public function setAnzeigenvorfaelle(?\THAG\XKfz\StructType\Anzeigenvorfaelle $anzeigenvorfaelle = null): self
    {
        $this->Anzeigenvorfaelle = $anzeigenvorfaelle;

        return $this;
    }

    /**
     * Get Fahrzeughinweise value
     */
    public function getFahrzeughinweise(): ?\THAG\XKfz\StructType\FahrzeughinweiseZWTyp
    {
        return $this->Fahrzeughinweise;
    }

    /**
     * Set Fahrzeughinweise value
     */
    public function setFahrzeughinweise(?\THAG\XKfz\StructType\FahrzeughinweiseZWTyp $fahrzeughinweise = null): self
    {
        $this->Fahrzeughinweise = $fahrzeughinweise;

        return $this;
    }

    /**
     * Get Anhaengerverzeichnis value
     */
    public function getAnhaengerverzeichnis(): ?\THAG\XKfz\StructType\Anhaengerverzeichnis
    {
        return $this->Anhaengerverzeichnis;
    }

    /**
     * Set Anhaengerverzeichnis value
     */
    public function setAnhaengerverzeichnis(?\THAG\XKfz\StructType\Anhaengerverzeichnis $anhaengerverzeichnis = null): self
    {
        $this->Anhaengerverzeichnis = $anhaengerverzeichnis;

        return $this;
    }

    /**
     * Get Versicherungsdaten value
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZWTyp
    {
        return $this->Versicherungsdaten;
    }

    /**
     * Set Versicherungsdaten value
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZWTyp $versicherungsdaten = null): self
    {
        $this->Versicherungsdaten = $versicherungsdaten;

        return $this;
    }

    /**
     * Get Fehlerhinweise value
     */
    public function getFehlerhinweise(): ?\THAG\XKfz\StructType\Fehlerhinweise
    {
        return $this->Fehlerhinweise;
    }

    /**
     * Set Fehlerhinweise value
     */
    public function setFehlerhinweise(?\THAG\XKfz\StructType\Fehlerhinweise $fehlerhinweise = null): self
    {
        $this->Fehlerhinweise = $fehlerhinweise;

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
     * Get DokumentennummerAusland value
     */
    public function getDokumentennummerAusland(): ?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp
    {
        return $this->DokumentennummerAusland;
    }

    /**
     * Set DokumentennummerAusland value
     */
    public function setDokumentennummerAusland(?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $dokumentennummerAusland = null): self
    {
        $this->DokumentennummerAusland = $dokumentennummerAusland;

        return $this;
    }
}
