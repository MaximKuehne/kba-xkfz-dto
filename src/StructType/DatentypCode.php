<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypCode StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypCode extends AbstractStructBase
{
    /**
     * The ListeDatentypCodeDefinition
     */
    public ?\THAG\XKfz\StructType\ListeDatentypCodeDefinition $ListeDatentypCodeDefinition = null;

    /**
     * The DatentypCodeDatenQuelle
     */
    public ?\THAG\XKfz\StructType\DatentypCodeDatenQuelle $DatentypCodeDatenQuelle = null;

    /**
     * The DatentypCodeDefault
     */
    public ?string $DatentypCodeDefault = null;

    /**
     * Constructor method for DatentypCode
     *
     * @uses DatentypCode::setListeDatentypCodeDefinition()
     * @uses DatentypCode::setDatentypCodeDatenQuelle()
     * @uses DatentypCode::setDatentypCodeDefault()
     */
    public function __construct(?\THAG\XKfz\StructType\ListeDatentypCodeDefinition $listeDatentypCodeDefinition = null, ?\THAG\XKfz\StructType\DatentypCodeDatenQuelle $datentypCodeDatenQuelle = null, ?string $datentypCodeDefault = null)
    {
        $this
            ->setListeDatentypCodeDefinition($listeDatentypCodeDefinition)
            ->setDatentypCodeDatenQuelle($datentypCodeDatenQuelle)
            ->setDatentypCodeDefault($datentypCodeDefault);
    }

    /**
     * Get ListeDatentypCodeDefinition value
     */
    public function getListeDatentypCodeDefinition(): ?\THAG\XKfz\StructType\ListeDatentypCodeDefinition
    {
        return $this->ListeDatentypCodeDefinition;
    }

    /**
     * Set ListeDatentypCodeDefinition value
     */
    public function setListeDatentypCodeDefinition(?\THAG\XKfz\StructType\ListeDatentypCodeDefinition $listeDatentypCodeDefinition = null): self
    {
        $this->ListeDatentypCodeDefinition = $listeDatentypCodeDefinition;

        return $this;
    }

    /**
     * Get DatentypCodeDatenQuelle value
     */
    public function getDatentypCodeDatenQuelle(): ?\THAG\XKfz\StructType\DatentypCodeDatenQuelle
    {
        return $this->DatentypCodeDatenQuelle;
    }

    /**
     * Set DatentypCodeDatenQuelle value
     */
    public function setDatentypCodeDatenQuelle(?\THAG\XKfz\StructType\DatentypCodeDatenQuelle $datentypCodeDatenQuelle = null): self
    {
        $this->DatentypCodeDatenQuelle = $datentypCodeDatenQuelle;

        return $this;
    }

    /**
     * Get DatentypCodeDefault value
     */
    public function getDatentypCodeDefault(): ?string
    {
        return $this->DatentypCodeDefault;
    }

    /**
     * Set DatentypCodeDefault value
     */
    public function setDatentypCodeDefault(?string $datentypCodeDefault = null): self
    {
        $this->DatentypCodeDefault = $datentypCodeDefault;

        return $this;
    }
}
