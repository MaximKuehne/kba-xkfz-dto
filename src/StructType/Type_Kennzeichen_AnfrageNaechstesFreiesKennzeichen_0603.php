<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.AnfrageNaechstesFreiesKennzeichen.0603
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageNaechstesFreiesKennzeichen_0603 extends AbstractStructBase
{
    /**
     * The kennzeichensucheNaechstesFreiesKennzeichen
     */
    public ?\THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen $kennzeichensucheNaechstesFreiesKennzeichen = null;

    /**
     * Constructor method for Type.Kennzeichen.AnfrageNaechstesFreiesKennzeichen.0603
     *
     * @uses Type_Kennzeichen_AnfrageNaechstesFreiesKennzeichen_0603::setKennzeichensucheNaechstesFreiesKennzeichen()
     */
    public function __construct(?\THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen $kennzeichensucheNaechstesFreiesKennzeichen = null)
    {
        $this
            ->setKennzeichensucheNaechstesFreiesKennzeichen($kennzeichensucheNaechstesFreiesKennzeichen);
    }

    /**
     * Get kennzeichensucheNaechstesFreiesKennzeichen value
     */
    public function getKennzeichensucheNaechstesFreiesKennzeichen(): ?\THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen
    {
        return $this->kennzeichensucheNaechstesFreiesKennzeichen;
    }

    /**
     * Set kennzeichensucheNaechstesFreiesKennzeichen value
     */
    public function setKennzeichensucheNaechstesFreiesKennzeichen(?\THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen $kennzeichensucheNaechstesFreiesKennzeichen = null): self
    {
        $this->kennzeichensucheNaechstesFreiesKennzeichen = $kennzeichensucheNaechstesFreiesKennzeichen;

        return $this;
    }
}
