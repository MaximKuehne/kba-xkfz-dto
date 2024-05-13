<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.Status.0706 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_Status_0706 extends AbstractStructBase
{
    /**
     * The referenzElektronischerAntragMitStatus
     */
    public ?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus = null;

    /**
     * The quittung
     */
    public ?\THAG\XKfz\StructType\Type_XKfzQuittung $quittung = null;

    /**
     * Constructor method for Type.Vorsystem.Status.0706
     *
     * @uses Type_Vorsystem_Status_0706::setReferenzElektronischerAntragMitStatus()
     * @uses Type_Vorsystem_Status_0706::setQuittung()
     */
    public function __construct(?\THAG\XKfz\StructType\ReferenzElektronischerAntragMitStatus $referenzElektronischerAntragMitStatus = null, ?\THAG\XKfz\StructType\Type_XKfzQuittung $quittung = null)
    {
        $this
            ->setReferenzElektronischerAntragMitStatus($referenzElektronischerAntragMitStatus)
            ->setQuittung($quittung);
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
     * Get quittung value
     */
    public function getQuittung(): ?\THAG\XKfz\StructType\Type_XKfzQuittung
    {
        return $this->quittung;
    }

    /**
     * Set quittung value
     */
    public function setQuittung(?\THAG\XKfz\StructType\Type_XKfzQuittung $quittung = null): self
    {
        $this->quittung = $quittung;

        return $this;
    }
}
