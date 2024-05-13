<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Bremse StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Bremse extends AbstractStructBase
{
    /**
     * The artDerBremse
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerBremse $artDerBremse = null;

    /**
     * The positionDerBremse
     */
    public ?\THAG\XKfz\StructType\Code_PositionDerBremse $positionDerBremse = null;

    /**
     * The bremskraft
     */
    public ?float $bremskraft = null;

    /**
     * Constructor method for Type.Bremse
     *
     * @uses Type_Bremse::setArtDerBremse()
     * @uses Type_Bremse::setPositionDerBremse()
     * @uses Type_Bremse::setBremskraft()
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
     */
    public function getArtDerBremse(): ?\THAG\XKfz\StructType\Code_ArtDerBremse
    {
        return $this->artDerBremse;
    }

    /**
     * Set artDerBremse value
     */
    public function setArtDerBremse(?\THAG\XKfz\StructType\Code_ArtDerBremse $artDerBremse = null): self
    {
        $this->artDerBremse = $artDerBremse;

        return $this;
    }

    /**
     * Get positionDerBremse value
     */
    public function getPositionDerBremse(): ?\THAG\XKfz\StructType\Code_PositionDerBremse
    {
        return $this->positionDerBremse;
    }

    /**
     * Set positionDerBremse value
     */
    public function setPositionDerBremse(?\THAG\XKfz\StructType\Code_PositionDerBremse $positionDerBremse = null): self
    {
        $this->positionDerBremse = $positionDerBremse;

        return $this;
    }

    /**
     * Get bremskraft value
     */
    public function getBremskraft(): ?float
    {
        return $this->bremskraft;
    }

    /**
     * Set bremskraft value
     */
    public function setBremskraft(?float $bremskraft = null): self
    {
        $this->bremskraft = $bremskraft;

        return $this;
    }
}
