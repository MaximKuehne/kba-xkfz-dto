<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UebermittlungsVerarbeitungshistorie StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UebermittlungsVerarbeitungshistorie extends AbstractStructBase
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
     * The Behoerde
     */
    public ?\THAG\XKfz\StructType\Behoerde $Behoerde = null;

    /**
     * Constructor method for UebermittlungsVerarbeitungshistorie
     *
     * @uses UebermittlungsVerarbeitungshistorie::setZeitpunktVerarbeitungsschritt()
     * @uses UebermittlungsVerarbeitungshistorie::setVerarbeitungsschritt()
     * @uses UebermittlungsVerarbeitungshistorie::setBehoerde()
     */
    public function __construct(?string $zeitpunktVerarbeitungsschritt = null, ?string $verarbeitungsschritt = null, ?\THAG\XKfz\StructType\Behoerde $behoerde = null)
    {
        $this
            ->setZeitpunktVerarbeitungsschritt($zeitpunktVerarbeitungsschritt)
            ->setVerarbeitungsschritt($verarbeitungsschritt)
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
