<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.AnfrageNaechstesFreiesKennzeichen.0603
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageNaechstesFreiesKennzeichen_0603 extends AbstractStructBase
{
    /**
     * The kennzeichensucheNaechstesFreiesKennzeichen
     * @var \THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen $kennzeichensucheNaechstesFreiesKennzeichen = null;
    /**
     * Constructor method for Type.Kennzeichen.AnfrageNaechstesFreiesKennzeichen.0603
     * @uses Type_Kennzeichen_AnfrageNaechstesFreiesKennzeichen_0603::setKennzeichensucheNaechstesFreiesKennzeichen()
     * @param \THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen $kennzeichensucheNaechstesFreiesKennzeichen
     */
    public function __construct(?\THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen $kennzeichensucheNaechstesFreiesKennzeichen = null)
    {
        $this
            ->setKennzeichensucheNaechstesFreiesKennzeichen($kennzeichensucheNaechstesFreiesKennzeichen);
    }
    /**
     * Get kennzeichensucheNaechstesFreiesKennzeichen value
     * @return \THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen|null
     */
    public function getKennzeichensucheNaechstesFreiesKennzeichen(): ?\THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen
    {
        return $this->kennzeichensucheNaechstesFreiesKennzeichen;
    }
    /**
     * Set kennzeichensucheNaechstesFreiesKennzeichen value
     * @param \THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen $kennzeichensucheNaechstesFreiesKennzeichen
     * @return \THAG\XKfz\StructType\Type_Kennzeichen_AnfrageNaechstesFreiesKennzeichen_0603
     */
    public function setKennzeichensucheNaechstesFreiesKennzeichen(?\THAG\XKfz\StructType\KennzeichensucheNaechstesFreiesKennzeichen $kennzeichensucheNaechstesFreiesKennzeichen = null): self
    {
        $this->kennzeichensucheNaechstesFreiesKennzeichen = $kennzeichensucheNaechstesFreiesKennzeichen;
        
        return $this;
    }
}
