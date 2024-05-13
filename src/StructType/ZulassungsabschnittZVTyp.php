<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZVTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZVTyp extends AbstractStructBase
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
     * The Versicherungsdaten
     * @var \THAG\XKfz\StructType\VersicherungsdatenZVTyp|null
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $Versicherungsdaten = null;
    /**
     * The Halter
     * @var \THAG\XKfz\StructType\HalterZCTyp|null
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $Halter = null;
    /**
     * The MerkmalWechselkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalWechselkennzeichen = null;
    /**
     * Constructor method for ZulassungsabschnittZVTyp
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
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param string $identifikationZulassungsabschnitt
     * @param string $arbeitsgang
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktVerarbeitungZFZR
     * @param string $merkmalStornierung
     * @param string $zeitpunktStornierung
     * @param bool $merkmalFahrzeugbeschreibung
     * @param \THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten
     * @param \THAG\XKfz\StructType\HalterZCTyp $halter
     * @param bool $merkmalWechselkennzeichen
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
     * @return string|null
     */
    public function getZeitpunktBeendigungZulassungsabschnitt(): ?string
    {
        return $this->ZeitpunktBeendigungZulassungsabschnitt;
    }
    /**
     * Set ZeitpunktBeendigungZulassungsabschnitt value
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
     */
    public function setMerkmalFahrzeugbeschreibung(?bool $merkmalFahrzeugbeschreibung = null): self
    {
        $this->MerkmalFahrzeugbeschreibung = $merkmalFahrzeugbeschreibung;
        
        return $this;
    }
    /**
     * Get Versicherungsdaten value
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp|null
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp
    {
        return $this->Versicherungsdaten;
    }
    /**
     * Set Versicherungsdaten value
     * @param \THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten = null): self
    {
        $this->Versicherungsdaten = $versicherungsdaten;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZCTyp $halter = null): self
    {
        $this->Halter = $halter;
        
        return $this;
    }
    /**
     * Get MerkmalWechselkennzeichen value
     * @return bool|null
     */
    public function getMerkmalWechselkennzeichen(): ?bool
    {
        return $this->MerkmalWechselkennzeichen;
    }
    /**
     * Set MerkmalWechselkennzeichen value
     * @param bool $merkmalWechselkennzeichen
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZVTyp
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;
        
        return $this;
    }
}
