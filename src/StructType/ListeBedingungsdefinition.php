<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBedingungsdefinition StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBedingungsdefinition extends AbstractStructBase
{
    /**
     * The Bedingungsdefinition
     */
    public ?\THAG\XKfz\StructType\Bedingungsdefinition $Bedingungsdefinition = null;

    /**
     * Constructor method for ListeBedingungsdefinition
     *
     * @uses ListeBedingungsdefinition::setBedingungsdefinition()
     */
    public function __construct(?\THAG\XKfz\StructType\Bedingungsdefinition $bedingungsdefinition = null)
    {
        $this
            ->setBedingungsdefinition($bedingungsdefinition);
    }

    /**
     * Get Bedingungsdefinition value
     */
    public function getBedingungsdefinition(): ?\THAG\XKfz\StructType\Bedingungsdefinition
    {
        return $this->Bedingungsdefinition;
    }

    /**
     * Set Bedingungsdefinition value
     */
    public function setBedingungsdefinition(?\THAG\XKfz\StructType\Bedingungsdefinition $bedingungsdefinition = null): self
    {
        $this->Bedingungsdefinition = $bedingungsdefinition;

        return $this;
    }
}
