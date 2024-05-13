<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Unterlagen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Unterlagen extends AbstractStructBase
{
    /**
     * The unterlage
     * @var \THAG\XKfz\StructType\Type_Unterlage|null
     */
    public ?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null;
    /**
     * Constructor method for Type.Unterlagen
     * @uses Type_Unterlagen::setUnterlage()
     * @param \THAG\XKfz\StructType\Type_Unterlage $unterlage
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null)
    {
        $this
            ->setUnterlage($unterlage);
    }
    /**
     * Get unterlage value
     * @return \THAG\XKfz\StructType\Type_Unterlage|null
     */
    public function getUnterlage(): ?\THAG\XKfz\StructType\Type_Unterlage
    {
        return $this->unterlage;
    }
    /**
     * Set unterlage value
     * @param \THAG\XKfz\StructType\Type_Unterlage $unterlage
     * @return \THAG\XKfz\StructType\Type_Unterlagen
     */
    public function setUnterlage(?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null): self
    {
        $this->unterlage = $unterlage;
        
        return $this;
    }
}
