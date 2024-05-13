<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Kennzeichen.AnfrageKennzeichenZurBearbeitungSperren.0605 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageKennzeichenZurBearbeitungSperren_0605 extends AbstractStructBase
{
    /**
     * The kennzeichenZurBearbeitungSperren
     * @var \THAG\XKfz\StructType\KennzeichenZurBearbeitungSperren|null
     */
    public ?\THAG\XKfz\StructType\KennzeichenZurBearbeitungSperren $kennzeichenZurBearbeitungSperren = null;
    /**
     * Constructor method for
     * Type.Kennzeichen.AnfrageKennzeichenZurBearbeitungSperren.0605
     * @uses Type_Kennzeichen_AnfrageKennzeichenZurBearbeitungSperren_0605::setKennzeichenZurBearbeitungSperren()
     * @param \THAG\XKfz\StructType\KennzeichenZurBearbeitungSperren $kennzeichenZurBearbeitungSperren
     */
    public function __construct(?\THAG\XKfz\StructType\KennzeichenZurBearbeitungSperren $kennzeichenZurBearbeitungSperren = null)
    {
        $this
            ->setKennzeichenZurBearbeitungSperren($kennzeichenZurBearbeitungSperren);
    }
    /**
     * Get kennzeichenZurBearbeitungSperren value
     * @return \THAG\XKfz\StructType\KennzeichenZurBearbeitungSperren|null
     */
    public function getKennzeichenZurBearbeitungSperren(): ?\THAG\XKfz\StructType\KennzeichenZurBearbeitungSperren
    {
        return $this->kennzeichenZurBearbeitungSperren;
    }
    /**
     * Set kennzeichenZurBearbeitungSperren value
     * @param \THAG\XKfz\StructType\KennzeichenZurBearbeitungSperren $kennzeichenZurBearbeitungSperren
     * @return \THAG\XKfz\StructType\Type_Kennzeichen_AnfrageKennzeichenZurBearbeitungSperren_0605
     */
    public function setKennzeichenZurBearbeitungSperren(?\THAG\XKfz\StructType\KennzeichenZurBearbeitungSperren $kennzeichenZurBearbeitungSperren = null): self
    {
        $this->kennzeichenZurBearbeitungSperren = $kennzeichenZurBearbeitungSperren;
        
        return $this;
    }
}
