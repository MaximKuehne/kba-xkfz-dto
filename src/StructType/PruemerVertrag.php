<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PruemerVertrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class PruemerVertrag extends AbstractStructBase
{
    /**
     * The TextBestreitungRichtigkeitAngaben
     */
    public ?string $TextBestreitungRichtigkeitAngaben = null;

    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The ZeitpunktVerarbeitungZFZR
     */
    public ?string $ZeitpunktVerarbeitungZFZR = null;

    /**
     * Constructor method for PruemerVertrag
     *
     * @uses PruemerVertrag::setTextBestreitungRichtigkeitAngaben()
     * @uses PruemerVertrag::setZeitpunktAenderung()
     * @uses PruemerVertrag::setZeitpunktVerarbeitungZFZR()
     */
    public function __construct(?string $textBestreitungRichtigkeitAngaben = null, ?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null)
    {
        $this
            ->setTextBestreitungRichtigkeitAngaben($textBestreitungRichtigkeitAngaben)
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setZeitpunktVerarbeitungZFZR($zeitpunktVerarbeitungZFZR);
    }

    /**
     * Get TextBestreitungRichtigkeitAngaben value
     */
    public function getTextBestreitungRichtigkeitAngaben(): ?string
    {
        return $this->TextBestreitungRichtigkeitAngaben;
    }

    /**
     * Set TextBestreitungRichtigkeitAngaben value
     */
    public function setTextBestreitungRichtigkeitAngaben(?string $textBestreitungRichtigkeitAngaben = null): self
    {
        $this->TextBestreitungRichtigkeitAngaben = $textBestreitungRichtigkeitAngaben;

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
}
