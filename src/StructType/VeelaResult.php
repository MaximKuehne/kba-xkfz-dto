<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeelaResult StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VeelaResult extends AbstractStructBase
{
    /**
     * The Login
     * @var \THAG\XKfz\StructType\Login|null
     */
    public ?\THAG\XKfz\StructType\Login $Login = null;
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
     * The Briefkasten
     * @var \THAG\XKfz\StructType\Briefkasten|null
     */
    public ?\THAG\XKfz\StructType\Briefkasten $Briefkasten = null;
    /**
     * Constructor method for VeelaResult
     * @uses VeelaResult::setLogin()
     * @uses VeelaResult::setNachricht()
     * @uses VeelaResult::setQuittung()
     * @uses VeelaResult::setBriefkasten()
     * @param \THAG\XKfz\StructType\Login $login
     * @param \THAG\XKfz\StructType\Nachricht $nachricht
     * @param \THAG\XKfz\StructType\Quittung $quittung
     * @param \THAG\XKfz\StructType\Briefkasten $briefkasten
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
     * @return \THAG\XKfz\StructType\Login|null
     */
    public function getLogin(): ?\THAG\XKfz\StructType\Login
    {
        return $this->Login;
    }
    /**
     * Set Login value
     * @param \THAG\XKfz\StructType\Login $login
     * @return \THAG\XKfz\StructType\VeelaResult
     */
    public function setLogin(?\THAG\XKfz\StructType\Login $login = null): self
    {
        $this->Login = $login;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\VeelaResult
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
     * @return \THAG\XKfz\StructType\VeelaResult
     */
    public function setQuittung(?\THAG\XKfz\StructType\Quittung $quittung = null): self
    {
        $this->Quittung = $quittung;
        
        return $this;
    }
    /**
     * Get Briefkasten value
     * @return \THAG\XKfz\StructType\Briefkasten|null
     */
    public function getBriefkasten(): ?\THAG\XKfz\StructType\Briefkasten
    {
        return $this->Briefkasten;
    }
    /**
     * Set Briefkasten value
     * @param \THAG\XKfz\StructType\Briefkasten $briefkasten
     * @return \THAG\XKfz\StructType\VeelaResult
     */
    public function setBriefkasten(?\THAG\XKfz\StructType\Briefkasten $briefkasten = null): self
    {
        $this->Briefkasten = $briefkasten;
        
        return $this;
    }
}
