<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBekannteBedingungsverletzung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBekannteBedingungsverletzung extends AbstractStructBase
{
    /**
     * The BekannteBedingungsverletzung
     * @var \THAG\XKfz\StructType\BekannteBedingungsverletzung|null
     */
    public ?\THAG\XKfz\StructType\BekannteBedingungsverletzung $BekannteBedingungsverletzung = null;
    /**
     * Constructor method for ListeBekannteBedingungsverletzung
     * @uses ListeBekannteBedingungsverletzung::setBekannteBedingungsverletzung()
     * @param \THAG\XKfz\StructType\BekannteBedingungsverletzung $bekannteBedingungsverletzung
     */
    public function __construct(?\THAG\XKfz\StructType\BekannteBedingungsverletzung $bekannteBedingungsverletzung = null)
    {
        $this
            ->setBekannteBedingungsverletzung($bekannteBedingungsverletzung);
    }
    /**
     * Get BekannteBedingungsverletzung value
     * @return \THAG\XKfz\StructType\BekannteBedingungsverletzung|null
     */
    public function getBekannteBedingungsverletzung(): ?\THAG\XKfz\StructType\BekannteBedingungsverletzung
    {
        return $this->BekannteBedingungsverletzung;
    }
    /**
     * Set BekannteBedingungsverletzung value
     * @param \THAG\XKfz\StructType\BekannteBedingungsverletzung $bekannteBedingungsverletzung
     * @return \THAG\XKfz\StructType\ListeBekannteBedingungsverletzung
     */
    public function setBekannteBedingungsverletzung(?\THAG\XKfz\StructType\BekannteBedingungsverletzung $bekannteBedingungsverletzung = null): self
    {
        $this->BekannteBedingungsverletzung = $bekannteBedingungsverletzung;
        
        return $this;
    }
}
