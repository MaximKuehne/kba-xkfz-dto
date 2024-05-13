<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.StatusuebergangAuskunft StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_StatusuebergangAuskunft extends AbstractStructBase
{
    /**
     * The status
     */
    public ?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status = null;

    /**
     * The zeitpunktDesStatusuebergangs
     */
    public ?string $zeitpunktDesStatusuebergangs = null;

    /**
     * Constructor method for Type.StatusuebergangAuskunft
     *
     * @uses Type_StatusuebergangAuskunft::setStatus()
     * @uses Type_StatusuebergangAuskunft::setZeitpunktDesStatusuebergangs()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status = null, ?string $zeitpunktDesStatusuebergangs = null)
    {
        $this
            ->setStatus($status)
            ->setZeitpunktDesStatusuebergangs($zeitpunktDesStatusuebergangs);
    }

    /**
     * Get status value
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft
    {
        return $this->status;
    }

    /**
     * Set status value
     */
    public function setStatus(?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get zeitpunktDesStatusuebergangs value
     */
    public function getZeitpunktDesStatusuebergangs(): ?string
    {
        return $this->zeitpunktDesStatusuebergangs;
    }

    /**
     * Set zeitpunktDesStatusuebergangs value
     */
    public function setZeitpunktDesStatusuebergangs(?string $zeitpunktDesStatusuebergangs = null): self
    {
        $this->zeitpunktDesStatusuebergangs = $zeitpunktDesStatusuebergangs;

        return $this;
    }
}
