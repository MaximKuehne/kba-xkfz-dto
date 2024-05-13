<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Auskunft.Status.0804 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Auskunft_Status_0804 extends AbstractStructBase
{
    /**
     * The statusHalterauskunft
     * @var \THAG\XKfz\StructType\StatusHalterauskunft|null
     */
    public ?\THAG\XKfz\StructType\StatusHalterauskunft $statusHalterauskunft = null;
    /**
     * Constructor method for Type.Auskunft.Status.0804
     * @uses Type_Auskunft_Status_0804::setStatusHalterauskunft()
     * @param \THAG\XKfz\StructType\StatusHalterauskunft $statusHalterauskunft
     */
    public function __construct(?\THAG\XKfz\StructType\StatusHalterauskunft $statusHalterauskunft = null)
    {
        $this
            ->setStatusHalterauskunft($statusHalterauskunft);
    }
    /**
     * Get statusHalterauskunft value
     * @return \THAG\XKfz\StructType\StatusHalterauskunft|null
     */
    public function getStatusHalterauskunft(): ?\THAG\XKfz\StructType\StatusHalterauskunft
    {
        return $this->statusHalterauskunft;
    }
    /**
     * Set statusHalterauskunft value
     * @param \THAG\XKfz\StructType\StatusHalterauskunft $statusHalterauskunft
     * @return \THAG\XKfz\StructType\Type_Auskunft_Status_0804
     */
    public function setStatusHalterauskunft(?\THAG\XKfz\StructType\StatusHalterauskunft $statusHalterauskunft = null): self
    {
        $this->statusHalterauskunft = $statusHalterauskunft;
        
        return $this;
    }
}
