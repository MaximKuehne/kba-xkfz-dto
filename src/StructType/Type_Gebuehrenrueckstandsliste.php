<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehrenrueckstandsliste StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehrenrueckstandsliste extends AbstractStructBase
{
    /**
     * The anzahlGebuehrenrueckstand
     */
    public ?int $anzahlGebuehrenrueckstand = null;

    /**
     * The gebuehrenrueckstand
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstand $gebuehrenrueckstand = null;

    /**
     * Constructor method for Type.Gebuehrenrueckstandsliste
     *
     * @uses Type_Gebuehrenrueckstandsliste::setAnzahlGebuehrenrueckstand()
     * @uses Type_Gebuehrenrueckstandsliste::setGebuehrenrueckstand()
     */
    public function __construct(?int $anzahlGebuehrenrueckstand = null, ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstand $gebuehrenrueckstand = null)
    {
        $this
            ->setAnzahlGebuehrenrueckstand($anzahlGebuehrenrueckstand)
            ->setGebuehrenrueckstand($gebuehrenrueckstand);
    }

    /**
     * Get anzahlGebuehrenrueckstand value
     */
    public function getAnzahlGebuehrenrueckstand(): ?int
    {
        return $this->anzahlGebuehrenrueckstand;
    }

    /**
     * Set anzahlGebuehrenrueckstand value
     */
    public function setAnzahlGebuehrenrueckstand(?int $anzahlGebuehrenrueckstand = null): self
    {
        $this->anzahlGebuehrenrueckstand = $anzahlGebuehrenrueckstand;

        return $this;
    }

    /**
     * Get gebuehrenrueckstand value
     */
    public function getGebuehrenrueckstand(): ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstand
    {
        return $this->gebuehrenrueckstand;
    }

    /**
     * Set gebuehrenrueckstand value
     */
    public function setGebuehrenrueckstand(?\THAG\XKfz\StructType\Type_Gebuehrenrueckstand $gebuehrenrueckstand = null): self
    {
        $this->gebuehrenrueckstand = $gebuehrenrueckstand;

        return $this;
    }
}
