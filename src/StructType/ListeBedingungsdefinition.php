<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBedingungsdefinition StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBedingungsdefinition extends AbstractStructBase
{
    /**
     * The Bedingungsdefinition
     * @var \THAG\XKfz\StructType\Bedingungsdefinition|null
     */
    public ?\THAG\XKfz\StructType\Bedingungsdefinition $Bedingungsdefinition = null;
    /**
     * Constructor method for ListeBedingungsdefinition
     * @uses ListeBedingungsdefinition::setBedingungsdefinition()
     * @param \THAG\XKfz\StructType\Bedingungsdefinition $bedingungsdefinition
     */
    public function __construct(?\THAG\XKfz\StructType\Bedingungsdefinition $bedingungsdefinition = null)
    {
        $this
            ->setBedingungsdefinition($bedingungsdefinition);
    }
    /**
     * Get Bedingungsdefinition value
     * @return \THAG\XKfz\StructType\Bedingungsdefinition|null
     */
    public function getBedingungsdefinition(): ?\THAG\XKfz\StructType\Bedingungsdefinition
    {
        return $this->Bedingungsdefinition;
    }
    /**
     * Set Bedingungsdefinition value
     * @param \THAG\XKfz\StructType\Bedingungsdefinition $bedingungsdefinition
     * @return \THAG\XKfz\StructType\ListeBedingungsdefinition
     */
    public function setBedingungsdefinition(?\THAG\XKfz\StructType\Bedingungsdefinition $bedingungsdefinition = null): self
    {
        $this->Bedingungsdefinition = $bedingungsdefinition;
        
        return $this;
    }
}
