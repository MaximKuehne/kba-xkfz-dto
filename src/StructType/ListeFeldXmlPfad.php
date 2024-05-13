<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFeldXmlPfad StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFeldXmlPfad extends AbstractStructBase
{
    /**
     * The FeldXmlPfad
     */
    public ?string $FeldXmlPfad = null;

    /**
     * Constructor method for ListeFeldXmlPfad
     *
     * @uses ListeFeldXmlPfad::setFeldXmlPfad()
     */
    public function __construct(?string $feldXmlPfad = null)
    {
        $this
            ->setFeldXmlPfad($feldXmlPfad);
    }

    /**
     * Get FeldXmlPfad value
     */
    public function getFeldXmlPfad(): ?string
    {
        return $this->FeldXmlPfad;
    }

    /**
     * Set FeldXmlPfad value
     */
    public function setFeldXmlPfad(?string $feldXmlPfad = null): self
    {
        $this->FeldXmlPfad = $feldXmlPfad;

        return $this;
    }
}
