<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeTrackingId StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeTrackingId extends AbstractStructBase
{
    /**
     * The TrackingId
     * @var string|null
     */
    public ?string $TrackingId = null;
    /**
     * Constructor method for ListeTrackingId
     * @uses ListeTrackingId::setTrackingId()
     * @param string $trackingId
     */
    public function __construct(?string $trackingId = null)
    {
        $this
            ->setTrackingId($trackingId);
    }
    /**
     * Get TrackingId value
     * @return string|null
     */
    public function getTrackingId(): ?string
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param string $trackingId
     * @return \THAG\XKfz\StructType\ListeTrackingId
     */
    public function setTrackingId(?string $trackingId = null): self
    {
        $this->TrackingId = $trackingId;
        
        return $this;
    }
}
