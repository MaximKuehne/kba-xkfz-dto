<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypStruktur StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypStruktur extends AbstractStructBase
{
    /**
     * The ListeDatentypStrukturEintrag
     */
    public ?\THAG\XKfz\StructType\ListeDatentypStrukturEintrag $ListeDatentypStrukturEintrag = null;

    /**
     * Constructor method for DatentypStruktur
     *
     * @uses DatentypStruktur::setListeDatentypStrukturEintrag()
     */
    public function __construct(?\THAG\XKfz\StructType\ListeDatentypStrukturEintrag $listeDatentypStrukturEintrag = null)
    {
        $this
            ->setListeDatentypStrukturEintrag($listeDatentypStrukturEintrag);
    }

    /**
     * Get ListeDatentypStrukturEintrag value
     */
    public function getListeDatentypStrukturEintrag(): ?\THAG\XKfz\StructType\ListeDatentypStrukturEintrag
    {
        return $this->ListeDatentypStrukturEintrag;
    }

    /**
     * Set ListeDatentypStrukturEintrag value
     */
    public function setListeDatentypStrukturEintrag(?\THAG\XKfz\StructType\ListeDatentypStrukturEintrag $listeDatentypStrukturEintrag = null): self
    {
        $this->ListeDatentypStrukturEintrag = $listeDatentypStrukturEintrag;

        return $this;
    }
}
