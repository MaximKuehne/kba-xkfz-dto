<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.AnfrageKennzeichenFreigeben.0606
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageKennzeichenFreigeben_0606 extends AbstractStructBase
{
    /**
     * The kennzeichenFreigeben
     */
    public ?\THAG\XKfz\StructType\KennzeichenFreigeben $kennzeichenFreigeben = null;

    /**
     * Constructor method for Type.Kennzeichen.AnfrageKennzeichenFreigeben.0606
     *
     * @uses Type_Kennzeichen_AnfrageKennzeichenFreigeben_0606::setKennzeichenFreigeben()
     */
    public function __construct(?\THAG\XKfz\StructType\KennzeichenFreigeben $kennzeichenFreigeben = null)
    {
        $this
            ->setKennzeichenFreigeben($kennzeichenFreigeben);
    }

    /**
     * Get kennzeichenFreigeben value
     */
    public function getKennzeichenFreigeben(): ?\THAG\XKfz\StructType\KennzeichenFreigeben
    {
        return $this->kennzeichenFreigeben;
    }

    /**
     * Set kennzeichenFreigeben value
     */
    public function setKennzeichenFreigeben(?\THAG\XKfz\StructType\KennzeichenFreigeben $kennzeichenFreigeben = null): self
    {
        $this->kennzeichenFreigeben = $kennzeichenFreigeben;

        return $this;
    }
}
