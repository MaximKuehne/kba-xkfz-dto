<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeAbweichungPersonendaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeAbweichungPersonendaten extends AbstractStructBase
{
    /**
     * The AbweichungPersonendaten
     * @var string|null
     */
    public ?string $AbweichungPersonendaten = null;
    /**
     * Constructor method for ListeAbweichungPersonendaten
     * @uses ListeAbweichungPersonendaten::setAbweichungPersonendaten()
     * @param string $abweichungPersonendaten
     */
    public function __construct(?string $abweichungPersonendaten = null)
    {
        $this
            ->setAbweichungPersonendaten($abweichungPersonendaten);
    }
    /**
     * Get AbweichungPersonendaten value
     * @return string|null
     */
    public function getAbweichungPersonendaten(): ?string
    {
        return $this->AbweichungPersonendaten;
    }
    /**
     * Set AbweichungPersonendaten value
     * @param string $abweichungPersonendaten
     * @return \THAG\XKfz\StructType\ListeAbweichungPersonendaten
     */
    public function setAbweichungPersonendaten(?string $abweichungPersonendaten = null): self
    {
        $this->AbweichungPersonendaten = $abweichungPersonendaten;
        
        return $this;
    }
}
