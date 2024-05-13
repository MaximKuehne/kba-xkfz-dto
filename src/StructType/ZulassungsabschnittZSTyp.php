<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZSTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZSTyp extends AbstractStructBase
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
    public ?\THAG\XKfz\StructType\KennzeichendatenZSTyp $Kennzeichendaten = null;

    /**
     * The ZulassungsbescheinigungTeil1
     */
    public ?string $ZulassungsbescheinigungTeil1 = null;

    /**
     * The Fahrzeugidentifizierung
     */
    public ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $Fahrzeugidentifizierung = null;

    /**
     * The Verfuegungsberechtigter
     */
    public ?\THAG\XKfz\StructType\Verfuegungsberechtigter $Verfuegungsberechtigter = null;

    /**
     * The Veraeusserungsanzeige
     */
    public ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp $Veraeusserungsanzeige = null;

    /**
     * The Fahrzeugbeschreibung
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp $Fahrzeugbeschreibung = null;

    /**
     * The Fahrzeughinweise
     */
    public ?\THAG\XKfz\StructType\FahrzeughinweiseZSTyp $Fahrzeughinweise = null;

    /**
     * The Empfangsbevollmaechtigter
     */
    public ?\THAG\XKfz\StructType\Empfangsbevollmaechtigter $Empfangsbevollmaechtigter = null;

    /**
     * Constructor method for ZulassungsabschnittZSTyp
     *
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
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\KennzeichendatenZSTyp
    {
        return $this->Kennzeichendaten;
    }

    /**
     * Set Kennzeichendaten value
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\KennzeichendatenZSTyp $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;

        return $this;
    }

    /**
     * Get ZulassungsbescheinigungTeil1 value
     */
    public function getZulassungsbescheinigungTeil1(): ?string
    {
        return $this->ZulassungsbescheinigungTeil1;
    }

    /**
     * Set ZulassungsbescheinigungTeil1 value
     */
    public function setZulassungsbescheinigungTeil1(?string $zulassungsbescheinigungTeil1 = null): self
    {
        $this->ZulassungsbescheinigungTeil1 = $zulassungsbescheinigungTeil1;

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
     * Get Veraeusserungsanzeige value
     */
    public function getVeraeusserungsanzeige(): ?\THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp
    {
        return $this->Veraeusserungsanzeige;
    }

    /**
     * Set Veraeusserungsanzeige value
     */
    public function setVeraeusserungsanzeige(?\THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp $veraeusserungsanzeige = null): self
    {
        $this->Veraeusserungsanzeige = $veraeusserungsanzeige;

        return $this;
    }

    /**
     * Get Fahrzeugbeschreibung value
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp
    {
        return $this->Fahrzeugbeschreibung;
    }

    /**
     * Set Fahrzeugbeschreibung value
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZSTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;

        return $this;
    }

    /**
     * Get Fahrzeughinweise value
     */
    public function getFahrzeughinweise(): ?\THAG\XKfz\StructType\FahrzeughinweiseZSTyp
    {
        return $this->Fahrzeughinweise;
    }

    /**
     * Set Fahrzeughinweise value
     */
    public function setFahrzeughinweise(?\THAG\XKfz\StructType\FahrzeughinweiseZSTyp $fahrzeughinweise = null): self
    {
        $this->Fahrzeughinweise = $fahrzeughinweise;

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
