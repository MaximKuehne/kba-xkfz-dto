<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeKommunikationspartner StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeKommunikationspartner extends AbstractStructBase
{
    /**
     * The Kommunikationspartner
     * @var \THAG\XKfz\StructType\Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Kommunikationspartner $Kommunikationspartner = null;
    /**
     * Constructor method for ListeKommunikationspartner
     * @uses ListeKommunikationspartner::setKommunikationspartner()
     * @param \THAG\XKfz\StructType\Kommunikationspartner $kommunikationspartner
     */
    public function __construct(?\THAG\XKfz\StructType\Kommunikationspartner $kommunikationspartner = null)
    {
        $this
            ->setKommunikationspartner($kommunikationspartner);
    }
    /**
     * Get Kommunikationspartner value
     * @return \THAG\XKfz\StructType\Kommunikationspartner|null
     */
    public function getKommunikationspartner(): ?\THAG\XKfz\StructType\Kommunikationspartner
    {
        return $this->Kommunikationspartner;
    }
    /**
     * Set Kommunikationspartner value
     * @param \THAG\XKfz\StructType\Kommunikationspartner $kommunikationspartner
     * @return \THAG\XKfz\StructType\ListeKommunikationspartner
     */
    public function setKommunikationspartner(?\THAG\XKfz\StructType\Kommunikationspartner $kommunikationspartner = null): self
    {
        $this->Kommunikationspartner = $kommunikationspartner;
        
        return $this;
    }
}
