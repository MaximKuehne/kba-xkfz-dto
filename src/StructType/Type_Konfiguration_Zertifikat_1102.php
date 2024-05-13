<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Konfiguration.Zertifikat.1102 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Konfiguration_Zertifikat_1102 extends AbstractStructBase
{
    /**
     * The zertifikat
     * @var \THAG\XKfz\StructType\Zertifikat|null
     */
    public ?\THAG\XKfz\StructType\Zertifikat $zertifikat = null;
    /**
     * Constructor method for Type.Konfiguration.Zertifikat.1102
     * @uses Type_Konfiguration_Zertifikat_1102::setZertifikat()
     * @param \THAG\XKfz\StructType\Zertifikat $zertifikat
     */
    public function __construct(?\THAG\XKfz\StructType\Zertifikat $zertifikat = null)
    {
        $this
            ->setZertifikat($zertifikat);
    }
    /**
     * Get zertifikat value
     * @return \THAG\XKfz\StructType\Zertifikat|null
     */
    public function getZertifikat(): ?\THAG\XKfz\StructType\Zertifikat
    {
        return $this->zertifikat;
    }
    /**
     * Set zertifikat value
     * @param \THAG\XKfz\StructType\Zertifikat $zertifikat
     * @return \THAG\XKfz\StructType\Type_Konfiguration_Zertifikat_1102
     */
    public function setZertifikat(?\THAG\XKfz\StructType\Zertifikat $zertifikat = null): self
    {
        $this->zertifikat = $zertifikat;
        
        return $this;
    }
}
