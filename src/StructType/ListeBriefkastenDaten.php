<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBriefkastenDaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBriefkastenDaten extends AbstractStructBase
{
    /**
     * The BriefkastenDaten
     */
    public ?\THAG\XKfz\StructType\BriefkastenDaten $BriefkastenDaten = null;

    /**
     * Constructor method for ListeBriefkastenDaten
     *
     * @uses ListeBriefkastenDaten::setBriefkastenDaten()
     */
    public function __construct(?\THAG\XKfz\StructType\BriefkastenDaten $briefkastenDaten = null)
    {
        $this
            ->setBriefkastenDaten($briefkastenDaten);
    }

    /**
     * Get BriefkastenDaten value
     */
    public function getBriefkastenDaten(): ?\THAG\XKfz\StructType\BriefkastenDaten
    {
        return $this->BriefkastenDaten;
    }

    /**
     * Set BriefkastenDaten value
     */
    public function setBriefkastenDaten(?\THAG\XKfz\StructType\BriefkastenDaten $briefkastenDaten = null): self
    {
        $this->BriefkastenDaten = $briefkastenDaten;

        return $this;
    }
}
