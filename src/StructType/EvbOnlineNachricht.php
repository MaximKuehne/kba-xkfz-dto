<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EvbOnlineNachricht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class EvbOnlineNachricht extends AbstractStructBase
{
    /**
     * The Nachricht
     * @var \THAG\XKfz\StructType\Nachricht|null
     */
    public ?\THAG\XKfz\StructType\Nachricht $Nachricht = null;
    /**
     * The Quittung
     * @var \THAG\XKfz\StructType\Quittung|null
     */
    public ?\THAG\XKfz\StructType\Quittung $Quittung = null;
    /**
     * The VeelaRequest
     * @var \THAG\XKfz\StructType\VeelaRequest|null
     */
    public ?\THAG\XKfz\StructType\VeelaRequest $VeelaRequest = null;
    /**
     * The VeelaResult
     * @var \THAG\XKfz\StructType\VeelaResult|null
     */
    public ?\THAG\XKfz\StructType\VeelaResult $VeelaResult = null;
    /**
     * Constructor method for EvbOnlineNachricht
     * @uses EvbOnlineNachricht::setNachricht()
     * @uses EvbOnlineNachricht::setQuittung()
     * @uses EvbOnlineNachricht::setVeelaRequest()
     * @uses EvbOnlineNachricht::setVeelaResult()
     * @param \THAG\XKfz\StructType\Nachricht $nachricht
     * @param \THAG\XKfz\StructType\Quittung $quittung
     * @param \THAG\XKfz\StructType\VeelaRequest $veelaRequest
     * @param \THAG\XKfz\StructType\VeelaResult $veelaResult
     */
    public function __construct(?\THAG\XKfz\StructType\Nachricht $nachricht = null, ?\THAG\XKfz\StructType\Quittung $quittung = null, ?\THAG\XKfz\StructType\VeelaRequest $veelaRequest = null, ?\THAG\XKfz\StructType\VeelaResult $veelaResult = null)
    {
        $this
            ->setNachricht($nachricht)
            ->setQuittung($quittung)
            ->setVeelaRequest($veelaRequest)
            ->setVeelaResult($veelaResult);
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
     * @return \THAG\XKfz\StructType\EvbOnlineNachricht
     */
    public function setNachricht(?\THAG\XKfz\StructType\Nachricht $nachricht = null): self
    {
        $this->Nachricht = $nachricht;
        
        return $this;
    }
    /**
     * Get Quittung value
     * @return \THAG\XKfz\StructType\Quittung|null
     */
    public function getQuittung(): ?\THAG\XKfz\StructType\Quittung
    {
        return $this->Quittung;
    }
    /**
     * Set Quittung value
     * @param \THAG\XKfz\StructType\Quittung $quittung
     * @return \THAG\XKfz\StructType\EvbOnlineNachricht
     */
    public function setQuittung(?\THAG\XKfz\StructType\Quittung $quittung = null): self
    {
        $this->Quittung = $quittung;
        
        return $this;
    }
    /**
     * Get VeelaRequest value
     * @return \THAG\XKfz\StructType\VeelaRequest|null
     */
    public function getVeelaRequest(): ?\THAG\XKfz\StructType\VeelaRequest
    {
        return $this->VeelaRequest;
    }
    /**
     * Set VeelaRequest value
     * @param \THAG\XKfz\StructType\VeelaRequest $veelaRequest
     * @return \THAG\XKfz\StructType\EvbOnlineNachricht
     */
    public function setVeelaRequest(?\THAG\XKfz\StructType\VeelaRequest $veelaRequest = null): self
    {
        $this->VeelaRequest = $veelaRequest;
        
        return $this;
    }
    /**
     * Get VeelaResult value
     * @return \THAG\XKfz\StructType\VeelaResult|null
     */
    public function getVeelaResult(): ?\THAG\XKfz\StructType\VeelaResult
    {
        return $this->VeelaResult;
    }
    /**
     * Set VeelaResult value
     * @param \THAG\XKfz\StructType\VeelaResult $veelaResult
     * @return \THAG\XKfz\StructType\EvbOnlineNachricht
     */
    public function setVeelaResult(?\THAG\XKfz\StructType\VeelaResult $veelaResult = null): self
    {
        $this->VeelaResult = $veelaResult;
        
        return $this;
    }
}
