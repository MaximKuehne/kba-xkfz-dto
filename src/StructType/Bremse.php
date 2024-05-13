<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bremse StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bremse extends AbstractStructBase
{
    /**
     * The Bremskraft
     * @var float|null
     */
    public ?float $Bremskraft = null;
    /**
     * The ArtDerBremseCode
     * @var string|null
     */
    public ?string $ArtDerBremseCode = null;
    /**
     * The ArtDerBremseName
     * @var string|null
     */
    public ?string $ArtDerBremseName = null;
    /**
     * The PositionDerBremseCode
     * @var string|null
     */
    public ?string $PositionDerBremseCode = null;
    /**
     * The PositionDerBremseName
     * @var string|null
     */
    public ?string $PositionDerBremseName = null;
    /**
     * Constructor method for Bremse
     * @uses Bremse::setBremskraft()
     * @uses Bremse::setArtDerBremseCode()
     * @uses Bremse::setArtDerBremseName()
     * @uses Bremse::setPositionDerBremseCode()
     * @uses Bremse::setPositionDerBremseName()
     * @param float $bremskraft
     * @param string $artDerBremseCode
     * @param string $artDerBremseName
     * @param string $positionDerBremseCode
     * @param string $positionDerBremseName
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
     * @return float|null
     */
    public function getBremskraft(): ?float
    {
        return $this->Bremskraft;
    }
    /**
     * Set Bremskraft value
     * @param float $bremskraft
     * @return \THAG\XKfz\StructType\Bremse
     */
    public function setBremskraft(?float $bremskraft = null): self
    {
        $this->Bremskraft = $bremskraft;
        
        return $this;
    }
    /**
     * Get ArtDerBremseCode value
     * @return string|null
     */
    public function getArtDerBremseCode(): ?string
    {
        return $this->ArtDerBremseCode;
    }
    /**
     * Set ArtDerBremseCode value
     * @param string $artDerBremseCode
     * @return \THAG\XKfz\StructType\Bremse
     */
    public function setArtDerBremseCode(?string $artDerBremseCode = null): self
    {
        $this->ArtDerBremseCode = $artDerBremseCode;
        
        return $this;
    }
    /**
     * Get ArtDerBremseName value
     * @return string|null
     */
    public function getArtDerBremseName(): ?string
    {
        return $this->ArtDerBremseName;
    }
    /**
     * Set ArtDerBremseName value
     * @param string $artDerBremseName
     * @return \THAG\XKfz\StructType\Bremse
     */
    public function setArtDerBremseName(?string $artDerBremseName = null): self
    {
        $this->ArtDerBremseName = $artDerBremseName;
        
        return $this;
    }
    /**
     * Get PositionDerBremseCode value
     * @return string|null
     */
    public function getPositionDerBremseCode(): ?string
    {
        return $this->PositionDerBremseCode;
    }
    /**
     * Set PositionDerBremseCode value
     * @param string $positionDerBremseCode
     * @return \THAG\XKfz\StructType\Bremse
     */
    public function setPositionDerBremseCode(?string $positionDerBremseCode = null): self
    {
        $this->PositionDerBremseCode = $positionDerBremseCode;
        
        return $this;
    }
    /**
     * Get PositionDerBremseName value
     * @return string|null
     */
    public function getPositionDerBremseName(): ?string
    {
        return $this->PositionDerBremseName;
    }
    /**
     * Set PositionDerBremseName value
     * @param string $positionDerBremseName
     * @return \THAG\XKfz\StructType\Bremse
     */
    public function setPositionDerBremseName(?string $positionDerBremseName = null): self
    {
        $this->PositionDerBremseName = $positionDerBremseName;
        
        return $this;
    }
}
