<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBedingung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBedingung extends AbstractStructBase
{
    /**
     * The Bedingung
     * @var string|null
     */
    public ?string $Bedingung = null;
    /**
     * Constructor method for ListeBedingung
     * @uses ListeBedingung::setBedingung()
     * @param string $bedingung
     */
    public function __construct(?string $bedingung = null)
    {
        $this
            ->setBedingung($bedingung);
    }
    /**
     * Get Bedingung value
     * @return string|null
     */
    public function getBedingung(): ?string
    {
        return $this->Bedingung;
    }
    /**
     * Set Bedingung value
     * @param string $bedingung
     * @return \THAG\XKfz\StructType\ListeBedingung
     */
    public function setBedingung(?string $bedingung = null): self
    {
        $this->Bedingung = $bedingung;
        
        return $this;
    }
}
