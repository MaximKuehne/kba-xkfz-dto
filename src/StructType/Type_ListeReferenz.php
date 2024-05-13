<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeReferenz StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeReferenz extends AbstractStructBase
{
    /**
     * The referenz
     */
    public ?\THAG\XKfz\StructType\Type_Referenz $referenz = null;

    /**
     * Constructor method for Type.ListeReferenz
     *
     * @uses Type_ListeReferenz::setReferenz()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Referenz $referenz = null)
    {
        $this
            ->setReferenz($referenz);
    }

    /**
     * Get referenz value
     */
    public function getReferenz(): ?\THAG\XKfz\StructType\Type_Referenz
    {
        return $this->referenz;
    }

    /**
     * Set referenz value
     */
    public function setReferenz(?\THAG\XKfz\StructType\Type_Referenz $referenz = null): self
    {
        $this->referenz = $referenz;

        return $this;
    }
}
