<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.WarnungenIgnorieren StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_WarnungenIgnorieren extends AbstractStructBase
{
    /**
     * The warnungIgnorieren
     * @var \THAG\XKfz\StructType\Code_Quittungscode|null
     */
    public ?\THAG\XKfz\StructType\Code_Quittungscode $warnungIgnorieren = null;
    /**
     * Constructor method for Type.WarnungenIgnorieren
     * @uses Type_WarnungenIgnorieren::setWarnungIgnorieren()
     * @param \THAG\XKfz\StructType\Code_Quittungscode $warnungIgnorieren
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Quittungscode $warnungIgnorieren = null)
    {
        $this
            ->setWarnungIgnorieren($warnungIgnorieren);
    }
    /**
     * Get warnungIgnorieren value
     * @return \THAG\XKfz\StructType\Code_Quittungscode|null
     */
    public function getWarnungIgnorieren(): ?\THAG\XKfz\StructType\Code_Quittungscode
    {
        return $this->warnungIgnorieren;
    }
    /**
     * Set warnungIgnorieren value
     * @param \THAG\XKfz\StructType\Code_Quittungscode $warnungIgnorieren
     * @return \THAG\XKfz\StructType\Type_WarnungenIgnorieren
     */
    public function setWarnungIgnorieren(?\THAG\XKfz\StructType\Code_Quittungscode $warnungIgnorieren = null): self
    {
        $this->warnungIgnorieren = $warnungIgnorieren;
        
        return $this;
    }
}
