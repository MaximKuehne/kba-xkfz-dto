<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeReversierungVU StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeReversierungVU extends AbstractStructBase
{
    /**
     * The ReversierungVU
     */
    public ?\THAG\XKfz\StructType\ReversierungVU $ReversierungVU = null;

    /**
     * Constructor method for ListeReversierungVU
     *
     * @uses ListeReversierungVU::setReversierungVU()
     */
    public function __construct(?\THAG\XKfz\StructType\ReversierungVU $reversierungVU = null)
    {
        $this
            ->setReversierungVU($reversierungVU);
    }

    /**
     * Get ReversierungVU value
     */
    public function getReversierungVU(): ?\THAG\XKfz\StructType\ReversierungVU
    {
        return $this->ReversierungVU;
    }

    /**
     * Set ReversierungVU value
     */
    public function setReversierungVU(?\THAG\XKfz\StructType\ReversierungVU $reversierungVU = null): self
    {
        $this->ReversierungVU = $reversierungVU;

        return $this;
    }
}
