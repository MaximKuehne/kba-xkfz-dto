<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBenachrichtigungsauftrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBenachrichtigungsauftrag extends AbstractStructBase
{
    /**
     * The Benachrichtigungsauftrag
     */
    public ?\THAG\XKfz\StructType\Benachrichtigungsauftrag $Benachrichtigungsauftrag = null;

    /**
     * Constructor method for ListeBenachrichtigungsauftrag
     *
     * @uses ListeBenachrichtigungsauftrag::setBenachrichtigungsauftrag()
     */
    public function __construct(?\THAG\XKfz\StructType\Benachrichtigungsauftrag $benachrichtigungsauftrag = null)
    {
        $this
            ->setBenachrichtigungsauftrag($benachrichtigungsauftrag);
    }

    /**
     * Get Benachrichtigungsauftrag value
     */
    public function getBenachrichtigungsauftrag(): ?\THAG\XKfz\StructType\Benachrichtigungsauftrag
    {
        return $this->Benachrichtigungsauftrag;
    }

    /**
     * Set Benachrichtigungsauftrag value
     */
    public function setBenachrichtigungsauftrag(?\THAG\XKfz\StructType\Benachrichtigungsauftrag $benachrichtigungsauftrag = null): self
    {
        $this->Benachrichtigungsauftrag = $benachrichtigungsauftrag;

        return $this;
    }
}
