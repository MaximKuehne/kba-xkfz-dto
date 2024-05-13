<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.AnfrageKennzeichenreservierung.0607
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageKennzeichenreservierung_0607 extends AbstractStructBase
{
    /**
     * The kennzeichenreservierung
     */
    public ?\THAG\XKfz\StructType\Kennzeichenreservierung $kennzeichenreservierung = null;

    /**
     * Constructor method for Type.Kennzeichen.AnfrageKennzeichenreservierung.0607
     *
     * @uses Type_Kennzeichen_AnfrageKennzeichenreservierung_0607::setKennzeichenreservierung()
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichenreservierung $kennzeichenreservierung = null)
    {
        $this
            ->setKennzeichenreservierung($kennzeichenreservierung);
    }

    /**
     * Get kennzeichenreservierung value
     */
    public function getKennzeichenreservierung(): ?\THAG\XKfz\StructType\Kennzeichenreservierung
    {
        return $this->kennzeichenreservierung;
    }

    /**
     * Set kennzeichenreservierung value
     */
    public function setKennzeichenreservierung(?\THAG\XKfz\StructType\Kennzeichenreservierung $kennzeichenreservierung = null): self
    {
        $this->kennzeichenreservierung = $kennzeichenreservierung;

        return $this;
    }
}
