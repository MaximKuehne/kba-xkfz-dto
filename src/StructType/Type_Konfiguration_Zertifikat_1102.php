<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Konfiguration.Zertifikat.1102 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Konfiguration_Zertifikat_1102 extends AbstractStructBase
{
    /**
     * The zertifikat
     */
    public ?\THAG\XKfz\StructType\Zertifikat $zertifikat = null;

    /**
     * Constructor method for Type.Konfiguration.Zertifikat.1102
     *
     * @uses Type_Konfiguration_Zertifikat_1102::setZertifikat()
     */
    public function __construct(?\THAG\XKfz\StructType\Zertifikat $zertifikat = null)
    {
        $this
            ->setZertifikat($zertifikat);
    }

    /**
     * Get zertifikat value
     */
    public function getZertifikat(): ?\THAG\XKfz\StructType\Zertifikat
    {
        return $this->zertifikat;
    }

    /**
     * Set zertifikat value
     */
    public function setZertifikat(?\THAG\XKfz\StructType\Zertifikat $zertifikat = null): self
    {
        $this->zertifikat = $zertifikat;

        return $this;
    }
}
