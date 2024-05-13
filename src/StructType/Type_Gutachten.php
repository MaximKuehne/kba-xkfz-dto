<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten extends AbstractStructBase
{
    /**
     * The gutachtennummer
     * @var string|null
     */
    public ?string $gutachtennummer = null;
    /**
     * The datumDesGutachtens
     * @var string|null
     */
    public ?string $datumDesGutachtens = null;
    /**
     * The artDesGutachtens
     * @var \THAG\XKfz\StructType\Code_ArtDesGutachtens|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesGutachtens $artDesGutachtens = null;
    /**
     * Constructor method for Type.Gutachten
     * @uses Type_Gutachten::setGutachtennummer()
     * @uses Type_Gutachten::setDatumDesGutachtens()
     * @uses Type_Gutachten::setArtDesGutachtens()
     * @param string $gutachtennummer
     * @param string $datumDesGutachtens
     * @param \THAG\XKfz\StructType\Code_ArtDesGutachtens $artDesGutachtens
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
     * @return string|null
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }
    /**
     * Set gutachtennummer value
     * @param string $gutachtennummer
     * @return \THAG\XKfz\StructType\Type_Gutachten
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;
        
        return $this;
    }
    /**
     * Get datumDesGutachtens value
     * @return string|null
     */
    public function getDatumDesGutachtens(): ?string
    {
        return $this->datumDesGutachtens;
    }
    /**
     * Set datumDesGutachtens value
     * @param string $datumDesGutachtens
     * @return \THAG\XKfz\StructType\Type_Gutachten
     */
    public function setDatumDesGutachtens(?string $datumDesGutachtens = null): self
    {
        $this->datumDesGutachtens = $datumDesGutachtens;
        
        return $this;
    }
    /**
     * Get artDesGutachtens value
     * @return \THAG\XKfz\StructType\Code_ArtDesGutachtens|null
     */
    public function getArtDesGutachtens(): ?\THAG\XKfz\StructType\Code_ArtDesGutachtens
    {
        return $this->artDesGutachtens;
    }
    /**
     * Set artDesGutachtens value
     * @param \THAG\XKfz\StructType\Code_ArtDesGutachtens $artDesGutachtens
     * @return \THAG\XKfz\StructType\Type_Gutachten
     */
    public function setArtDesGutachtens(?\THAG\XKfz\StructType\Code_ArtDesGutachtens $artDesGutachtens = null): self
    {
        $this->artDesGutachtens = $artDesGutachtens;
        
        return $this;
    }
}
