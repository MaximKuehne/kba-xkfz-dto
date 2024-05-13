<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBriefkastenDaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBriefkastenDaten extends AbstractStructBase
{
    /**
     * The BriefkastenDaten
     * @var \THAG\XKfz\StructType\BriefkastenDaten|null
     */
    public ?\THAG\XKfz\StructType\BriefkastenDaten $BriefkastenDaten = null;
    /**
     * Constructor method for ListeBriefkastenDaten
     * @uses ListeBriefkastenDaten::setBriefkastenDaten()
     * @param \THAG\XKfz\StructType\BriefkastenDaten $briefkastenDaten
     */
    public function __construct(?\THAG\XKfz\StructType\BriefkastenDaten $briefkastenDaten = null)
    {
        $this
            ->setBriefkastenDaten($briefkastenDaten);
    }
    /**
     * Get BriefkastenDaten value
     * @return \THAG\XKfz\StructType\BriefkastenDaten|null
     */
    public function getBriefkastenDaten(): ?\THAG\XKfz\StructType\BriefkastenDaten
    {
        return $this->BriefkastenDaten;
    }
    /**
     * Set BriefkastenDaten value
     * @param \THAG\XKfz\StructType\BriefkastenDaten $briefkastenDaten
     * @return \THAG\XKfz\StructType\ListeBriefkastenDaten
     */
    public function setBriefkastenDaten(?\THAG\XKfz\StructType\BriefkastenDaten $briefkastenDaten = null): self
    {
        $this->BriefkastenDaten = $briefkastenDaten;
        
        return $this;
    }
}
