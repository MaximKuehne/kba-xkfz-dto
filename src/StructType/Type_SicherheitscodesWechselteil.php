<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SicherheitscodesWechselteil StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SicherheitscodesWechselteil extends AbstractStructBase
{
    /**
     * The SicherheitscodeKennz1
     */
    public ?string $SicherheitscodeKennz1 = null;

    /**
     * The SicherheitscodeKennz2
     */
    public ?string $SicherheitscodeKennz2 = null;

    /**
     * Constructor method for Type.SicherheitscodesWechselteil
     *
     * @uses Type_SicherheitscodesWechselteil::setSicherheitscodeKennz1()
     * @uses Type_SicherheitscodesWechselteil::setSicherheitscodeKennz2()
     */
    public function __construct(?string $sicherheitscodeKennz1 = null, ?string $sicherheitscodeKennz2 = null)
    {
        $this
            ->setSicherheitscodeKennz1($sicherheitscodeKennz1)
            ->setSicherheitscodeKennz2($sicherheitscodeKennz2);
    }

    /**
     * Get SicherheitscodeKennz1 value
     */
    public function getSicherheitscodeKennz1(): ?string
    {
        return $this->SicherheitscodeKennz1;
    }

    /**
     * Set SicherheitscodeKennz1 value
     */
    public function setSicherheitscodeKennz1(?string $sicherheitscodeKennz1 = null): self
    {
        $this->SicherheitscodeKennz1 = $sicherheitscodeKennz1;

        return $this;
    }

    /**
     * Get SicherheitscodeKennz2 value
     */
    public function getSicherheitscodeKennz2(): ?string
    {
        return $this->SicherheitscodeKennz2;
    }

    /**
     * Set SicherheitscodeKennz2 value
     */
    public function setSicherheitscodeKennz2(?string $sicherheitscodeKennz2 = null): self
    {
        $this->SicherheitscodeKennz2 = $sicherheitscodeKennz2;

        return $this;
    }
}
