<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeReferenz StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeReferenz extends AbstractStructBase
{
    /**
     * The referenz
     * @var \THAG\XKfz\StructType\Type_Referenz|null
     */
    public ?\THAG\XKfz\StructType\Type_Referenz $referenz = null;
    /**
     * Constructor method for Type.ListeReferenz
     * @uses Type_ListeReferenz::setReferenz()
     * @param \THAG\XKfz\StructType\Type_Referenz $referenz
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Referenz $referenz = null)
    {
        $this
            ->setReferenz($referenz);
    }
    /**
     * Get referenz value
     * @return \THAG\XKfz\StructType\Type_Referenz|null
     */
    public function getReferenz(): ?\THAG\XKfz\StructType\Type_Referenz
    {
        return $this->referenz;
    }
    /**
     * Set referenz value
     * @param \THAG\XKfz\StructType\Type_Referenz $referenz
     * @return \THAG\XKfz\StructType\Type_ListeReferenz
     */
    public function setReferenz(?\THAG\XKfz\StructType\Type_Referenz $referenz = null): self
    {
        $this->referenz = $referenz;
        
        return $this;
    }
}
