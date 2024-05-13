<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteFeinstaubplakette StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteFeinstaubplakette extends AbstractStructBase
{
    /**
     * The merkmalBestellung
     * @var bool|null
     */
    public ?bool $merkmalBestellung = null;
    /**
     * The nummerDerFeinstaubplakette
     * @var \THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette|null
     */
    public ?\THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette $nummerDerFeinstaubplakette = null;
    /**
     * Constructor method for Type.VorgangskomponenteFeinstaubplakette
     * @uses Type_VorgangskomponenteFeinstaubplakette::setMerkmalBestellung()
     * @uses Type_VorgangskomponenteFeinstaubplakette::setNummerDerFeinstaubplakette()
     * @param bool $merkmalBestellung
     * @param \THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette $nummerDerFeinstaubplakette
     */
    public function __construct(?bool $merkmalBestellung = null, ?\THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette $nummerDerFeinstaubplakette = null)
    {
        $this
            ->setMerkmalBestellung($merkmalBestellung)
            ->setNummerDerFeinstaubplakette($nummerDerFeinstaubplakette);
    }
    /**
     * Get merkmalBestellung value
     * @return bool|null
     */
    public function getMerkmalBestellung(): ?bool
    {
        return $this->merkmalBestellung;
    }
    /**
     * Set merkmalBestellung value
     * @param bool $merkmalBestellung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette
     */
    public function setMerkmalBestellung(?bool $merkmalBestellung = null): self
    {
        $this->merkmalBestellung = $merkmalBestellung;
        
        return $this;
    }
    /**
     * Get nummerDerFeinstaubplakette value
     * @return \THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette|null
     */
    public function getNummerDerFeinstaubplakette(): ?\THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette
    {
        return $this->nummerDerFeinstaubplakette;
    }
    /**
     * Set nummerDerFeinstaubplakette value
     * @param \THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette $nummerDerFeinstaubplakette
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette
     */
    public function setNummerDerFeinstaubplakette(?\THAG\XKfz\StructType\Code_NummerDerFeinstaubplakette $nummerDerFeinstaubplakette = null): self
    {
        $this->nummerDerFeinstaubplakette = $nummerDerFeinstaubplakette;
        
        return $this;
    }
}
