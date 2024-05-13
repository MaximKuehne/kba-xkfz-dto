<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Unterlagen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Unterlagen extends AbstractStructBase
{
    /**
     * The unterlage
     */
    public ?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null;

    /**
     * Constructor method for Type.Unterlagen
     *
     * @uses Type_Unterlagen::setUnterlage()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null)
    {
        $this
            ->setUnterlage($unterlage);
    }

    /**
     * Get unterlage value
     */
    public function getUnterlage(): ?\THAG\XKfz\StructType\Type_Unterlage
    {
        return $this->unterlage;
    }

    /**
     * Set unterlage value
     */
    public function setUnterlage(?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null): self
    {
        $this->unterlage = $unterlage;

        return $this;
    }
}
