<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JuristischePerson StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class JuristischePerson extends AbstractStructBase
{
    /**
     * The NameJuristischePerson
     */
    public ?string $NameJuristischePerson = null;

    /**
     * Constructor method for JuristischePerson
     *
     * @uses JuristischePerson::setNameJuristischePerson()
     */
    public function __construct(?string $nameJuristischePerson = null)
    {
        $this
            ->setNameJuristischePerson($nameJuristischePerson);
    }

    /**
     * Get NameJuristischePerson value
     */
    public function getNameJuristischePerson(): ?string
    {
        return $this->NameJuristischePerson;
    }

    /**
     * Set NameJuristischePerson value
     */
    public function setNameJuristischePerson(?string $nameJuristischePerson = null): self
    {
        $this->NameJuristischePerson = $nameJuristischePerson;

        return $this;
    }
}
