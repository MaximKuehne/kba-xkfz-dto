<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.StatusElektronischerAntragAuskunft StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_StatusElektronischerAntragAuskunft extends AbstractStructBase
{
    /**
     * The statusUebergang
     * @var \THAG\XKfz\StructType\Type_StatusuebergangAuskunft|null
     */
    public ?\THAG\XKfz\StructType\Type_StatusuebergangAuskunft $statusUebergang = null;
    /**
     * Constructor method for Type.StatusElektronischerAntragAuskunft
     * @uses Type_StatusElektronischerAntragAuskunft::setStatusUebergang()
     * @param \THAG\XKfz\StructType\Type_StatusuebergangAuskunft $statusUebergang
     */
    public function __construct(?\THAG\XKfz\StructType\Type_StatusuebergangAuskunft $statusUebergang = null)
    {
        $this
            ->setStatusUebergang($statusUebergang);
    }
    /**
     * Get statusUebergang value
     * @return \THAG\XKfz\StructType\Type_StatusuebergangAuskunft|null
     */
    public function getStatusUebergang(): ?\THAG\XKfz\StructType\Type_StatusuebergangAuskunft
    {
        return $this->statusUebergang;
    }
    /**
     * Set statusUebergang value
     * @param \THAG\XKfz\StructType\Type_StatusuebergangAuskunft $statusUebergang
     * @return \THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft
     */
    public function setStatusUebergang(?\THAG\XKfz\StructType\Type_StatusuebergangAuskunft $statusUebergang = null): self
    {
        $this->statusUebergang = $statusUebergang;
        
        return $this;
    }
}
