<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VerpackungID StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VerpackungID extends AbstractStructBase
{
    /**
     * The verpackungsnummer
     * @var string|null
     */
    public ?string $verpackungsnummer = null;
    /**
     * The umverpackung
     * @var string|null
     */
    public ?string $umverpackung = null;
    /**
     * The palette
     * @var string|null
     */
    public ?string $palette = null;
    /**
     * Constructor method for Type.VerpackungID
     * @uses Type_VerpackungID::setVerpackungsnummer()
     * @uses Type_VerpackungID::setUmverpackung()
     * @uses Type_VerpackungID::setPalette()
     * @param string $verpackungsnummer
     * @param string $umverpackung
     * @param string $palette
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
     * @return string|null
     */
    public function getVerpackungsnummer(): ?string
    {
        return $this->verpackungsnummer;
    }
    /**
     * Set verpackungsnummer value
     * @param string $verpackungsnummer
     * @return \THAG\XKfz\StructType\Type_VerpackungID
     */
    public function setVerpackungsnummer(?string $verpackungsnummer = null): self
    {
        $this->verpackungsnummer = $verpackungsnummer;
        
        return $this;
    }
    /**
     * Get umverpackung value
     * @return string|null
     */
    public function getUmverpackung(): ?string
    {
        return $this->umverpackung;
    }
    /**
     * Set umverpackung value
     * @param string $umverpackung
     * @return \THAG\XKfz\StructType\Type_VerpackungID
     */
    public function setUmverpackung(?string $umverpackung = null): self
    {
        $this->umverpackung = $umverpackung;
        
        return $this;
    }
    /**
     * Get palette value
     * @return string|null
     */
    public function getPalette(): ?string
    {
        return $this->palette;
    }
    /**
     * Set palette value
     * @param string $palette
     * @return \THAG\XKfz\StructType\Type_VerpackungID
     */
    public function setPalette(?string $palette = null): self
    {
        $this->palette = $palette;
        
        return $this;
    }
}
