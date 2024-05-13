<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Anzeigenvorfaelle StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Anzeigenvorfaelle extends AbstractStructBase
{
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
     * The ArtMassnahme
     * @var string|null
     */
    public ?string $ArtMassnahme = null;
    /**
     * The GrundMassnahme
     * @var string|null
     */
    public ?string $GrundMassnahme = null;
    /**
     * The ZeitpunktMassnahme
     * @var string|null
     */
    public ?string $ZeitpunktMassnahme = null;
    /**
     * The TextMassnahme
     * @var string|null
     */
    public ?string $TextMassnahme = null;
    /**
     * Constructor method for Anzeigenvorfaelle
     * @uses Anzeigenvorfaelle::setZeitpunktAenderung()
     * @uses Anzeigenvorfaelle::setZeitpunktVerarbeitungZFZR()
     * @uses Anzeigenvorfaelle::setArtMassnahme()
     * @uses Anzeigenvorfaelle::setGrundMassnahme()
     * @uses Anzeigenvorfaelle::setZeitpunktMassnahme()
     * @uses Anzeigenvorfaelle::setTextMassnahme()
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktVerarbeitungZFZR
     * @param string $artMassnahme
     * @param string $grundMassnahme
     * @param string $zeitpunktMassnahme
     * @param string $textMassnahme
     */
    public function __construct(?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null, ?string $artMassnahme = null, ?string $grundMassnahme = null, ?string $zeitpunktMassnahme = null, ?string $textMassnahme = null)
    {
        $this
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setZeitpunktVerarbeitungZFZR($zeitpunktVerarbeitungZFZR)
            ->setArtMassnahme($artMassnahme)
            ->setGrundMassnahme($grundMassnahme)
            ->setZeitpunktMassnahme($zeitpunktMassnahme)
            ->setTextMassnahme($textMassnahme);
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
     * @return \THAG\XKfz\StructType\Anzeigenvorfaelle
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
     * @return \THAG\XKfz\StructType\Anzeigenvorfaelle
     */
    public function setZeitpunktVerarbeitungZFZR(?string $zeitpunktVerarbeitungZFZR = null): self
    {
        $this->ZeitpunktVerarbeitungZFZR = $zeitpunktVerarbeitungZFZR;
        
        return $this;
    }
    /**
     * Get ArtMassnahme value
     * @return string|null
     */
    public function getArtMassnahme(): ?string
    {
        return $this->ArtMassnahme;
    }
    /**
     * Set ArtMassnahme value
     * @param string $artMassnahme
     * @return \THAG\XKfz\StructType\Anzeigenvorfaelle
     */
    public function setArtMassnahme(?string $artMassnahme = null): self
    {
        $this->ArtMassnahme = $artMassnahme;
        
        return $this;
    }
    /**
     * Get GrundMassnahme value
     * @return string|null
     */
    public function getGrundMassnahme(): ?string
    {
        return $this->GrundMassnahme;
    }
    /**
     * Set GrundMassnahme value
     * @param string $grundMassnahme
     * @return \THAG\XKfz\StructType\Anzeigenvorfaelle
     */
    public function setGrundMassnahme(?string $grundMassnahme = null): self
    {
        $this->GrundMassnahme = $grundMassnahme;
        
        return $this;
    }
    /**
     * Get ZeitpunktMassnahme value
     * @return string|null
     */
    public function getZeitpunktMassnahme(): ?string
    {
        return $this->ZeitpunktMassnahme;
    }
    /**
     * Set ZeitpunktMassnahme value
     * @param string $zeitpunktMassnahme
     * @return \THAG\XKfz\StructType\Anzeigenvorfaelle
     */
    public function setZeitpunktMassnahme(?string $zeitpunktMassnahme = null): self
    {
        $this->ZeitpunktMassnahme = $zeitpunktMassnahme;
        
        return $this;
    }
    /**
     * Get TextMassnahme value
     * @return string|null
     */
    public function getTextMassnahme(): ?string
    {
        return $this->TextMassnahme;
    }
    /**
     * Set TextMassnahme value
     * @param string $textMassnahme
     * @return \THAG\XKfz\StructType\Anzeigenvorfaelle
     */
    public function setTextMassnahme(?string $textMassnahme = null): self
    {
        $this->TextMassnahme = $textMassnahme;
        
        return $this;
    }
}
