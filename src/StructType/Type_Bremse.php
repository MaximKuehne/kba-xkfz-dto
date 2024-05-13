<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Bremse StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Bremse extends AbstractStructBase
{
    /**
     * The artDerBremse
     * @var \THAG\XKfz\StructType\Code_ArtDerBremse|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerBremse $artDerBremse = null;
    /**
     * The positionDerBremse
     * @var \THAG\XKfz\StructType\Code_PositionDerBremse|null
     */
    public ?\THAG\XKfz\StructType\Code_PositionDerBremse $positionDerBremse = null;
    /**
     * The bremskraft
     * @var float|null
     */
    public ?float $bremskraft = null;
    /**
     * Constructor method for Type.Bremse
     * @uses Type_Bremse::setArtDerBremse()
     * @uses Type_Bremse::setPositionDerBremse()
     * @uses Type_Bremse::setBremskraft()
     * @param \THAG\XKfz\StructType\Code_ArtDerBremse $artDerBremse
     * @param \THAG\XKfz\StructType\Code_PositionDerBremse $positionDerBremse
     * @param float $bremskraft
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ArtDerBremse $artDerBremse = null, ?\THAG\XKfz\StructType\Code_PositionDerBremse $positionDerBremse = null, ?float $bremskraft = null)
    {
        $this
            ->setArtDerBremse($artDerBremse)
            ->setPositionDerBremse($positionDerBremse)
            ->setBremskraft($bremskraft);
    }
    /**
     * Get artDerBremse value
     * @return \THAG\XKfz\StructType\Code_ArtDerBremse|null
     */
    public function getArtDerBremse(): ?\THAG\XKfz\StructType\Code_ArtDerBremse
    {
        return $this->artDerBremse;
    }
    /**
     * Set artDerBremse value
     * @param \THAG\XKfz\StructType\Code_ArtDerBremse $artDerBremse
     * @return \THAG\XKfz\StructType\Type_Bremse
     */
    public function setArtDerBremse(?\THAG\XKfz\StructType\Code_ArtDerBremse $artDerBremse = null): self
    {
        $this->artDerBremse = $artDerBremse;
        
        return $this;
    }
    /**
     * Get positionDerBremse value
     * @return \THAG\XKfz\StructType\Code_PositionDerBremse|null
     */
    public function getPositionDerBremse(): ?\THAG\XKfz\StructType\Code_PositionDerBremse
    {
        return $this->positionDerBremse;
    }
    /**
     * Set positionDerBremse value
     * @param \THAG\XKfz\StructType\Code_PositionDerBremse $positionDerBremse
     * @return \THAG\XKfz\StructType\Type_Bremse
     */
    public function setPositionDerBremse(?\THAG\XKfz\StructType\Code_PositionDerBremse $positionDerBremse = null): self
    {
        $this->positionDerBremse = $positionDerBremse;
        
        return $this;
    }
    /**
     * Get bremskraft value
     * @return float|null
     */
    public function getBremskraft(): ?float
    {
        return $this->bremskraft;
    }
    /**
     * Set bremskraft value
     * @param float $bremskraft
     * @return \THAG\XKfz\StructType\Type_Bremse
     */
    public function setBremskraft(?float $bremskraft = null): self
    {
        $this->bremskraft = $bremskraft;
        
        return $this;
    }
}
