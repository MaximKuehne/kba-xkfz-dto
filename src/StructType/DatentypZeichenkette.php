<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypZeichenkette StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypZeichenkette extends AbstractStructBase
{
    /**
     * The DatentypZeichenketteMinLaenge
     */
    public ?string $DatentypZeichenketteMinLaenge = null;

    /**
     * The DatentypZeichenketteMaxLaenge
     */
    public ?string $DatentypZeichenketteMaxLaenge = null;

    /**
     * The DatentypZeichenketteZeichentyp
     */
    public ?string $DatentypZeichenketteZeichentyp = null;

    /**
     * The DatentypZeichenketteMehrzeilig
     */
    public ?string $DatentypZeichenketteMehrzeilig = null;

    /**
     * The DatentypZeichenketteRegulaererAusdruck
     */
    public ?string $DatentypZeichenketteRegulaererAusdruck = null;

    /**
     * The DatentypZeichenketteDefault
     */
    public ?string $DatentypZeichenketteDefault = null;

    /**
     * Constructor method for DatentypZeichenkette
     *
     * @uses DatentypZeichenkette::setDatentypZeichenketteMinLaenge()
     * @uses DatentypZeichenkette::setDatentypZeichenketteMaxLaenge()
     * @uses DatentypZeichenkette::setDatentypZeichenketteZeichentyp()
     * @uses DatentypZeichenkette::setDatentypZeichenketteMehrzeilig()
     * @uses DatentypZeichenkette::setDatentypZeichenketteRegulaererAusdruck()
     * @uses DatentypZeichenkette::setDatentypZeichenketteDefault()
     */
    public function __construct(?string $datentypZeichenketteMinLaenge = null, ?string $datentypZeichenketteMaxLaenge = null, ?string $datentypZeichenketteZeichentyp = null, ?string $datentypZeichenketteMehrzeilig = null, ?string $datentypZeichenketteRegulaererAusdruck = null, ?string $datentypZeichenketteDefault = null)
    {
        $this
            ->setDatentypZeichenketteMinLaenge($datentypZeichenketteMinLaenge)
            ->setDatentypZeichenketteMaxLaenge($datentypZeichenketteMaxLaenge)
            ->setDatentypZeichenketteZeichentyp($datentypZeichenketteZeichentyp)
            ->setDatentypZeichenketteMehrzeilig($datentypZeichenketteMehrzeilig)
            ->setDatentypZeichenketteRegulaererAusdruck($datentypZeichenketteRegulaererAusdruck)
            ->setDatentypZeichenketteDefault($datentypZeichenketteDefault);
    }

    /**
     * Get DatentypZeichenketteMinLaenge value
     */
    public function getDatentypZeichenketteMinLaenge(): ?string
    {
        return $this->DatentypZeichenketteMinLaenge;
    }

    /**
     * Set DatentypZeichenketteMinLaenge value
     */
    public function setDatentypZeichenketteMinLaenge(?string $datentypZeichenketteMinLaenge = null): self
    {
        $this->DatentypZeichenketteMinLaenge = $datentypZeichenketteMinLaenge;

        return $this;
    }

    /**
     * Get DatentypZeichenketteMaxLaenge value
     */
    public function getDatentypZeichenketteMaxLaenge(): ?string
    {
        return $this->DatentypZeichenketteMaxLaenge;
    }

    /**
     * Set DatentypZeichenketteMaxLaenge value
     */
    public function setDatentypZeichenketteMaxLaenge(?string $datentypZeichenketteMaxLaenge = null): self
    {
        $this->DatentypZeichenketteMaxLaenge = $datentypZeichenketteMaxLaenge;

        return $this;
    }

    /**
     * Get DatentypZeichenketteZeichentyp value
     */
    public function getDatentypZeichenketteZeichentyp(): ?string
    {
        return $this->DatentypZeichenketteZeichentyp;
    }

    /**
     * Set DatentypZeichenketteZeichentyp value
     */
    public function setDatentypZeichenketteZeichentyp(?string $datentypZeichenketteZeichentyp = null): self
    {
        $this->DatentypZeichenketteZeichentyp = $datentypZeichenketteZeichentyp;

        return $this;
    }

    /**
     * Get DatentypZeichenketteMehrzeilig value
     */
    public function getDatentypZeichenketteMehrzeilig(): ?string
    {
        return $this->DatentypZeichenketteMehrzeilig;
    }

    /**
     * Set DatentypZeichenketteMehrzeilig value
     */
    public function setDatentypZeichenketteMehrzeilig(?string $datentypZeichenketteMehrzeilig = null): self
    {
        $this->DatentypZeichenketteMehrzeilig = $datentypZeichenketteMehrzeilig;

        return $this;
    }

    /**
     * Get DatentypZeichenketteRegulaererAusdruck value
     */
    public function getDatentypZeichenketteRegulaererAusdruck(): ?string
    {
        return $this->DatentypZeichenketteRegulaererAusdruck;
    }

    /**
     * Set DatentypZeichenketteRegulaererAusdruck value
     */
    public function setDatentypZeichenketteRegulaererAusdruck(?string $datentypZeichenketteRegulaererAusdruck = null): self
    {
        $this->DatentypZeichenketteRegulaererAusdruck = $datentypZeichenketteRegulaererAusdruck;

        return $this;
    }

    /**
     * Get DatentypZeichenketteDefault value
     */
    public function getDatentypZeichenketteDefault(): ?string
    {
        return $this->DatentypZeichenketteDefault;
    }

    /**
     * Set DatentypZeichenketteDefault value
     */
    public function setDatentypZeichenketteDefault(?string $datentypZeichenketteDefault = null): self
    {
        $this->DatentypZeichenketteDefault = $datentypZeichenketteDefault;

        return $this;
    }
}
