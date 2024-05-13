<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypZahl StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypZahl extends AbstractStructBase
{
    /**
     * The DatentypZahlMinimum
     * @var string|null
     */
    public ?string $DatentypZahlMinimum = null;
    /**
     * The DatentypZahlMaximum
     * @var string|null
     */
    public ?string $DatentypZahlMaximum = null;
    /**
     * The DatentypZahlNachkommastellen
     * @var string|null
     */
    public ?string $DatentypZahlNachkommastellen = null;
    /**
     * The DatentypZahlEinheit
     * @var string|null
     */
    public ?string $DatentypZahlEinheit = null;
    /**
     * The DatentypZahlDefault
     * @var string|null
     */
    public ?string $DatentypZahlDefault = null;
    /**
     * Constructor method for DatentypZahl
     * @uses DatentypZahl::setDatentypZahlMinimum()
     * @uses DatentypZahl::setDatentypZahlMaximum()
     * @uses DatentypZahl::setDatentypZahlNachkommastellen()
     * @uses DatentypZahl::setDatentypZahlEinheit()
     * @uses DatentypZahl::setDatentypZahlDefault()
     * @param string $datentypZahlMinimum
     * @param string $datentypZahlMaximum
     * @param string $datentypZahlNachkommastellen
     * @param string $datentypZahlEinheit
     * @param string $datentypZahlDefault
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
     * @return string|null
     */
    public function getDatentypZahlMinimum(): ?string
    {
        return $this->DatentypZahlMinimum;
    }
    /**
     * Set DatentypZahlMinimum value
     * @param string $datentypZahlMinimum
     * @return \THAG\XKfz\StructType\DatentypZahl
     */
    public function setDatentypZahlMinimum(?string $datentypZahlMinimum = null): self
    {
        $this->DatentypZahlMinimum = $datentypZahlMinimum;
        
        return $this;
    }
    /**
     * Get DatentypZahlMaximum value
     * @return string|null
     */
    public function getDatentypZahlMaximum(): ?string
    {
        return $this->DatentypZahlMaximum;
    }
    /**
     * Set DatentypZahlMaximum value
     * @param string $datentypZahlMaximum
     * @return \THAG\XKfz\StructType\DatentypZahl
     */
    public function setDatentypZahlMaximum(?string $datentypZahlMaximum = null): self
    {
        $this->DatentypZahlMaximum = $datentypZahlMaximum;
        
        return $this;
    }
    /**
     * Get DatentypZahlNachkommastellen value
     * @return string|null
     */
    public function getDatentypZahlNachkommastellen(): ?string
    {
        return $this->DatentypZahlNachkommastellen;
    }
    /**
     * Set DatentypZahlNachkommastellen value
     * @param string $datentypZahlNachkommastellen
     * @return \THAG\XKfz\StructType\DatentypZahl
     */
    public function setDatentypZahlNachkommastellen(?string $datentypZahlNachkommastellen = null): self
    {
        $this->DatentypZahlNachkommastellen = $datentypZahlNachkommastellen;
        
        return $this;
    }
    /**
     * Get DatentypZahlEinheit value
     * @return string|null
     */
    public function getDatentypZahlEinheit(): ?string
    {
        return $this->DatentypZahlEinheit;
    }
    /**
     * Set DatentypZahlEinheit value
     * @param string $datentypZahlEinheit
     * @return \THAG\XKfz\StructType\DatentypZahl
     */
    public function setDatentypZahlEinheit(?string $datentypZahlEinheit = null): self
    {
        $this->DatentypZahlEinheit = $datentypZahlEinheit;
        
        return $this;
    }
    /**
     * Get DatentypZahlDefault value
     * @return string|null
     */
    public function getDatentypZahlDefault(): ?string
    {
        return $this->DatentypZahlDefault;
    }
    /**
     * Set DatentypZahlDefault value
     * @param string $datentypZahlDefault
     * @return \THAG\XKfz\StructType\DatentypZahl
     */
    public function setDatentypZahlDefault(?string $datentypZahlDefault = null): self
    {
        $this->DatentypZahlDefault = $datentypZahlDefault;
        
        return $this;
    }
}
