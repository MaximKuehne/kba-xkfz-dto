<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Logoff StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Logoff extends AbstractStructBase
{
    /**
     * The Logoff
     */
    public ?string $Logoff = null;

    /**
     * The Nutzerkennung
     */
    public ?string $Nutzerkennung = null;

    /**
     * The LoginTokenLogoff
     */
    public ?string $LoginTokenLogoff = null;

    /**
     * Constructor method for Logoff
     *
     * @uses Logoff::setLogoff()
     * @uses Logoff::setNutzerkennung()
     * @uses Logoff::setLoginTokenLogoff()
     */
    public function __construct(?string $logoff = null, ?string $nutzerkennung = null, ?string $loginTokenLogoff = null)
    {
        $this
            ->setLogoff($logoff)
            ->setNutzerkennung($nutzerkennung)
            ->setLoginTokenLogoff($loginTokenLogoff);
    }

    /**
     * Get Logoff value
     */
    public function getLogoff(): ?string
    {
        return $this->Logoff;
    }

    /**
     * Set Logoff value
     */
    public function setLogoff(?string $logoff = null): self
    {
        $this->Logoff = $logoff;

        return $this;
    }

    /**
     * Get Nutzerkennung value
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }

    /**
     * Set Nutzerkennung value
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;

        return $this;
    }

    /**
     * Get LoginTokenLogoff value
     */
    public function getLoginTokenLogoff(): ?string
    {
        return $this->LoginTokenLogoff;
    }

    /**
     * Set LoginTokenLogoff value
     */
    public function setLoginTokenLogoff(?string $loginTokenLogoff = null): self
    {
        $this->LoginTokenLogoff = $loginTokenLogoff;

        return $this;
    }
}
