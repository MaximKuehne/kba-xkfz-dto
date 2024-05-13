<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Benachrichtigungsauftrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Benachrichtigungsauftrag extends AbstractStructBase
{
    /**
     * The Benachrichtigungsausloeser
     */
    public ?string $Benachrichtigungsausloeser = null;

    /**
     * The SMSEmpfaenger
     */
    public ?string $SMSEmpfaenger = null;

    /**
     * The SMSText
     */
    public ?string $SMSText = null;

    /**
     * The SMSAbsenderkennung
     */
    public ?string $SMSAbsenderkennung = null;

    /**
     * The Benachrichtigungszeitpunkt
     */
    public ?string $Benachrichtigungszeitpunkt = null;

    /**
     * Constructor method for Benachrichtigungsauftrag
     *
     * @uses Benachrichtigungsauftrag::setBenachrichtigungsausloeser()
     * @uses Benachrichtigungsauftrag::setSMSEmpfaenger()
     * @uses Benachrichtigungsauftrag::setSMSText()
     * @uses Benachrichtigungsauftrag::setSMSAbsenderkennung()
     * @uses Benachrichtigungsauftrag::setBenachrichtigungszeitpunkt()
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
     */
    public function getBenachrichtigungsausloeser(): ?string
    {
        return $this->Benachrichtigungsausloeser;
    }

    /**
     * Set Benachrichtigungsausloeser value
     */
    public function setBenachrichtigungsausloeser(?string $benachrichtigungsausloeser = null): self
    {
        $this->Benachrichtigungsausloeser = $benachrichtigungsausloeser;

        return $this;
    }

    /**
     * Get SMSEmpfaenger value
     */
    public function getSMSEmpfaenger(): ?string
    {
        return $this->SMSEmpfaenger;
    }

    /**
     * Set SMSEmpfaenger value
     */
    public function setSMSEmpfaenger(?string $sMSEmpfaenger = null): self
    {
        $this->SMSEmpfaenger = $sMSEmpfaenger;

        return $this;
    }

    /**
     * Get SMSText value
     */
    public function getSMSText(): ?string
    {
        return $this->SMSText;
    }

    /**
     * Set SMSText value
     */
    public function setSMSText(?string $sMSText = null): self
    {
        $this->SMSText = $sMSText;

        return $this;
    }

    /**
     * Get SMSAbsenderkennung value
     */
    public function getSMSAbsenderkennung(): ?string
    {
        return $this->SMSAbsenderkennung;
    }

    /**
     * Set SMSAbsenderkennung value
     */
    public function setSMSAbsenderkennung(?string $sMSAbsenderkennung = null): self
    {
        $this->SMSAbsenderkennung = $sMSAbsenderkennung;

        return $this;
    }

    /**
     * Get Benachrichtigungszeitpunkt value
     */
    public function getBenachrichtigungszeitpunkt(): ?string
    {
        return $this->Benachrichtigungszeitpunkt;
    }

    /**
     * Set Benachrichtigungszeitpunkt value
     */
    public function setBenachrichtigungszeitpunkt(?string $benachrichtigungszeitpunkt = null): self
    {
        $this->Benachrichtigungszeitpunkt = $benachrichtigungszeitpunkt;

        return $this;
    }
}
