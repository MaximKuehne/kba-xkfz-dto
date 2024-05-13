<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Zertifikat StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zertifikat extends AbstractStructBase
{
    /**
     * The artDesZertifikates
     */
    public ?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null;

    /**
     * The zertifikatDaten
     */
    public ?\THAG\XKfz\StructType\Type_ElektronischesDokument $zertifikatDaten = null;

    /**
     * Constructor method for Type.Zertifikat
     *
     * @uses Type_Zertifikat::setArtDesZertifikates()
     * @uses Type_Zertifikat::setZertifikatDaten()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null, ?\THAG\XKfz\StructType\Type_ElektronischesDokument $zertifikatDaten = null)
    {
        $this
            ->setArtDesZertifikates($artDesZertifikates)
            ->setZertifikatDaten($zertifikatDaten);
    }

    /**
     * Get artDesZertifikates value
     */
    public function getArtDesZertifikates(): ?\THAG\XKfz\StructType\Type_ArtDesZertifikates
    {
        return $this->artDesZertifikates;
    }

    /**
     * Set artDesZertifikates value
     */
    public function setArtDesZertifikates(?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null): self
    {
        $this->artDesZertifikates = $artDesZertifikates;

        return $this;
    }

    /**
     * Get zertifikatDaten value
     */
    public function getZertifikatDaten(): ?\THAG\XKfz\StructType\Type_ElektronischesDokument
    {
        return $this->zertifikatDaten;
    }

    /**
     * Set zertifikatDaten value
     */
    public function setZertifikatDaten(?\THAG\XKfz\StructType\Type_ElektronischesDokument $zertifikatDaten = null): self
    {
        $this->zertifikatDaten = $zertifikatDaten;

        return $this;
    }
}
