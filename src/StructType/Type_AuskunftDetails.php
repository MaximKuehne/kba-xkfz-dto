<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AuskunftDetails StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AuskunftDetails extends AbstractStructBase
{
    /**
     * The anfragedaten
     * @var string|null
     */
    public ?string $anfragedaten = null;
    /**
     * Constructor method for Type.AuskunftDetails
     * @uses Type_AuskunftDetails::setAnfragedaten()
     * @param string $anfragedaten
     */
    public function __construct(?string $anfragedaten = null)
    {
        $this
            ->setAnfragedaten($anfragedaten);
    }
    /**
     * Get anfragedaten value
     * @return string|null
     */
    public function getAnfragedaten(): ?string
    {
        return $this->anfragedaten;
    }
    /**
     * Set anfragedaten value
     * @param string $anfragedaten
     * @return \THAG\XKfz\StructType\Type_AuskunftDetails
     */
    public function setAnfragedaten(?string $anfragedaten = null): self
    {
        $this->anfragedaten = $anfragedaten;
        
        return $this;
    }
}
