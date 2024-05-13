<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for anfrageVerfuegbarkeit StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class AnfrageVerfuegbarkeit extends AbstractStructBase
{
    /**
     * The zeitpunktAnfrage
     */
    public ?string $zeitpunktAnfrage = null;

    /**
     * Constructor method for anfrageVerfuegbarkeit
     *
     * @uses AnfrageVerfuegbarkeit::setZeitpunktAnfrage()
     */
    public function __construct(?string $zeitpunktAnfrage = null)
    {
        $this
            ->setZeitpunktAnfrage($zeitpunktAnfrage);
    }

    /**
     * Get zeitpunktAnfrage value
     */
    public function getZeitpunktAnfrage(): ?string
    {
        return $this->zeitpunktAnfrage;
    }

    /**
     * Set zeitpunktAnfrage value
     */
    public function setZeitpunktAnfrage(?string $zeitpunktAnfrage = null): self
    {
        $this->zeitpunktAnfrage = $zeitpunktAnfrage;

        return $this;
    }
}
