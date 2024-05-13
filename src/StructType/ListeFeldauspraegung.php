<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFeldauspraegung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFeldauspraegung extends AbstractStructBase
{
    /**
     * The Feldauspraegung
     * @var \THAG\XKfz\StructType\Feldauspraegung|null
     */
    public ?\THAG\XKfz\StructType\Feldauspraegung $Feldauspraegung = null;
    /**
     * Constructor method for ListeFeldauspraegung
     * @uses ListeFeldauspraegung::setFeldauspraegung()
     * @param \THAG\XKfz\StructType\Feldauspraegung $feldauspraegung
     */
    public function __construct(?\THAG\XKfz\StructType\Feldauspraegung $feldauspraegung = null)
    {
        $this
            ->setFeldauspraegung($feldauspraegung);
    }
    /**
     * Get Feldauspraegung value
     * @return \THAG\XKfz\StructType\Feldauspraegung|null
     */
    public function getFeldauspraegung(): ?\THAG\XKfz\StructType\Feldauspraegung
    {
        return $this->Feldauspraegung;
    }
    /**
     * Set Feldauspraegung value
     * @param \THAG\XKfz\StructType\Feldauspraegung $feldauspraegung
     * @return \THAG\XKfz\StructType\ListeFeldauspraegung
     */
    public function setFeldauspraegung(?\THAG\XKfz\StructType\Feldauspraegung $feldauspraegung = null): self
    {
        $this->Feldauspraegung = $feldauspraegung;
        
        return $this;
    }
}
