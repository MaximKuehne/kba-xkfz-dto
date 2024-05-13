<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.AnfrageStatus.0703 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_AnfrageStatus_0703 extends AbstractStructBase
{
    /**
     * The referenzElektronischerAntrag
     * @var \THAG\XKfz\StructType\ReferenzElektronischerAntrag|null
     */
    public ?\THAG\XKfz\StructType\ReferenzElektronischerAntrag $referenzElektronischerAntrag = null;
    /**
     * The dokument
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteDokument|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null;
    /**
     * Constructor method for Type.Vorsystem.AnfrageStatus.0703
     * @uses Type_Vorsystem_AnfrageStatus_0703::setReferenzElektronischerAntrag()
     * @uses Type_Vorsystem_AnfrageStatus_0703::setDokument()
     * @param \THAG\XKfz\StructType\ReferenzElektronischerAntrag $referenzElektronischerAntrag
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument
     */
    public function __construct(?\THAG\XKfz\StructType\ReferenzElektronischerAntrag $referenzElektronischerAntrag = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null)
    {
        $this
            ->setReferenzElektronischerAntrag($referenzElektronischerAntrag)
            ->setDokument($dokument);
    }
    /**
     * Get referenzElektronischerAntrag value
     * @return \THAG\XKfz\StructType\ReferenzElektronischerAntrag|null
     */
    public function getReferenzElektronischerAntrag(): ?\THAG\XKfz\StructType\ReferenzElektronischerAntrag
    {
        return $this->referenzElektronischerAntrag;
    }
    /**
     * Set referenzElektronischerAntrag value
     * @param \THAG\XKfz\StructType\ReferenzElektronischerAntrag $referenzElektronischerAntrag
     * @return \THAG\XKfz\StructType\Type_Vorsystem_AnfrageStatus_0703
     */
    public function setReferenzElektronischerAntrag(?\THAG\XKfz\StructType\ReferenzElektronischerAntrag $referenzElektronischerAntrag = null): self
    {
        $this->referenzElektronischerAntrag = $referenzElektronischerAntrag;
        
        return $this;
    }
    /**
     * Get dokument value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteDokument|null
     */
    public function getDokument(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument
    {
        return $this->dokument;
    }
    /**
     * Set dokument value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument
     * @return \THAG\XKfz\StructType\Type_Vorsystem_AnfrageStatus_0703
     */
    public function setDokument(?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null): self
    {
        $this->dokument = $dokument;
        
        return $this;
    }
}
