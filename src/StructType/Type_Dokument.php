<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Dokument StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Dokument extends AbstractStructBase
{
    /**
     * The artDesDokuments
     * @var \THAG\XKfz\StructType\Type_ArtDesDokuments|null
     */
    public ?\THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments = null;
    /**
     * The dokumentDaten
     * @var \THAG\XKfz\StructType\Type_ElektronischesDokument|null
     */
    public ?\THAG\XKfz\StructType\Type_ElektronischesDokument $dokumentDaten = null;
    /**
     * The dokumentInformation
     * @var string|null
     */
    public ?string $dokumentInformation = null;
    /**
     * Constructor method for Type.Dokument
     * @uses Type_Dokument::setArtDesDokuments()
     * @uses Type_Dokument::setDokumentDaten()
     * @uses Type_Dokument::setDokumentInformation()
     * @param \THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments
     * @param \THAG\XKfz\StructType\Type_ElektronischesDokument $dokumentDaten
     * @param string $dokumentInformation
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments = null, ?\THAG\XKfz\StructType\Type_ElektronischesDokument $dokumentDaten = null, ?string $dokumentInformation = null)
    {
        $this
            ->setArtDesDokuments($artDesDokuments)
            ->setDokumentDaten($dokumentDaten)
            ->setDokumentInformation($dokumentInformation);
    }
    /**
     * Get artDesDokuments value
     * @return \THAG\XKfz\StructType\Type_ArtDesDokuments|null
     */
    public function getArtDesDokuments(): ?\THAG\XKfz\StructType\Type_ArtDesDokuments
    {
        return $this->artDesDokuments;
    }
    /**
     * Set artDesDokuments value
     * @param \THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments
     * @return \THAG\XKfz\StructType\Type_Dokument
     */
    public function setArtDesDokuments(?\THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments = null): self
    {
        $this->artDesDokuments = $artDesDokuments;
        
        return $this;
    }
    /**
     * Get dokumentDaten value
     * @return \THAG\XKfz\StructType\Type_ElektronischesDokument|null
     */
    public function getDokumentDaten(): ?\THAG\XKfz\StructType\Type_ElektronischesDokument
    {
        return $this->dokumentDaten;
    }
    /**
     * Set dokumentDaten value
     * @param \THAG\XKfz\StructType\Type_ElektronischesDokument $dokumentDaten
     * @return \THAG\XKfz\StructType\Type_Dokument
     */
    public function setDokumentDaten(?\THAG\XKfz\StructType\Type_ElektronischesDokument $dokumentDaten = null): self
    {
        $this->dokumentDaten = $dokumentDaten;
        
        return $this;
    }
    /**
     * Get dokumentInformation value
     * @return string|null
     */
    public function getDokumentInformation(): ?string
    {
        return $this->dokumentInformation;
    }
    /**
     * Set dokumentInformation value
     * @param string $dokumentInformation
     * @return \THAG\XKfz\StructType\Type_Dokument
     */
    public function setDokumentInformation(?string $dokumentInformation = null): self
    {
        $this->dokumentInformation = $dokumentInformation;
        
        return $this;
    }
}
