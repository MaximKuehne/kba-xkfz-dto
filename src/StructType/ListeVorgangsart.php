<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVorgangsart StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVorgangsart extends AbstractStructBase
{
    /**
     * The Vorgangsart
     * @var string|null
     */
    public ?string $Vorgangsart = null;
    /**
     * Constructor method for ListeVorgangsart
     * @uses ListeVorgangsart::setVorgangsart()
     * @param string $vorgangsart
     */
    public function __construct(?string $vorgangsart = null)
    {
        $this
            ->setVorgangsart($vorgangsart);
    }
    /**
     * Get Vorgangsart value
     * @return string|null
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }
    /**
     * Set Vorgangsart value
     * @param string $vorgangsart
     * @return \THAG\XKfz\StructType\ListeVorgangsart
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;
        
        return $this;
    }
}
