<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SicherheitscodesKennzeichen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SicherheitscodesKennzeichen extends AbstractStructBase
{
    /**
     * The SicherheitscodeKennz1
     * @var string|null
     */
    public ?string $SicherheitscodeKennz1 = null;
    /**
     * The SicherheitscodeKennz2
     * @var string|null
     */
    public ?string $SicherheitscodeKennz2 = null;
    /**
     * Constructor method for Type.SicherheitscodesKennzeichen
     * @uses Type_SicherheitscodesKennzeichen::setSicherheitscodeKennz1()
     * @uses Type_SicherheitscodesKennzeichen::setSicherheitscodeKennz2()
     * @param string $sicherheitscodeKennz1
     * @param string $sicherheitscodeKennz2
     */
    public function __construct(?string $sicherheitscodeKennz1 = null, ?string $sicherheitscodeKennz2 = null)
    {
        $this
            ->setSicherheitscodeKennz1($sicherheitscodeKennz1)
            ->setSicherheitscodeKennz2($sicherheitscodeKennz2);
    }
    /**
     * Get SicherheitscodeKennz1 value
     * @return string|null
     */
    public function getSicherheitscodeKennz1(): ?string
    {
        return $this->SicherheitscodeKennz1;
    }
    /**
     * Set SicherheitscodeKennz1 value
     * @param string $sicherheitscodeKennz1
     * @return \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen
     */
    public function setSicherheitscodeKennz1(?string $sicherheitscodeKennz1 = null): self
    {
        $this->SicherheitscodeKennz1 = $sicherheitscodeKennz1;
        
        return $this;
    }
    /**
     * Get SicherheitscodeKennz2 value
     * @return string|null
     */
    public function getSicherheitscodeKennz2(): ?string
    {
        return $this->SicherheitscodeKennz2;
    }
    /**
     * Set SicherheitscodeKennz2 value
     * @param string $sicherheitscodeKennz2
     * @return \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen
     */
    public function setSicherheitscodeKennz2(?string $sicherheitscodeKennz2 = null): self
    {
        $this->SicherheitscodeKennz2 = $sicherheitscodeKennz2;
        
        return $this;
    }
}
