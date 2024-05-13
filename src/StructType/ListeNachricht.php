<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeNachricht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeNachricht extends AbstractStructBase
{
    /**
     * The Nachricht
     * @var \THAG\XKfz\StructType\Nachricht|null
     */
    public ?\THAG\XKfz\StructType\Nachricht $Nachricht = null;
    /**
     * Constructor method for ListeNachricht
     * @uses ListeNachricht::setNachricht()
     * @param \THAG\XKfz\StructType\Nachricht $nachricht
     */
    public function __construct(?\THAG\XKfz\StructType\Nachricht $nachricht = null)
    {
        $this
            ->setNachricht($nachricht);
    }
    /**
     * Get Nachricht value
     * @return \THAG\XKfz\StructType\Nachricht|null
     */
    public function getNachricht(): ?\THAG\XKfz\StructType\Nachricht
    {
        return $this->Nachricht;
    }
    /**
     * Set Nachricht value
     * @param \THAG\XKfz\StructType\Nachricht $nachricht
     * @return \THAG\XKfz\StructType\ListeNachricht
     */
    public function setNachricht(?\THAG\XKfz\StructType\Nachricht $nachricht = null): self
    {
        $this->Nachricht = $nachricht;
        
        return $this;
    }
}
