<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZXTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZXTyp extends AbstractStructBase
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
     * @var \THAG\XKfz\StructType\KennzeichendatenZXTyp|null
     */
    public ?\THAG\XKfz\StructType\KennzeichendatenZXTyp $Kennzeichendaten = null;
    /**
     * The Halter
     * @var \THAG\XKfz\StructType\HalterZXTyp|null
     */
    public ?\THAG\XKfz\StructType\HalterZXTyp $Halter = null;
    /**
     * The TextUebermittlungssperre
     * @var string|null
     */
    public ?string $TextUebermittlungssperre = null;
    /**
     * The Fahrzeugidentifizierung
     * @var \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp $Fahrzeugidentifizierung = null;
    /**
     * The Fahrzeugbeschreibung
     * @var \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp $Fahrzeugbeschreibung = null;
    /**
     * The MerkmalVerwertungsnachweis
     * @var string|null
     */
    public ?string $MerkmalVerwertungsnachweis = null;
    /**
     * The DatumErstzulassung
     * @var string|null
     */
    public ?string $DatumErstzulassung = null;
    /**
     * Constructor method for ZulassungsabschnittZXTyp
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
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param string $identifikationZulassungsabschnitt
     * @param string $arbeitsgang
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktVerarbeitungZFZR
     * @param string $merkmalStornierung
     * @param string $zeitpunktStornierung
     * @param bool $merkmalFahrzeugbeschreibung
     * @param \THAG\XKfz\StructType\KennzeichendatenZXTyp $kennzeichendaten
     * @param \THAG\XKfz\StructType\HalterZXTyp $halter
     * @param string $textUebermittlungssperre
     * @param \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp $fahrzeugidentifizierung
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp $fahrzeugbeschreibung
     * @param string $merkmalVerwertungsnachweis
     * @param string $datumErstzulassung
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
     * @return string|null
     */
    public function getZeitpunktBeendigungZulassungsabschnitt(): ?string
    {
        return $this->ZeitpunktBeendigungZulassungsabschnitt;
    }
    /**
     * Set ZeitpunktBeendigungZulassungsabschnitt value
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
     */
    public function setMerkmalFahrzeugbeschreibung(?bool $merkmalFahrzeugbeschreibung = null): self
    {
        $this->MerkmalFahrzeugbeschreibung = $merkmalFahrzeugbeschreibung;
        
        return $this;
    }
    /**
     * Get Kennzeichendaten value
     * @return \THAG\XKfz\StructType\KennzeichendatenZXTyp|null
     */
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\KennzeichendatenZXTyp
    {
        return $this->Kennzeichendaten;
    }
    /**
     * Set Kennzeichendaten value
     * @param \THAG\XKfz\StructType\KennzeichendatenZXTyp $kennzeichendaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\KennzeichendatenZXTyp $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;
        
        return $this;
    }
    /**
     * Get Halter value
     * @return \THAG\XKfz\StructType\HalterZXTyp|null
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZXTyp
    {
        return $this->Halter;
    }
    /**
     * Set Halter value
     * @param \THAG\XKfz\StructType\HalterZXTyp $halter
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZXTyp $halter = null): self
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
     */
    public function setTextUebermittlungssperre(?string $textUebermittlungssperre = null): self
    {
        $this->TextUebermittlungssperre = $textUebermittlungssperre;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierung value
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp|null
     */
    public function getFahrzeugidentifizierung(): ?\THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp
    {
        return $this->Fahrzeugidentifizierung;
    }
    /**
     * Set Fahrzeugidentifizierung value
     * @param \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp $fahrzeugidentifizierung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
     */
    public function setFahrzeugidentifizierung(?\THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp $fahrzeugidentifizierung = null): self
    {
        $this->Fahrzeugidentifizierung = $fahrzeugidentifizierung;
        
        return $this;
    }
    /**
     * Get Fahrzeugbeschreibung value
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp|null
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
    {
        return $this->Fahrzeugbeschreibung;
    }
    /**
     * Set Fahrzeugbeschreibung value
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp $fahrzeugbeschreibung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;
        
        return $this;
    }
    /**
     * Get MerkmalVerwertungsnachweis value
     * @return string|null
     */
    public function getMerkmalVerwertungsnachweis(): ?string
    {
        return $this->MerkmalVerwertungsnachweis;
    }
    /**
     * Set MerkmalVerwertungsnachweis value
     * @param string $merkmalVerwertungsnachweis
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
     */
    public function setMerkmalVerwertungsnachweis(?string $merkmalVerwertungsnachweis = null): self
    {
        $this->MerkmalVerwertungsnachweis = $merkmalVerwertungsnachweis;
        
        return $this;
    }
    /**
     * Get DatumErstzulassung value
     * @return string|null
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }
    /**
     * Set DatumErstzulassung value
     * @param string $datumErstzulassung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;
        
        return $this;
    }
}
