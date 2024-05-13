<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten extends AbstractStructBase
{
    /**
     * The gutachtennummer
     */
    public ?string $gutachtennummer = null;

    /**
     * The datumDesGutachtens
     */
    public ?string $datumDesGutachtens = null;

    /**
     * The artDesGutachtens
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesGutachtens $artDesGutachtens = null;

    /**
     * Constructor method for Type.Gutachten
     *
     * @uses Type_Gutachten::setGutachtennummer()
     * @uses Type_Gutachten::setDatumDesGutachtens()
     * @uses Type_Gutachten::setArtDesGutachtens()
     */
    public function __construct(?string $gutachtennummer = null, ?string $datumDesGutachtens = null, ?\THAG\XKfz\StructType\Code_ArtDesGutachtens $artDesGutachtens = null)
    {
        $this
            ->setGutachtennummer($gutachtennummer)
            ->setDatumDesGutachtens($datumDesGutachtens)
            ->setArtDesGutachtens($artDesGutachtens);
    }

    /**
     * Get gutachtennummer value
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }

    /**
     * Set gutachtennummer value
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;

        return $this;
    }

    /**
     * Get datumDesGutachtens value
     */
    public function getDatumDesGutachtens(): ?string
    {
        return $this->datumDesGutachtens;
    }

    /**
     * Set datumDesGutachtens value
     */
    public function setDatumDesGutachtens(?string $datumDesGutachtens = null): self
    {
        $this->datumDesGutachtens = $datumDesGutachtens;

        return $this;
    }

    /**
     * Get artDesGutachtens value
     */
    public function getArtDesGutachtens(): ?\THAG\XKfz\StructType\Code_ArtDesGutachtens
    {
        return $this->artDesGutachtens;
    }

    /**
     * Set artDesGutachtens value
     */
    public function setArtDesGutachtens(?\THAG\XKfz\StructType\Code_ArtDesGutachtens $artDesGutachtens = null): self
    {
        $this->artDesGutachtens = $artDesGutachtens;

        return $this;
    }
}
