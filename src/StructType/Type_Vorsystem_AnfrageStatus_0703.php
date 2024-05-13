<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.AnfrageStatus.0703 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_AnfrageStatus_0703 extends AbstractStructBase
{
    /**
     * The referenzElektronischerAntrag
     */
    public ?\THAG\XKfz\StructType\ReferenzElektronischerAntrag $referenzElektronischerAntrag = null;

    /**
     * The dokument
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null;

    /**
     * Constructor method for Type.Vorsystem.AnfrageStatus.0703
     *
     * @uses Type_Vorsystem_AnfrageStatus_0703::setReferenzElektronischerAntrag()
     * @uses Type_Vorsystem_AnfrageStatus_0703::setDokument()
     */
    public function __construct(?\THAG\XKfz\StructType\ReferenzElektronischerAntrag $referenzElektronischerAntrag = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null)
    {
        $this
            ->setReferenzElektronischerAntrag($referenzElektronischerAntrag)
            ->setDokument($dokument);
    }

    /**
     * Get referenzElektronischerAntrag value
     */
    public function getReferenzElektronischerAntrag(): ?\THAG\XKfz\StructType\ReferenzElektronischerAntrag
    {
        return $this->referenzElektronischerAntrag;
    }

    /**
     * Set referenzElektronischerAntrag value
     */
    public function setReferenzElektronischerAntrag(?\THAG\XKfz\StructType\ReferenzElektronischerAntrag $referenzElektronischerAntrag = null): self
    {
        $this->referenzElektronischerAntrag = $referenzElektronischerAntrag;

        return $this;
    }

    /**
     * Get dokument value
     */
    public function getDokument(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument
    {
        return $this->dokument;
    }

    /**
     * Set dokument value
     */
    public function setDokument(?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null): self
    {
        $this->dokument = $dokument;

        return $this;
    }
}
