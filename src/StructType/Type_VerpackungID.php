<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VerpackungID StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VerpackungID extends AbstractStructBase
{
    /**
     * The verpackungsnummer
     */
    public ?string $verpackungsnummer = null;

    /**
     * The umverpackung
     */
    public ?string $umverpackung = null;

    /**
     * The palette
     */
    public ?string $palette = null;

    /**
     * Constructor method for Type.VerpackungID
     *
     * @uses Type_VerpackungID::setVerpackungsnummer()
     * @uses Type_VerpackungID::setUmverpackung()
     * @uses Type_VerpackungID::setPalette()
     */
    public function __construct(?string $verpackungsnummer = null, ?string $umverpackung = null, ?string $palette = null)
    {
        $this
            ->setVerpackungsnummer($verpackungsnummer)
            ->setUmverpackung($umverpackung)
            ->setPalette($palette);
    }

    /**
     * Get verpackungsnummer value
     */
    public function getVerpackungsnummer(): ?string
    {
        return $this->verpackungsnummer;
    }

    /**
     * Set verpackungsnummer value
     */
    public function setVerpackungsnummer(?string $verpackungsnummer = null): self
    {
        $this->verpackungsnummer = $verpackungsnummer;

        return $this;
    }

    /**
     * Get umverpackung value
     */
    public function getUmverpackung(): ?string
    {
        return $this->umverpackung;
    }

    /**
     * Set umverpackung value
     */
    public function setUmverpackung(?string $umverpackung = null): self
    {
        $this->umverpackung = $umverpackung;

        return $this;
    }

    /**
     * Get palette value
     */
    public function getPalette(): ?string
    {
        return $this->palette;
    }

    /**
     * Set palette value
     */
    public function setPalette(?string $palette = null): self
    {
        $this->palette = $palette;

        return $this;
    }
}
