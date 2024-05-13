<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteFahrzeugverwendung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteFahrzeugverwendung extends AbstractStructBase
{
    /**
     * The VerwendungFahrzeug
     * @var string|null
     */
    public ?string $VerwendungFahrzeug = null;
    /**
     * The merkmalAutoAbo
     * @var bool|null
     */
    public ?bool $merkmalAutoAbo = null;
    /**
     * Constructor method for Type.VorgangskomponenteFahrzeugverwendung
     * @uses Type_VorgangskomponenteFahrzeugverwendung::setVerwendungFahrzeug()
     * @uses Type_VorgangskomponenteFahrzeugverwendung::setMerkmalAutoAbo()
     * @param string $verwendungFahrzeug
     * @param bool $merkmalAutoAbo
     */
    public function __construct(?string $verwendungFahrzeug = null, ?bool $merkmalAutoAbo = null)
    {
        $this
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setMerkmalAutoAbo($merkmalAutoAbo);
    }
    /**
     * Get VerwendungFahrzeug value
     * @return string|null
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }
    /**
     * Set VerwendungFahrzeug value
     * @param string $verwendungFahrzeug
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;
        
        return $this;
    }
    /**
     * Get merkmalAutoAbo value
     * @return bool|null
     */
    public function getMerkmalAutoAbo(): ?bool
    {
        return $this->merkmalAutoAbo;
    }
    /**
     * Set merkmalAutoAbo value
     * @param bool $merkmalAutoAbo
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung
     */
    public function setMerkmalAutoAbo(?bool $merkmalAutoAbo = null): self
    {
        $this->merkmalAutoAbo = $merkmalAutoAbo;
        
        return $this;
    }
}
