<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZRTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZRTyp extends AbstractStructBase
{
    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The ZeitpunktBeendigungZulassungsabschnitt
     */
    public ?string $ZeitpunktBeendigungZulassungsabschnitt = null;

    /**
     * The Kennzeichendaten
     */
    public ?\THAG\XKfz\StructType\KennzeichendatenZRTyp $Kennzeichendaten = null;

    /**
     * The Fahrzeugidentifizierung
     */
    public ?\THAG\XKfz\StructType\FahrzeugidentifizierungZATyp $Fahrzeugidentifizierung = null;

    /**
     * The Fahrzeugbeschreibung
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp $Fahrzeugbeschreibung = null;

    /**
     * Constructor method for ZulassungsabschnittZRTyp
     *
     * @uses ZulassungsabschnittZRTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZRTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZRTyp::setKennzeichendaten()
     * @uses ZulassungsabschnittZRTyp::setFahrzeugidentifizierung()
     * @uses ZulassungsabschnittZRTyp::setFahrzeugbeschreibung()
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
     * Get Kennzeichendaten value
     */
    public function getKennzeichendaten(): ?\THAG\XKfz\StructType\KennzeichendatenZRTyp
    {
        return $this->Kennzeichendaten;
    }

    /**
     * Set Kennzeichendaten value
     */
    public function setKennzeichendaten(?\THAG\XKfz\StructType\KennzeichendatenZRTyp $kennzeichendaten = null): self
    {
        $this->Kennzeichendaten = $kennzeichendaten;

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
     * Get Fahrzeugbeschreibung value
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp
    {
        return $this->Fahrzeugbeschreibung;
    }

    /**
     * Set Fahrzeugbeschreibung value
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZRTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;

        return $this;
    }
}
