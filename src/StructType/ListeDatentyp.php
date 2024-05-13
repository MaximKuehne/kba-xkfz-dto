<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeDatentyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeDatentyp extends AbstractStructBase
{
    /**
     * The Datentyp
     * @var \THAG\XKfz\StructType\Datentyp|null
     */
    public ?\THAG\XKfz\StructType\Datentyp $Datentyp = null;
    /**
     * Constructor method for ListeDatentyp
     * @uses ListeDatentyp::setDatentyp()
     * @param \THAG\XKfz\StructType\Datentyp $datentyp
     */
    public function __construct(?\THAG\XKfz\StructType\Datentyp $datentyp = null)
    {
        $this
            ->setDatentyp($datentyp);
    }
    /**
     * Get Datentyp value
     * @return \THAG\XKfz\StructType\Datentyp|null
     */
    public function getDatentyp(): ?\THAG\XKfz\StructType\Datentyp
    {
        return $this->Datentyp;
    }
    /**
     * Set Datentyp value
     * @param \THAG\XKfz\StructType\Datentyp $datentyp
     * @return \THAG\XKfz\StructType\ListeDatentyp
     */
    public function setDatentyp(?\THAG\XKfz\StructType\Datentyp $datentyp = null): self
    {
        $this->Datentyp = $datentyp;
        
        return $this;
    }
}
