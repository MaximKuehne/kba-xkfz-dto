<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFelddefinition StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFelddefinition extends AbstractStructBase
{
    /**
     * The Felddefinition
     */
    public ?\THAG\XKfz\StructType\Felddefinition $Felddefinition = null;

    /**
     * Constructor method for ListeFelddefinition
     *
     * @uses ListeFelddefinition::setFelddefinition()
     */
    public function __construct(?\THAG\XKfz\StructType\Felddefinition $felddefinition = null)
    {
        $this
            ->setFelddefinition($felddefinition);
    }

    /**
     * Get Felddefinition value
     */
    public function getFelddefinition(): ?\THAG\XKfz\StructType\Felddefinition
    {
        return $this->Felddefinition;
    }

    /**
     * Set Felddefinition value
     */
    public function setFelddefinition(?\THAG\XKfz\StructType\Felddefinition $felddefinition = null): self
    {
        $this->Felddefinition = $felddefinition;

        return $this;
    }
}
