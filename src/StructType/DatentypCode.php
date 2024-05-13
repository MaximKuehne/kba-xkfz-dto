<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypCode StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypCode extends AbstractStructBase
{
    /**
     * The ListeDatentypCodeDefinition
     * @var \THAG\XKfz\StructType\ListeDatentypCodeDefinition|null
     */
    public ?\THAG\XKfz\StructType\ListeDatentypCodeDefinition $ListeDatentypCodeDefinition = null;
    /**
     * The DatentypCodeDatenQuelle
     * @var \THAG\XKfz\StructType\DatentypCodeDatenQuelle|null
     */
    public ?\THAG\XKfz\StructType\DatentypCodeDatenQuelle $DatentypCodeDatenQuelle = null;
    /**
     * The DatentypCodeDefault
     * @var string|null
     */
    public ?string $DatentypCodeDefault = null;
    /**
     * Constructor method for DatentypCode
     * @uses DatentypCode::setListeDatentypCodeDefinition()
     * @uses DatentypCode::setDatentypCodeDatenQuelle()
     * @uses DatentypCode::setDatentypCodeDefault()
     * @param \THAG\XKfz\StructType\ListeDatentypCodeDefinition $listeDatentypCodeDefinition
     * @param \THAG\XKfz\StructType\DatentypCodeDatenQuelle $datentypCodeDatenQuelle
     * @param string $datentypCodeDefault
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
     * @return \THAG\XKfz\StructType\ListeDatentypCodeDefinition|null
     */
    public function getListeDatentypCodeDefinition(): ?\THAG\XKfz\StructType\ListeDatentypCodeDefinition
    {
        return $this->ListeDatentypCodeDefinition;
    }
    /**
     * Set ListeDatentypCodeDefinition value
     * @param \THAG\XKfz\StructType\ListeDatentypCodeDefinition $listeDatentypCodeDefinition
     * @return \THAG\XKfz\StructType\DatentypCode
     */
    public function setListeDatentypCodeDefinition(?\THAG\XKfz\StructType\ListeDatentypCodeDefinition $listeDatentypCodeDefinition = null): self
    {
        $this->ListeDatentypCodeDefinition = $listeDatentypCodeDefinition;
        
        return $this;
    }
    /**
     * Get DatentypCodeDatenQuelle value
     * @return \THAG\XKfz\StructType\DatentypCodeDatenQuelle|null
     */
    public function getDatentypCodeDatenQuelle(): ?\THAG\XKfz\StructType\DatentypCodeDatenQuelle
    {
        return $this->DatentypCodeDatenQuelle;
    }
    /**
     * Set DatentypCodeDatenQuelle value
     * @param \THAG\XKfz\StructType\DatentypCodeDatenQuelle $datentypCodeDatenQuelle
     * @return \THAG\XKfz\StructType\DatentypCode
     */
    public function setDatentypCodeDatenQuelle(?\THAG\XKfz\StructType\DatentypCodeDatenQuelle $datentypCodeDatenQuelle = null): self
    {
        $this->DatentypCodeDatenQuelle = $datentypCodeDatenQuelle;
        
        return $this;
    }
    /**
     * Get DatentypCodeDefault value
     * @return string|null
     */
    public function getDatentypCodeDefault(): ?string
    {
        return $this->DatentypCodeDefault;
    }
    /**
     * Set DatentypCodeDefault value
     * @param string $datentypCodeDefault
     * @return \THAG\XKfz\StructType\DatentypCode
     */
    public function setDatentypCodeDefault(?string $datentypCodeDefault = null): self
    {
        $this->DatentypCodeDefault = $datentypCodeDefault;
        
        return $this;
    }
}
