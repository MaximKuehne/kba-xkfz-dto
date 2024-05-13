<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbVerarbeitungshistorie StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbVerarbeitungshistorie extends AbstractStructBase
{
    /**
     * The ZeitpunktVerarbeitungsschritt
     */
    public ?string $ZeitpunktVerarbeitungsschritt = null;

    /**
     * The Verarbeitungsschritt
     */
    public ?string $Verarbeitungsschritt = null;

    /**
     * The VbStatus
     */
    public ?string $VbStatus = null;

    /**
     * The Behoerde
     */
    public ?\THAG\XKfz\StructType\Behoerde $Behoerde = null;

    /**
     * Constructor method for VbVerarbeitungshistorie
     *
     * @uses VbVerarbeitungshistorie::setZeitpunktVerarbeitungsschritt()
     * @uses VbVerarbeitungshistorie::setVerarbeitungsschritt()
     * @uses VbVerarbeitungshistorie::setVbStatus()
     * @uses VbVerarbeitungshistorie::setBehoerde()
     */
    public function __construct(?string $zeitpunktVerarbeitungsschritt = null, ?string $verarbeitungsschritt = null, ?string $vbStatus = null, ?\THAG\XKfz\StructType\Behoerde $behoerde = null)
    {
        $this
            ->setZeitpunktVerarbeitungsschritt($zeitpunktVerarbeitungsschritt)
            ->setVerarbeitungsschritt($verarbeitungsschritt)
            ->setVbStatus($vbStatus)
            ->setBehoerde($behoerde);
    }

    /**
     * Get ZeitpunktVerarbeitungsschritt value
     */
    public function getZeitpunktVerarbeitungsschritt(): ?string
    {
        return $this->ZeitpunktVerarbeitungsschritt;
    }

    /**
     * Set ZeitpunktVerarbeitungsschritt value
     */
    public function setZeitpunktVerarbeitungsschritt(?string $zeitpunktVerarbeitungsschritt = null): self
    {
        $this->ZeitpunktVerarbeitungsschritt = $zeitpunktVerarbeitungsschritt;

        return $this;
    }

    /**
     * Get Verarbeitungsschritt value
     */
    public function getVerarbeitungsschritt(): ?string
    {
        return $this->Verarbeitungsschritt;
    }

    /**
     * Set Verarbeitungsschritt value
     */
    public function setVerarbeitungsschritt(?string $verarbeitungsschritt = null): self
    {
        $this->Verarbeitungsschritt = $verarbeitungsschritt;

        return $this;
    }

    /**
     * Get VbStatus value
     */
    public function getVbStatus(): ?string
    {
        return $this->VbStatus;
    }

    /**
     * Set VbStatus value
     */
    public function setVbStatus(?string $vbStatus = null): self
    {
        $this->VbStatus = $vbStatus;

        return $this;
    }

    /**
     * Get Behoerde value
     */
    public function getBehoerde(): ?\THAG\XKfz\StructType\Behoerde
    {
        return $this->Behoerde;
    }

    /**
     * Set Behoerde value
     */
    public function setBehoerde(?\THAG\XKfz\StructType\Behoerde $behoerde = null): self
    {
        $this->Behoerde = $behoerde;

        return $this;
    }
}
