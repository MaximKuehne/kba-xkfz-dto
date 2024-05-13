<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Logoff StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Logoff extends AbstractStructBase
{
    /**
     * The Logoff
     * @var string|null
     */
    public ?string $Logoff = null;
    /**
     * The Nutzerkennung
     * @var string|null
     */
    public ?string $Nutzerkennung = null;
    /**
     * The LoginTokenLogoff
     * @var string|null
     */
    public ?string $LoginTokenLogoff = null;
    /**
     * Constructor method for Logoff
     * @uses Logoff::setLogoff()
     * @uses Logoff::setNutzerkennung()
     * @uses Logoff::setLoginTokenLogoff()
     * @param string $logoff
     * @param string $nutzerkennung
     * @param string $loginTokenLogoff
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
     * @return string|null
     */
    public function getLogoff(): ?string
    {
        return $this->Logoff;
    }
    /**
     * Set Logoff value
     * @param string $logoff
     * @return \THAG\XKfz\StructType\Logoff
     */
    public function setLogoff(?string $logoff = null): self
    {
        $this->Logoff = $logoff;
        
        return $this;
    }
    /**
     * Get Nutzerkennung value
     * @return string|null
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }
    /**
     * Set Nutzerkennung value
     * @param string $nutzerkennung
     * @return \THAG\XKfz\StructType\Logoff
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;
        
        return $this;
    }
    /**
     * Get LoginTokenLogoff value
     * @return string|null
     */
    public function getLoginTokenLogoff(): ?string
    {
        return $this->LoginTokenLogoff;
    }
    /**
     * Set LoginTokenLogoff value
     * @param string $loginTokenLogoff
     * @return \THAG\XKfz\StructType\Logoff
     */
    public function setLoginTokenLogoff(?string $loginTokenLogoff = null): self
    {
        $this->LoginTokenLogoff = $loginTokenLogoff;
        
        return $this;
    }
}
