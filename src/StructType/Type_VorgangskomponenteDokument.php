<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteDokument StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteDokument extends AbstractStructBase
{
    /**
     * The artDesDokuments
     */
    public ?\THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments = null;

    /**
     * The vorgangskomponentenIDZugehoerig
     */
    public ?string $vorgangskomponentenIDZugehoerig = null;

    /**
     * The dokumentDaten
     */
    public ?\THAG\XKfz\StructType\Type_ElektronischesDokument $dokumentDaten = null;

    /**
     * The dokumentInformation
     */
    public ?string $dokumentInformation = null;

    /**
     * Constructor method for Type.VorgangskomponenteDokument
     *
     * @uses Type_VorgangskomponenteDokument::setArtDesDokuments()
     * @uses Type_VorgangskomponenteDokument::setVorgangskomponentenIDZugehoerig()
     * @uses Type_VorgangskomponenteDokument::setDokumentDaten()
     * @uses Type_VorgangskomponenteDokument::setDokumentInformation()
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
     */
    public function getArtDesDokuments(): ?\THAG\XKfz\StructType\Type_ArtDesDokuments
    {
        return $this->artDesDokuments;
    }

    /**
     * Set artDesDokuments value
     */
    public function setArtDesDokuments(?\THAG\XKfz\StructType\Type_ArtDesDokuments $artDesDokuments = null): self
    {
        $this->artDesDokuments = $artDesDokuments;

        return $this;
    }

    /**
     * Get vorgangskomponentenIDZugehoerig value
     */
    public function getVorgangskomponentenIDZugehoerig(): ?string
    {
        return $this->vorgangskomponentenIDZugehoerig;
    }

    /**
     * Set vorgangskomponentenIDZugehoerig value
     */
    public function setVorgangskomponentenIDZugehoerig(?string $vorgangskomponentenIDZugehoerig = null): self
    {
        $this->vorgangskomponentenIDZugehoerig = $vorgangskomponentenIDZugehoerig;

        return $this;
    }

    /**
     * Get dokumentDaten value
     */
    public function getDokumentDaten(): ?\THAG\XKfz\StructType\Type_ElektronischesDokument
    {
        return $this->dokumentDaten;
    }

    /**
     * Set dokumentDaten value
     */
    public function setDokumentDaten(?\THAG\XKfz\StructType\Type_ElektronischesDokument $dokumentDaten = null): self
    {
        $this->dokumentDaten = $dokumentDaten;

        return $this;
    }

    /**
     * Get dokumentInformation value
     */
    public function getDokumentInformation(): ?string
    {
        return $this->dokumentInformation;
    }

    /**
     * Set dokumentInformation value
     */
    public function setDokumentInformation(?string $dokumentInformation = null): self
    {
        $this->dokumentInformation = $dokumentInformation;

        return $this;
    }
}
