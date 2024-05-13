<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for anfrageVerfuegbarkeit StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class AnfrageVerfuegbarkeit extends AbstractStructBase
{
    /**
     * The zeitpunktAnfrage
     * @var string|null
     */
    public ?string $zeitpunktAnfrage = null;
    /**
     * Constructor method for anfrageVerfuegbarkeit
     * @uses AnfrageVerfuegbarkeit::setZeitpunktAnfrage()
     * @param string $zeitpunktAnfrage
     */
    public function __construct(?string $zeitpunktAnfrage = null)
    {
        $this
            ->setZeitpunktAnfrage($zeitpunktAnfrage);
    }
    /**
     * Get zeitpunktAnfrage value
     * @return string|null
     */
    public function getZeitpunktAnfrage(): ?string
    {
        return $this->zeitpunktAnfrage;
    }
    /**
     * Set zeitpunktAnfrage value
     * @param string $zeitpunktAnfrage
     * @return \THAG\XKfz\StructType\AnfrageVerfuegbarkeit
     */
    public function setZeitpunktAnfrage(?string $zeitpunktAnfrage = null): self
    {
        $this->zeitpunktAnfrage = $zeitpunktAnfrage;
        
        return $this;
    }
}
