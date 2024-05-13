<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypZeichenkette StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypZeichenkette extends AbstractStructBase
{
    /**
     * The DatentypZeichenketteMinLaenge
     * @var string|null
     */
    public ?string $DatentypZeichenketteMinLaenge = null;
    /**
     * The DatentypZeichenketteMaxLaenge
     * @var string|null
     */
    public ?string $DatentypZeichenketteMaxLaenge = null;
    /**
     * The DatentypZeichenketteZeichentyp
     * @var string|null
     */
    public ?string $DatentypZeichenketteZeichentyp = null;
    /**
     * The DatentypZeichenketteMehrzeilig
     * @var string|null
     */
    public ?string $DatentypZeichenketteMehrzeilig = null;
    /**
     * The DatentypZeichenketteRegulaererAusdruck
     * @var string|null
     */
    public ?string $DatentypZeichenketteRegulaererAusdruck = null;
    /**
     * The DatentypZeichenketteDefault
     * @var string|null
     */
    public ?string $DatentypZeichenketteDefault = null;
    /**
     * Constructor method for DatentypZeichenkette
     * @uses DatentypZeichenkette::setDatentypZeichenketteMinLaenge()
     * @uses DatentypZeichenkette::setDatentypZeichenketteMaxLaenge()
     * @uses DatentypZeichenkette::setDatentypZeichenketteZeichentyp()
     * @uses DatentypZeichenkette::setDatentypZeichenketteMehrzeilig()
     * @uses DatentypZeichenkette::setDatentypZeichenketteRegulaererAusdruck()
     * @uses DatentypZeichenkette::setDatentypZeichenketteDefault()
     * @param string $datentypZeichenketteMinLaenge
     * @param string $datentypZeichenketteMaxLaenge
     * @param string $datentypZeichenketteZeichentyp
     * @param string $datentypZeichenketteMehrzeilig
     * @param string $datentypZeichenketteRegulaererAusdruck
     * @param string $datentypZeichenketteDefault
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
     * @return string|null
     */
    public function getDatentypZeichenketteMinLaenge(): ?string
    {
        return $this->DatentypZeichenketteMinLaenge;
    }
    /**
     * Set DatentypZeichenketteMinLaenge value
     * @param string $datentypZeichenketteMinLaenge
     * @return \THAG\XKfz\StructType\DatentypZeichenkette
     */
    public function setDatentypZeichenketteMinLaenge(?string $datentypZeichenketteMinLaenge = null): self
    {
        $this->DatentypZeichenketteMinLaenge = $datentypZeichenketteMinLaenge;
        
        return $this;
    }
    /**
     * Get DatentypZeichenketteMaxLaenge value
     * @return string|null
     */
    public function getDatentypZeichenketteMaxLaenge(): ?string
    {
        return $this->DatentypZeichenketteMaxLaenge;
    }
    /**
     * Set DatentypZeichenketteMaxLaenge value
     * @param string $datentypZeichenketteMaxLaenge
     * @return \THAG\XKfz\StructType\DatentypZeichenkette
     */
    public function setDatentypZeichenketteMaxLaenge(?string $datentypZeichenketteMaxLaenge = null): self
    {
        $this->DatentypZeichenketteMaxLaenge = $datentypZeichenketteMaxLaenge;
        
        return $this;
    }
    /**
     * Get DatentypZeichenketteZeichentyp value
     * @return string|null
     */
    public function getDatentypZeichenketteZeichentyp(): ?string
    {
        return $this->DatentypZeichenketteZeichentyp;
    }
    /**
     * Set DatentypZeichenketteZeichentyp value
     * @param string $datentypZeichenketteZeichentyp
     * @return \THAG\XKfz\StructType\DatentypZeichenkette
     */
    public function setDatentypZeichenketteZeichentyp(?string $datentypZeichenketteZeichentyp = null): self
    {
        $this->DatentypZeichenketteZeichentyp = $datentypZeichenketteZeichentyp;
        
        return $this;
    }
    /**
     * Get DatentypZeichenketteMehrzeilig value
     * @return string|null
     */
    public function getDatentypZeichenketteMehrzeilig(): ?string
    {
        return $this->DatentypZeichenketteMehrzeilig;
    }
    /**
     * Set DatentypZeichenketteMehrzeilig value
     * @param string $datentypZeichenketteMehrzeilig
     * @return \THAG\XKfz\StructType\DatentypZeichenkette
     */
    public function setDatentypZeichenketteMehrzeilig(?string $datentypZeichenketteMehrzeilig = null): self
    {
        $this->DatentypZeichenketteMehrzeilig = $datentypZeichenketteMehrzeilig;
        
        return $this;
    }
    /**
     * Get DatentypZeichenketteRegulaererAusdruck value
     * @return string|null
     */
    public function getDatentypZeichenketteRegulaererAusdruck(): ?string
    {
        return $this->DatentypZeichenketteRegulaererAusdruck;
    }
    /**
     * Set DatentypZeichenketteRegulaererAusdruck value
     * @param string $datentypZeichenketteRegulaererAusdruck
     * @return \THAG\XKfz\StructType\DatentypZeichenkette
     */
    public function setDatentypZeichenketteRegulaererAusdruck(?string $datentypZeichenketteRegulaererAusdruck = null): self
    {
        $this->DatentypZeichenketteRegulaererAusdruck = $datentypZeichenketteRegulaererAusdruck;
        
        return $this;
    }
    /**
     * Get DatentypZeichenketteDefault value
     * @return string|null
     */
    public function getDatentypZeichenketteDefault(): ?string
    {
        return $this->DatentypZeichenketteDefault;
    }
    /**
     * Set DatentypZeichenketteDefault value
     * @param string $datentypZeichenketteDefault
     * @return \THAG\XKfz\StructType\DatentypZeichenkette
     */
    public function setDatentypZeichenketteDefault(?string $datentypZeichenketteDefault = null): self
    {
        $this->DatentypZeichenketteDefault = $datentypZeichenketteDefault;
        
        return $this;
    }
}
