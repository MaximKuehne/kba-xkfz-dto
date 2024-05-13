<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZVTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZVTyp extends AbstractStructBase
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
     * The Versicherungsdaten
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $Versicherungsdaten = null;

    /**
     * The Halter
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $Halter = null;

    /**
     * The MerkmalWechselkennzeichen
     */
    public ?bool $MerkmalWechselkennzeichen = null;

    /**
     * Constructor method for ZulassungsabschnittZVTyp
     *
     * @uses ZulassungsabschnittZVTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZVTyp::setIdentifikationZulassungsabschnitt()
     * @uses ZulassungsabschnittZVTyp::setArbeitsgang()
     * @uses ZulassungsabschnittZVTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZVTyp::setZeitpunktVerarbeitungZFZR()
     * @uses ZulassungsabschnittZVTyp::setMerkmalStornierung()
     * @uses ZulassungsabschnittZVTyp::setZeitpunktStornierung()
     * @uses ZulassungsabschnittZVTyp::setMerkmalFahrzeugbeschreibung()
     * @uses ZulassungsabschnittZVTyp::setVersicherungsdaten()
     * @uses ZulassungsabschnittZVTyp::setHalter()
     * @uses ZulassungsabschnittZVTyp::setMerkmalWechselkennzeichen()
     */
    public function __construct(?string $zeitpunktBeendigungZulassungsabschnitt = null, ?string $identifikationZulassungsabschnitt = null, ?string $arbeitsgang = null, ?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null, ?string $merkmalStornierung = null, ?string $zeitpunktStornierung = null, ?bool $merkmalFahrzeugbeschreibung = null, ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten = null, ?\THAG\XKfz\StructType\HalterZCTyp $halter = null, ?bool $merkmalWechselkennzeichen = null)
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
            ->setVersicherungsdaten($versicherungsdaten)
            ->setHalter($halter)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen);
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
     * Get Versicherungsdaten value
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp
    {
        return $this->Versicherungsdaten;
    }

    /**
     * Set Versicherungsdaten value
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten = null): self
    {
        $this->Versicherungsdaten = $versicherungsdaten;

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
     * Get MerkmalWechselkennzeichen value
     */
    public function getMerkmalWechselkennzeichen(): ?bool
    {
        return $this->MerkmalWechselkennzeichen;
    }

    /**
     * Set MerkmalWechselkennzeichen value
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;

        return $this;
    }
}
