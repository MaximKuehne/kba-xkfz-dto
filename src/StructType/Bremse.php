<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bremse StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bremse extends AbstractStructBase
{
    /**
     * The Bremskraft
     */
    public ?float $Bremskraft = null;

    /**
     * The ArtDerBremseCode
     */
    public ?string $ArtDerBremseCode = null;

    /**
     * The ArtDerBremseName
     */
    public ?string $ArtDerBremseName = null;

    /**
     * The PositionDerBremseCode
     */
    public ?string $PositionDerBremseCode = null;

    /**
     * The PositionDerBremseName
     */
    public ?string $PositionDerBremseName = null;

    /**
     * Constructor method for Bremse
     *
     * @uses Bremse::setBremskraft()
     * @uses Bremse::setArtDerBremseCode()
     * @uses Bremse::setArtDerBremseName()
     * @uses Bremse::setPositionDerBremseCode()
     * @uses Bremse::setPositionDerBremseName()
     */
    public function __construct(?float $bremskraft = null, ?string $artDerBremseCode = null, ?string $artDerBremseName = null, ?string $positionDerBremseCode = null, ?string $positionDerBremseName = null)
    {
        $this
            ->setBremskraft($bremskraft)
            ->setArtDerBremseCode($artDerBremseCode)
            ->setArtDerBremseName($artDerBremseName)
            ->setPositionDerBremseCode($positionDerBremseCode)
            ->setPositionDerBremseName($positionDerBremseName);
    }

    /**
     * Get Bremskraft value
     */
    public function getBremskraft(): ?float
    {
        return $this->Bremskraft;
    }

    /**
     * Set Bremskraft value
     */
    public function setBremskraft(?float $bremskraft = null): self
    {
        $this->Bremskraft = $bremskraft;

        return $this;
    }

    /**
     * Get ArtDerBremseCode value
     */
    public function getArtDerBremseCode(): ?string
    {
        return $this->ArtDerBremseCode;
    }

    /**
     * Set ArtDerBremseCode value
     */
    public function setArtDerBremseCode(?string $artDerBremseCode = null): self
    {
        $this->ArtDerBremseCode = $artDerBremseCode;

        return $this;
    }

    /**
     * Get ArtDerBremseName value
     */
    public function getArtDerBremseName(): ?string
    {
        return $this->ArtDerBremseName;
    }

    /**
     * Set ArtDerBremseName value
     */
    public function setArtDerBremseName(?string $artDerBremseName = null): self
    {
        $this->ArtDerBremseName = $artDerBremseName;

        return $this;
    }

    /**
     * Get PositionDerBremseCode value
     */
    public function getPositionDerBremseCode(): ?string
    {
        return $this->PositionDerBremseCode;
    }

    /**
     * Set PositionDerBremseCode value
     */
    public function setPositionDerBremseCode(?string $positionDerBremseCode = null): self
    {
        $this->PositionDerBremseCode = $positionDerBremseCode;

        return $this;
    }

    /**
     * Get PositionDerBremseName value
     */
    public function getPositionDerBremseName(): ?string
    {
        return $this->PositionDerBremseName;
    }

    /**
     * Set PositionDerBremseName value
     */
    public function setPositionDerBremseName(?string $positionDerBremseName = null): self
    {
        $this->PositionDerBremseName = $positionDerBremseName;

        return $this;
    }
}
