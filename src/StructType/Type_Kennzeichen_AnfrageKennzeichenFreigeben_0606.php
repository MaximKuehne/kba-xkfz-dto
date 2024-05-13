<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.AnfrageKennzeichenFreigeben.0606
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageKennzeichenFreigeben_0606 extends AbstractStructBase
{
    /**
     * The kennzeichenFreigeben
     * @var \THAG\XKfz\StructType\KennzeichenFreigeben|null
     */
    public ?\THAG\XKfz\StructType\KennzeichenFreigeben $kennzeichenFreigeben = null;
    /**
     * Constructor method for Type.Kennzeichen.AnfrageKennzeichenFreigeben.0606
     * @uses Type_Kennzeichen_AnfrageKennzeichenFreigeben_0606::setKennzeichenFreigeben()
     * @param \THAG\XKfz\StructType\KennzeichenFreigeben $kennzeichenFreigeben
     */
    public function __construct(?\THAG\XKfz\StructType\KennzeichenFreigeben $kennzeichenFreigeben = null)
    {
        $this
            ->setKennzeichenFreigeben($kennzeichenFreigeben);
    }
    /**
     * Get kennzeichenFreigeben value
     * @return \THAG\XKfz\StructType\KennzeichenFreigeben|null
     */
    public function getKennzeichenFreigeben(): ?\THAG\XKfz\StructType\KennzeichenFreigeben
    {
        return $this->kennzeichenFreigeben;
    }
    /**
     * Set kennzeichenFreigeben value
     * @param \THAG\XKfz\StructType\KennzeichenFreigeben $kennzeichenFreigeben
     * @return \THAG\XKfz\StructType\Type_Kennzeichen_AnfrageKennzeichenFreigeben_0606
     */
    public function setKennzeichenFreigeben(?\THAG\XKfz\StructType\KennzeichenFreigeben $kennzeichenFreigeben = null): self
    {
        $this->kennzeichenFreigeben = $kennzeichenFreigeben;
        
        return $this;
    }
}
