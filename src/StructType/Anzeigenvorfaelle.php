<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Anzeigenvorfaelle StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Anzeigenvorfaelle extends AbstractStructBase
{
    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The ZeitpunktVerarbeitungZFZR
     */
    public ?string $ZeitpunktVerarbeitungZFZR = null;

    /**
     * The ArtMassnahme
     */
    public ?string $ArtMassnahme = null;

    /**
     * The GrundMassnahme
     */
    public ?string $GrundMassnahme = null;

    /**
     * The ZeitpunktMassnahme
     */
    public ?string $ZeitpunktMassnahme = null;

    /**
     * The TextMassnahme
     */
    public ?string $TextMassnahme = null;

    /**
     * Constructor method for Anzeigenvorfaelle
     *
     * @uses Anzeigenvorfaelle::setZeitpunktAenderung()
     * @uses Anzeigenvorfaelle::setZeitpunktVerarbeitungZFZR()
     * @uses Anzeigenvorfaelle::setArtMassnahme()
     * @uses Anzeigenvorfaelle::setGrundMassnahme()
     * @uses Anzeigenvorfaelle::setZeitpunktMassnahme()
     * @uses Anzeigenvorfaelle::setTextMassnahme()
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
     * Get ArtMassnahme value
     */
    public function getArtMassnahme(): ?string
    {
        return $this->ArtMassnahme;
    }

    /**
     * Set ArtMassnahme value
     */
    public function setArtMassnahme(?string $artMassnahme = null): self
    {
        $this->ArtMassnahme = $artMassnahme;

        return $this;
    }

    /**
     * Get GrundMassnahme value
     */
    public function getGrundMassnahme(): ?string
    {
        return $this->GrundMassnahme;
    }

    /**
     * Set GrundMassnahme value
     */
    public function setGrundMassnahme(?string $grundMassnahme = null): self
    {
        $this->GrundMassnahme = $grundMassnahme;

        return $this;
    }

    /**
     * Get ZeitpunktMassnahme value
     */
    public function getZeitpunktMassnahme(): ?string
    {
        return $this->ZeitpunktMassnahme;
    }

    /**
     * Set ZeitpunktMassnahme value
     */
    public function setZeitpunktMassnahme(?string $zeitpunktMassnahme = null): self
    {
        $this->ZeitpunktMassnahme = $zeitpunktMassnahme;

        return $this;
    }

    /**
     * Get TextMassnahme value
     */
    public function getTextMassnahme(): ?string
    {
        return $this->TextMassnahme;
    }

    /**
     * Set TextMassnahme value
     */
    public function setTextMassnahme(?string $textMassnahme = null): self
    {
        $this->TextMassnahme = $textMassnahme;

        return $this;
    }
}
