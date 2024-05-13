<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVorgangsart StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVorgangsart extends AbstractStructBase
{
    /**
     * The Vorgangsart
     */
    public ?string $Vorgangsart = null;

    /**
     * Constructor method for ListeVorgangsart
     *
     * @uses ListeVorgangsart::setVorgangsart()
     */
    public function __construct(?string $vorgangsart = null)
    {
        $this
            ->setVorgangsart($vorgangsart);
    }

    /**
     * Get Vorgangsart value
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }

    /**
     * Set Vorgangsart value
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;

        return $this;
    }
}
