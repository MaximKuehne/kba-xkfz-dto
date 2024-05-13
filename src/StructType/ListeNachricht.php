<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeNachricht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeNachricht extends AbstractStructBase
{
    /**
     * The Nachricht
     */
    public ?\THAG\XKfz\StructType\Nachricht $Nachricht = null;

    /**
     * Constructor method for ListeNachricht
     *
     * @uses ListeNachricht::setNachricht()
     */
    public function __construct(?\THAG\XKfz\StructType\Nachricht $nachricht = null)
    {
        $this
            ->setNachricht($nachricht);
    }

    /**
     * Get Nachricht value
     */
    public function getNachricht(): ?\THAG\XKfz\StructType\Nachricht
    {
        return $this->Nachricht;
    }

    /**
     * Set Nachricht value
     */
    public function setNachricht(?\THAG\XKfz\StructType\Nachricht $nachricht = null): self
    {
        $this->Nachricht = $nachricht;

        return $this;
    }
}
