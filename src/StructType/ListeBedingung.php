<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBedingung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBedingung extends AbstractStructBase
{
    /**
     * The Bedingung
     */
    public ?string $Bedingung = null;

    /**
     * Constructor method for ListeBedingung
     *
     * @uses ListeBedingung::setBedingung()
     */
    public function __construct(?string $bedingung = null)
    {
        $this
            ->setBedingung($bedingung);
    }

    /**
     * Get Bedingung value
     */
    public function getBedingung(): ?string
    {
        return $this->Bedingung;
    }

    /**
     * Set Bedingung value
     */
    public function setBedingung(?string $bedingung = null): self
    {
        $this->Bedingung = $bedingung;

        return $this;
    }
}
