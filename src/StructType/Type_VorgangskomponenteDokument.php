<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteDokument StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteDokument extends AbstractStructBase
{
    /**
     * The artDesDokuments
     * @var \THAG\XKfz\StructType\Type_ArtDesDokuments|null
     */
    public ?\THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments = null;
    /**
     * The vorgangskomponentenIDZugehoerig
     * @var string|null
     */
    public ?string $vorgangskomponentenIDZugehoerig = null;
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
     * Constructor method for Type.VorgangskomponenteDokument
     * @uses Type_VorgangskomponenteDokument::setArtDesDokuments()
     * @uses Type_VorgangskomponenteDokument::setVorgangskomponentenIDZugehoerig()
     * @uses Type_VorgangskomponenteDokument::setDokumentDaten()
     * @uses Type_VorgangskomponenteDokument::setDokumentInformation()
     * @param \THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments
     * @param string $vorgangskomponentenIDZugehoerig
     * @param \THAG\XKfz\StructType\Type_ElektronischesDokument $dokumentDaten
     * @param string $dokumentInformation
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments = null, ?string $vorgangskomponentenIDZugehoerig = null, ?\THAG\XKfz\StructType\Type_ElektronischesDokument $dokumentDaten = null, ?string $dokumentInformation = null)
    {
        $this
            ->setArtDesDokuments($artDesDokuments)
            ->setVorgangskomponentenIDZugehoerig($vorgangskomponentenIDZugehoerig)
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
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteDokument
     */
    public function setArtDesDokuments(?\THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments = null): self
    {
        $this->artDesDokuments = $artDesDokuments;
        
        return $this;
    }
    /**
     * Get vorgangskomponentenIDZugehoerig value
     * @return string|null
     */
    public function getVorgangskomponentenIDZugehoerig(): ?string
    {
        return $this->vorgangskomponentenIDZugehoerig;
    }
    /**
     * Set vorgangskomponentenIDZugehoerig value
     * @param string $vorgangskomponentenIDZugehoerig
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteDokument
     */
    public function setVorgangskomponentenIDZugehoerig(?string $vorgangskomponentenIDZugehoerig = null): self
    {
        $this->vorgangskomponentenIDZugehoerig = $vorgangskomponentenIDZugehoerig;
        
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
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteDokument
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
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteDokument
     */
    public function setDokumentInformation(?string $dokumentInformation = null): self
    {
        $this->dokumentInformation = $dokumentInformation;
        
        return $this;
    }
}
