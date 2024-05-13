<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypStruktur StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypStruktur extends AbstractStructBase
{
    /**
     * The ListeDatentypStrukturEintrag
     * @var \THAG\XKfz\StructType\ListeDatentypStrukturEintrag|null
     */
    public ?\THAG\XKfz\StructType\ListeDatentypStrukturEintrag $ListeDatentypStrukturEintrag = null;
    /**
     * Constructor method for DatentypStruktur
     * @uses DatentypStruktur::setListeDatentypStrukturEintrag()
     * @param \THAG\XKfz\StructType\ListeDatentypStrukturEintrag $listeDatentypStrukturEintrag
     */
    public function __construct(?\THAG\XKfz\StructType\ListeDatentypStrukturEintrag $listeDatentypStrukturEintrag = null)
    {
        $this
            ->setListeDatentypStrukturEintrag($listeDatentypStrukturEintrag);
    }
    /**
     * Get ListeDatentypStrukturEintrag value
     * @return \THAG\XKfz\StructType\ListeDatentypStrukturEintrag|null
     */
    public function getListeDatentypStrukturEintrag(): ?\THAG\XKfz\StructType\ListeDatentypStrukturEintrag
    {
        return $this->ListeDatentypStrukturEintrag;
    }
    /**
     * Set ListeDatentypStrukturEintrag value
     * @param \THAG\XKfz\StructType\ListeDatentypStrukturEintrag $listeDatentypStrukturEintrag
     * @return \THAG\XKfz\StructType\DatentypStruktur
     */
    public function setListeDatentypStrukturEintrag(?\THAG\XKfz\StructType\ListeDatentypStrukturEintrag $listeDatentypStrukturEintrag = null): self
    {
        $this->ListeDatentypStrukturEintrag = $listeDatentypStrukturEintrag;
        
        return $this;
    }
}
