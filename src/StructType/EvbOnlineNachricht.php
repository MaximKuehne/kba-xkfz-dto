<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EvbOnlineNachricht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class EvbOnlineNachricht extends AbstractStructBase
{
    /**
     * The Nachricht
     */
    public ?\THAG\XKfz\StructType\Nachricht $Nachricht = null;

    /**
     * The Quittung
     */
    public ?\THAG\XKfz\StructType\Quittung $Quittung = null;

    /**
     * The VeelaRequest
     */
    public ?\THAG\XKfz\StructType\VeelaRequest $VeelaRequest = null;

    /**
     * The VeelaResult
     */
    public ?\THAG\XKfz\StructType\VeelaResult $VeelaResult = null;

    /**
     * Constructor method for EvbOnlineNachricht
     *
     * @uses EvbOnlineNachricht::setNachricht()
     * @uses EvbOnlineNachricht::setQuittung()
     * @uses EvbOnlineNachricht::setVeelaRequest()
     * @uses EvbOnlineNachricht::setVeelaResult()
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

    /**
     * Get Quittung value
     */
    public function getQuittung(): ?\THAG\XKfz\StructType\Quittung
    {
        return $this->Quittung;
    }

    /**
     * Set Quittung value
     */
    public function setQuittung(?\THAG\XKfz\StructType\Quittung $quittung = null): self
    {
        $this->Quittung = $quittung;

        return $this;
    }

    /**
     * Get VeelaRequest value
     */
    public function getVeelaRequest(): ?\THAG\XKfz\StructType\VeelaRequest
    {
        return $this->VeelaRequest;
    }

    /**
     * Set VeelaRequest value
     */
    public function setVeelaRequest(?\THAG\XKfz\StructType\VeelaRequest $veelaRequest = null): self
    {
        $this->VeelaRequest = $veelaRequest;

        return $this;
    }

    /**
     * Get VeelaResult value
     */
    public function getVeelaResult(): ?\THAG\XKfz\StructType\VeelaResult
    {
        return $this->VeelaResult;
    }

    /**
     * Set VeelaResult value
     */
    public function setVeelaResult(?\THAG\XKfz\StructType\VeelaResult $veelaResult = null): self
    {
        $this->VeelaResult = $veelaResult;

        return $this;
    }
}
