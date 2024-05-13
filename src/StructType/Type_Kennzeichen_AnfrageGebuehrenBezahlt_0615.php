<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.AnfrageGebuehrenBezahlt.0615 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageGebuehrenBezahlt_0615 extends AbstractStructBase
{
    /**
     * The gebuehrenBezahlt
     * @var \THAG\XKfz\StructType\GebuehrenBezahlt|null
     */
    public ?\THAG\XKfz\StructType\GebuehrenBezahlt $gebuehrenBezahlt = null;
    /**
     * Constructor method for Type.Kennzeichen.AnfrageGebuehrenBezahlt.0615
     * @uses Type_Kennzeichen_AnfrageGebuehrenBezahlt_0615::setGebuehrenBezahlt()
     * @param \THAG\XKfz\StructType\GebuehrenBezahlt $gebuehrenBezahlt
     */
    public function __construct(?\THAG\XKfz\StructType\GebuehrenBezahlt $gebuehrenBezahlt = null)
    {
        $this
            ->setGebuehrenBezahlt($gebuehrenBezahlt);
    }
    /**
     * Get gebuehrenBezahlt value
     * @return \THAG\XKfz\StructType\GebuehrenBezahlt|null
     */
    public function getGebuehrenBezahlt(): ?\THAG\XKfz\StructType\GebuehrenBezahlt
    {
        return $this->gebuehrenBezahlt;
    }
    /**
     * Set gebuehrenBezahlt value
     * @param \THAG\XKfz\StructType\GebuehrenBezahlt $gebuehrenBezahlt
     * @return \THAG\XKfz\StructType\Type_Kennzeichen_AnfrageGebuehrenBezahlt_0615
     */
    public function setGebuehrenBezahlt(?\THAG\XKfz\StructType\GebuehrenBezahlt $gebuehrenBezahlt = null): self
    {
        $this->gebuehrenBezahlt = $gebuehrenBezahlt;
        
        return $this;
    }
}
