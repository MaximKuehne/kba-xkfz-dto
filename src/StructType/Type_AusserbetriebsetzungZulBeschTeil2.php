<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AusserbetriebsetzungZulBeschTeil2 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AusserbetriebsetzungZulBeschTeil2 extends AbstractStructBase
{
    /**
     * The verbleib
     */
    public ?string $verbleib = null;

    /**
     * Constructor method for Type.AusserbetriebsetzungZulBeschTeil2
     *
     * @uses Type_AusserbetriebsetzungZulBeschTeil2::setVerbleib()
     */
    public function __construct(?string $verbleib = null)
    {
        $this
            ->setVerbleib($verbleib);
    }

    /**
     * Get verbleib value
     */
    public function getVerbleib(): ?string
    {
        return $this->verbleib;
    }

    /**
     * Set verbleib value
     */
    public function setVerbleib(?string $verbleib = null): self
    {
        $this->verbleib = $verbleib;

        return $this;
    }
}
