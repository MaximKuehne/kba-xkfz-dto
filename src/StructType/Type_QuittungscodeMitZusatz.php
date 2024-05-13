<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.QuittungscodeMitZusatz StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_QuittungscodeMitZusatz extends AbstractStructBase
{
    /**
     * The code
     */
    public ?\THAG\XKfz\StructType\Code_Quittungscode $code = null;

    /**
     * The zusatz
     */
    public ?string $zusatz = null;

    /**
     * Constructor method for Type.QuittungscodeMitZusatz
     *
     * @uses Type_QuittungscodeMitZusatz::setCode()
     * @uses Type_QuittungscodeMitZusatz::setZusatz()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Quittungscode $code = null, ?string $zusatz = null)
    {
        $this
            ->setCode($code)
            ->setZusatz($zusatz);
    }

    /**
     * Get code value
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_Quittungscode
    {
        return $this->code;
    }

    /**
     * Set code value
     */
    public function setCode(?\THAG\XKfz\StructType\Code_Quittungscode $code = null): self
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
