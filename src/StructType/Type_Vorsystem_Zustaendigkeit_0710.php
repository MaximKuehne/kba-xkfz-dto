<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.Zustaendigkeit.0710 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_Zustaendigkeit_0710 extends AbstractStructBase
{
    /**
     * The referenzElektronischerAntragMitZustaendigkeit
     * @var \THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit|null
     */
    public ?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit $referenzElektronischerAntragMitZustaendigkeit = null;
    /**
     * Constructor method for Type.Vorsystem.Zustaendigkeit.0710
     * @uses Type_Vorsystem_Zustaendigkeit_0710::setReferenzElektronischerAntragMitZustaendigkeit()
     * @param \THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit $referenzElektronischerAntragMitZustaendigkeit
     */
    public function __construct(?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit $referenzElektronischerAntragMitZustaendigkeit = null)
    {
        $this
            ->setReferenzElektronischerAntragMitZustaendigkeit($referenzElektronischerAntragMitZustaendigkeit);
    }
    /**
     * Get referenzElektronischerAntragMitZustaendigkeit value
     * @return \THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit|null
     */
    public function getReferenzElektronischerAntragMitZustaendigkeit(): ?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit
    {
        return $this->referenzElektronischerAntragMitZustaendigkeit;
    }
    /**
     * Set referenzElektronischerAntragMitZustaendigkeit value
     * @param \THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit $referenzElektronischerAntragMitZustaendigkeit
     * @return \THAG\XKfz\StructType\Type_Vorsystem_Zustaendigkeit_0710
     */
    public function setReferenzElektronischerAntragMitZustaendigkeit(?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit $referenzElektronischerAntragMitZustaendigkeit = null): self
    {
        $this->referenzElektronischerAntragMitZustaendigkeit = $referenzElektronischerAntragMitZustaendigkeit;
        
        return $this;
    }
}
