<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Kennzeichen.AnfrageKennzeichenFuerZulassungVerwenden.0612 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageKennzeichenFuerZulassungVerwenden_0612 extends AbstractStructBase
{
    /**
     * The kennzeichenVerwenden
     */
    public ?\THAG\XKfz\StructType\KennzeichenVerwenden $kennzeichenVerwenden = null;

    /**
     * Constructor method for
     * Type.Kennzeichen.AnfrageKennzeichenFuerZulassungVerwenden.0612
     *
     * @uses Type_Kennzeichen_AnfrageKennzeichenFuerZulassungVerwenden_0612::setKennzeichenVerwenden()
     */
    public function __construct(?\THAG\XKfz\StructType\KennzeichenVerwenden $kennzeichenVerwenden = null)
    {
        $this
            ->setKennzeichenVerwenden($kennzeichenVerwenden);
    }

    /**
     * Get kennzeichenVerwenden value
     */
    public function getKennzeichenVerwenden(): ?\THAG\XKfz\StructType\KennzeichenVerwenden
    {
        return $this->kennzeichenVerwenden;
    }

    /**
     * Set kennzeichenVerwenden value
     */
    public function setKennzeichenVerwenden(?\THAG\XKfz\StructType\KennzeichenVerwenden $kennzeichenVerwenden = null): self
    {
        $this->kennzeichenVerwenden = $kennzeichenVerwenden;

        return $this;
    }
}
