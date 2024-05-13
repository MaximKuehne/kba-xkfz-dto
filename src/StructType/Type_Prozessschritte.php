<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Prozessschritte StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Prozessschritte extends AbstractStructBase
{
    /**
     * The prozessschritt
     * @var \THAG\XKfz\StructType\Type_Prozessschritt|null
     */
    public ?\THAG\XKfz\StructType\Type_Prozessschritt $prozessschritt = null;
    /**
     * Constructor method for Type.Prozessschritte
     * @uses Type_Prozessschritte::setProzessschritt()
     * @param \THAG\XKfz\StructType\Type_Prozessschritt $prozessschritt
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Prozessschritt $prozessschritt = null)
    {
        $this
            ->setProzessschritt($prozessschritt);
    }
    /**
     * Get prozessschritt value
     * @return \THAG\XKfz\StructType\Type_Prozessschritt|null
     */
    public function getProzessschritt(): ?\THAG\XKfz\StructType\Type_Prozessschritt
    {
        return $this->prozessschritt;
    }
    /**
     * Set prozessschritt value
     * @param \THAG\XKfz\StructType\Type_Prozessschritt $prozessschritt
     * @return \THAG\XKfz\StructType\Type_Prozessschritte
     */
    public function setProzessschritt(?\THAG\XKfz\StructType\Type_Prozessschritt $prozessschritt = null): self
    {
        $this->prozessschritt = $prozessschritt;
        
        return $this;
    }
}
