<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFeldXmlPfad StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFeldXmlPfad extends AbstractStructBase
{
    /**
     * The FeldXmlPfad
     * @var string|null
     */
    public ?string $FeldXmlPfad = null;
    /**
     * Constructor method for ListeFeldXmlPfad
     * @uses ListeFeldXmlPfad::setFeldXmlPfad()
     * @param string $feldXmlPfad
     */
    public function __construct(?string $feldXmlPfad = null)
    {
        $this
            ->setFeldXmlPfad($feldXmlPfad);
    }
    /**
     * Get FeldXmlPfad value
     * @return string|null
     */
    public function getFeldXmlPfad(): ?string
    {
        return $this->FeldXmlPfad;
    }
    /**
     * Set FeldXmlPfad value
     * @param string $feldXmlPfad
     * @return \THAG\XKfz\StructType\ListeFeldXmlPfad
     */
    public function setFeldXmlPfad(?string $feldXmlPfad = null): self
    {
        $this->FeldXmlPfad = $feldXmlPfad;
        
        return $this;
    }
}
