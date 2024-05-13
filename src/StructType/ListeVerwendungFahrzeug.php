<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVerwendungFahrzeug StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVerwendungFahrzeug extends AbstractStructBase
{
    /**
     * The VerwendungFahrzeug
     */
    public ?string $VerwendungFahrzeug = null;

    /**
     * Constructor method for ListeVerwendungFahrzeug
     *
     * @uses ListeVerwendungFahrzeug::setVerwendungFahrzeug()
     */
    public function __construct(?string $verwendungFahrzeug = null)
    {
        $this
            ->setVerwendungFahrzeug($verwendungFahrzeug);
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
}
