<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzBasisQuittung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzBasisQuittung extends AbstractStructBase
{
    /**
     * The kopf
     * @var \THAG\XKfz\StructType\Type_Quittungskopf|null
     */
    public ?\THAG\XKfz\StructType\Type_Quittungskopf $kopf = null;
    /**
     * Constructor method for Type.XKfzBasisQuittung
     * @uses Type_XKfzBasisQuittung::setKopf()
     * @param \THAG\XKfz\StructType\Type_Quittungskopf $kopf
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Quittungskopf $kopf = null)
    {
        $this
            ->setKopf($kopf);
    }
    /**
     * Get kopf value
     * @return \THAG\XKfz\StructType\Type_Quittungskopf|null
     */
    public function getKopf(): ?\THAG\XKfz\StructType\Type_Quittungskopf
    {
        return $this->kopf;
    }
    /**
     * Set kopf value
     * @param \THAG\XKfz\StructType\Type_Quittungskopf $kopf
     * @return \THAG\XKfz\StructType\Type_XKfzBasisQuittung
     */
    public function setKopf(?\THAG\XKfz\StructType\Type_Quittungskopf $kopf = null): self
    {
        $this->kopf = $kopf;
        
        return $this;
    }
}
