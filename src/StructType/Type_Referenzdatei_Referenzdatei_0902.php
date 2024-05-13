<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Referenzdatei.Referenzdatei.0902 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Referenzdatei_Referenzdatei_0902 extends AbstractStructBase
{
    /**
     * The referenzdatei
     * @var \THAG\XKfz\StructType\Referenzdatei|null
     */
    public ?\THAG\XKfz\StructType\Referenzdatei $referenzdatei = null;
    /**
     * Constructor method for Type.Referenzdatei.Referenzdatei.0902
     * @uses Type_Referenzdatei_Referenzdatei_0902::setReferenzdatei()
     * @param \THAG\XKfz\StructType\Referenzdatei $referenzdatei
     */
    public function __construct(?\THAG\XKfz\StructType\Referenzdatei $referenzdatei = null)
    {
        $this
            ->setReferenzdatei($referenzdatei);
    }
    /**
     * Get referenzdatei value
     * @return \THAG\XKfz\StructType\Referenzdatei|null
     */
    public function getReferenzdatei(): ?\THAG\XKfz\StructType\Referenzdatei
    {
        return $this->referenzdatei;
    }
    /**
     * Set referenzdatei value
     * @param \THAG\XKfz\StructType\Referenzdatei $referenzdatei
     * @return \THAG\XKfz\StructType\Type_Referenzdatei_Referenzdatei_0902
     */
    public function setReferenzdatei(?\THAG\XKfz\StructType\Referenzdatei $referenzdatei = null): self
    {
        $this->referenzdatei = $referenzdatei;
        
        return $this;
    }
}
