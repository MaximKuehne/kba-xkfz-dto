<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Auskunft.Halterauskunft.0802 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Auskunft_Halterauskunft_0802 extends AbstractStructBase
{
    /**
     * The halterauskunft
     * @var \THAG\XKfz\StructType\Halterauskunft|null
     */
    public ?\THAG\XKfz\StructType\Halterauskunft $halterauskunft = null;
    /**
     * Constructor method for Type.Auskunft.Halterauskunft.0802
     * @uses Type_Auskunft_Halterauskunft_0802::setHalterauskunft()
     * @param \THAG\XKfz\StructType\Halterauskunft $halterauskunft
     */
    public function __construct(?\THAG\XKfz\StructType\Halterauskunft $halterauskunft = null)
    {
        $this
            ->setHalterauskunft($halterauskunft);
    }
    /**
     * Get halterauskunft value
     * @return \THAG\XKfz\StructType\Halterauskunft|null
     */
    public function getHalterauskunft(): ?\THAG\XKfz\StructType\Halterauskunft
    {
        return $this->halterauskunft;
    }
    /**
     * Set halterauskunft value
     * @param \THAG\XKfz\StructType\Halterauskunft $halterauskunft
     * @return \THAG\XKfz\StructType\Type_Auskunft_Halterauskunft_0802
     */
    public function setHalterauskunft(?\THAG\XKfz\StructType\Halterauskunft $halterauskunft = null): self
    {
        $this->halterauskunft = $halterauskunft;
        
        return $this;
    }
}
