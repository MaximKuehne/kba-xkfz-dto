<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Benachrichtigungsauftrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Benachrichtigungsauftrag extends AbstractStructBase
{
    /**
     * The Benachrichtigungsausloeser
     * @var string|null
     */
    public ?string $Benachrichtigungsausloeser = null;
    /**
     * The SMSEmpfaenger
     * @var string|null
     */
    public ?string $SMSEmpfaenger = null;
    /**
     * The SMSText
     * @var string|null
     */
    public ?string $SMSText = null;
    /**
     * The SMSAbsenderkennung
     * @var string|null
     */
    public ?string $SMSAbsenderkennung = null;
    /**
     * The Benachrichtigungszeitpunkt
     * @var string|null
     */
    public ?string $Benachrichtigungszeitpunkt = null;
    /**
     * Constructor method for Benachrichtigungsauftrag
     * @uses Benachrichtigungsauftrag::setBenachrichtigungsausloeser()
     * @uses Benachrichtigungsauftrag::setSMSEmpfaenger()
     * @uses Benachrichtigungsauftrag::setSMSText()
     * @uses Benachrichtigungsauftrag::setSMSAbsenderkennung()
     * @uses Benachrichtigungsauftrag::setBenachrichtigungszeitpunkt()
     * @param string $benachrichtigungsausloeser
     * @param string $sMSEmpfaenger
     * @param string $sMSText
     * @param string $sMSAbsenderkennung
     * @param string $benachrichtigungszeitpunkt
     */
    public function __construct(?string $benachrichtigungsausloeser = null, ?string $sMSEmpfaenger = null, ?string $sMSText = null, ?string $sMSAbsenderkennung = null, ?string $benachrichtigungszeitpunkt = null)
    {
        $this
            ->setBenachrichtigungsausloeser($benachrichtigungsausloeser)
            ->setSMSEmpfaenger($sMSEmpfaenger)
            ->setSMSText($sMSText)
            ->setSMSAbsenderkennung($sMSAbsenderkennung)
            ->setBenachrichtigungszeitpunkt($benachrichtigungszeitpunkt);
    }
    /**
     * Get Benachrichtigungsausloeser value
     * @return string|null
     */
    public function getBenachrichtigungsausloeser(): ?string
    {
        return $this->Benachrichtigungsausloeser;
    }
    /**
     * Set Benachrichtigungsausloeser value
     * @param string $benachrichtigungsausloeser
     * @return \THAG\XKfz\StructType\Benachrichtigungsauftrag
     */
    public function setBenachrichtigungsausloeser(?string $benachrichtigungsausloeser = null): self
    {
        $this->Benachrichtigungsausloeser = $benachrichtigungsausloeser;
        
        return $this;
    }
    /**
     * Get SMSEmpfaenger value
     * @return string|null
     */
    public function getSMSEmpfaenger(): ?string
    {
        return $this->SMSEmpfaenger;
    }
    /**
     * Set SMSEmpfaenger value
     * @param string $sMSEmpfaenger
     * @return \THAG\XKfz\StructType\Benachrichtigungsauftrag
     */
    public function setSMSEmpfaenger(?string $sMSEmpfaenger = null): self
    {
        $this->SMSEmpfaenger = $sMSEmpfaenger;
        
        return $this;
    }
    /**
     * Get SMSText value
     * @return string|null
     */
    public function getSMSText(): ?string
    {
        return $this->SMSText;
    }
    /**
     * Set SMSText value
     * @param string $sMSText
     * @return \THAG\XKfz\StructType\Benachrichtigungsauftrag
     */
    public function setSMSText(?string $sMSText = null): self
    {
        $this->SMSText = $sMSText;
        
        return $this;
    }
    /**
     * Get SMSAbsenderkennung value
     * @return string|null
     */
    public function getSMSAbsenderkennung(): ?string
    {
        return $this->SMSAbsenderkennung;
    }
    /**
     * Set SMSAbsenderkennung value
     * @param string $sMSAbsenderkennung
     * @return \THAG\XKfz\StructType\Benachrichtigungsauftrag
     */
    public function setSMSAbsenderkennung(?string $sMSAbsenderkennung = null): self
    {
        $this->SMSAbsenderkennung = $sMSAbsenderkennung;
        
        return $this;
    }
    /**
     * Get Benachrichtigungszeitpunkt value
     * @return string|null
     */
    public function getBenachrichtigungszeitpunkt(): ?string
    {
        return $this->Benachrichtigungszeitpunkt;
    }
    /**
     * Set Benachrichtigungszeitpunkt value
     * @param string $benachrichtigungszeitpunkt
     * @return \THAG\XKfz\StructType\Benachrichtigungsauftrag
     */
    public function setBenachrichtigungszeitpunkt(?string $benachrichtigungszeitpunkt = null): self
    {
        $this->Benachrichtigungszeitpunkt = $benachrichtigungszeitpunkt;
        
        return $this;
    }
}
