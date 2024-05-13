<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Konfiguration.AnfrageZertifikat.1101 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Konfiguration_AnfrageZertifikat_1101 extends AbstractStructBase
{
    /**
     * The zertifikatAbrufen
     */
    public ?\THAG\XKfz\StructType\ZertifikatAbrufen $zertifikatAbrufen = null;

    /**
     * Constructor method for Type.Konfiguration.AnfrageZertifikat.1101
     *
     * @uses Type_Konfiguration_AnfrageZertifikat_1101::setZertifikatAbrufen()
     */
    public function __construct(?\THAG\XKfz\StructType\ZertifikatAbrufen $zertifikatAbrufen = null)
    {
        $this
            ->setZertifikatAbrufen($zertifikatAbrufen);
    }

    /**
     * Get zertifikatAbrufen value
     */
    public function getZertifikatAbrufen(): ?\THAG\XKfz\StructType\ZertifikatAbrufen
    {
        return $this->zertifikatAbrufen;
    }

    /**
     * Set zertifikatAbrufen value
     */
    public function setZertifikatAbrufen(?\THAG\XKfz\StructType\ZertifikatAbrufen $zertifikatAbrufen = null): self
    {
        $this->zertifikatAbrufen = $zertifikatAbrufen;

        return $this;
    }
}
