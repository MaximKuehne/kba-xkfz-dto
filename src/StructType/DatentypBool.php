<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypBool StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypBool extends AbstractStructBase
{
    /**
     * The DatentypBoolBedeutungWahr
     */
    public ?string $DatentypBoolBedeutungWahr = null;

    /**
     * The DatentypBoolBedeutungFalsch
     */
    public ?string $DatentypBoolBedeutungFalsch = null;

    /**
     * The DatentypBoolDefault
     */
    public ?string $DatentypBoolDefault = null;

    /**
     * Constructor method for DatentypBool
     *
     * @uses DatentypBool::setDatentypBoolBedeutungWahr()
     * @uses DatentypBool::setDatentypBoolBedeutungFalsch()
     * @uses DatentypBool::setDatentypBoolDefault()
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
     */
    public function getDatentypBoolBedeutungWahr(): ?string
    {
        return $this->DatentypBoolBedeutungWahr;
    }

    /**
     * Set DatentypBoolBedeutungWahr value
     */
    public function setDatentypBoolBedeutungWahr(?string $datentypBoolBedeutungWahr = null): self
    {
        $this->DatentypBoolBedeutungWahr = $datentypBoolBedeutungWahr;

        return $this;
    }

    /**
     * Get DatentypBoolBedeutungFalsch value
     */
    public function getDatentypBoolBedeutungFalsch(): ?string
    {
        return $this->DatentypBoolBedeutungFalsch;
    }

    /**
     * Set DatentypBoolBedeutungFalsch value
     */
    public function setDatentypBoolBedeutungFalsch(?string $datentypBoolBedeutungFalsch = null): self
    {
        $this->DatentypBoolBedeutungFalsch = $datentypBoolBedeutungFalsch;

        return $this;
    }

    /**
     * Get DatentypBoolDefault value
     */
    public function getDatentypBoolDefault(): ?string
    {
        return $this->DatentypBoolDefault;
    }

    /**
     * Set DatentypBoolDefault value
     */
    public function setDatentypBoolDefault(?string $datentypBoolDefault = null): self
    {
        $this->DatentypBoolDefault = $datentypBoolDefault;

        return $this;
    }
}
