<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypUhrzeit StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypUhrzeit extends AbstractStructBase
{
    /**
     * The DatentypUhrzeitMinimum
     * @var string|null
     */
    public ?string $DatentypUhrzeitMinimum = null;
    /**
     * The DatentypUhrzeitMaximum
     * @var string|null
     */
    public ?string $DatentypUhrzeitMaximum = null;
    /**
     * The DatentypUhrzeitRelativesMinimum
     * @var string|null
     */
    public ?string $DatentypUhrzeitRelativesMinimum = null;
    /**
     * The DatentypUhrzeitRelativesMaximum
     * @var string|null
     */
    public ?string $DatentypUhrzeitRelativesMaximum = null;
    /**
     * The DatentypUhrzeitGenauigkeit
     * @var string|null
     */
    public ?string $DatentypUhrzeitGenauigkeit = null;
    /**
     * The DatentypUhrzeitDefault
     * @var string|null
     */
    public ?string $DatentypUhrzeitDefault = null;
    /**
     * The DatentypUhrzeitRelativerDefault
     * @var string|null
     */
    public ?string $DatentypUhrzeitRelativerDefault = null;
    /**
     * Constructor method for DatentypUhrzeit
     * @uses DatentypUhrzeit::setDatentypUhrzeitMinimum()
     * @uses DatentypUhrzeit::setDatentypUhrzeitMaximum()
     * @uses DatentypUhrzeit::setDatentypUhrzeitRelativesMinimum()
     * @uses DatentypUhrzeit::setDatentypUhrzeitRelativesMaximum()
     * @uses DatentypUhrzeit::setDatentypUhrzeitGenauigkeit()
     * @uses DatentypUhrzeit::setDatentypUhrzeitDefault()
     * @uses DatentypUhrzeit::setDatentypUhrzeitRelativerDefault()
     * @param string $datentypUhrzeitMinimum
     * @param string $datentypUhrzeitMaximum
     * @param string $datentypUhrzeitRelativesMinimum
     * @param string $datentypUhrzeitRelativesMaximum
     * @param string $datentypUhrzeitGenauigkeit
     * @param string $datentypUhrzeitDefault
     * @param string $datentypUhrzeitRelativerDefault
     */
    public function __construct(?string $datentypUhrzeitMinimum = null, ?string $datentypUhrzeitMaximum = null, ?string $datentypUhrzeitRelativesMinimum = null, ?string $datentypUhrzeitRelativesMaximum = null, ?string $datentypUhrzeitGenauigkeit = null, ?string $datentypUhrzeitDefault = null, ?string $datentypUhrzeitRelativerDefault = null)
    {
        $this
            ->setDatentypUhrzeitMinimum($datentypUhrzeitMinimum)
            ->setDatentypUhrzeitMaximum($datentypUhrzeitMaximum)
            ->setDatentypUhrzeitRelativesMinimum($datentypUhrzeitRelativesMinimum)
            ->setDatentypUhrzeitRelativesMaximum($datentypUhrzeitRelativesMaximum)
            ->setDatentypUhrzeitGenauigkeit($datentypUhrzeitGenauigkeit)
            ->setDatentypUhrzeitDefault($datentypUhrzeitDefault)
            ->setDatentypUhrzeitRelativerDefault($datentypUhrzeitRelativerDefault);
    }
    /**
     * Get DatentypUhrzeitMinimum value
     * @return string|null
     */
    public function getDatentypUhrzeitMinimum(): ?string
    {
        return $this->DatentypUhrzeitMinimum;
    }
    /**
     * Set DatentypUhrzeitMinimum value
     * @param string $datentypUhrzeitMinimum
     * @return \THAG\XKfz\StructType\DatentypUhrzeit
     */
    public function setDatentypUhrzeitMinimum(?string $datentypUhrzeitMinimum = null): self
    {
        $this->DatentypUhrzeitMinimum = $datentypUhrzeitMinimum;
        
        return $this;
    }
    /**
     * Get DatentypUhrzeitMaximum value
     * @return string|null
     */
    public function getDatentypUhrzeitMaximum(): ?string
    {
        return $this->DatentypUhrzeitMaximum;
    }
    /**
     * Set DatentypUhrzeitMaximum value
     * @param string $datentypUhrzeitMaximum
     * @return \THAG\XKfz\StructType\DatentypUhrzeit
     */
    public function setDatentypUhrzeitMaximum(?string $datentypUhrzeitMaximum = null): self
    {
        $this->DatentypUhrzeitMaximum = $datentypUhrzeitMaximum;
        
        return $this;
    }
    /**
     * Get DatentypUhrzeitRelativesMinimum value
     * @return string|null
     */
    public function getDatentypUhrzeitRelativesMinimum(): ?string
    {
        return $this->DatentypUhrzeitRelativesMinimum;
    }
    /**
     * Set DatentypUhrzeitRelativesMinimum value
     * @param string $datentypUhrzeitRelativesMinimum
     * @return \THAG\XKfz\StructType\DatentypUhrzeit
     */
    public function setDatentypUhrzeitRelativesMinimum(?string $datentypUhrzeitRelativesMinimum = null): self
    {
        $this->DatentypUhrzeitRelativesMinimum = $datentypUhrzeitRelativesMinimum;
        
        return $this;
    }
    /**
     * Get DatentypUhrzeitRelativesMaximum value
     * @return string|null
     */
    public function getDatentypUhrzeitRelativesMaximum(): ?string
    {
        return $this->DatentypUhrzeitRelativesMaximum;
    }
    /**
     * Set DatentypUhrzeitRelativesMaximum value
     * @param string $datentypUhrzeitRelativesMaximum
     * @return \THAG\XKfz\StructType\DatentypUhrzeit
     */
    public function setDatentypUhrzeitRelativesMaximum(?string $datentypUhrzeitRelativesMaximum = null): self
    {
        $this->DatentypUhrzeitRelativesMaximum = $datentypUhrzeitRelativesMaximum;
        
        return $this;
    }
    /**
     * Get DatentypUhrzeitGenauigkeit value
     * @return string|null
     */
    public function getDatentypUhrzeitGenauigkeit(): ?string
    {
        return $this->DatentypUhrzeitGenauigkeit;
    }
    /**
     * Set DatentypUhrzeitGenauigkeit value
     * @param string $datentypUhrzeitGenauigkeit
     * @return \THAG\XKfz\StructType\DatentypUhrzeit
     */
    public function setDatentypUhrzeitGenauigkeit(?string $datentypUhrzeitGenauigkeit = null): self
    {
        $this->DatentypUhrzeitGenauigkeit = $datentypUhrzeitGenauigkeit;
        
        return $this;
    }
    /**
     * Get DatentypUhrzeitDefault value
     * @return string|null
     */
    public function getDatentypUhrzeitDefault(): ?string
    {
        return $this->DatentypUhrzeitDefault;
    }
    /**
     * Set DatentypUhrzeitDefault value
     * @param string $datentypUhrzeitDefault
     * @return \THAG\XKfz\StructType\DatentypUhrzeit
     */
    public function setDatentypUhrzeitDefault(?string $datentypUhrzeitDefault = null): self
    {
        $this->DatentypUhrzeitDefault = $datentypUhrzeitDefault;
        
        return $this;
    }
    /**
     * Get DatentypUhrzeitRelativerDefault value
     * @return string|null
     */
    public function getDatentypUhrzeitRelativerDefault(): ?string
    {
        return $this->DatentypUhrzeitRelativerDefault;
    }
    /**
     * Set DatentypUhrzeitRelativerDefault value
     * @param string $datentypUhrzeitRelativerDefault
     * @return \THAG\XKfz\StructType\DatentypUhrzeit
     */
    public function setDatentypUhrzeitRelativerDefault(?string $datentypUhrzeitRelativerDefault = null): self
    {
        $this->DatentypUhrzeitRelativerDefault = $datentypUhrzeitRelativerDefault;
        
        return $this;
    }
}
