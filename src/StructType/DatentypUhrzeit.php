<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypUhrzeit StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypUhrzeit extends AbstractStructBase
{
    /**
     * The DatentypUhrzeitMinimum
     */
    public ?string $DatentypUhrzeitMinimum = null;

    /**
     * The DatentypUhrzeitMaximum
     */
    public ?string $DatentypUhrzeitMaximum = null;

    /**
     * The DatentypUhrzeitRelativesMinimum
     */
    public ?string $DatentypUhrzeitRelativesMinimum = null;

    /**
     * The DatentypUhrzeitRelativesMaximum
     */
    public ?string $DatentypUhrzeitRelativesMaximum = null;

    /**
     * The DatentypUhrzeitGenauigkeit
     */
    public ?string $DatentypUhrzeitGenauigkeit = null;

    /**
     * The DatentypUhrzeitDefault
     */
    public ?string $DatentypUhrzeitDefault = null;

    /**
     * The DatentypUhrzeitRelativerDefault
     */
    public ?string $DatentypUhrzeitRelativerDefault = null;

    /**
     * Constructor method for DatentypUhrzeit
     *
     * @uses DatentypUhrzeit::setDatentypUhrzeitMinimum()
     * @uses DatentypUhrzeit::setDatentypUhrzeitMaximum()
     * @uses DatentypUhrzeit::setDatentypUhrzeitRelativesMinimum()
     * @uses DatentypUhrzeit::setDatentypUhrzeitRelativesMaximum()
     * @uses DatentypUhrzeit::setDatentypUhrzeitGenauigkeit()
     * @uses DatentypUhrzeit::setDatentypUhrzeitDefault()
     * @uses DatentypUhrzeit::setDatentypUhrzeitRelativerDefault()
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
     */
    public function getDatentypUhrzeitMinimum(): ?string
    {
        return $this->DatentypUhrzeitMinimum;
    }

    /**
     * Set DatentypUhrzeitMinimum value
     */
    public function setDatentypUhrzeitMinimum(?string $datentypUhrzeitMinimum = null): self
    {
        $this->DatentypUhrzeitMinimum = $datentypUhrzeitMinimum;

        return $this;
    }

    /**
     * Get DatentypUhrzeitMaximum value
     */
    public function getDatentypUhrzeitMaximum(): ?string
    {
        return $this->DatentypUhrzeitMaximum;
    }

    /**
     * Set DatentypUhrzeitMaximum value
     */
    public function setDatentypUhrzeitMaximum(?string $datentypUhrzeitMaximum = null): self
    {
        $this->DatentypUhrzeitMaximum = $datentypUhrzeitMaximum;

        return $this;
    }

    /**
     * Get DatentypUhrzeitRelativesMinimum value
     */
    public function getDatentypUhrzeitRelativesMinimum(): ?string
    {
        return $this->DatentypUhrzeitRelativesMinimum;
    }

    /**
     * Set DatentypUhrzeitRelativesMinimum value
     */
    public function setDatentypUhrzeitRelativesMinimum(?string $datentypUhrzeitRelativesMinimum = null): self
    {
        $this->DatentypUhrzeitRelativesMinimum = $datentypUhrzeitRelativesMinimum;

        return $this;
    }

    /**
     * Get DatentypUhrzeitRelativesMaximum value
     */
    public function getDatentypUhrzeitRelativesMaximum(): ?string
    {
        return $this->DatentypUhrzeitRelativesMaximum;
    }

    /**
     * Set DatentypUhrzeitRelativesMaximum value
     */
    public function setDatentypUhrzeitRelativesMaximum(?string $datentypUhrzeitRelativesMaximum = null): self
    {
        $this->DatentypUhrzeitRelativesMaximum = $datentypUhrzeitRelativesMaximum;

        return $this;
    }

    /**
     * Get DatentypUhrzeitGenauigkeit value
     */
    public function getDatentypUhrzeitGenauigkeit(): ?string
    {
        return $this->DatentypUhrzeitGenauigkeit;
    }

    /**
     * Set DatentypUhrzeitGenauigkeit value
     */
    public function setDatentypUhrzeitGenauigkeit(?string $datentypUhrzeitGenauigkeit = null): self
    {
        $this->DatentypUhrzeitGenauigkeit = $datentypUhrzeitGenauigkeit;

        return $this;
    }

    /**
     * Get DatentypUhrzeitDefault value
     */
    public function getDatentypUhrzeitDefault(): ?string
    {
        return $this->DatentypUhrzeitDefault;
    }

    /**
     * Set DatentypUhrzeitDefault value
     */
    public function setDatentypUhrzeitDefault(?string $datentypUhrzeitDefault = null): self
    {
        $this->DatentypUhrzeitDefault = $datentypUhrzeitDefault;

        return $this;
    }

    /**
     * Get DatentypUhrzeitRelativerDefault value
     */
    public function getDatentypUhrzeitRelativerDefault(): ?string
    {
        return $this->DatentypUhrzeitRelativerDefault;
    }

    /**
     * Set DatentypUhrzeitRelativerDefault value
     */
    public function setDatentypUhrzeitRelativerDefault(?string $datentypUhrzeitRelativerDefault = null): self
    {
        $this->DatentypUhrzeitRelativerDefault = $datentypUhrzeitRelativerDefault;

        return $this;
    }
}
