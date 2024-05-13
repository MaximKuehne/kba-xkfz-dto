<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeDatentypCodeDefinition StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeDatentypCodeDefinition extends AbstractStructBase
{
    /**
     * The DatentypCodeDefinition
     */
    public ?\THAG\XKfz\StructType\DatentypCodeDefinition $DatentypCodeDefinition = null;

    /**
     * Constructor method for ListeDatentypCodeDefinition
     *
     * @uses ListeDatentypCodeDefinition::setDatentypCodeDefinition()
     */
    public function __construct(?\THAG\XKfz\StructType\DatentypCodeDefinition $datentypCodeDefinition = null)
    {
        $this
            ->setDatentypCodeDefinition($datentypCodeDefinition);
    }

    /**
     * Get DatentypCodeDefinition value
     */
    public function getDatentypCodeDefinition(): ?\THAG\XKfz\StructType\DatentypCodeDefinition
    {
        return $this->DatentypCodeDefinition;
    }

    /**
     * Set DatentypCodeDefinition value
     */
    public function setDatentypCodeDefinition(?\THAG\XKfz\StructType\DatentypCodeDefinition $datentypCodeDefinition = null): self
    {
        $this->DatentypCodeDefinition = $datentypCodeDefinition;

        return $this;
    }
}
