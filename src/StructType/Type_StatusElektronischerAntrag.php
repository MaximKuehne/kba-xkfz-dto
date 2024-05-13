<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.StatusElektronischerAntrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_StatusElektronischerAntrag extends AbstractStructBase
{
    /**
     * The statusUebergang
     * @var \THAG\XKfz\StructType\Type_Statusuebergang|null
     */
    public ?\THAG\XKfz\StructType\Type_Statusuebergang $statusUebergang = null;
    /**
     * Constructor method for Type.StatusElektronischerAntrag
     * @uses Type_StatusElektronischerAntrag::setStatusUebergang()
     * @param \THAG\XKfz\StructType\Type_Statusuebergang $statusUebergang
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Statusuebergang $statusUebergang = null)
    {
        $this
            ->setStatusUebergang($statusUebergang);
    }
    /**
     * Get statusUebergang value
     * @return \THAG\XKfz\StructType\Type_Statusuebergang|null
     */
    public function getStatusUebergang(): ?\THAG\XKfz\StructType\Type_Statusuebergang
    {
        return $this->statusUebergang;
    }
    /**
     * Set statusUebergang value
     * @param \THAG\XKfz\StructType\Type_Statusuebergang $statusUebergang
     * @return \THAG\XKfz\StructType\Type_StatusElektronischerAntrag
     */
    public function setStatusUebergang(?\THAG\XKfz\StructType\Type_Statusuebergang $statusUebergang = null): self
    {
        $this->statusUebergang = $statusUebergang;
        
        return $this;
    }
}
