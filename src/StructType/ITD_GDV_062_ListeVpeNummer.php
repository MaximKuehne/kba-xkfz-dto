<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITD_GDV_062.ListeVpeNummer StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ITD_GDV_062_ListeVpeNummer extends AbstractStructBase
{
    /**
     * The VpeNummer
     */
    public ?string $VpeNummer = null;

    /**
     * Constructor method for ITD_GDV_062.ListeVpeNummer
     *
     * @uses ITD_GDV_062_ListeVpeNummer::setVpeNummer()
     */
    public function __construct(?string $vpeNummer = null)
    {
        $this
            ->setVpeNummer($vpeNummer);
    }

    /**
     * Get VpeNummer value
     */
    public function getVpeNummer(): ?string
    {
        return $this->VpeNummer;
    }

    /**
     * Set VpeNummer value
     */
    public function setVpeNummer(?string $vpeNummer = null): self
    {
        $this->VpeNummer = $vpeNummer;

        return $this;
    }
}
