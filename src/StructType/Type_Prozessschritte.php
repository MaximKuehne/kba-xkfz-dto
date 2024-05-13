<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Prozessschritte StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Prozessschritte extends AbstractStructBase
{
    /**
     * The prozessschritt
     */
    public ?\THAG\XKfz\StructType\Type_Prozessschritt $prozessschritt = null;

    /**
     * Constructor method for Type.Prozessschritte
     *
     * @uses Type_Prozessschritte::setProzessschritt()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Prozessschritt $prozessschritt = null)
    {
        $this
            ->setProzessschritt($prozessschritt);
    }

    /**
     * Get prozessschritt value
     */
    public function getProzessschritt(): ?\THAG\XKfz\StructType\Type_Prozessschritt
    {
        return $this->prozessschritt;
    }

    /**
     * Set prozessschritt value
     */
    public function setProzessschritt(?\THAG\XKfz\StructType\Type_Prozessschritt $prozessschritt = null): self
    {
        $this->prozessschritt = $prozessschritt;

        return $this;
    }
}
