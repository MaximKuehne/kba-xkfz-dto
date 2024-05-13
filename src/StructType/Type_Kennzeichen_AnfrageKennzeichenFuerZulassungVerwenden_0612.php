<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Kennzeichen.AnfrageKennzeichenFuerZulassungVerwenden.0612 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageKennzeichenFuerZulassungVerwenden_0612 extends AbstractStructBase
{
    /**
     * The kennzeichenVerwenden
     * @var \THAG\XKfz\StructType\KennzeichenVerwenden|null
     */
    public ?\THAG\XKfz\StructType\KennzeichenVerwenden $kennzeichenVerwenden = null;
    /**
     * Constructor method for
     * Type.Kennzeichen.AnfrageKennzeichenFuerZulassungVerwenden.0612
     * @uses Type_Kennzeichen_AnfrageKennzeichenFuerZulassungVerwenden_0612::setKennzeichenVerwenden()
     * @param \THAG\XKfz\StructType\KennzeichenVerwenden $kennzeichenVerwenden
     */
    public function __construct(?\THAG\XKfz\StructType\KennzeichenVerwenden $kennzeichenVerwenden = null)
    {
        $this
            ->setKennzeichenVerwenden($kennzeichenVerwenden);
    }
    /**
     * Get kennzeichenVerwenden value
     * @return \THAG\XKfz\StructType\KennzeichenVerwenden|null
     */
    public function getKennzeichenVerwenden(): ?\THAG\XKfz\StructType\KennzeichenVerwenden
    {
        return $this->kennzeichenVerwenden;
    }
    /**
     * Set kennzeichenVerwenden value
     * @param \THAG\XKfz\StructType\KennzeichenVerwenden $kennzeichenVerwenden
     * @return \THAG\XKfz\StructType\Type_Kennzeichen_AnfrageKennzeichenFuerZulassungVerwenden_0612
     */
    public function setKennzeichenVerwenden(?\THAG\XKfz\StructType\KennzeichenVerwenden $kennzeichenVerwenden = null): self
    {
        $this->kennzeichenVerwenden = $kennzeichenVerwenden;
        
        return $this;
    }
}
