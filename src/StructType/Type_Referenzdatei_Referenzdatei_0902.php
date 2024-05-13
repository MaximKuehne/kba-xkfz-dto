<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Referenzdatei.Referenzdatei.0902 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Referenzdatei_Referenzdatei_0902 extends AbstractStructBase
{
    /**
     * The referenzdatei
     */
    public ?\THAG\XKfz\StructType\Referenzdatei $referenzdatei = null;

    /**
     * Constructor method for Type.Referenzdatei.Referenzdatei.0902
     *
     * @uses Type_Referenzdatei_Referenzdatei_0902::setReferenzdatei()
     */
    public function __construct(?\THAG\XKfz\StructType\Referenzdatei $referenzdatei = null)
    {
        $this
            ->setReferenzdatei($referenzdatei);
    }

    /**
     * Get referenzdatei value
     */
    public function getReferenzdatei(): ?\THAG\XKfz\StructType\Referenzdatei
    {
        return $this->referenzdatei;
    }

    /**
     * Set referenzdatei value
     */
    public function setReferenzdatei(?\THAG\XKfz\StructType\Referenzdatei $referenzdatei = null): self
    {
        $this->referenzdatei = $referenzdatei;

        return $this;
    }
}
