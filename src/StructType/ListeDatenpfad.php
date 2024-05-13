<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeDatenpfad StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeDatenpfad extends AbstractStructBase
{
    /**
     * The Datenpfad
     * @var string|null
     */
    public ?string $Datenpfad = null;
    /**
     * Constructor method for ListeDatenpfad
     * @uses ListeDatenpfad::setDatenpfad()
     * @param string $datenpfad
     */
    public function __construct(?string $datenpfad = null)
    {
        $this
            ->setDatenpfad($datenpfad);
    }
    /**
     * Get Datenpfad value
     * @return string|null
     */
    public function getDatenpfad(): ?string
    {
        return $this->Datenpfad;
    }
    /**
     * Set Datenpfad value
     * @param string $datenpfad
     * @return \THAG\XKfz\StructType\ListeDatenpfad
     */
    public function setDatenpfad(?string $datenpfad = null): self
    {
        $this->Datenpfad = $datenpfad;
        
        return $this;
    }
}
