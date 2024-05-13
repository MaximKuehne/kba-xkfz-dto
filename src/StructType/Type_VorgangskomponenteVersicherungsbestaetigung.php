<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteVersicherungsbestaetigung
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteVersicherungsbestaetigung extends AbstractStructBase
{
    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The Nachricht
     */
    public ?\THAG\XKfz\StructType\Nachricht $Nachricht = null;

    /**
     * The EvbOnlineNachricht
     */
    public ?\THAG\XKfz\StructType\EvbOnlineNachricht $EvbOnlineNachricht = null;

    /**
     * Constructor method for Type.VorgangskomponenteVersicherungsbestaetigung
     *
     * @uses Type_VorgangskomponenteVersicherungsbestaetigung::setVersicherungsbestaetigungsnummer()
     * @uses Type_VorgangskomponenteVersicherungsbestaetigung::setNachricht()
     * @uses Type_VorgangskomponenteVersicherungsbestaetigung::setEvbOnlineNachricht()
     */
    public function __construct(?string $versicherungsbestaetigungsnummer = null, ?\THAG\XKfz\StructType\Nachricht $nachricht = null, ?\THAG\XKfz\StructType\EvbOnlineNachricht $evbOnlineNachricht = null)
    {
        $this
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setNachricht($nachricht)
            ->setEvbOnlineNachricht($evbOnlineNachricht);
    }

    /**
     * Get Versicherungsbestaetigungsnummer value
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }

    /**
     * Set Versicherungsbestaetigungsnummer value
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;

        return $this;
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
     * Get EvbOnlineNachricht value
     */
    public function getEvbOnlineNachricht(): ?\THAG\XKfz\StructType\EvbOnlineNachricht
    {
        return $this->EvbOnlineNachricht;
    }

    /**
     * Set EvbOnlineNachricht value
     */
    public function setEvbOnlineNachricht(?\THAG\XKfz\StructType\EvbOnlineNachricht $evbOnlineNachricht = null): self
    {
        $this->EvbOnlineNachricht = $evbOnlineNachricht;

        return $this;
    }
}
