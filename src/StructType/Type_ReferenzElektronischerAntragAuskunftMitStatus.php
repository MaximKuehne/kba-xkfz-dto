<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ReferenzElektronischerAntragAuskunftMitStatus
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ReferenzElektronischerAntragAuskunftMitStatus extends AbstractStructBase
{
    /**
     * The referenz
     * @var \THAG\XKfz\StructType\Type_Referenz|null
     */
    public ?\THAG\XKfz\StructType\Type_Referenz $referenz = null;
    /**
     * The status
     * @var \THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft|null
     */
    public ?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status = null;
    /**
     * Constructor method for Type.ReferenzElektronischerAntragAuskunftMitStatus
     * @uses Type_ReferenzElektronischerAntragAuskunftMitStatus::setReferenz()
     * @uses Type_ReferenzElektronischerAntragAuskunftMitStatus::setStatus()
     * @param \THAG\XKfz\StructType\Type_Referenz $referenz
     * @param \THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Referenz $referenz = null, ?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status = null)
    {
        $this
            ->setReferenz($referenz)
            ->setStatus($status);
    }
    /**
     * Get referenz value
     * @return \THAG\XKfz\StructType\Type_Referenz|null
     */
    public function getReferenz(): ?\THAG\XKfz\StructType\Type_Referenz
    {
        return $this->referenz;
    }
    /**
     * Set referenz value
     * @param \THAG\XKfz\StructType\Type_Referenz $referenz
     * @return \THAG\XKfz\StructType\Type_ReferenzElektronischerAntragAuskunftMitStatus
     */
    public function setReferenz(?\THAG\XKfz\StructType\Type_Referenz $referenz = null): self
    {
        $this->referenz = $referenz;
        
        return $this;
    }
    /**
     * Get status value
     * @return \THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft|null
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status
     * @return \THAG\XKfz\StructType\Type_ReferenzElektronischerAntragAuskunftMitStatus
     */
    public function setStatus(?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
}
