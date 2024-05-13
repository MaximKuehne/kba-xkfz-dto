<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZXTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZXTyp extends AbstractStructBase
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
    public ?\THAG\XKfz\StructType\KennzeichendatenZXTyp $Kennzeichendaten = null;

    /**
     * The Halter
     */
    public ?\THAG\XKfz\StructType\HalterZXTyp $Halter = null;

    /**
     * The TextUebermittlungssperre
     */
    public ?string $TextUebermittlungssperre = null;

    /**
     * The Fahrzeugidentifizierung
     */
    public ?\THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp $Fahrzeugidentifizierung = null;

    /**
     * The Fahrzeugbeschreibung
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp $Fahrzeugbeschreibung = null;

    /**
     * The MerkmalVerwertungsnachweis
     */
    public ?string $MerkmalVerwertungsnachweis = null;

    /**
     * The DatumErstzulassung
     */
    public ?string $DatumErstzulassung = null;

    /**
     * Constructor method for ZulassungsabschnittZXTyp
     *
     * @uses ZulassungsabschnittZXTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZXTyp::setIdentifikationZulassungsabschnitt()
     * @uses ZulassungsabschnittZXTyp::setArbeitsgang()
     * @uses ZulassungsabschnittZXTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZXTyp::setZeitpunktVerarbeitungZFZR()
     * @uses ZulassungsabschnittZXTyp::setMerkmalStornierung()
     * @uses ZulassungsabschnittZXTyp::setZeitpunktStornierung()
     * @uses ZulassungsabschnittZXTyp::setMerkmalFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZXTyp::setKennzeichendaten()
     * @uses ZulassungsabschnittZXTyp::setHalter()
     * @uses ZulassungsabschnittZXTyp::setTextUebermittlungssperre()
     * @uses ZulassungsabschnittZXTyp::setFahrzeugidentifizierung()
     * @uses ZulassungsabschnittZXTyp::setFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZXTyp::setMerkmalVerwertungsnachweis()
     * @uses ZulassungsabschnittZXTyp::setDatumErstzulassung()
     */
    public function __construct(?string $zeitpunktBeendigungZulassungsabschnitt = null, ?string $identifikationZulassungsabschnitt = null, ?string $arbeitsgang = null, ?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null, ?string $merkmalStornierung = null, ?string $zeitpunktStornierung = null, ?bool $merkmalFahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\KennzeichendatenZXTyp $kennzeichendaten = null, ?\THAG\XKfz\StructType\HalterZXTyp $halter = null, ?string $textUebermittlungssperre = null, ?\THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp $fahrzeugidentifizierung = null, ?\THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp $fahrzeugbeschreibung = null, ?string $merkmalVerwertungsnachweis = null, ?string $datumErstzulassung = null)
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
            ->setHalter($halter)
            ->setTextUebermittlungssperre($textUebermittlungssperre)
            ->setFahrzeugidentifizierung($fahrzeugidentifizierung)
            ->setFahrzeugbeschreibung($fahrzeugbeschreibung)
            ->setMerkmalVerwertungsnachweis($merkmalVerwertungsnachweis)
            ->setDatumErstzulassung($datumErstzulassung);
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
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\KennzeichendatenZXTyp
    {
        return $this->Kennzeichendaten;
    }

    /**
     * Set Kennzeichendaten value
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\KennzeichendatenZXTyp $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;

        return $this;
    }

    /**
     * Get Halter value
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZXTyp
    {
        return $this->Halter;
    }

    /**
     * Set Halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZXTyp $halter = null): self
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
     * Get Fahrzeugidentifizierung value
     */
    public function getFahrzeugidentifizierung(): ?\THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp
    {
        return $this->Fahrzeugidentifizierung;
    }

    /**
     * Set Fahrzeugidentifizierung value
     */
    public function setFahrzeugidentifizierung(?\THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp $fahrzeugidentifizierung = null): self
    {
        $this->Fahrzeugidentifizierung = $fahrzeugidentifizierung;

        return $this;
    }

    /**
     * Get Fahrzeugbeschreibung value
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
    {
        return $this->Fahrzeugbeschreibung;
    }

    /**
     * Set Fahrzeugbeschreibung value
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;

        return $this;
    }

    /**
     * Get MerkmalVerwertungsnachweis value
     */
    public function getMerkmalVerwertungsnachweis(): ?string
    {
        return $this->MerkmalVerwertungsnachweis;
    }

    /**
     * Set MerkmalVerwertungsnachweis value
     */
    public function setMerkmalVerwertungsnachweis(?string $merkmalVerwertungsnachweis = null): self
    {
        $this->MerkmalVerwertungsnachweis = $merkmalVerwertungsnachweis;

        return $this;
    }

    /**
     * Get DatumErstzulassung value
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }

    /**
     * Set DatumErstzulassung value
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;

        return $this;
    }
}
