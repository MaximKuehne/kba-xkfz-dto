<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteFahrzeugverwendung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteFahrzeugverwendung extends AbstractStructBase
{
    /**
     * The VerwendungFahrzeug
     */
    public ?string $VerwendungFahrzeug = null;

    /**
     * The merkmalAutoAbo
     */
    public ?bool $merkmalAutoAbo = null;

    /**
     * Constructor method for Type.VorgangskomponenteFahrzeugverwendung
     *
     * @uses Type_VorgangskomponenteFahrzeugverwendung::setVerwendungFahrzeug()
     * @uses Type_VorgangskomponenteFahrzeugverwendung::setMerkmalAutoAbo()
     */
    public function __construct(?string $verwendungFahrzeug = null, ?bool $merkmalAutoAbo = null)
    {
        $this
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setMerkmalAutoAbo($merkmalAutoAbo);
    }

    /**
     * Get VerwendungFahrzeug value
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }

    /**
     * Set VerwendungFahrzeug value
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;

        return $this;
    }

    /**
     * Get merkmalAutoAbo value
     */
    public function getMerkmalAutoAbo(): ?bool
    {
        return $this->merkmalAutoAbo;
    }

    /**
     * Set merkmalAutoAbo value
     */
    public function setMerkmalAutoAbo(?bool $merkmalAutoAbo = null): self
    {
        $this->merkmalAutoAbo = $merkmalAutoAbo;

        return $this;
    }
}
