<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.StrukturKennzeichenInhalt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_StrukturKennzeichenInhalt extends AbstractStructBase
{
    /**
     * The laengeUnterscheidungszeichen
     */
    public ?int $laengeUnterscheidungszeichen = null;

    /**
     * The laengeErkennungszeichen
     */
    public ?int $laengeErkennungszeichen = null;

    /**
     * The laengeErkennungsnummer
     */
    public ?int $laengeErkennungsnummer = null;

    /**
     * Constructor method for Type.StrukturKennzeichenInhalt
     *
     * @uses Type_StrukturKennzeichenInhalt::setLaengeUnterscheidungszeichen()
     * @uses Type_StrukturKennzeichenInhalt::setLaengeErkennungszeichen()
     * @uses Type_StrukturKennzeichenInhalt::setLaengeErkennungsnummer()
     */
    public function __construct(?int $laengeUnterscheidungszeichen = null, ?int $laengeErkennungszeichen = null, ?int $laengeErkennungsnummer = null)
    {
        $this
            ->setLaengeUnterscheidungszeichen($laengeUnterscheidungszeichen)
            ->setLaengeErkennungszeichen($laengeErkennungszeichen)
            ->setLaengeErkennungsnummer($laengeErkennungsnummer);
    }

    /**
     * Get laengeUnterscheidungszeichen value
     */
    public function getLaengeUnterscheidungszeichen(): ?int
    {
        return $this->laengeUnterscheidungszeichen;
    }

    /**
     * Set laengeUnterscheidungszeichen value
     */
    public function setLaengeUnterscheidungszeichen(?int $laengeUnterscheidungszeichen = null): self
    {
        $this->laengeUnterscheidungszeichen = $laengeUnterscheidungszeichen;

        return $this;
    }

    /**
     * Get laengeErkennungszeichen value
     */
    public function getLaengeErkennungszeichen(): ?int
    {
        return $this->laengeErkennungszeichen;
    }

    /**
     * Set laengeErkennungszeichen value
     */
    public function setLaengeErkennungszeichen(?int $laengeErkennungszeichen = null): self
    {
        $this->laengeErkennungszeichen = $laengeErkennungszeichen;

        return $this;
    }

    /**
     * Get laengeErkennungsnummer value
     */
    public function getLaengeErkennungsnummer(): ?int
    {
        return $this->laengeErkennungsnummer;
    }

    /**
     * Set laengeErkennungsnummer value
     */
    public function setLaengeErkennungsnummer(?int $laengeErkennungsnummer = null): self
    {
        $this->laengeErkennungsnummer = $laengeErkennungsnummer;

        return $this;
    }
}
