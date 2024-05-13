<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Anhaengerverzeichnis StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Anhaengerverzeichnis extends AbstractStructBase
{
    /**
     * The HinweisAusstellung
     */
    public ?bool $HinweisAusstellung = null;

    /**
     * The DatumAusstellung
     */
    public ?string $DatumAusstellung = null;

    /**
     * Constructor method for Anhaengerverzeichnis
     *
     * @uses Anhaengerverzeichnis::setHinweisAusstellung()
     * @uses Anhaengerverzeichnis::setDatumAusstellung()
     */
    public function __construct(?bool $hinweisAusstellung = null, ?string $datumAusstellung = null)
    {
        $this
            ->setHinweisAusstellung($hinweisAusstellung)
            ->setDatumAusstellung($datumAusstellung);
    }

    /**
     * Get HinweisAusstellung value
     */
    public function getHinweisAusstellung(): ?bool
    {
        return $this->HinweisAusstellung;
    }

    /**
     * Set HinweisAusstellung value
     */
    public function setHinweisAusstellung(?bool $hinweisAusstellung = null): self
    {
        $this->HinweisAusstellung = $hinweisAusstellung;

        return $this;
    }

    /**
     * Get DatumAusstellung value
     */
    public function getDatumAusstellung(): ?string
    {
        return $this->DatumAusstellung;
    }

    /**
     * Set DatumAusstellung value
     */
    public function setDatumAusstellung(?string $datumAusstellung = null): self
    {
        $this->DatumAusstellung = $datumAusstellung;

        return $this;
    }
}
