<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Login StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Login extends AbstractStructBase
{
    /**
     * The Zeitstempel
     */
    public ?string $Zeitstempel = null;

    /**
     * The SetLoginToken
     */
    public ?string $SetLoginToken = null;

    /**
     * The SetLoginTokenGueltigBis
     */
    public ?string $SetLoginTokenGueltigBis = null;

    /**
     * The LoginAnfrage
     */
    public ?\THAG\XKfz\StructType\LoginAnfrage $LoginAnfrage = null;

    /**
     * The LoginAntwort
     */
    public ?\THAG\XKfz\StructType\LoginAntwort $LoginAntwort = null;

    /**
     * The Logoff
     */
    public ?\THAG\XKfz\StructType\Logoff $Logoff = null;

    /**
     * Constructor method for Login
     *
     * @uses Login::setZeitstempel()
     * @uses Login::setSetLoginToken()
     * @uses Login::setSetLoginTokenGueltigBis()
     * @uses Login::setLoginAnfrage()
     * @uses Login::setLoginAntwort()
     * @uses Login::setLogoff()
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
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }

    /**
     * Set Zeitstempel value
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;

        return $this;
    }

    /**
     * Get SetLoginToken value
     */
    public function getSetLoginToken(): ?string
    {
        return $this->SetLoginToken;
    }

    /**
     * Set SetLoginToken value
     */
    public function setSetLoginToken(?string $setLoginToken = null): self
    {
        $this->SetLoginToken = $setLoginToken;

        return $this;
    }

    /**
     * Get SetLoginTokenGueltigBis value
     */
    public function getSetLoginTokenGueltigBis(): ?string
    {
        return $this->SetLoginTokenGueltigBis;
    }

    /**
     * Set SetLoginTokenGueltigBis value
     */
    public function setSetLoginTokenGueltigBis(?string $setLoginTokenGueltigBis = null): self
    {
        $this->SetLoginTokenGueltigBis = $setLoginTokenGueltigBis;

        return $this;
    }

    /**
     * Get LoginAnfrage value
     */
    public function getLoginAnfrage(): ?\THAG\XKfz\StructType\LoginAnfrage
    {
        return $this->LoginAnfrage;
    }

    /**
     * Set LoginAnfrage value
     */
    public function setLoginAnfrage(?\THAG\XKfz\StructType\LoginAnfrage $loginAnfrage = null): self
    {
        $this->LoginAnfrage = $loginAnfrage;

        return $this;
    }

    /**
     * Get LoginAntwort value
     */
    public function getLoginAntwort(): ?\THAG\XKfz\StructType\LoginAntwort
    {
        return $this->LoginAntwort;
    }

    /**
     * Set LoginAntwort value
     */
    public function setLoginAntwort(?\THAG\XKfz\StructType\LoginAntwort $loginAntwort = null): self
    {
        $this->LoginAntwort = $loginAntwort;

        return $this;
    }

    /**
     * Get Logoff value
     */
    public function getLogoff(): ?\THAG\XKfz\StructType\Logoff
    {
        return $this->Logoff;
    }

    /**
     * Set Logoff value
     */
    public function setLogoff(?\THAG\XKfz\StructType\Logoff $logoff = null): self
    {
        $this->Logoff = $logoff;

        return $this;
    }
}
