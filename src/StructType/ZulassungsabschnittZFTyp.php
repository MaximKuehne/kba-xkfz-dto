<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZFTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZFTyp extends AbstractStructBase
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
     * The Halter
     * @var \THAG\XKfz\StructType\HalterZCTyp|null
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $Halter = null;
    /**
     * The Fahrzeugbeschreibung
     * @var \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp|null
     */
    public ?\THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp $Fahrzeugbeschreibung = null;
    /**
     * Constructor method for ZulassungsabschnittZFTyp
     * @uses ZulassungsabschnittZFTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZFTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZFTyp::setHalter()
     * @uses ZulassungsabschnittZFTyp::setFahrzeugbeschreibung()
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param \THAG\XKfz\StructType\HalterZCTyp $halter
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp $fahrzeugbeschreibung
     */
    public function __construct(?string $zeitpunktAenderung = null, ?string $zeitpunktBeendigungZulassungsabschnitt = null, ?\THAG\XKfz\StructType\HalterZCTyp $halter = null, ?\THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp $fahrzeugbeschreibung = null)
    {
        $this
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setZeitpunktBeendigungZulassungsabschnitt($zeitpunktBeendigungZulassungsabschnitt)
            ->setHalter($halter)
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZFTyp
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZFTyp
     */
    public function setZeitpunktBeendigungZulassungsabschnitt(?string $zeitpunktBeendigungZulassungsabschnitt = null): self
    {
        $this->ZeitpunktBeendigungZulassungsabschnitt = $zeitpunktBeendigungZulassungsabschnitt;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZFTyp
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZCTyp $halter = null): self
    {
        $this->Halter = $halter;
        
        return $this;
    }
    /**
     * Get Fahrzeugbeschreibung value
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp|null
     */
    public function getFahrzeugbeschreibung(): ?\THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
    {
        return $this->Fahrzeugbeschreibung;
    }
    /**
     * Set Fahrzeugbeschreibung value
     * @param \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp $fahrzeugbeschreibung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZFTyp
     */
    public function setFahrzeugbeschreibung(?\THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp $fahrzeugbeschreibung = null): self
    {
        $this->Fahrzeugbeschreibung = $fahrzeugbeschreibung;
        
        return $this;
    }
}
