<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbVerarbeitungshistorie StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbVerarbeitungshistorie extends AbstractStructBase
{
    /**
     * The ZeitpunktVerarbeitungsschritt
     * @var string|null
     */
    public ?string $ZeitpunktVerarbeitungsschritt = null;
    /**
     * The Verarbeitungsschritt
     * @var string|null
     */
    public ?string $Verarbeitungsschritt = null;
    /**
     * The VbStatus
     * @var string|null
     */
    public ?string $VbStatus = null;
    /**
     * The Behoerde
     * @var \THAG\XKfz\StructType\Behoerde|null
     */
    public ?\THAG\XKfz\StructType\Behoerde $Behoerde = null;
    /**
     * Constructor method for VbVerarbeitungshistorie
     * @uses VbVerarbeitungshistorie::setZeitpunktVerarbeitungsschritt()
     * @uses VbVerarbeitungshistorie::setVerarbeitungsschritt()
     * @uses VbVerarbeitungshistorie::setVbStatus()
     * @uses VbVerarbeitungshistorie::setBehoerde()
     * @param string $zeitpunktVerarbeitungsschritt
     * @param string $verarbeitungsschritt
     * @param string $vbStatus
     * @param \THAG\XKfz\StructType\Behoerde $behoerde
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
     * @return string|null
     */
    public function getZeitpunktVerarbeitungsschritt(): ?string
    {
        return $this->ZeitpunktVerarbeitungsschritt;
    }
    /**
     * Set ZeitpunktVerarbeitungsschritt value
     * @param string $zeitpunktVerarbeitungsschritt
     * @return \THAG\XKfz\StructType\VbVerarbeitungshistorie
     */
    public function setZeitpunktVerarbeitungsschritt(?string $zeitpunktVerarbeitungsschritt = null): self
    {
        $this->ZeitpunktVerarbeitungsschritt = $zeitpunktVerarbeitungsschritt;
        
        return $this;
    }
    /**
     * Get Verarbeitungsschritt value
     * @return string|null
     */
    public function getVerarbeitungsschritt(): ?string
    {
        return $this->Verarbeitungsschritt;
    }
    /**
     * Set Verarbeitungsschritt value
     * @param string $verarbeitungsschritt
     * @return \THAG\XKfz\StructType\VbVerarbeitungshistorie
     */
    public function setVerarbeitungsschritt(?string $verarbeitungsschritt = null): self
    {
        $this->Verarbeitungsschritt = $verarbeitungsschritt;
        
        return $this;
    }
    /**
     * Get VbStatus value
     * @return string|null
     */
    public function getVbStatus(): ?string
    {
        return $this->VbStatus;
    }
    /**
     * Set VbStatus value
     * @param string $vbStatus
     * @return \THAG\XKfz\StructType\VbVerarbeitungshistorie
     */
    public function setVbStatus(?string $vbStatus = null): self
    {
        $this->VbStatus = $vbStatus;
        
        return $this;
    }
    /**
     * Get Behoerde value
     * @return \THAG\XKfz\StructType\Behoerde|null
     */
    public function getBehoerde(): ?\THAG\XKfz\StructType\Behoerde
    {
        return $this->Behoerde;
    }
    /**
     * Set Behoerde value
     * @param \THAG\XKfz\StructType\Behoerde $behoerde
     * @return \THAG\XKfz\StructType\VbVerarbeitungshistorie
     */
    public function setBehoerde(?\THAG\XKfz\StructType\Behoerde $behoerde = null): self
    {
        $this->Behoerde = $behoerde;
        
        return $this;
    }
}
