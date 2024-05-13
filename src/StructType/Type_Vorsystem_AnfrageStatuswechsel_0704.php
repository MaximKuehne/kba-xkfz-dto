<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.AnfrageStatuswechsel.0704 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_AnfrageStatuswechsel_0704 extends AbstractStructBase
{
    /**
     * The referenzElektronischerAntragMitStatus
     */
    public ?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus = null;

    /**
     * The dokument
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null;

    /**
     * Constructor method for Type.Vorsystem.AnfrageStatuswechsel.0704
     *
     * @uses Type_Vorsystem_AnfrageStatuswechsel_0704::setReferenzElektronischerAntragMitStatus()
     * @uses Type_Vorsystem_AnfrageStatuswechsel_0704::setDokument()
     */
    public function __construct(?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null)
    {
        $this
            ->setReferenzElektronischerAntragMitStatus($referenzElektronischerAntragMitStatus)
            ->setDokument($dokument);
    }

    /**
     * Get referenzElektronischerAntragMitStatus value
     */
    public function getReferenzElektronischerAntragMitStatus(): ?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus
    {
        return $this->referenzElektronischerAntragMitStatus;
    }

    /**
     * Set referenzElektronischerAntragMitStatus value
     */
    public function setReferenzElektronischerAntragMitStatus(?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus = null): self
    {
        $this->referenzElektronischerAntragMitStatus = $referenzElektronischerAntragMitStatus;

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
