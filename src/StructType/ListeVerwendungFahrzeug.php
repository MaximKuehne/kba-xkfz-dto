<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVerwendungFahrzeug StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVerwendungFahrzeug extends AbstractStructBase
{
    /**
     * The VerwendungFahrzeug
     * @var string|null
     */
    public ?string $VerwendungFahrzeug = null;
    /**
     * Constructor method for ListeVerwendungFahrzeug
     * @uses ListeVerwendungFahrzeug::setVerwendungFahrzeug()
     * @param string $verwendungFahrzeug
     */
    public function __construct(?string $verwendungFahrzeug = null)
    {
        $this
            ->setVerwendungFahrzeug($verwendungFahrzeug);
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
     * @return \THAG\XKfz\StructType\ListeVerwendungFahrzeug
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;
        
        return $this;
    }
}
