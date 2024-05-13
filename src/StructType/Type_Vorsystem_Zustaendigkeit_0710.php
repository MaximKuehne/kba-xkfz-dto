<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.Zustaendigkeit.0710 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_Zustaendigkeit_0710 extends AbstractStructBase
{
    /**
     * The referenzElektronischerAntragMitZustaendigkeit
     */
    public ?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit $referenzElektronischerAntragMitZustaendigkeit = null;

    /**
     * Constructor method for Type.Vorsystem.Zustaendigkeit.0710
     *
     * @uses Type_Vorsystem_Zustaendigkeit_0710::setReferenzElektronischerAntragMitZustaendigkeit()
     */
    public function __construct(?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit $referenzElektronischerAntragMitZustaendigkeit = null)
    {
        $this
            ->setReferenzElektronischerAntragMitZustaendigkeit($referenzElektronischerAntragMitZustaendigkeit);
    }

    /**
     * Get referenzElektronischerAntragMitZustaendigkeit value
     */
    public function getReferenzElektronischerAntragMitZustaendigkeit(): ?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit
    {
        return $this->referenzElektronischerAntragMitZustaendigkeit;
    }

    /**
     * Set referenzElektronischerAntragMitZustaendigkeit value
     */
    public function setReferenzElektronischerAntragMitZustaendigkeit(?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitZustaendigkeit $referenzElektronischerAntragMitZustaendigkeit = null): self
    {
        $this->referenzElektronischerAntragMitZustaendigkeit = $referenzElektronischerAntragMitZustaendigkeit;

        return $this;
    }
}
