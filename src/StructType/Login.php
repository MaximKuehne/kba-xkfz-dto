<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Login StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Login extends AbstractStructBase
{
    /**
     * The Zeitstempel
     * @var string|null
     */
    public ?string $Zeitstempel = null;
    /**
     * The SetLoginToken
     * @var string|null
     */
    public ?string $SetLoginToken = null;
    /**
     * The SetLoginTokenGueltigBis
     * @var string|null
     */
    public ?string $SetLoginTokenGueltigBis = null;
    /**
     * The LoginAnfrage
     * @var \THAG\XKfz\StructType\LoginAnfrage|null
     */
    public ?\THAG\XKfz\StructType\LoginAnfrage $LoginAnfrage = null;
    /**
     * The LoginAntwort
     * @var \THAG\XKfz\StructType\LoginAntwort|null
     */
    public ?\THAG\XKfz\StructType\LoginAntwort $LoginAntwort = null;
    /**
     * The Logoff
     * @var \THAG\XKfz\StructType\Logoff|null
     */
    public ?\THAG\XKfz\StructType\Logoff $Logoff = null;
    /**
     * Constructor method for Login
     * @uses Login::setZeitstempel()
     * @uses Login::setSetLoginToken()
     * @uses Login::setSetLoginTokenGueltigBis()
     * @uses Login::setLoginAnfrage()
     * @uses Login::setLoginAntwort()
     * @uses Login::setLogoff()
     * @param string $zeitstempel
     * @param string $setLoginToken
     * @param string $setLoginTokenGueltigBis
     * @param \THAG\XKfz\StructType\LoginAnfrage $loginAnfrage
     * @param \THAG\XKfz\StructType\LoginAntwort $loginAntwort
     * @param \THAG\XKfz\StructType\Logoff $logoff
     */
    public function __construct(?string $zeitstempel = null, ?string $setLoginToken = null, ?string $setLoginTokenGueltigBis = null, ?\THAG\XKfz\StructType\LoginAnfrage $loginAnfrage = null, ?\THAG\XKfz\StructType\LoginAntwort $loginAntwort = null, ?\THAG\XKfz\StructType\Logoff $logoff = null)
    {
        $this
            ->setZeitstempel($zeitstempel)
            ->setSetLoginToken($setLoginToken)
            ->setSetLoginTokenGueltigBis($setLoginTokenGueltigBis)
            ->setLoginAnfrage($loginAnfrage)
            ->setLoginAntwort($loginAntwort)
            ->setLogoff($logoff);
    }
    /**
     * Get Zeitstempel value
     * @return string|null
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }
    /**
     * Set Zeitstempel value
     * @param string $zeitstempel
     * @return \THAG\XKfz\StructType\Login
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;
        
        return $this;
    }
    /**
     * Get SetLoginToken value
     * @return string|null
     */
    public function getSetLoginToken(): ?string
    {
        return $this->SetLoginToken;
    }
    /**
     * Set SetLoginToken value
     * @param string $setLoginToken
     * @return \THAG\XKfz\StructType\Login
     */
    public function setSetLoginToken(?string $setLoginToken = null): self
    {
        $this->SetLoginToken = $setLoginToken;
        
        return $this;
    }
    /**
     * Get SetLoginTokenGueltigBis value
     * @return string|null
     */
    public function getSetLoginTokenGueltigBis(): ?string
    {
        return $this->SetLoginTokenGueltigBis;
    }
    /**
     * Set SetLoginTokenGueltigBis value
     * @param string $setLoginTokenGueltigBis
     * @return \THAG\XKfz\StructType\Login
     */
    public function setSetLoginTokenGueltigBis(?string $setLoginTokenGueltigBis = null): self
    {
        $this->SetLoginTokenGueltigBis = $setLoginTokenGueltigBis;
        
        return $this;
    }
    /**
     * Get LoginAnfrage value
     * @return \THAG\XKfz\StructType\LoginAnfrage|null
     */
    public function getLoginAnfrage(): ?\THAG\XKfz\StructType\LoginAnfrage
    {
        return $this->LoginAnfrage;
    }
    /**
     * Set LoginAnfrage value
     * @param \THAG\XKfz\StructType\LoginAnfrage $loginAnfrage
     * @return \THAG\XKfz\StructType\Login
     */
    public function setLoginAnfrage(?\THAG\XKfz\StructType\LoginAnfrage $loginAnfrage = null): self
    {
        $this->LoginAnfrage = $loginAnfrage;
        
        return $this;
    }
    /**
     * Get LoginAntwort value
     * @return \THAG\XKfz\StructType\LoginAntwort|null
     */
    public function getLoginAntwort(): ?\THAG\XKfz\StructType\LoginAntwort
    {
        return $this->LoginAntwort;
    }
    /**
     * Set LoginAntwort value
     * @param \THAG\XKfz\StructType\LoginAntwort $loginAntwort
     * @return \THAG\XKfz\StructType\Login
     */
    public function setLoginAntwort(?\THAG\XKfz\StructType\LoginAntwort $loginAntwort = null): self
    {
        $this->LoginAntwort = $loginAntwort;
        
        return $this;
    }
    /**
     * Get Logoff value
     * @return \THAG\XKfz\StructType\Logoff|null
     */
    public function getLogoff(): ?\THAG\XKfz\StructType\Logoff
    {
        return $this->Logoff;
    }
    /**
     * Set Logoff value
     * @param \THAG\XKfz\StructType\Logoff $logoff
     * @return \THAG\XKfz\StructType\Login
     */
    public function setLogoff(?\THAG\XKfz\StructType\Logoff $logoff = null): self
    {
        $this->Logoff = $logoff;
        
        return $this;
    }
}
