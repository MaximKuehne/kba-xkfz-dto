<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.WarnungenIgnorieren StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_WarnungenIgnorieren extends AbstractStructBase
{
    /**
     * The warnungIgnorieren
     */
    public ?\THAG\XKfz\StructType\Code_Quittungscode $warnungIgnorieren = null;

    /**
     * Constructor method for Type.WarnungenIgnorieren
     *
     * @uses Type_WarnungenIgnorieren::setWarnungIgnorieren()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Quittungscode $warnungIgnorieren = null)
    {
        $this
            ->setWarnungIgnorieren($warnungIgnorieren);
    }

    /**
     * Get warnungIgnorieren value
     */
    public function getWarnungIgnorieren(): ?\THAG\XKfz\StructType\Code_Quittungscode
    {
        return $this->warnungIgnorieren;
    }

    /**
     * Set warnungIgnorieren value
     */
    public function setWarnungIgnorieren(?\THAG\XKfz\StructType\Code_Quittungscode $warnungIgnorieren = null): self
    {
        $this->warnungIgnorieren = $warnungIgnorieren;

        return $this;
    }
}
