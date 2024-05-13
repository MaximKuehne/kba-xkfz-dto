<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITD_GDV_062.ListeVpeNummer StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ITD_GDV_062_ListeVpeNummer extends AbstractStructBase
{
    /**
     * The VpeNummer
     * @var string|null
     */
    public ?string $VpeNummer = null;
    /**
     * Constructor method for ITD_GDV_062.ListeVpeNummer
     * @uses ITD_GDV_062_ListeVpeNummer::setVpeNummer()
     * @param string $vpeNummer
     */
    public function __construct(?string $vpeNummer = null)
    {
        $this
            ->setVpeNummer($vpeNummer);
    }
    /**
     * Get VpeNummer value
     * @return string|null
     */
    public function getVpeNummer(): ?string
    {
        return $this->VpeNummer;
    }
    /**
     * Set VpeNummer value
     * @param string $vpeNummer
     * @return \THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer
     */
    public function setVpeNummer(?string $vpeNummer = null): self
    {
        $this->VpeNummer = $vpeNummer;
        
        return $this;
    }
}
