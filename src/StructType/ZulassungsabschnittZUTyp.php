<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZUTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZUTyp extends AbstractStructBase
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
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The SchluesselKraftstoff
     * @var string|null
     */
    public ?string $SchluesselKraftstoff = null;
    /**
     * The SchluesselEmissionsklasse
     * @var string|null
     */
    public ?string $SchluesselEmissionsklasse = null;
    /**
     * The Euronorm
     * @var string|null
     */
    public ?string $Euronorm = null;
    /**
     * The SteuerEmissionsrelevanteDaten
     * @var string|null
     */
    public ?string $SteuerEmissionsrelevanteDaten = null;
    /**
     * Constructor method for ZulassungsabschnittZUTyp
     * @uses ZulassungsabschnittZUTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZUTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZUTyp::setKennzeichen()
     * @uses ZulassungsabschnittZUTyp::setSchluesselKraftstoff()
     * @uses ZulassungsabschnittZUTyp::setSchluesselEmissionsklasse()
     * @uses ZulassungsabschnittZUTyp::setEuronorm()
     * @uses ZulassungsabschnittZUTyp::setSteuerEmissionsrelevanteDaten()
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param string $kennzeichen
     * @param string $schluesselKraftstoff
     * @param string $schluesselEmissionsklasse
     * @param string $euronorm
     * @param string $steuerEmissionsrelevanteDaten
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
     * @return string|null
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }
    /**
     * Set ZeitpunktAenderung value
     * @param string $zeitpunktAenderung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZUTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZUTyp
     */
    public function setZeitpunktBeendigungZulassungsabschnitt(?string $zeitpunktBeendigungZulassungsabschnitt = null): self
    {
        $this->ZeitpunktBeendigungZulassungsabschnitt = $zeitpunktBeendigungZulassungsabschnitt;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return string|null
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param string $kennzeichen
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZUTyp
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get SchluesselKraftstoff value
     * @return string|null
     */
    public function getSchluesselKraftstoff(): ?string
    {
        return $this->SchluesselKraftstoff;
    }
    /**
     * Set SchluesselKraftstoff value
     * @param string $schluesselKraftstoff
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZUTyp
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;
        
        return $this;
    }
    /**
     * Get SchluesselEmissionsklasse value
     * @return string|null
     */
    public function getSchluesselEmissionsklasse(): ?string
    {
        return $this->SchluesselEmissionsklasse;
    }
    /**
     * Set SchluesselEmissionsklasse value
     * @param string $schluesselEmissionsklasse
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZUTyp
     */
    public function setSchluesselEmissionsklasse(?string $schluesselEmissionsklasse = null): self
    {
        $this->SchluesselEmissionsklasse = $schluesselEmissionsklasse;
        
        return $this;
    }
    /**
     * Get Euronorm value
     * @return string|null
     */
    public function getEuronorm(): ?string
    {
        return $this->Euronorm;
    }
    /**
     * Set Euronorm value
     * @param string $euronorm
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZUTyp
     */
    public function setEuronorm(?string $euronorm = null): self
    {
        $this->Euronorm = $euronorm;
        
        return $this;
    }
    /**
     * Get SteuerEmissionsrelevanteDaten value
     * @return string|null
     */
    public function getSteuerEmissionsrelevanteDaten(): ?string
    {
        return $this->SteuerEmissionsrelevanteDaten;
    }
    /**
     * Set SteuerEmissionsrelevanteDaten value
     * @param string $steuerEmissionsrelevanteDaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZUTyp
     */
    public function setSteuerEmissionsrelevanteDaten(?string $steuerEmissionsrelevanteDaten = null): self
    {
        $this->SteuerEmissionsrelevanteDaten = $steuerEmissionsrelevanteDaten;
        
        return $this;
    }
}
