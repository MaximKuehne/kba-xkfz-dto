<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Auskunft.AnfrageHalterauskunft.0801 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Auskunft_AnfrageHalterauskunft_0801 extends AbstractStructBase
{
    /**
     * The halterauskunftAnfragen
     * @var \THAG\XKfz\StructType\HalterauskunftAnfragen|null
     */
    public ?\THAG\XKfz\StructType\HalterauskunftAnfragen $halterauskunftAnfragen = null;
    /**
     * Constructor method for Type.Auskunft.AnfrageHalterauskunft.0801
     * @uses Type_Auskunft_AnfrageHalterauskunft_0801::setHalterauskunftAnfragen()
     * @param \THAG\XKfz\StructType\HalterauskunftAnfragen $halterauskunftAnfragen
     */
    public function __construct(?\THAG\XKfz\StructType\HalterauskunftAnfragen $halterauskunftAnfragen = null)
    {
        $this
            ->setHalterauskunftAnfragen($halterauskunftAnfragen);
    }
    /**
     * Get halterauskunftAnfragen value
     * @return \THAG\XKfz\StructType\HalterauskunftAnfragen|null
     */
    public function getHalterauskunftAnfragen(): ?\THAG\XKfz\StructType\HalterauskunftAnfragen
    {
        return $this->halterauskunftAnfragen;
    }
    /**
     * Set halterauskunftAnfragen value
     * @param \THAG\XKfz\StructType\HalterauskunftAnfragen $halterauskunftAnfragen
     * @return \THAG\XKfz\StructType\Type_Auskunft_AnfrageHalterauskunft_0801
     */
    public function setHalterauskunftAnfragen(?\THAG\XKfz\StructType\HalterauskunftAnfragen $halterauskunftAnfragen = null): self
    {
        $this->halterauskunftAnfragen = $halterauskunftAnfragen;
        
        return $this;
    }
}
