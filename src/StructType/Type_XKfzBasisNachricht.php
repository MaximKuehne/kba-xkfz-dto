<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzBasisNachricht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzBasisNachricht extends AbstractStructBase
{
    /**
     * The kopf
     * @var \THAG\XKfz\StructType\Type_Nachrichtenkopf|null
     */
    public ?\THAG\XKfz\StructType\Type_Nachrichtenkopf $kopf = null;
    /**
     * Constructor method for Type.XKfzBasisNachricht
     * @uses Type_XKfzBasisNachricht::setKopf()
     * @param \THAG\XKfz\StructType\Type_Nachrichtenkopf $kopf
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Nachrichtenkopf $kopf = null)
    {
        $this
            ->setKopf($kopf);
    }
    /**
     * Get kopf value
     * @return \THAG\XKfz\StructType\Type_Nachrichtenkopf|null
     */
    public function getKopf(): ?\THAG\XKfz\StructType\Type_Nachrichtenkopf
    {
        return $this->kopf;
    }
    /**
     * Set kopf value
     * @param \THAG\XKfz\StructType\Type_Nachrichtenkopf $kopf
     * @return \THAG\XKfz\StructType\Type_XKfzBasisNachricht
     */
    public function setKopf(?\THAG\XKfz\StructType\Type_Nachrichtenkopf $kopf = null): self
    {
        $this->kopf = $kopf;
        
        return $this;
    }
}
