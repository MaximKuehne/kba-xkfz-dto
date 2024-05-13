<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeDatentypStrukturEintrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeDatentypStrukturEintrag extends AbstractStructBase
{
    /**
     * The DatentypStrukturEintrag
     */
    public ?\THAG\XKfz\StructType\DatentypStrukturEintrag $DatentypStrukturEintrag = null;

    /**
     * Constructor method for ListeDatentypStrukturEintrag
     *
     * @uses ListeDatentypStrukturEintrag::setDatentypStrukturEintrag()
     */
    public function __construct(?\THAG\XKfz\StructType\DatentypStrukturEintrag $datentypStrukturEintrag = null)
    {
        $this
            ->setDatentypStrukturEintrag($datentypStrukturEintrag);
    }

    /**
     * Get DatentypStrukturEintrag value
     */
    public function getDatentypStrukturEintrag(): ?\THAG\XKfz\StructType\DatentypStrukturEintrag
    {
        return $this->DatentypStrukturEintrag;
    }

    /**
     * Set DatentypStrukturEintrag value
     */
    public function setDatentypStrukturEintrag(?\THAG\XKfz\StructType\DatentypStrukturEintrag $datentypStrukturEintrag = null): self
    {
        $this->DatentypStrukturEintrag = $datentypStrukturEintrag;

        return $this;
    }
}
