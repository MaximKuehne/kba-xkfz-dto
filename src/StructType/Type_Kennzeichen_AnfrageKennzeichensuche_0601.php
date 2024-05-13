<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.AnfrageKennzeichensuche.0601 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageKennzeichensuche_0601 extends AbstractStructBase
{
    /**
     * The kennzeichensucheWunschkennzeichen
     */
    public ?\THAG\XKfz\StructType\KennzeichensucheWunschkennzeichen $kennzeichensucheWunschkennzeichen = null;

    /**
     * Constructor method for Type.Kennzeichen.AnfrageKennzeichensuche.0601
     *
     * @uses Type_Kennzeichen_AnfrageKennzeichensuche_0601::setKennzeichensucheWunschkennzeichen()
     */
    public function __construct(?\THAG\XKfz\StructType\KennzeichensucheWunschkennzeichen $kennzeichensucheWunschkennzeichen = null)
    {
        $this
            ->setKennzeichensucheWunschkennzeichen($kennzeichensucheWunschkennzeichen);
    }

    /**
     * Get kennzeichensucheWunschkennzeichen value
     */
    public function getKennzeichensucheWunschkennzeichen(): ?\THAG\XKfz\StructType\KennzeichensucheWunschkennzeichen
    {
        return $this->kennzeichensucheWunschkennzeichen;
    }

    /**
     * Set kennzeichensucheWunschkennzeichen value
     */
    public function setKennzeichensucheWunschkennzeichen(?\THAG\XKfz\StructType\KennzeichensucheWunschkennzeichen $kennzeichensucheWunschkennzeichen = null): self
    {
        $this->kennzeichensucheWunschkennzeichen = $kennzeichensucheWunschkennzeichen;

        return $this;
    }
}
