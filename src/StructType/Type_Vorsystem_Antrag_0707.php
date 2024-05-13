<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.Antrag.0707 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_Antrag_0707 extends AbstractStructBase
{
    /**
     * The elektronischerAntrag
     */
    public ?\THAG\XKfz\StructType\ElektronischerAntrag $elektronischerAntrag = null;

    /**
     * Constructor method for Type.Vorsystem.Antrag.0707
     *
     * @uses Type_Vorsystem_Antrag_0707::setElektronischerAntrag()
     */
    public function __construct(?\THAG\XKfz\StructType\ElektronischerAntrag $elektronischerAntrag = null)
    {
        $this
            ->setElektronischerAntrag($elektronischerAntrag);
    }

    /**
     * Get elektronischerAntrag value
     */
    public function getElektronischerAntrag(): ?\THAG\XKfz\StructType\ElektronischerAntrag
    {
        return $this->elektronischerAntrag;
    }

    /**
     * Set elektronischerAntrag value
     */
    public function setElektronischerAntrag(?\THAG\XKfz\StructType\ElektronischerAntrag $elektronischerAntrag = null): self
    {
        $this->elektronischerAntrag = $elektronischerAntrag;

        return $this;
    }
}
