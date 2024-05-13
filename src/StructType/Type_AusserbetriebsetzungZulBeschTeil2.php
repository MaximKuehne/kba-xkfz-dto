<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AusserbetriebsetzungZulBeschTeil2 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AusserbetriebsetzungZulBeschTeil2 extends AbstractStructBase
{
    /**
     * The verbleib
     * @var string|null
     */
    public ?string $verbleib = null;
    /**
     * Constructor method for Type.AusserbetriebsetzungZulBeschTeil2
     * @uses Type_AusserbetriebsetzungZulBeschTeil2::setVerbleib()
     * @param string $verbleib
     */
    public function __construct(?string $verbleib = null)
    {
        $this
            ->setVerbleib($verbleib);
    }
    /**
     * Get verbleib value
     * @return string|null
     */
    public function getVerbleib(): ?string
    {
        return $this->verbleib;
    }
    /**
     * Set verbleib value
     * @param string $verbleib
     * @return \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2
     */
    public function setVerbleib(?string $verbleib = null): self
    {
        $this->verbleib = $verbleib;
        
        return $this;
    }
}
