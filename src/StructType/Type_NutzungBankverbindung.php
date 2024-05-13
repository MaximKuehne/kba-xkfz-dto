<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NutzungBankverbindung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NutzungBankverbindung extends AbstractStructBase
{
    /**
     * The code
     */
    public ?\THAG\XKfz\StructType\Code_NutzungBankverbindung $code = null;

    /**
     * The zusatz
     */
    public ?string $zusatz = null;

    /**
     * Constructor method for Type.NutzungBankverbindung
     *
     * @uses Type_NutzungBankverbindung::setCode()
     * @uses Type_NutzungBankverbindung::setZusatz()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_NutzungBankverbindung $code = null, ?string $zusatz = null)
    {
        $this
            ->setCode($code)
            ->setZusatz($zusatz);
    }

    /**
     * Get code value
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_NutzungBankverbindung
    {
        return $this->code;
    }

    /**
     * Set code value
     */
    public function setCode(?\THAG\XKfz\StructType\Code_NutzungBankverbindung $code = null): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get zusatz value
     */
    public function getZusatz(): ?string
    {
        return $this->zusatz;
    }

    /**
     * Set zusatz value
     */
    public function setZusatz(?string $zusatz = null): self
    {
        $this->zusatz = $zusatz;

        return $this;
    }
}
