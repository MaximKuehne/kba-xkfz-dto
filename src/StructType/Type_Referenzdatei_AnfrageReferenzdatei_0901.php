<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Referenzdatei.AnfrageReferenzdatei.0901 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Referenzdatei_AnfrageReferenzdatei_0901 extends AbstractStructBase
{
    /**
     * The referenzdateiAnfragen
     */
    public ?\THAG\XKfz\StructType\ReferenzdateiAnfragen $referenzdateiAnfragen = null;

    /**
     * Constructor method for Type.Referenzdatei.AnfrageReferenzdatei.0901
     *
     * @uses Type_Referenzdatei_AnfrageReferenzdatei_0901::setReferenzdateiAnfragen()
     */
    public function __construct(?\THAG\XKfz\StructType\ReferenzdateiAnfragen $referenzdateiAnfragen = null)
    {
        $this
            ->setReferenzdateiAnfragen($referenzdateiAnfragen);
    }

    /**
     * Get referenzdateiAnfragen value
     */
    public function getReferenzdateiAnfragen(): ?\THAG\XKfz\StructType\ReferenzdateiAnfragen
    {
        return $this->referenzdateiAnfragen;
    }

    /**
     * Set referenzdateiAnfragen value
     */
    public function setReferenzdateiAnfragen(?\THAG\XKfz\StructType\ReferenzdateiAnfragen $referenzdateiAnfragen = null): self
    {
        $this->referenzdateiAnfragen = $referenzdateiAnfragen;

        return $this;
    }
}
