<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeelaRequest StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VeelaRequest extends AbstractStructBase
{
    /**
     * The Login
     */
    public ?\THAG\XKfz\StructType\Login $Login = null;

    /**
     * The Nachricht
     */
    public ?\THAG\XKfz\StructType\Nachricht $Nachricht = null;

    /**
     * The Quittung
     */
    public ?\THAG\XKfz\StructType\Quittung $Quittung = null;

    /**
     * The Briefkasten
     */
    public ?\THAG\XKfz\StructType\Briefkasten $Briefkasten = null;

    /**
     * Constructor method for VeelaRequest
     *
     * @uses VeelaRequest::setLogin()
     * @uses VeelaRequest::setNachricht()
     * @uses VeelaRequest::setQuittung()
     * @uses VeelaRequest::setBriefkasten()
     */
    public function __construct(?\THAG\XKfz\StructType\Login $login = null, ?\THAG\XKfz\StructType\Nachricht $nachricht = null, ?\THAG\XKfz\StructType\Quittung $quittung = null, ?\THAG\XKfz\StructType\Briefkasten $briefkasten = null)
    {
        $this
            ->setLogin($login)
            ->setNachricht($nachricht)
            ->setQuittung($quittung)
            ->setBriefkasten($briefkasten);
    }

    /**
     * Get Login value
     */
    public function getLogin(): ?\THAG\XKfz\StructType\Login
    {
        return $this->Login;
    }

    /**
     * Set Login value
     */
    public function setLogin(?\THAG\XKfz\StructType\Login $login = null): self
    {
        $this->Login = $login;

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
     * Get Briefkasten value
     */
    public function getBriefkasten(): ?\THAG\XKfz\StructType\Briefkasten
    {
        return $this->Briefkasten;
    }

    /**
     * Set Briefkasten value
     */
    public function setBriefkasten(?\THAG\XKfz\StructType\Briefkasten $briefkasten = null): self
    {
        $this->Briefkasten = $briefkasten;

        return $this;
    }
}
