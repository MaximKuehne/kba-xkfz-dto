<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFeldbezeichnung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFeldbezeichnung extends AbstractStructBase
{
    /**
     * The Feldbezeichnung
     */
    public ?string $Feldbezeichnung = null;

    /**
     * Constructor method for ListeFeldbezeichnung
     *
     * @uses ListeFeldbezeichnung::setFeldbezeichnung()
     */
    public function __construct(?string $feldbezeichnung = null)
    {
        $this
            ->setFeldbezeichnung($feldbezeichnung);
    }

    /**
     * Get Feldbezeichnung value
     */
    public function getFeldbezeichnung(): ?string
    {
        return $this->Feldbezeichnung;
    }

    /**
     * Set Feldbezeichnung value
     */
    public function setFeldbezeichnung(?string $feldbezeichnung = null): self
    {
        $this->Feldbezeichnung = $feldbezeichnung;

        return $this;
    }
}
