<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bonitaetsmerkmal StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bonitaetsmerkmal extends AbstractStructBase
{
    /**
     * The BonitaetsmerkmalCode
     */
    public ?string $BonitaetsmerkmalCode = null;

    /**
     * The BonitaetsmerkmalName
     */
    public ?string $BonitaetsmerkmalName = null;

    /**
     * The BonitaetsmerkmalDaten
     */
    public ?string $BonitaetsmerkmalDaten = null;

    /**
     * Constructor method for Bonitaetsmerkmal
     *
     * @uses Bonitaetsmerkmal::setBonitaetsmerkmalCode()
     * @uses Bonitaetsmerkmal::setBonitaetsmerkmalName()
     * @uses Bonitaetsmerkmal::setBonitaetsmerkmalDaten()
     */
    public function __construct(?string $bonitaetsmerkmalCode = null, ?string $bonitaetsmerkmalName = null, ?string $bonitaetsmerkmalDaten = null)
    {
        $this
            ->setBonitaetsmerkmalCode($bonitaetsmerkmalCode)
            ->setBonitaetsmerkmalName($bonitaetsmerkmalName)
            ->setBonitaetsmerkmalDaten($bonitaetsmerkmalDaten);
    }

    /**
     * Get BonitaetsmerkmalCode value
     */
    public function getBonitaetsmerkmalCode(): ?string
    {
        return $this->BonitaetsmerkmalCode;
    }

    /**
     * Set BonitaetsmerkmalCode value
     */
    public function setBonitaetsmerkmalCode(?string $bonitaetsmerkmalCode = null): self
    {
        $this->BonitaetsmerkmalCode = $bonitaetsmerkmalCode;

        return $this;
    }

    /**
     * Get BonitaetsmerkmalName value
     */
    public function getBonitaetsmerkmalName(): ?string
    {
        return $this->BonitaetsmerkmalName;
    }

    /**
     * Set BonitaetsmerkmalName value
     */
    public function setBonitaetsmerkmalName(?string $bonitaetsmerkmalName = null): self
    {
        $this->BonitaetsmerkmalName = $bonitaetsmerkmalName;

        return $this;
    }

    /**
     * Get BonitaetsmerkmalDaten value
     */
    public function getBonitaetsmerkmalDaten(): ?string
    {
        return $this->BonitaetsmerkmalDaten;
    }

    /**
     * Set BonitaetsmerkmalDaten value
     */
    public function setBonitaetsmerkmalDaten(?string $bonitaetsmerkmalDaten = null): self
    {
        $this->BonitaetsmerkmalDaten = $bonitaetsmerkmalDaten;

        return $this;
    }
}
