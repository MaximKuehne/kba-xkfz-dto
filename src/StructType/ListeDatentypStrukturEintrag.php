<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeDatentypStrukturEintrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeDatentypStrukturEintrag extends AbstractStructBase
{
    /**
     * The DatentypStrukturEintrag
     * @var \THAG\XKfz\StructType\DatentypStrukturEintrag|null
     */
    public ?\THAG\XKfz\StructType\DatentypStrukturEintrag $DatentypStrukturEintrag = null;
    /**
     * Constructor method for ListeDatentypStrukturEintrag
     * @uses ListeDatentypStrukturEintrag::setDatentypStrukturEintrag()
     * @param \THAG\XKfz\StructType\DatentypStrukturEintrag $datentypStrukturEintrag
     */
    public function __construct(?\THAG\XKfz\StructType\DatentypStrukturEintrag $datentypStrukturEintrag = null)
    {
        $this
            ->setDatentypStrukturEintrag($datentypStrukturEintrag);
    }
    /**
     * Get DatentypStrukturEintrag value
     * @return \THAG\XKfz\StructType\DatentypStrukturEintrag|null
     */
    public function getDatentypStrukturEintrag(): ?\THAG\XKfz\StructType\DatentypStrukturEintrag
    {
        return $this->DatentypStrukturEintrag;
    }
    /**
     * Set DatentypStrukturEintrag value
     * @param \THAG\XKfz\StructType\DatentypStrukturEintrag $datentypStrukturEintrag
     * @return \THAG\XKfz\StructType\ListeDatentypStrukturEintrag
     */
    public function setDatentypStrukturEintrag(?\THAG\XKfz\StructType\DatentypStrukturEintrag $datentypStrukturEintrag = null): self
    {
        $this->DatentypStrukturEintrag = $datentypStrukturEintrag;
        
        return $this;
    }
}
