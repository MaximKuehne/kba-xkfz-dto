<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogistikEmpfaenger.ListeEmpfangsberechtigt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class LogistikEmpfaenger_ListeEmpfangsberechtigt extends AbstractStructBase
{
    /**
     * The Empfangsberechtigt
     */
    public ?string $Empfangsberechtigt = null;

    /**
     * Constructor method for LogistikEmpfaenger.ListeEmpfangsberechtigt
     *
     * @uses LogistikEmpfaenger_ListeEmpfangsberechtigt::setEmpfangsberechtigt()
     */
    public function __construct(?string $empfangsberechtigt = null)
    {
        $this
            ->setEmpfangsberechtigt($empfangsberechtigt);
    }

    /**
     * Get Empfangsberechtigt value
     */
    public function getEmpfangsberechtigt(): ?string
    {
        return $this->Empfangsberechtigt;
    }

    /**
     * Set Empfangsberechtigt value
     */
    public function setEmpfangsberechtigt(?string $empfangsberechtigt = null): self
    {
        $this->Empfangsberechtigt = $empfangsberechtigt;

        return $this;
    }
}
