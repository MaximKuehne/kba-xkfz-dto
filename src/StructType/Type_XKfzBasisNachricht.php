<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzBasisNachricht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzBasisNachricht extends AbstractStructBase
{
    /**
     * The kopf
     */
    public ?\THAG\XKfz\StructType\Type_Nachrichtenkopf $kopf = null;

    /**
     * Constructor method for Type.XKfzBasisNachricht
     *
     * @uses Type_XKfzBasisNachricht::setKopf()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Nachrichtenkopf $kopf = null)
    {
        $this
            ->setKopf($kopf);
    }

    /**
     * Get kopf value
     */
    public function getKopf(): ?\THAG\XKfz\StructType\Type_Nachrichtenkopf
    {
        return $this->kopf;
    }

    /**
     * Set kopf value
     */
    public function setKopf(?\THAG\XKfz\StructType\Type_Nachrichtenkopf $kopf = null): self
    {
        $this->kopf = $kopf;

        return $this;
    }
}
