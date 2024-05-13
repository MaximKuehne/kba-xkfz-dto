<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Zertifikat StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zertifikat extends AbstractStructBase
{
    /**
     * The artDesZertifikates
     * @var \THAG\XKfz\StructType\Type_ArtDesZertifikates|null
     */
    public ?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null;
    /**
     * The zertifikatDaten
     * @var \THAG\XKfz\StructType\Type_ElektronischesDokument|null
     */
    public ?\THAG\XKfz\StructType\Type_ElektronischesDokument $zertifikatDaten = null;
    /**
     * Constructor method for Type.Zertifikat
     * @uses Type_Zertifikat::setArtDesZertifikates()
     * @uses Type_Zertifikat::setZertifikatDaten()
     * @param \THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates
     * @param \THAG\XKfz\StructType\Type_ElektronischesDokument $zertifikatDaten
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null, ?\THAG\XKfz\StructType\Type_ElektronischesDokument $zertifikatDaten = null)
    {
        $this
            ->setArtDesZertifikates($artDesZertifikates)
            ->setZertifikatDaten($zertifikatDaten);
    }
    /**
     * Get artDesZertifikates value
     * @return \THAG\XKfz\StructType\Type_ArtDesZertifikates|null
     */
    public function getArtDesZertifikates(): ?\THAG\XKfz\StructType\Type_ArtDesZertifikates
    {
        return $this->artDesZertifikates;
    }
    /**
     * Set artDesZertifikates value
     * @param \THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates
     * @return \THAG\XKfz\StructType\Type_Zertifikat
     */
    public function setArtDesZertifikates(?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null): self
    {
        $this->artDesZertifikates = $artDesZertifikates;
        
        return $this;
    }
    /**
     * Get zertifikatDaten value
     * @return \THAG\XKfz\StructType\Type_ElektronischesDokument|null
     */
    public function getZertifikatDaten(): ?\THAG\XKfz\StructType\Type_ElektronischesDokument
    {
        return $this->zertifikatDaten;
    }
    /**
     * Set zertifikatDaten value
     * @param \THAG\XKfz\StructType\Type_ElektronischesDokument $zertifikatDaten
     * @return \THAG\XKfz\StructType\Type_Zertifikat
     */
    public function setZertifikatDaten(?\THAG\XKfz\StructType\Type_ElektronischesDokument $zertifikatDaten = null): self
    {
        $this->zertifikatDaten = $zertifikatDaten;
        
        return $this;
    }
}
