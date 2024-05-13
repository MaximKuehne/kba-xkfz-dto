<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Konfiguration.AnfrageZertifikat.1101 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Konfiguration_AnfrageZertifikat_1101 extends AbstractStructBase
{
    /**
     * The zertifikatAbrufen
     * @var \THAG\XKfz\StructType\ZertifikatAbrufen|null
     */
    public ?\THAG\XKfz\StructType\ZertifikatAbrufen $zertifikatAbrufen = null;
    /**
     * Constructor method for Type.Konfiguration.AnfrageZertifikat.1101
     * @uses Type_Konfiguration_AnfrageZertifikat_1101::setZertifikatAbrufen()
     * @param \THAG\XKfz\StructType\ZertifikatAbrufen $zertifikatAbrufen
     */
    public function __construct(?\THAG\XKfz\StructType\ZertifikatAbrufen $zertifikatAbrufen = null)
    {
        $this
            ->setZertifikatAbrufen($zertifikatAbrufen);
    }
    /**
     * Get zertifikatAbrufen value
     * @return \THAG\XKfz\StructType\ZertifikatAbrufen|null
     */
    public function getZertifikatAbrufen(): ?\THAG\XKfz\StructType\ZertifikatAbrufen
    {
        return $this->zertifikatAbrufen;
    }
    /**
     * Set zertifikatAbrufen value
     * @param \THAG\XKfz\StructType\ZertifikatAbrufen $zertifikatAbrufen
     * @return \THAG\XKfz\StructType\Type_Konfiguration_AnfrageZertifikat_1101
     */
    public function setZertifikatAbrufen(?\THAG\XKfz\StructType\ZertifikatAbrufen $zertifikatAbrufen = null): self
    {
        $this->zertifikatAbrufen = $zertifikatAbrufen;
        
        return $this;
    }
}
