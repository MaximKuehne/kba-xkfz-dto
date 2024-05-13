<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFeldauspraegung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFeldauspraegung extends AbstractStructBase
{
    /**
     * The Feldauspraegung
     */
    public ?\THAG\XKfz\StructType\Feldauspraegung $Feldauspraegung = null;

    /**
     * Constructor method for ListeFeldauspraegung
     *
     * @uses ListeFeldauspraegung::setFeldauspraegung()
     */
    public function __construct(?\THAG\XKfz\StructType\Feldauspraegung $feldauspraegung = null)
    {
        $this
            ->setFeldauspraegung($feldauspraegung);
    }

    /**
     * Get Feldauspraegung value
     */
    public function getFeldauspraegung(): ?\THAG\XKfz\StructType\Feldauspraegung
    {
        return $this->Feldauspraegung;
    }

    /**
     * Set Feldauspraegung value
     */
    public function setFeldauspraegung(?\THAG\XKfz\StructType\Feldauspraegung $feldauspraegung = null): self
    {
        $this->Feldauspraegung = $feldauspraegung;

        return $this;
    }
}
