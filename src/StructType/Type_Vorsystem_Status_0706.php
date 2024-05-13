<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.Status.0706 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_Status_0706 extends AbstractStructBase
{
    /**
     * The referenzElektronischerAntragMitStatus
     * @var \THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus|null
     */
    public ?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus = null;
    /**
     * The quittung
     * @var \THAG\XKfz\StructType\Type_XKfzQuittung|null
     */
    public ?\THAG\XKfz\StructType\Type_XKfzQuittung $quittung = null;
    /**
     * Constructor method for Type.Vorsystem.Status.0706
     * @uses Type_Vorsystem_Status_0706::setReferenzElektronischerAntragMitStatus()
     * @uses Type_Vorsystem_Status_0706::setQuittung()
     * @param \THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus
     * @param \THAG\XKfz\StructType\Type_XKfzQuittung $quittung
     */
    public function __construct(?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus = null, ?\THAG\XKfz\StructType\Type_XKfzQuittung $quittung = null)
    {
        $this
            ->setReferenzElektronischerAntragMitStatus($referenzElektronischerAntragMitStatus)
            ->setQuittung($quittung);
    }
    /**
     * Get referenzElektronischerAntragMitStatus value
     * @return \THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus|null
     */
    public function getReferenzElektronischerAntragMitStatus(): ?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus
    {
        return $this->referenzElektronischerAntragMitStatus;
    }
    /**
     * Set referenzElektronischerAntragMitStatus value
     * @param \THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus
     * @return \THAG\XKfz\StructType\Type_Vorsystem_Status_0706
     */
    public function setReferenzElektronischerAntragMitStatus(?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus = null): self
    {
        $this->referenzElektronischerAntragMitStatus = $referenzElektronischerAntragMitStatus;
        
        return $this;
    }
    /**
     * Get quittung value
     * @return \THAG\XKfz\StructType\Type_XKfzQuittung|null
     */
    public function getQuittung(): ?\THAG\XKfz\StructType\Type_XKfzQuittung
    {
        return $this->quittung;
    }
    /**
     * Set quittung value
     * @param \THAG\XKfz\StructType\Type_XKfzQuittung $quittung
     * @return \THAG\XKfz\StructType\Type_Vorsystem_Status_0706
     */
    public function setQuittung(?\THAG\XKfz\StructType\Type_XKfzQuittung $quittung = null): self
    {
        $this->quittung = $quittung;
        
        return $this;
    }
}
