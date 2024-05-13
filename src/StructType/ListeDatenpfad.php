<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeDatenpfad StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeDatenpfad extends AbstractStructBase
{
    /**
     * The Datenpfad
     */
    public ?string $Datenpfad = null;

    /**
     * Constructor method for ListeDatenpfad
     *
     * @uses ListeDatenpfad::setDatenpfad()
     */
    public function __construct(?string $datenpfad = null)
    {
        $this
            ->setDatenpfad($datenpfad);
    }

    /**
     * Get Datenpfad value
     */
    public function getDatenpfad(): ?string
    {
        return $this->Datenpfad;
    }

    /**
     * Set Datenpfad value
     */
    public function setDatenpfad(?string $datenpfad = null): self
    {
        $this->Datenpfad = $datenpfad;

        return $this;
    }
}
