<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.AnfrageGebuehrenBezahlt.0615 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageGebuehrenBezahlt_0615 extends AbstractStructBase
{
    /**
     * The gebuehrenBezahlt
     */
    public ?\THAG\XKfz\StructType\GebuehrenBezahlt $gebuehrenBezahlt = null;

    /**
     * Constructor method for Type.Kennzeichen.AnfrageGebuehrenBezahlt.0615
     *
     * @uses Type_Kennzeichen_AnfrageGebuehrenBezahlt_0615::setGebuehrenBezahlt()
     */
    public function __construct(?\THAG\XKfz\StructType\GebuehrenBezahlt $gebuehrenBezahlt = null)
    {
        $this
            ->setGebuehrenBezahlt($gebuehrenBezahlt);
    }

    /**
     * Get gebuehrenBezahlt value
     */
    public function getGebuehrenBezahlt(): ?\THAG\XKfz\StructType\GebuehrenBezahlt
    {
        return $this->gebuehrenBezahlt;
    }

    /**
     * Set gebuehrenBezahlt value
     */
    public function setGebuehrenBezahlt(?\THAG\XKfz\StructType\GebuehrenBezahlt $gebuehrenBezahlt = null): self
    {
        $this->gebuehrenBezahlt = $gebuehrenBezahlt;

        return $this;
    }
}
