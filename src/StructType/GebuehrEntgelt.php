<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GebuehrEntgelt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GebuehrEntgelt extends AbstractStructBase
{
    /**
     * The EntgelteGebuehren
     * @var string|null
     */
    public ?string $EntgelteGebuehren = null;
    /**
     * The Betrag
     * @var float|null
     */
    public ?float $Betrag = null;
    /**
     * The ArtPositionEntgeltGebuehrCode
     * @var string|null
     */
    public ?string $ArtPositionEntgeltGebuehrCode = null;
    /**
     * The ArtPositionEntgeltGebuehrName
     * @var string|null
     */
    public ?string $ArtPositionEntgeltGebuehrName = null;
    /**
     * Constructor method for GebuehrEntgelt
     * @uses GebuehrEntgelt::setEntgelteGebuehren()
     * @uses GebuehrEntgelt::setBetrag()
     * @uses GebuehrEntgelt::setArtPositionEntgeltGebuehrCode()
     * @uses GebuehrEntgelt::setArtPositionEntgeltGebuehrName()
     * @param string $entgelteGebuehren
     * @param float $betrag
     * @param string $artPositionEntgeltGebuehrCode
     * @param string $artPositionEntgeltGebuehrName
     */
    public function __construct(?string $entgelteGebuehren = null, ?float $betrag = null, ?string $artPositionEntgeltGebuehrCode = null, ?string $artPositionEntgeltGebuehrName = null)
    {
        $this
            ->setEntgelteGebuehren($entgelteGebuehren)
            ->setBetrag($betrag)
            ->setArtPositionEntgeltGebuehrCode($artPositionEntgeltGebuehrCode)
            ->setArtPositionEntgeltGebuehrName($artPositionEntgeltGebuehrName);
    }
    /**
     * Get EntgelteGebuehren value
     * @return string|null
     */
    public function getEntgelteGebuehren(): ?string
    {
        return $this->EntgelteGebuehren;
    }
    /**
     * Set EntgelteGebuehren value
     * @param string $entgelteGebuehren
     * @return \THAG\XKfz\StructType\GebuehrEntgelt
     */
    public function setEntgelteGebuehren(?string $entgelteGebuehren = null): self
    {
        $this->EntgelteGebuehren = $entgelteGebuehren;
        
        return $this;
    }
    /**
     * Get Betrag value
     * @return float|null
     */
    public function getBetrag(): ?float
    {
        return $this->Betrag;
    }
    /**
     * Set Betrag value
     * @param float $betrag
     * @return \THAG\XKfz\StructType\GebuehrEntgelt
     */
    public function setBetrag(?float $betrag = null): self
    {
        $this->Betrag = $betrag;
        
        return $this;
    }
    /**
     * Get ArtPositionEntgeltGebuehrCode value
     * @return string|null
     */
    public function getArtPositionEntgeltGebuehrCode(): ?string
    {
        return $this->ArtPositionEntgeltGebuehrCode;
    }
    /**
     * Set ArtPositionEntgeltGebuehrCode value
     * @param string $artPositionEntgeltGebuehrCode
     * @return \THAG\XKfz\StructType\GebuehrEntgelt
     */
    public function setArtPositionEntgeltGebuehrCode(?string $artPositionEntgeltGebuehrCode = null): self
    {
        $this->ArtPositionEntgeltGebuehrCode = $artPositionEntgeltGebuehrCode;
        
        return $this;
    }
    /**
     * Get ArtPositionEntgeltGebuehrName value
     * @return string|null
     */
    public function getArtPositionEntgeltGebuehrName(): ?string
    {
        return $this->ArtPositionEntgeltGebuehrName;
    }
    /**
     * Set ArtPositionEntgeltGebuehrName value
     * @param string $artPositionEntgeltGebuehrName
     * @return \THAG\XKfz\StructType\GebuehrEntgelt
     */
    public function setArtPositionEntgeltGebuehrName(?string $artPositionEntgeltGebuehrName = null): self
    {
        $this->ArtPositionEntgeltGebuehrName = $artPositionEntgeltGebuehrName;
        
        return $this;
    }
}
