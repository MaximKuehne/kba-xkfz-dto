<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBenachrichtigungsauftrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBenachrichtigungsauftrag extends AbstractStructBase
{
    /**
     * The Benachrichtigungsauftrag
     * @var \THAG\XKfz\StructType\Benachrichtigungsauftrag|null
     */
    public ?\THAG\XKfz\StructType\Benachrichtigungsauftrag $Benachrichtigungsauftrag = null;
    /**
     * Constructor method for ListeBenachrichtigungsauftrag
     * @uses ListeBenachrichtigungsauftrag::setBenachrichtigungsauftrag()
     * @param \THAG\XKfz\StructType\Benachrichtigungsauftrag $benachrichtigungsauftrag
     */
    public function __construct(?\THAG\XKfz\StructType\Benachrichtigungsauftrag $benachrichtigungsauftrag = null)
    {
        $this
            ->setBenachrichtigungsauftrag($benachrichtigungsauftrag);
    }
    /**
     * Get Benachrichtigungsauftrag value
     * @return \THAG\XKfz\StructType\Benachrichtigungsauftrag|null
     */
    public function getBenachrichtigungsauftrag(): ?\THAG\XKfz\StructType\Benachrichtigungsauftrag
    {
        return $this->Benachrichtigungsauftrag;
    }
    /**
     * Set Benachrichtigungsauftrag value
     * @param \THAG\XKfz\StructType\Benachrichtigungsauftrag $benachrichtigungsauftrag
     * @return \THAG\XKfz\StructType\ListeBenachrichtigungsauftrag
     */
    public function setBenachrichtigungsauftrag(?\THAG\XKfz\StructType\Benachrichtigungsauftrag $benachrichtigungsauftrag = null): self
    {
        $this->Benachrichtigungsauftrag = $benachrichtigungsauftrag;
        
        return $this;
    }
}
