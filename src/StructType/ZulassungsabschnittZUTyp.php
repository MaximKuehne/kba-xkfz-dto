<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZUTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZUTyp extends AbstractStructBase
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
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The SchluesselKraftstoff
     */
    public ?string $SchluesselKraftstoff = null;

    /**
     * The SchluesselEmissionsklasse
     */
    public ?string $SchluesselEmissionsklasse = null;

    /**
     * The Euronorm
     */
    public ?string $Euronorm = null;

    /**
     * The SteuerEmissionsrelevanteDaten
     */
    public ?string $SteuerEmissionsrelevanteDaten = null;

    /**
     * Constructor method for ZulassungsabschnittZUTyp
     *
     * @uses ZulassungsabschnittZUTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZUTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZUTyp::setKennzeichen()
     * @uses ZulassungsabschnittZUTyp::setSchluesselKraftstoff()
     * @uses ZulassungsabschnittZUTyp::setSchluesselEmissionsklasse()
     * @uses ZulassungsabschnittZUTyp::setEuronorm()
     * @uses ZulassungsabschnittZUTyp::setSteuerEmissionsrelevanteDaten()
     */
    public function __construct(?string $zeitpunktAenderung = null, ?string $zeitpunktBeendigungZulassungsabschnitt = null, ?string $kennzeichen = null, ?string $schluesselKraftstoff = null, ?string $schluesselEmissionsklasse = null, ?string $euronorm = null, ?string $steuerEmissionsrelevanteDaten = null)
    {
        $this
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setZeitpunktBeendigungZulassungsabschnitt($zeitpunktBeendigungZulassungsabschnitt)
            ->setKennzeichen($kennzeichen)
            ->setSchluesselKraftstoff($schluesselKraftstoff)
            ->setSchluesselEmissionsklasse($schluesselEmissionsklasse)
            ->setEuronorm($euronorm)
            ->setSteuerEmissionsrelevanteDaten($steuerEmissionsrelevanteDaten);
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
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get SchluesselKraftstoff value
     */
    public function getSchluesselKraftstoff(): ?string
    {
        return $this->SchluesselKraftstoff;
    }

    /**
     * Set SchluesselKraftstoff value
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;

        return $this;
    }

    /**
     * Get SchluesselEmissionsklasse value
     */
    public function getSchluesselEmissionsklasse(): ?string
    {
        return $this->SchluesselEmissionsklasse;
    }

    /**
     * Set SchluesselEmissionsklasse value
     */
    public function setSchluesselEmissionsklasse(?string $schluesselEmissionsklasse = null): self
    {
        $this->SchluesselEmissionsklasse = $schluesselEmissionsklasse;

        return $this;
    }

    /**
     * Get Euronorm value
     */
    public function getEuronorm(): ?string
    {
        return $this->Euronorm;
    }

    /**
     * Set Euronorm value
     */
    public function setEuronorm(?string $euronorm = null): self
    {
        $this->Euronorm = $euronorm;

        return $this;
    }

    /**
     * Get SteuerEmissionsrelevanteDaten value
     */
    public function getSteuerEmissionsrelevanteDaten(): ?string
    {
        return $this->SteuerEmissionsrelevanteDaten;
    }

    /**
     * Set SteuerEmissionsrelevanteDaten value
     */
    public function setSteuerEmissionsrelevanteDaten(?string $steuerEmissionsrelevanteDaten = null): self
    {
        $this->SteuerEmissionsrelevanteDaten = $steuerEmissionsrelevanteDaten;

        return $this;
    }
}
