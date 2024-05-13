<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFehlerBei StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFehlerBei extends AbstractStructBase
{
    /**
     * The FehlerBei
     */
    public ?string $FehlerBei = null;

    /**
     * Constructor method for ListeFehlerBei
     *
     * @uses ListeFehlerBei::setFehlerBei()
     */
    public function __construct(?string $fehlerBei = null)
    {
        $this
            ->setFehlerBei($fehlerBei);
    }

    /**
     * Get FehlerBei value
     */
    public function getFehlerBei(): ?string
    {
        return $this->FehlerBei;
    }

    /**
     * Set FehlerBei value
     */
    public function setFehlerBei(?string $fehlerBei = null): self
    {
        $this->FehlerBei = $fehlerBei;

        return $this;
    }
}
