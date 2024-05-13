<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteFeinstaubplakette StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteFeinstaubplakette extends AbstractStructBase
{
    /**
     * The merkmalBestellung
     */
    public ?bool $merkmalBestellung = null;

    /**
     * The nummerDerFeinstaubplakette
     */
    public ?\THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette $nummerDerFeinstaubplakette = null;

    /**
     * Constructor method for Type.VorgangskomponenteFeinstaubplakette
     *
     * @uses Type_VorgangskomponenteFeinstaubplakette::setMerkmalBestellung()
     * @uses Type_VorgangskomponenteFeinstaubplakette::setNummerDerFeinstaubplakette()
     */
    public function __construct(?bool $merkmalBestellung = null, ?\THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette $nummerDerFeinstaubplakette = null)
    {
        $this
            ->setMerkmalBestellung($merkmalBestellung)
            ->setNummerDerFeinstaubplakette($nummerDerFeinstaubplakette);
    }

    /**
     * Get merkmalBestellung value
     */
    public function getMerkmalBestellung(): ?bool
    {
        return $this->merkmalBestellung;
    }

    /**
     * Set merkmalBestellung value
     */
    public function setMerkmalBestellung(?bool $merkmalBestellung = null): self
    {
        $this->merkmalBestellung = $merkmalBestellung;

        return $this;
    }

    /**
     * Get nummerDerFeinstaubplakette value
     */
    public function getNummerDerFeinstaubplakette(): ?\THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette
    {
        return $this->nummerDerFeinstaubplakette;
    }

    /**
     * Set nummerDerFeinstaubplakette value
     */
    public function setNummerDerFeinstaubplakette(?\THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette $nummerDerFeinstaubplakette = null): self
    {
        $this->nummerDerFeinstaubplakette = $nummerDerFeinstaubplakette;

        return $this;
    }
}
