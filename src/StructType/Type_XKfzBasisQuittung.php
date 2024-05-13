<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzBasisQuittung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzBasisQuittung extends AbstractStructBase
{
    /**
     * The kopf
     */
    public ?\THAG\XKfz\StructType\Type_Quittungskopf $kopf = null;

    /**
     * Constructor method for Type.XKfzBasisQuittung
     *
     * @uses Type_XKfzBasisQuittung::setKopf()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Quittungskopf $kopf = null)
    {
        $this
            ->setKopf($kopf);
    }

    /**
     * Get kopf value
     */
    public function getKopf(): ?\THAG\XKfz\StructType\Type_Quittungskopf
    {
        return $this->kopf;
    }

    /**
     * Set kopf value
     */
    public function setKopf(?\THAG\XKfz\StructType\Type_Quittungskopf $kopf = null): self
    {
        $this->kopf = $kopf;

        return $this;
    }
}
