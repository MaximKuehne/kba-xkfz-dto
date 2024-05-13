<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFeldbezeichnung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFeldbezeichnung extends AbstractStructBase
{
    /**
     * The Feldbezeichnung
     * @var string|null
     */
    public ?string $Feldbezeichnung = null;
    /**
     * Constructor method for ListeFeldbezeichnung
     * @uses ListeFeldbezeichnung::setFeldbezeichnung()
     * @param string $feldbezeichnung
     */
    public function __construct(?string $feldbezeichnung = null)
    {
        $this
            ->setFeldbezeichnung($feldbezeichnung);
    }
    /**
     * Get Feldbezeichnung value
     * @return string|null
     */
    public function getFeldbezeichnung(): ?string
    {
        return $this->Feldbezeichnung;
    }
    /**
     * Set Feldbezeichnung value
     * @param string $feldbezeichnung
     * @return \THAG\XKfz\StructType\ListeFeldbezeichnung
     */
    public function setFeldbezeichnung(?string $feldbezeichnung = null): self
    {
        $this->Feldbezeichnung = $feldbezeichnung;
        
        return $this;
    }
}
