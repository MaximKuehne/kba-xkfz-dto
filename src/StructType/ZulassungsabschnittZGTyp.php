<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZGTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZGTyp extends AbstractStructBase
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
     * The Kennzeichendaten
     */
    public ?\THAG\XKfz\StructType\KennzeichendatenZGTyp $Kennzeichendaten = null;

    /**
     * The ZulassungsbescheinigungTeil1
     */
    public ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1ZGTyp $ZulassungsbescheinigungTeil1 = null;

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
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZGTyp $Fahrzeugbeschreibung = null;

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
     * The Verwertungsnachweis
     */
    public ?\THAG\XKfz\StructType\Verwertungsnachweis $Verwertungsnachweis = null;

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
     * Constructor method for ZulassungsabschnittZGTyp
     *
     * @uses ZulassungsabschnittZGTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZGTyp::setIdentifikationZulassungsabschnitt()
     * @uses ZulassungsabschnittZGTyp::setArbeitsgang()
     * @uses ZulassungsabschnittZGTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZGTyp::setZeitpunktVerarbeitungZFZR()
     * @uses ZulassungsabschnittZGTyp::setMerkmalStornierung()
     * @uses ZulassungsabschnittZGTyp::setZeitpunktStornierung()
     * @uses ZulassungsabschnittZGTyp::setMerkmalFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZGTyp::setMerkmalAusserbetriebsetzung()
     * @uses ZulassungsabschnittZGTyp::setKennzeichendaten()
     * @uses ZulassungsabschnittZGTyp::setZulassungsbescheinigungTeil1()
     * @uses ZulassungsabschnittZGTyp::setZulassungsbescheinigungTeil2()
     * @uses ZulassungsabschnittZGTyp::setFahrzeugidentifizierung()
     * @uses ZulassungsabschnittZGTyp::setFahrzeug()
     * @uses ZulassungsabschnittZGTyp::setFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZGTyp::setHalter()
     * @uses ZulassungsabschnittZGTyp::setVeraeusserungsanzeige()
     * @uses ZulassungsabschnittZGTyp::setVerfuegungsberechtigter()
     * @uses ZulassungsabschnittZGTyp::setVerwertungsnachweis()
     * @uses ZulassungsabschnittZGTyp::setFahrzeughinweise()
     * @uses ZulassungsabschnittZGTyp::setVersicherungsdaten()
     * @uses ZulassungsabschnittZGTyp::setEmpfangsbevollmaechtigter()
     */
    public function __construct(?string $zeitpunktBeendigungZulassungsabschnitt = null, ?string $identifikationZulassungsabschnitt = null, ?string $arbeitsgang = null, ?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null, ?string $merkmalStornierung = null, ?string $zeitpunktStornierung = null, ?bool $merkmalFahrzeugbeschreibung = null, ?bool $merkmalAusserbetriebsetzung = null, ?\THAG\XKfz\StructType\KennzeichendatenZGTyp $kennzeichendaten = null, ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1ZGTyp $zulassungsbescheinigungTeil1 = null, ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2 $zulassungsbescheinigungTeil2 = null, ?\THAG\XKfz\StructType\Fahrzeugidentifizierung $fahrzeugidentifizierung = null, ?\THAG\XKfz\StructType\FahrzeugZCTyp $fahrzeug = null, ?\THAG\XKfz\StructType\FahrzeugbeschreibungZGTyp $fahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\HalterZCTyp $halter = null, ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp $veraeusserungsanzeige = null, ?\THAG\XKfz\StructType\Verfuegungsberechtigter $verfuegungsberechtigter = null, ?\THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis = null, ?\THAG\XKfz\StructType\FahrzeughinweiseZCTyp $fahrzeughinweise = null, ?\THAG\XKfz\StructType\VersicherungsdatenZCTyp $versicherungsdaten = null, ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $empfangsbevollmaechtigter = null)
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
            ->setKennzeichendaten($kennzeichendaten)
            ->setZulassungsbescheinigungTeil1($zulassungsbescheinigungTeil1)
            ->setZulassungsbescheinigungTeil2($zulassungsbescheinigungTeil2)
            ->setFahrzeugidentifizierung($fahrzeugidentifizierung)
            ->setFahrzeug($fahrzeug)
            ->setFahrzeugbeschreibung($fahrzeugbeschreibung)
            ->setHalter($halter)
            ->setVeraeusserungsanzeige($veraeusserungsanzeige)
            ->setVerfuegungsberechtigter($verfuegungsberechtigter)
            ->setVerwertungsnachweis($verwertungsnachweis)
            ->setFahrzeughinweise($fahrzeughinweise)
            ->setVersicherungsdaten($versicherungsdaten)
            ->setEmpfangsbevollmaechtigter($empfangsbevollmaechtigter);
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
     * Get Kennzeichendaten value
     */
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\KennzeichendatenZGTyp
    {
        return $this->Kennzeichendaten;
    }

    /**
     * Set Kennzeichendaten value
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\KennzeichendatenZGTyp $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;

        return $this;
    }

    /**
     * Get ZulassungsbescheinigungTeil1 value
     */
    public function getZulassungsbescheinigungTeil1(): ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1ZGTyp
    {
        return $this->ZulassungsbescheinigungTeil1;
    }

    /**
     * Set ZulassungsbescheinigungTeil1 value
     */
    public function setZulassungsbescheinigungTeil1(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil1ZGTyp $zulassungsbescheinigungTeil1 = null): self
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
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZGTyp
    {
        return $this->Fahrzeugbeschreibung;
    }

    /**
     * Set Fahrzeugbeschreibung value
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZGTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;

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
}
