<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeTrackingId StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeTrackingId extends AbstractStructBase
{
    /**
     * The TrackingId
     */
    public ?string $TrackingId = null;

    /**
     * Constructor method for ListeTrackingId
     *
     * @uses ListeTrackingId::setTrackingId()
     */
    public function __construct(?string $trackingId = null)
    {
        $this
            ->setTrackingId($trackingId);
    }

    /**
     * Get TrackingId value
     */
    public function getTrackingId(): ?string
    {
        return $this->TrackingId;
    }

    /**
     * Set TrackingId value
     */
    public function setTrackingId(?string $trackingId = null): self
    {
        $this->TrackingId = $trackingId;

        return $this;
    }
}
