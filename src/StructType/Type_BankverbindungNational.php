<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BankverbindungNational StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BankverbindungNational extends AbstractStructBase
{
    /**
     * The kontonummer
     * @var string|null
     */
    public ?string $kontonummer = null;
    /**
     * The bankleitzahl
     * @var string|null
     */
    public ?string $bankleitzahl = null;
    /**
     * Constructor method for Type.BankverbindungNational
     * @uses Type_BankverbindungNational::setKontonummer()
     * @uses Type_BankverbindungNational::setBankleitzahl()
     * @param string $kontonummer
     * @param string $bankleitzahl
     */
    public function __construct(?string $kontonummer = null, ?string $bankleitzahl = null)
    {
        $this
            ->setKontonummer($kontonummer)
            ->setBankleitzahl($bankleitzahl);
    }
    /**
     * Get kontonummer value
     * @return string|null
     */
    public function getKontonummer(): ?string
    {
        return $this->kontonummer;
    }
    /**
     * Set kontonummer value
     * @param string $kontonummer
     * @return \THAG\XKfz\StructType\Type_BankverbindungNational
     */
    public function setKontonummer(?string $kontonummer = null): self
    {
        $this->kontonummer = $kontonummer;
        
        return $this;
    }
    /**
     * Get bankleitzahl value
     * @return string|null
     */
    public function getBankleitzahl(): ?string
    {
        return $this->bankleitzahl;
    }
    /**
     * Set bankleitzahl value
     * @param string $bankleitzahl
     * @return \THAG\XKfz\StructType\Type_BankverbindungNational
     */
    public function setBankleitzahl(?string $bankleitzahl = null): self
    {
        $this->bankleitzahl = $bankleitzahl;
        
        return $this;
    }
}
