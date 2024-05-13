<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Auskunft.Status.0804 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Auskunft_Status_0804 extends AbstractStructBase
{
    /**
     * The statusHalterauskunft
     */
    public ?\THAG\XKfz\StructType\StatusHalterauskunft $statusHalterauskunft = null;

    /**
     * Constructor method for Type.Auskunft.Status.0804
     *
     * @uses Type_Auskunft_Status_0804::setStatusHalterauskunft()
     */
    public function __construct(?\THAG\XKfz\StructType\StatusHalterauskunft $statusHalterauskunft = null)
    {
        $this
            ->setStatusHalterauskunft($statusHalterauskunft);
    }

    /**
     * Get statusHalterauskunft value
     */
    public function getStatusHalterauskunft(): ?\THAG\XKfz\StructType\StatusHalterauskunft
    {
        return $this->statusHalterauskunft;
    }

    /**
     * Set statusHalterauskunft value
     */
    public function setStatusHalterauskunft(?\THAG\XKfz\StructType\StatusHalterauskunft $statusHalterauskunft = null): self
    {
        $this->statusHalterauskunft = $statusHalterauskunft;

        return $this;
    }
}
