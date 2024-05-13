<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Auskunft.AnfrageHalterauskunft.0801 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Auskunft_AnfrageHalterauskunft_0801 extends AbstractStructBase
{
    /**
     * The halterauskunftAnfragen
     */
    public ?\THAG\XKfz\StructType\HalterauskunftAnfragen $halterauskunftAnfragen = null;

    /**
     * Constructor method for Type.Auskunft.AnfrageHalterauskunft.0801
     *
     * @uses Type_Auskunft_AnfrageHalterauskunft_0801::setHalterauskunftAnfragen()
     */
    public function __construct(?\THAG\XKfz\StructType\HalterauskunftAnfragen $halterauskunftAnfragen = null)
    {
        $this
            ->setHalterauskunftAnfragen($halterauskunftAnfragen);
    }

    /**
     * Get halterauskunftAnfragen value
     */
    public function getHalterauskunftAnfragen(): ?\THAG\XKfz\StructType\HalterauskunftAnfragen
    {
        return $this->halterauskunftAnfragen;
    }

    /**
     * Set halterauskunftAnfragen value
     */
    public function setHalterauskunftAnfragen(?\THAG\XKfz\StructType\HalterauskunftAnfragen $halterauskunftAnfragen = null): self
    {
        $this->halterauskunftAnfragen = $halterauskunftAnfragen;

        return $this;
    }
}
