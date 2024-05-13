<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PruemerVertrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class PruemerVertrag extends AbstractStructBase
{
    /**
     * The TextBestreitungRichtigkeitAngaben
     * @var string|null
     */
    public ?string $TextBestreitungRichtigkeitAngaben = null;
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
     * Constructor method for PruemerVertrag
     * @uses PruemerVertrag::setTextBestreitungRichtigkeitAngaben()
     * @uses PruemerVertrag::setZeitpunktAenderung()
     * @uses PruemerVertrag::setZeitpunktVerarbeitungZFZR()
     * @param string $textBestreitungRichtigkeitAngaben
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktVerarbeitungZFZR
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
     * @return string|null
     */
    public function getTextBestreitungRichtigkeitAngaben(): ?string
    {
        return $this->TextBestreitungRichtigkeitAngaben;
    }
    /**
     * Set TextBestreitungRichtigkeitAngaben value
     * @param string $textBestreitungRichtigkeitAngaben
     * @return \THAG\XKfz\StructType\PruemerVertrag
     */
    public function setTextBestreitungRichtigkeitAngaben(?string $textBestreitungRichtigkeitAngaben = null): self
    {
        $this->TextBestreitungRichtigkeitAngaben = $textBestreitungRichtigkeitAngaben;
        
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
     * @return \THAG\XKfz\StructType\PruemerVertrag
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
     * @return \THAG\XKfz\StructType\PruemerVertrag
     */
    public function setZeitpunktVerarbeitungZFZR(?string $zeitpunktVerarbeitungZFZR = null): self
    {
        $this->ZeitpunktVerarbeitungZFZR = $zeitpunktVerarbeitungZFZR;
        
        return $this;
    }
}
