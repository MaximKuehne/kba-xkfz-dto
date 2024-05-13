<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeReversierungVM StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeReversierungVM extends AbstractStructBase
{
    /**
     * The ReversierungVM
     */
    public ?\THAG\XKfz\StructType\ReversierungVM $ReversierungVM = null;

    /**
     * Constructor method for ListeReversierungVM
     *
     * @uses ListeReversierungVM::setReversierungVM()
     */
    public function __construct(?\THAG\XKfz\StructType\ReversierungVM $reversierungVM = null)
    {
        $this
            ->setReversierungVM($reversierungVM);
    }

    /**
     * Get ReversierungVM value
     */
    public function getReversierungVM(): ?\THAG\XKfz\StructType\ReversierungVM
    {
        return $this->ReversierungVM;
    }

    /**
     * Set ReversierungVM value
     */
    public function setReversierungVM(?\THAG\XKfz\StructType\ReversierungVM $reversierungVM = null): self
    {
        $this->ReversierungVM = $reversierungVM;

        return $this;
    }
}
