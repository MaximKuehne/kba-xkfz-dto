<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Auskunft.AnfrageStatus.0803 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Auskunft_AnfrageStatus_0803 extends AbstractStructBase
{
    /**
     * The statusHalterauskunftAnfragen
     * @var \THAG\XKfz\StructType\StatusHalterauskunftAnfragen|null
     */
    public ?\THAG\XKfz\StructType\StatusHalterauskunftAnfragen $statusHalterauskunftAnfragen = null;
    /**
     * Constructor method for Type.Auskunft.AnfrageStatus.0803
     * @uses Type_Auskunft_AnfrageStatus_0803::setStatusHalterauskunftAnfragen()
     * @param \THAG\XKfz\StructType\StatusHalterauskunftAnfragen $statusHalterauskunftAnfragen
     */
    public function __construct(?\THAG\XKfz\StructType\StatusHalterauskunftAnfragen $statusHalterauskunftAnfragen = null)
    {
        $this
            ->setStatusHalterauskunftAnfragen($statusHalterauskunftAnfragen);
    }
    /**
     * Get statusHalterauskunftAnfragen value
     * @return \THAG\XKfz\StructType\StatusHalterauskunftAnfragen|null
     */
    public function getStatusHalterauskunftAnfragen(): ?\THAG\XKfz\StructType\StatusHalterauskunftAnfragen
    {
        return $this->statusHalterauskunftAnfragen;
    }
    /**
     * Set statusHalterauskunftAnfragen value
     * @param \THAG\XKfz\StructType\StatusHalterauskunftAnfragen $statusHalterauskunftAnfragen
     * @return \THAG\XKfz\StructType\Type_Auskunft_AnfrageStatus_0803
     */
    public function setStatusHalterauskunftAnfragen(?\THAG\XKfz\StructType\StatusHalterauskunftAnfragen $statusHalterauskunftAnfragen = null): self
    {
        $this->statusHalterauskunftAnfragen = $statusHalterauskunftAnfragen;
        
        return $this;
    }
}
