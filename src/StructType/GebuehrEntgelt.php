<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GebuehrEntgelt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GebuehrEntgelt extends AbstractStructBase
{
    /**
     * The EntgelteGebuehren
     */
    public ?string $EntgelteGebuehren = null;

    /**
     * The Betrag
     */
    public ?float $Betrag = null;

    /**
     * The ArtPositionEntgeltGebuehrCode
     */
    public ?string $ArtPositionEntgeltGebuehrCode = null;

    /**
     * The ArtPositionEntgeltGebuehrName
     */
    public ?string $ArtPositionEntgeltGebuehrName = null;

    /**
     * Constructor method for GebuehrEntgelt
     *
     * @uses GebuehrEntgelt::setEntgelteGebuehren()
     * @uses GebuehrEntgelt::setBetrag()
     * @uses GebuehrEntgelt::setArtPositionEntgeltGebuehrCode()
     * @uses GebuehrEntgelt::setArtPositionEntgeltGebuehrName()
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
     */
    public function getEntgelteGebuehren(): ?string
    {
        return $this->EntgelteGebuehren;
    }

    /**
     * Set EntgelteGebuehren value
     */
    public function setEntgelteGebuehren(?string $entgelteGebuehren = null): self
    {
        $this->EntgelteGebuehren = $entgelteGebuehren;

        return $this;
    }

    /**
     * Get Betrag value
     */
    public function getBetrag(): ?float
    {
        return $this->Betrag;
    }

    /**
     * Set Betrag value
     */
    public function setBetrag(?float $betrag = null): self
    {
        $this->Betrag = $betrag;

        return $this;
    }

    /**
     * Get ArtPositionEntgeltGebuehrCode value
     */
    public function getArtPositionEntgeltGebuehrCode(): ?string
    {
        return $this->ArtPositionEntgeltGebuehrCode;
    }

    /**
     * Set ArtPositionEntgeltGebuehrCode value
     */
    public function setArtPositionEntgeltGebuehrCode(?string $artPositionEntgeltGebuehrCode = null): self
    {
        $this->ArtPositionEntgeltGebuehrCode = $artPositionEntgeltGebuehrCode;

        return $this;
    }

    /**
     * Get ArtPositionEntgeltGebuehrName value
     */
    public function getArtPositionEntgeltGebuehrName(): ?string
    {
        return $this->ArtPositionEntgeltGebuehrName;
    }

    /**
     * Set ArtPositionEntgeltGebuehrName value
     */
    public function setArtPositionEntgeltGebuehrName(?string $artPositionEntgeltGebuehrName = null): self
    {
        $this->ArtPositionEntgeltGebuehrName = $artPositionEntgeltGebuehrName;

        return $this;
    }
}
