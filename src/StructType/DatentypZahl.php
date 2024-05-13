<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypZahl StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypZahl extends AbstractStructBase
{
    /**
     * The DatentypZahlMinimum
     */
    public ?string $DatentypZahlMinimum = null;

    /**
     * The DatentypZahlMaximum
     */
    public ?string $DatentypZahlMaximum = null;

    /**
     * The DatentypZahlNachkommastellen
     */
    public ?string $DatentypZahlNachkommastellen = null;

    /**
     * The DatentypZahlEinheit
     */
    public ?string $DatentypZahlEinheit = null;

    /**
     * The DatentypZahlDefault
     */
    public ?string $DatentypZahlDefault = null;

    /**
     * Constructor method for DatentypZahl
     *
     * @uses DatentypZahl::setDatentypZahlMinimum()
     * @uses DatentypZahl::setDatentypZahlMaximum()
     * @uses DatentypZahl::setDatentypZahlNachkommastellen()
     * @uses DatentypZahl::setDatentypZahlEinheit()
     * @uses DatentypZahl::setDatentypZahlDefault()
     */
    public function __construct(?string $datentypZahlMinimum = null, ?string $datentypZahlMaximum = null, ?string $datentypZahlNachkommastellen = null, ?string $datentypZahlEinheit = null, ?string $datentypZahlDefault = null)
    {
        $this
            ->setDatentypZahlMinimum($datentypZahlMinimum)
            ->setDatentypZahlMaximum($datentypZahlMaximum)
            ->setDatentypZahlNachkommastellen($datentypZahlNachkommastellen)
            ->setDatentypZahlEinheit($datentypZahlEinheit)
            ->setDatentypZahlDefault($datentypZahlDefault);
    }

    /**
     * Get DatentypZahlMinimum value
     */
    public function getDatentypZahlMinimum(): ?string
    {
        return $this->DatentypZahlMinimum;
    }

    /**
     * Set DatentypZahlMinimum value
     */
    public function setDatentypZahlMinimum(?string $datentypZahlMinimum = null): self
    {
        $this->DatentypZahlMinimum = $datentypZahlMinimum;

        return $this;
    }

    /**
     * Get DatentypZahlMaximum value
     */
    public function getDatentypZahlMaximum(): ?string
    {
        return $this->DatentypZahlMaximum;
    }

    /**
     * Set DatentypZahlMaximum value
     */
    public function setDatentypZahlMaximum(?string $datentypZahlMaximum = null): self
    {
        $this->DatentypZahlMaximum = $datentypZahlMaximum;

        return $this;
    }

    /**
     * Get DatentypZahlNachkommastellen value
     */
    public function getDatentypZahlNachkommastellen(): ?string
    {
        return $this->DatentypZahlNachkommastellen;
    }

    /**
     * Set DatentypZahlNachkommastellen value
     */
    public function setDatentypZahlNachkommastellen(?string $datentypZahlNachkommastellen = null): self
    {
        $this->DatentypZahlNachkommastellen = $datentypZahlNachkommastellen;

        return $this;
    }

    /**
     * Get DatentypZahlEinheit value
     */
    public function getDatentypZahlEinheit(): ?string
    {
        return $this->DatentypZahlEinheit;
    }

    /**
     * Set DatentypZahlEinheit value
     */
    public function setDatentypZahlEinheit(?string $datentypZahlEinheit = null): self
    {
        $this->DatentypZahlEinheit = $datentypZahlEinheit;

        return $this;
    }

    /**
     * Get DatentypZahlDefault value
     */
    public function getDatentypZahlDefault(): ?string
    {
        return $this->DatentypZahlDefault;
    }

    /**
     * Set DatentypZahlDefault value
     */
    public function setDatentypZahlDefault(?string $datentypZahlDefault = null): self
    {
        $this->DatentypZahlDefault = $datentypZahlDefault;

        return $this;
    }
}
