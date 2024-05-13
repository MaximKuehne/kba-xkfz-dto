<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeNachrichtenId StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeNachrichtenId extends AbstractStructBase
{
    /**
     * The NachrichtenId
     */
    public ?string $NachrichtenId = null;

    /**
     * Constructor method for ListeNachrichtenId
     *
     * @uses ListeNachrichtenId::setNachrichtenId()
     */
    public function __construct(?string $nachrichtenId = null)
    {
        $this
            ->setNachrichtenId($nachrichtenId);
    }

    /**
     * Get NachrichtenId value
     */
    public function getNachrichtenId(): ?string
    {
        return $this->NachrichtenId;
    }

    /**
     * Set NachrichtenId value
     */
    public function setNachrichtenId(?string $nachrichtenId = null): self
    {
        $this->NachrichtenId = $nachrichtenId;

        return $this;
    }
}
