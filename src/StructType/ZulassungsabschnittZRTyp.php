<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZRTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZRTyp extends AbstractStructBase
{
    /**
     * The ZeitpunktAenderung
     * @var string|null
     */
    public ?string $ZeitpunktAenderung = null;
    /**
     * The ZeitpunktBeendigungZulassungsabschnitt
     * @var string|null
     */
    public ?string $ZeitpunktBeendigungZulassungsabschnitt = null;
    /**
     * The Kennzeichendaten
     * @var \THAG\XKfz\StructType\KennzeichendatenZRTyp|null
     */
    public ?\THAG\XKfz\StructType\KennzeichendatenZRTyp $Kennzeichendaten = null;
    /**
     * The Fahrzeugidentifizierung
     * @var \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $Fahrzeugidentifizierung = null;
    /**
     * The Fahrzeugbeschreibung
     * @var \THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp $Fahrzeugbeschreibung = null;
    /**
     * Constructor method for ZulassungsabschnittZRTyp
     * @uses ZulassungsabschnittZRTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZRTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZRTyp::setKennzeichendaten()
     * @uses ZulassungsabschnittZRTyp::setFahrzeugidentifizierung()
     * @uses ZulassungsabschnittZRTyp::setFahrzeugbeschreibung()
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param \THAG\XKfz\StructType\KennzeichendatenZRTyp $kennzeichendaten
     * @param \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp $fahrzeugbeschreibung
     */
    public function __construct(?string $zeitpunktAenderung = null, ?string $zeitpunktBeendigungZulassungsabschnitt = null, ?\THAG\XKfz\StructType\KennzeichendatenZRTyp $kennzeichendaten = null, ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung = null, ?\THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp $fahrzeugbeschreibung = null)
    {
        $this
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setZeitpunktBeendigungZulassungsabschnitt($zeitpunktBeendigungZulassungsabschnitt)
            ->setKennzeichendaten($kennzeichendaten)
            ->setFahrzeugidentifizierung($fahrzeugidentifizierung)
            ->setFahrzeugbeschreibung($fahrzeugbeschreibung);
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZRTyp
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZRTyp
     */
    public function setZeitpunktBeendigungZulassungsabschnitt(?string $zeitpunktBeendigungZulassungsabschnitt = null): self
    {
        $this->ZeitpunktBeendigungZulassungsabschnitt = $zeitpunktBeendigungZulassungsabschnitt;
        
        return $this;
    }
    /**
     * Get Kennzeichendaten value
     * @return \THAG\XKfz\StructType\KennzeichendatenZRTyp|null
     */
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\KennzeichendatenZRTyp
    {
        return $this->Kennzeichendaten;
    }
    /**
     * Set Kennzeichendaten value
     * @param \THAG\XKfz\StructType\KennzeichendatenZRTyp $kennzeichendaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZRTyp
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\KennzeichendatenZRTyp $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierung value
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp|null
     */
    public function getFahrzeugidentifizierung(): ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
    {
        return $this->Fahrzeugidentifizierung;
    }
    /**
     * Set Fahrzeugidentifizierung value
     * @param \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZRTyp
     */
    public function setFahrzeugidentifizierung(?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $fahrzeugidentifizierung = null): self
    {
        $this->Fahrzeugidentifizierung = $fahrzeugidentifizierung;
        
        return $this;
    }
    /**
     * Get Fahrzeugbeschreibung value
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp|null
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp
    {
        return $this->Fahrzeugbeschreibung;
    }
    /**
     * Set Fahrzeugbeschreibung value
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp $fahrzeugbeschreibung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZRTyp
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;
        
        return $this;
    }
}
