<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Kennzeichen_1 extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The wechselkennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen = null;

    /**
     * Constructor method for kennzeichen
     *
     * @uses Kennzeichen_1::setKennzeichen()
     * @uses Kennzeichen_1::setWechselkennzeichen()
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?\THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setWechselkennzeichen($wechselkennzeichen);
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get wechselkennzeichen value
     */
    public function getWechselkennzeichen(): ?\THAG\XKfz\StructType\Type_Wechselkennzeichen
    {
        return $this->wechselkennzeichen;
    }

    /**
     * Set wechselkennzeichen value
     */
    public function setWechselkennzeichen(?\THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen = null): self
    {
        $this->wechselkennzeichen = $wechselkennzeichen;

        return $this;
    }
}
