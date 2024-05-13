<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeDatentyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeDatentyp extends AbstractStructBase
{
    /**
     * The Datentyp
     */
    public ?\THAG\XKfz\StructType\Datentyp $Datentyp = null;

    /**
     * Constructor method for ListeDatentyp
     *
     * @uses ListeDatentyp::setDatentyp()
     */
    public function __construct(?\THAG\XKfz\StructType\Datentyp $datentyp = null)
    {
        $this
            ->setDatentyp($datentyp);
    }

    /**
     * Get Datentyp value
     */
    public function getDatentyp(): ?\THAG\XKfz\StructType\Datentyp
    {
        return $this->Datentyp;
    }

    /**
     * Set Datentyp value
     */
    public function setDatentyp(?\THAG\XKfz\StructType\Datentyp $datentyp = null): self
    {
        $this->Datentyp = $datentyp;

        return $this;
    }
}
