<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZCTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZCTyp extends AbstractStructBase
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
     * The MerkmalAusserbetriebsetzung
     */
    public ?bool $MerkmalAusserbetriebsetzung = null;

    /**
     * The MerkmalTageszulassung
     */
    public ?bool $MerkmalTageszulassung = null;

    /**
     * The Antragsnummer
     */
    public ?string $Antragsnummer = null;

    /**
     * The Kennzeichendaten
     */
    public ?\THAG\XKfz\StructType\Kennzeichendaten $Kennzeichendaten = null;

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
    public ?\THAG\XKfz\StructType\FahrzeugZCTyp $Fahrzeug = null;

    /**
     * The Fahrzeugbeschreibung
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZCTyp $Fahrzeugbeschreibung = null;

    /**
     * The AutonomesFahren
     */
    public ?\THAG\XKfz\StructType\AutonomesFahren $AutonomesFahren = null;

    /**
     * The Halter
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $Halter = null;

    /**
     * The TextUebermittlungssperre
     */
    public ?string $TextUebermittlungssperre = null;

    /**
     * The Veraeusserungsanzeige
     */
    public ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $Veraeusserungsanzeige = null;

    /**
     * The Verfuegungsberechtigter
     */
    public ?\THAG\XKfz\StructType\Verfuegungsberechtigter $Verfuegungsberechtigter = null;

    /**
     * The Verwertungsnachweis
     */
    public ?\THAG\XKfz\StructType\Verwertungsnachweis $Verwertungsnachweis = null;

    /**
     * The Fahrtenbuchauflage
     */
    public ?\THAG\XKfz\StructType\Fahrtenbuchauflage $Fahrtenbuchauflage = null;

    /**
     * The Fahrzeughinweise
     */
    public ?\THAG\XKfz\StructType\FahrzeughinweiseZCTyp $Fahrzeughinweise = null;

    /**
     * The Versicherungsdaten
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZCTyp $Versicherungsdaten = null;

    /**
     * The Empfangsbevollmaechtigter
     */
    public ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $Empfangsbevollmaechtigter = null;

    /**
     * The DokumentennummerAusland
     */
    public ?\THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp $DokumentennummerAusland = null;

    /**
     * Constructor method for ZulassungsabschnittZCTyp
     *
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
    public function getFahrzeug(): ?\THAG\XKfz\StructType\FahrzeugZCTyp
    {
        return $this->Fahrzeug;
    }

    /**
     * Set Fahrzeug value
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\FahrzeugZCTyp $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;

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
     * Get Fahrzeughinweise value
     */
    public function getFahrzeughinweise(): ?\THAG\XKfz\StructType\FahrzeughinweiseZCTyp
    {
        return $this->Fahrzeughinweise;
    }

    /**
     * Set Fahrzeughinweise value
     */
    public function setFahrzeughinweise(?\THAG\XKfz\StructType\FahrzeughinweiseZCTyp $fahrzeughinweise = null): self
    {
        $this->Fahrzeughinweise = $fahrzeughinweise;

        return $this;
    }

    /**
     * Get Versicherungsdaten value
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZCTyp
    {
        return $this->Versicherungsdaten;
    }

    /**
     * Set Versicherungsdaten value
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZCTyp $versicherungsdaten = null): self
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
