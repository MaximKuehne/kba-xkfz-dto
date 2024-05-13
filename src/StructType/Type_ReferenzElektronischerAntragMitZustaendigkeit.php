<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ReferenzElektronischerAntragMitZustaendigkeit
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ReferenzElektronischerAntragMitZustaendigkeit extends AbstractStructBase
{
    /**
     * The referenz
     */
    public ?\THAG\XKfz\StructType\Type_Referenz $referenz = null;

    /**
     * The zustaendigkeit
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzZustaendigkeitMitPersonAnschriftUndKontakt $zustaendigkeit = null;

    /**
     * Constructor method for Type.ReferenzElektronischerAntragMitZustaendigkeit
     *
     * @uses Type_ReferenzElektronischerAntragMitZustaendigkeit::setReferenz()
     * @uses Type_ReferenzElektronischerAntragMitZustaendigkeit::setZustaendigkeit()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Referenz $referenz = null, ?\THAG\XKfz\StructType\Type_ReferenzZustaendigkeitMitPersonAnschriftUndKontakt $zustaendigkeit = null)
    {
        $this
            ->setReferenz($referenz)
            ->setZustaendigkeit($zustaendigkeit);
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

    /**
     * Get zustaendigkeit value
     */
    public function getZustaendigkeit(): ?\THAG\XKfz\StructType\Type_ReferenzZustaendigkeitMitPersonAnschriftUndKontakt
    {
        return $this->zustaendigkeit;
    }

    /**
     * Set zustaendigkeit value
     */
    public function setZustaendigkeit(?\THAG\XKfz\StructType\Type_ReferenzZustaendigkeitMitPersonAnschriftUndKontakt $zustaendigkeit = null): self
    {
        $this->zustaendigkeit = $zustaendigkeit;

        return $this;
    }
}
