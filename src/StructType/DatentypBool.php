<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypBool StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypBool extends AbstractStructBase
{
    /**
     * The DatentypBoolBedeutungWahr
     * @var string|null
     */
    public ?string $DatentypBoolBedeutungWahr = null;
    /**
     * The DatentypBoolBedeutungFalsch
     * @var string|null
     */
    public ?string $DatentypBoolBedeutungFalsch = null;
    /**
     * The DatentypBoolDefault
     * @var string|null
     */
    public ?string $DatentypBoolDefault = null;
    /**
     * Constructor method for DatentypBool
     * @uses DatentypBool::setDatentypBoolBedeutungWahr()
     * @uses DatentypBool::setDatentypBoolBedeutungFalsch()
     * @uses DatentypBool::setDatentypBoolDefault()
     * @param string $datentypBoolBedeutungWahr
     * @param string $datentypBoolBedeutungFalsch
     * @param string $datentypBoolDefault
     */
    public function __construct(?string $datentypBoolBedeutungWahr = null, ?string $datentypBoolBedeutungFalsch = null, ?string $datentypBoolDefault = null)
    {
        $this
            ->setDatentypBoolBedeutungWahr($datentypBoolBedeutungWahr)
            ->setDatentypBoolBedeutungFalsch($datentypBoolBedeutungFalsch)
            ->setDatentypBoolDefault($datentypBoolDefault);
    }
    /**
     * Get DatentypBoolBedeutungWahr value
     * @return string|null
     */
    public function getDatentypBoolBedeutungWahr(): ?string
    {
        return $this->DatentypBoolBedeutungWahr;
    }
    /**
     * Set DatentypBoolBedeutungWahr value
     * @param string $datentypBoolBedeutungWahr
     * @return \THAG\XKfz\StructType\DatentypBool
     */
    public function setDatentypBoolBedeutungWahr(?string $datentypBoolBedeutungWahr = null): self
    {
        $this->DatentypBoolBedeutungWahr = $datentypBoolBedeutungWahr;
        
        return $this;
    }
    /**
     * Get DatentypBoolBedeutungFalsch value
     * @return string|null
     */
    public function getDatentypBoolBedeutungFalsch(): ?string
    {
        return $this->DatentypBoolBedeutungFalsch;
    }
    /**
     * Set DatentypBoolBedeutungFalsch value
     * @param string $datentypBoolBedeutungFalsch
     * @return \THAG\XKfz\StructType\DatentypBool
     */
    public function setDatentypBoolBedeutungFalsch(?string $datentypBoolBedeutungFalsch = null): self
    {
        $this->DatentypBoolBedeutungFalsch = $datentypBoolBedeutungFalsch;
        
        return $this;
    }
    /**
     * Get DatentypBoolDefault value
     * @return string|null
     */
    public function getDatentypBoolDefault(): ?string
    {
        return $this->DatentypBoolDefault;
    }
    /**
     * Set DatentypBoolDefault value
     * @param string $datentypBoolDefault
     * @return \THAG\XKfz\StructType\DatentypBool
     */
    public function setDatentypBoolDefault(?string $datentypBoolDefault = null): self
    {
        $this->DatentypBoolDefault = $datentypBoolDefault;
        
        return $this;
    }
}
