<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeReversierungVU StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeReversierungVU extends AbstractStructBase
{
    /**
     * The ReversierungVU
     * @var \THAG\XKfz\StructType\ReversierungVU|null
     */
    public ?\THAG\XKfz\StructType\ReversierungVU $ReversierungVU = null;
    /**
     * Constructor method for ListeReversierungVU
     * @uses ListeReversierungVU::setReversierungVU()
     * @param \THAG\XKfz\StructType\ReversierungVU $reversierungVU
     */
    public function __construct(?\THAG\XKfz\StructType\ReversierungVU $reversierungVU = null)
    {
        $this
            ->setReversierungVU($reversierungVU);
    }
    /**
     * Get ReversierungVU value
     * @return \THAG\XKfz\StructType\ReversierungVU|null
     */
    public function getReversierungVU(): ?\THAG\XKfz\StructType\ReversierungVU
    {
        return $this->ReversierungVU;
    }
    /**
     * Set ReversierungVU value
     * @param \THAG\XKfz\StructType\ReversierungVU $reversierungVU
     * @return \THAG\XKfz\StructType\ListeReversierungVU
     */
    public function setReversierungVU(?\THAG\XKfz\StructType\ReversierungVU $reversierungVU = null): self
    {
        $this->ReversierungVU = $reversierungVU;
        
        return $this;
    }
}
